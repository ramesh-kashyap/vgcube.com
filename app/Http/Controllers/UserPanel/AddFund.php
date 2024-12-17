<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyFund;
use App\Models\Income;
use App\Models\User;

use App\Models\Withdraw;
use App\Models\Fundtransfer;

use App\Models\Investment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Hexters\CoinPayment\CoinPayment;
use App\Models\CoinpaymentTransaction;
use Illuminate\Support\Facades\Http;

use Log;
use Hash;
use Redirect;
class AddFund extends Controller
{

  public function index(Request $request)
  {

  $user=Auth::user();
  $limit =  paginationLimit();
  

    $buyfunds = BuyFund::select('amount as comm','created_at','status','txn_no','type')->where('user_id',$user->id)->orderBy('id','DESC')->get()->map(function ($item) {
        $item->remarks = 'Deposits'; // Add your custom remark value here
        return $item;
    })->toArray();
    
    // dd($buyfunds);

    $investments = Investment::select('amount as comm','created_at','status')->where('user_id',$user->id)->where('status','Active')->orderBy('id','DESC')->get()->map(function ($item) {
        $item->remarks = 'Buy Package'; // Add your custom remark value here
        return $item;
    })->toArray();

    $withdraws = Withdraw::select('amount as comm','created_at','status')->where('user_id',$user->id)->where('status','!=','Failed')->orderBy('id','DESC')->get()->map(function ($item) {
        $item->remarks = 'Withdraw'; // Add your custom remark value here
        return $item;
    })->toArray();

    // Combine records into a single array
    $combinedRecords = array_merge($investments,$buyfunds,$withdraws);
    // echo "<pre>";
    // print_r($combinedRecords);
    // $combinedRecords = $combinedRecords->paginate($limit)
    // ->appends([
    //     'limit' => $limit
    // ]);
    //  dd($combinedRecords);
     $notes = Income::where('user_id',$user->id)->orderBy('id', 'DESC')->limit(10)->get();
      
      $totalPackage = Investment::where('user_id',$user->id)->where('status','Active')->sum("amount");
      $todaysRoi = Income::where('user_id',$user->id)->where('remarks','Task Income')->where('ttime',Date("Y-m-d"))->sum("comm");
      $total = $totalPackage;
      $portion = $todaysRoi;
  if($totalPackage>0)
    {
          $percentage = ($portion / $total) * 100; // 20 
    }
    else
    {
    $percentage=0;    
    }
      


  $this->data['percentage'] = $percentage;
  $this->data['todaysRoi'] = $todaysRoi;
  $this->data['level_income'] = $combinedRecords;
  $this->data['page'] = 'user.fund.wallet';
  return $this->dashboard_layout();

  }




