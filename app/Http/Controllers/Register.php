<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\PasswordReset;
use Redirect;
use Carbon\Carbon;
use Log;
use Hash;
class Register extends Controller
{

    public function getUserNameAjax(Request $request)
    {

      $user =User::where('username',$request->user_id)->first();
            if($user)
            {
                return $user->name;
            } 
            else{
                return 1;
            }       
    }

    public function index()
    {
        return view('auth.verify');
    }


    public function sendCodeEmail(Request $request)
    {

        $code = verificationCode(6);
      
        $emailId = $request->emailId;
        if ($emailId!="") 
        {
          $emailId = $emailId;
        }
      
       
        PasswordReset::where('email', $emailId)->delete();

        $password = new PasswordReset();
        $password->email = $emailId;
        $password->token = $code;
        $password->created_at = \Carbon\Carbon::now();
        $password->save();

           sendEmail($emailId, 'Your One-Time Password', [
            'name' =>'',
            'code' => $code,
            'purpose' => 'Your OTP for Secure Access',
            'viewpage' => 'one_time_password',

         ]);

       return true;
    }
   

   public function find_position($snode,$pos)
    {
        $q=User::select('id')->where('Parentid',$snode)->where('position',$pos)->first();
        if (empty($q))
         {
           $this->downline = $snode; 
         }
         else
         {
          $user = $q->id;
            // print_r($user);die();
          $this->find_position($user,$pos);   
         }
    }



  public function register(Request $request)
    {
        try{
            $validation =  Validator::make($request->all(), [
                'phone' => 'required|unique:users,phone',
                'password' => 'required|confirmed|min:5',
                'sponsor' => 'required|exists:users,username',
                'email' => 'required|unique:users,email',
            ]);

            
            if($validation->fails()) {

                Log::info($validation->getMessageBag()->first());
     
                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }
            //check if email exist
          
          
              if(isset($request->captcha)){
                if(!captchaVerify($request->captcha, $request->captcha_secret)){
                    $notify[] = ['error',"Invalid Captcha"];
                    return back()->withNotify($notify)->withInput();
                }
            }
    


            // $code = $request->code;
            // if (PasswordReset::where('token', $code)->where('email', $request->email)->count() != 1) {
            //     $notify[] = ['error', 'Invalid token'];
            //     return Redirect::back()->withNotify($notify);
            // }

            
            $user = User::where('username',$request->sponsor)->first();
            if(!$user)
            {
                return Redirect::back()->withErrors(array('Introducer ID Not Active'));
            }
            $totalID = User::count();
            $totalID++;
           $username =substr(rand(),-2).substr(time(),-3).substr(mt_rand(),-2);
            
           $tpassword =substr(time(),-2).substr(rand(),-2).substr(mt_rand(),-1);
            $post_array  = $request->all();
                //  
                
            $country = \DB::table('country')->where('phonecode',$post_array['country_iso'])->first();
            
            $data['name'] = "Member".substr(time(),-1).substr(rand(),-1).substr(mt_rand(),-1);
            $data['phone'] = $post_array['phone'];
            $data['email'] = $post_array['email'];
            $data['username'] = $username;
            $data['password'] =   Hash::make($post_array['password']);
            $data['tpassword'] =   Hash::make($tpassword);
            $data['PSR'] =  $post_array['password'];
            $data['country'] = $country?$country->name:"";
            $data['dialCode'] = $post_array['country_iso'];
            $data['country_iso'] =  $country?$country->iso:"";
            $data['TPSR'] =  $tpassword;
            $data['sponsor'] = $user->id;
            $data['package'] = 0;
            $data['jdate'] = date('Y-m-d');
            $data['created_at'] = Carbon::now();
            $data['remember_token'] = substr(rand(),-7).substr(time(),-5).substr(mt_rand(),-4);
            $sponsor_user =  User::orderBy('id','desc')->limit(1)->first();
             $data['level'] = $user->level+1;

         
            $data['ParentId'] =  $sponsor_user->id;
         $request->session()->put('user_data',$data);
         
         $code = verificationCode(6);
          
            $emailId = $request->email;
            PasswordReset::where('email', $emailId)->delete();
    
            $password = new PasswordReset();
            $password->email = $emailId;
            $password->token = $code;
            $password->created_at = \Carbon\Carbon::now();
            $password->save();
    
               sendEmail($emailId, 'Your One-Time Password', [
                'name' =>'',
                'code' => $code,
                'purpose' => 'Your OTP for Secure Access',
                'viewpage' => 'one_time_password',
    
             ]);


            $notify[] = ['success','Verification code sent to your registered email address.'];
         return redirect()->route('register')->with('messages',$data)->withNotify($notify);

        }
        catch(\Exception $e){
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die('hi');

      
            return back()->withErrors('error', $e->getMessage())->withInput();
           
        }

          
    } 
    
  
  public function confirm(Request $request)
    {
        
           try{
            $validation =  Validator::make($request->all(), [
                'code' => 'required',
            ]);

            
            if($validation->fails()) {

                Log::info($validation->getMessageBag()->first());
     
                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }
            
            //check if email exist
             $user_data1 = $request->session()->get('user_data');
            $code = $request->code;
            if (PasswordReset::where('token', $code)->where('email', $user_data1['email'])->count() != 1) {
                $notify[] = ['error', 'Invalid token'];
                return Redirect::back()->withNotify($notify);
            }

            
            
           $sponsor_user =  User::orderBy('id','desc')->limit(1)->first();
           
           
            $user_data =  User::create($user_data1);
            $registered_user_id = $user_data['id'];
            $user = User::find($registered_user_id);
            Auth::loginUsingId($registered_user_id);
            
            User::where('id',$user->id)->update(['ParentId'=>$sponsor_user->id]);
          
           sendEmail($user->email, 'Welcome to '.siteName(), [
                'name' => $user->name,
                'username' => $user->username,
                'phone' => "+".$user->dialCode.$user->phone,
                'password' => $user->PSR,
                'tpassword' => $user->TPSR,
                'viewpage' => 'register_sucess',
                 'link'=>route('login'),
            ]);
            
              $request->session()->forget('user_data');
            return redirect()->route('home');
            //  return redirect()->route('register_sucess')->with('messages', $user);

        }
        catch(\Exception $e){
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die('hi');

      
            return back()->withErrors('error', $e->getMessage())->withInput();
           
        }

          
    } 
    
    // In RegistrationController.php
public function showRegistrationForm($sponsorCode)
{
    return view('registrationForm', ['sponsorCode' => $sponsorCode]);
}



}