  public function fund_transfer(Request $request)
  {
  
  $user=Auth::user();
  $this->data['page'] = 'user.fund.transfer-fund';
  return $this->dashboard_layout();
  
  }


public function fundHistory(Request $request)
{

   
$this->data['page'] = 'user.fund.fundHistory';
return $this->dashboard_layout();

}

public function fund(Request $request)
{
  $user=Auth::user();

  

    $buyfunds = BuyFund::select('amount as comm','created_at','status','txn_no','type')->where('user_id',$user->id)->orderBy('id','DESC')->get()->map(function ($item) {
        $item->remarks = 'Deposits'; // Add your custom remark value here
        return $item;
    })->toArray();
    $this->data['level_income'] = $buyfunds;
$this->data['page'] = 'user.fund.addFund';
return $this->dashboard_layout();

}












public function SubmitTransferFund(Request $request)
{

try{
        $validation =  Validator::make($request->all(), [
            // 'code' => 'required',
            'amount' => 'required|numeric|min:0',
            'username' => 'required|exists:users,username',
            'transaction_password' => 'required',
             
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return redirect()->route('user.fund_transfer')->withErrors($validation->getMessageBag()->first())->withInput();
        }
         
           $user=Auth::user();

        //   $code = $request->code;
        
        //   if (PasswordReset::where('token', $code)->where('email',$user->email)->count() != 1) {
        //          $notify[] = ['error', 'Invalid token'];
        //          return redirect()->back()->withNotify($notify);
        //      }


            $available_balance=0;
            $user_detail=User::where('username',$request->username)->orderBy('id','desc')->limit(1)->first();
            $available_balance=Auth::user()->FundBalance();
         
          $password= $request->transaction_password;
         if (Hash::check($password, $user->tpassword))
           {
         if ($available_balance>=$request->amount) 
         {
             $data = [
                    'transfer_id' =>$user->id,
                    'transfered_id' => $user_detail->id,
                    'user_id_from' => $user->username,
                    'user_id_to' => $user_detail->username,
                    'amount' => $request->amount,
                    'transfer_date' => Date("Y-m-d"),         
                ];
               $payment =  Fundtransfer::insert($data);
          
           $notify[] = ['success','Fund Transfer successfully to  ID '.$user_detail->username];
              return redirect()->back()->withNotify($notify);

          }   
          else
          {
             return Redirect::back()->withErrors(array('Insufficient Balance in Wallet'));
          }
           }
        else
        {
        return Redirect::back()->withErrors(array('Invalid Transaction Password'));
        }     

       
              

      }
       catch(\Exception $e){
        Log::info('error here');
        Log::info($e->getMessage());
        print_r($e->getMessage());
        die("hi");
        return  redirect()->route('user.fund_transfer')->withErrors('error', $e->getMessage())->withInput();
    }

}





public function confirmDeposit(Request $request) 
{
try{
 $validation =  Validator::make($request->all(), [
    'Sum' => 'required|numeric|min:10',
    'PSys' => 'required',
 ]);


//  dd($request->all());
if($validation->fails()) {
    Log::info($validation->getMessageBag()->first());

    return redirect()->route('user.fund')->withErrors($validation->getMessageBag()->first())->withInput();
}




$user=Auth::user();


$min_amount = $request->minimum_deposit;
$max_amount = $request->maximum_deposit;
$plan = $request->plan;
$paymentMode = $request->PSys;
$amount = $request->Sum;



//  $invest_check=BuyFund::where('user_id',$user->id)->where('status','Pending')->first();

// if ($invest_check) 
// {
//   return  redirect()->route('user.DepositHistory')->withErrors(array('your deposit already pending'));
// }


$amountTotal= $request->Sum;


if($paymentMode=="USDT_BSC")
{
  $paymentMode= "USDT_BSC"; 
}
else
{
  $paymentMode= "USDT_TRX";    
}


   $invoice = substr(str_shuffle("0123456789"), 0, 7);
   $apiURL = 'https://plisio.net/api/v1/invoices/new';
    $postInput = [
    'source_currency' => 'USD',
    'source_amount' => $amountTotal,
    'order_number' => $invoice,
    'currency' => $paymentMode,
    'email' => $user->email,
    'order_name' =>$user->username,
    'callback_url' => 'https://h5.vgcube.com/dynamicupicallback?json=true',
    'api_key' => 'SkFdp81hAs6V4yXh9oD4MUhnaIGBGudVSY6ety_ru57N77ce9gx4F1iQHsytS2vn',
    ];

    $headers = [
        'Content-Type' => 'application/json'
    ];

    $response = Http::withHeaders($headers)->get($apiURL, $postInput);

    $statusCode = $response->status();
    $resultAarray = json_decode($response->getBody(), true);
       date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)

//   dd($resultAarray);


if($resultAarray['status']=="success")
{

   $data = [
        'orderId' => $invoice,
        'txn_no' =>$resultAarray['data']['txn_id'],
        'user_id' => $user->id,
        'user_id_fk' => $user->username,
        'amount' => $amountTotal,
        'type' =>$paymentMode,
        'status' => 'Pending',
        'bdate' => Date("Y-m-d"),
        'created_at' => date("Y-m-d H:i:s"),
    ];
    $payment =  BuyFund::insert($data);
            
        

$this->data['walletAddress'] =$resultAarray['data']['wallet_hash'];
$this->data['paymentMode'] =$paymentMode;
$this->data['transaction_id'] =$resultAarray['data']['txn_id'];
$this->data['qr_code'] =$resultAarray['data']['qr_code'];
$this->data['orderId'] =$invoice;
$this->data['amount'] =$amount;
$this->data['invoice_total_sum'] =$resultAarray['data']['invoice_total_sum'];
$this->data['page'] = 'user.fund.confirmDeposit';
return $this->dashboard_layout();  

}
else
{
return Redirect::back()->withErrors(array('try again'));
}

}
catch(\Exception $e){
Log::info('error here');
Log::info($e->getMessage());
print_r($e->getMessage());
die("hi");
return  redirect()->route('user.strategy')->withErrors('error', $e->getMessage())->withInput();
  }

}



public function SubmitBuyFund(Request $request)
{

  try{
        $validation =  Validator::make($request->all(), [
            'amount' => 'required|numeric|min:0',
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return redirect()->route('user.AddFund')->withErrors($validation->getMessageBag()->first())->withInput();
        }

           $user=Auth::user();
                   
           $transaction['order_id'] = uniqid(); // invoice number
            $transaction['amountTotal'] = (FLOAT) $request->amount;
            $transaction['note'] = 'Transaction note';
           $transaction['buyer_name'] = $user->username;
           $transaction['user_id'] = $user->id;
            $transaction['buyer_email'] = $user->email;
            $transaction['redirect_url'] = url('user/AddFund?res=success'); // When Transaction was comleted
            $transaction['cancel_url'] = url('user/AddFund'); // When user click cancel link

           /*
           *   @required true
           *   @example first item
           */
           $transaction['items'][] = [
             'itemDescription' => 'Cryptoversal',
             'itemPrice' => (FLOAT) $request->amount, // USD
             'itemQty' => (INT) 1,
             'itemSubtotalAmount' => (FLOAT) $request->amount // USD
           ];

           $transaction['payload'] = [
             'foo' => [
                 'bar' => 'baz'
             ]
           ];

                $url_ = CoinPayment::generatelink($transaction);

            return Redirect::to($url_);

      }
       catch(\Exception $e){
        Log::info('error here');
        Log::info($e->getMessage());
        print_r($e->getMessage());
        die("hi");
        return  redirect()->route('user.AddFund')->withErrors('error', $e->getMessage())->withInput();
    }

}

public function fundpass()
{
$this->data['page'] = 'user.fund.resetfundpas';
return $this->dashboard_layout();


}


}
