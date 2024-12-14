<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;
use App\Models\BuyFund;
use App\Models\Income;
use App\Models\User;
use App\Models\Contract;
use App\Models\User_trade;
use App\Models\Reward;
use App\Models\Withdraw;
use Illuminate\Support\Facades\URL;
use App\Models\Trade;
use App\Models\plan;
use Illuminate\Support\Facades\Http;
use DateTime;
use DateInterval;
use DatePeriod;
use Carbon\Carbon;
use Helper;
use Plisio\PlisioSdkLaravel\Payment;
use Log;

class Cron extends Controller
{
    
public function __construct()
{
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
}
public function tradeAmt()
{
  User::where('id','>=',0)->update(['tradeAmt' => 0]);
}



public function releasefund()
{

$allResult=BuyFund::where('status','Pending')->get();
$todays=Date("Y-m-d");
if ($allResult)
{
 foreach ($allResult as $key => $value)
 {

  $userID=$value->user_id;
   $joining_amt = $value->amount;
   date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)

  $user_detail=User::where('id',$userID)->first();
  $today=date("Y-m-d H:i:s");
  $newTime = date("Y-m-d H:i:s",strtotime($value->created_at." +15 minutes"));
  

  
  if($today>=$newTime)
  {
       BuyFund::where('id',$value->id)->delete();  
  }


 }
}




}





public function releaseIncome()
{

$allResult=Investment::where('status','Active')->whereNotNull('last_trade')->get();
$todays=Date("Y-m-d");
if ($allResult)
{
 foreach ($allResult as $key => $value)
 {

  $userID=$value->user_id;
   $joining_amt = $value->amount;
//   date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)

  $today=date("Y-m-d H:i:s");
  $newTime = date("Y-m-d H:i:s",strtotime($value->last_trade." + 1 hours"));
  
 
  if($today>=$newTime)
  {
       Income::where('invest_id',$value->id)->where('credit_type',1)->update(['credit_type'=> 0]);  
  }


 }
}




}



function manage_trade() 
{
 $trade =\DB::table('contract')->where('c_status',1)->orderBy('created_at','DESC')->first();
$status = false;
$tcoins_arr  = coinrates();
if (!$trade) {
  $status = true;
}
if ($status == true) {
  $data = array(
    'status' => $status,
  );
} else {

  $btc = "";
  $side = $trade->c_buy;
  $entry_price = round($tcoins_arr[$trade->c_name],5);
  $position = $trade->qty;

  $action = "incre";
  $profit = $position + rand(1, 21);
  $entry_price = $entry_price + rand(0.1 ,0.9);
  if ($profit % 2 != 0) {
    $action = "decre";
    $profit = $position - rand(1, 11);
    $entry_price = $entry_price - rand(0.1 ,0.9);
  }

  $data = array(
    'profit' => $profit,
    'action' => $action,
    'btc_price' => $entry_price,
    'status' => $status,
  );
}

// Encode the object as JSON
$jsonData = json_encode($data);
header('Content-Type: application/json');
echo  $jsonData;

}


public function generate_roi()
{

$allResult=Contract::where('c_status','-1')->get();
$todays=Date("Y-m-d");
$day=Date("l");

if ($allResult)
{

 foreach ($allResult as $key => $contract)
 {

  $userID=$contract->user_id;
  
  $userDetails=Income::where('invest_id',$contract->id)->where('remarks','Quantify Income')->first();
  
  if (!$userDetails)
  {
     $userDetail=User::where('id',$userID)->where('active_status','Active')->first(); 
     
     if($userDetail)
     {
        echo "ID:".$userDetail->username." Roi:".$contract->profit."<br>";
     
      $data['remarks'] = 'Quantify Income';
      $data['comm'] = $contract->profit;
      $data['amt'] = $contract->c_ref;
      $data['invest_id']=$contract->id;
      $data['level']=0;
      $data['ttime'] = $contract->ttime;
      $data['created_at'] = $contract->created_at;
      $data['updated_at'] = $contract->updated_at;
      $data['user_id_fk'] = $userDetail->username;
      $data['user_id']=$userDetail->id;
     $income = Income::create($data);   
     }
    


      

  }

 }
 
}




}






  public function leadership_rank()

    {  

    date_default_timezone_set("Asia/Kolkata"); 
//   User::where('id',20)->update(['name' =>'Rameshk']);
    $allResult=User::where('active_status','Active')->orderBy('id','ASC')->cursor();

    if ($allResult) 
    {
       $counter=1;
     foreach ($allResult as $key => $value) 
     {
      
     $userID=$value->id;
     $userName=$value->username;
     $adate_date =$value->adate;

      $ids=$this->my_level_team($userID);
        
    
    $totalrecharge=Investment::whereIn('user_id',(!empty($ids)?$ids:array()))->where('status','Active')->sum("amount");
  
  
     $require_power_bunsess=array('0','5000','10000','20000');
     $require_bonus=array('0','50','100','400');
 
 
  for($p=1;$p<4;$p++)
      {
        $my_gen_busniess=$require_power_bunsess[$p];
  
        $bonus=$require_bonus[$p];
        
        $check_level=Reward::where('remarks','Reward Income')->where('user_id',$userID)->where('level',$p)->count("id");
      
        if($check_level<=0)
        {
         $goalstatus=( $totalrecharge >= $my_gen_busniess? 'Achieved':'Pending');
           if ($goalstatus=='Achieved')
               {
                   
                  echo "<br>";
          echo "ID : ".$userName."<br>";
          echo "Level : ".$p;
         
    
            $data['remarks'] = 'Reward Income';
            $data['amount'] = $bonus;
            $data['total_business'] = $my_gen_busniess;
            $data['level']=$p;
            $data['tdate'] = date("Y-m-d");
            $data['user_id_fk'] =$userName;
            $data['user_id']=$userID; 
            $data['status']='Approved'; 
          $income = Reward::firstOrCreate(['remarks' => 'Reward Bonus','level'=>$p,'user_id'=>$userID],$data);   
          
          
    
               }
               
        }

    
      }
 
   
     $counter++;   
     }
    } 
    
    
    

}


public function update_vip()
{
    try {
        $allResult = User::orderBy('id', 'desc')->get();

        if ($allResult->isEmpty()) {
            Log::info('No users found for VIP update.');
            return response()->json(['message' => 'No users found for VIP update.'], 404);
        }

        foreach ($allResult as $user) {
          $my_level_team=$this->my_level_team_count($user->id);
          $gen_team1 =  (array_key_exists(1,$my_level_team) ? $my_level_team[1]:array());
          $gen_team2 =  (array_key_exists(2,$my_level_team) ? $my_level_team[2]:array());
          $gen_team3 =  (array_key_exists(3,$my_level_team) ? $my_level_team[3]:array());
        
          $gen_team1 = User::where(function($query) use($gen_team1)
                  {
                    if(!empty($gen_team1)){
                      foreach ($gen_team1 as $key => $value) {
                      //   $f = explode(",", $value);
                      //   print_r($f)."<br>";
                        $query->orWhere('id', $value);
                      }
                    }else{$query->where('id',null);}
                  })->orderBy('id', 'DESC')->get();
                  
            $gen_team2 = User::where(function($query) use($gen_team2)
                  {
                    if(!empty($gen_team2)){
                      foreach ($gen_team2 as $key => $value) {
                      //   $f = explode(",", $value);
                      //   print_r($f)."<br>";
                        $query->orWhere('id', $value);
                      }
                    }else{$query->where('id',null);}
                  })->orderBy('id', 'DESC')->get();
             $gen_team3 = User::where(function($query) use($gen_team3)
                  {
                    if(!empty($gen_team3)){
                      foreach ($gen_team3 as $key => $value) {
                      //   $f = explode(",", $value);
                      //   print_r($f)."<br>";
                        $query->orWhere('id', $value);
                      }
                    }else{$query->where('id',null);}
                  })->orderBy('id', 'DESC')->get();
    
    
                      
                // Calculate totals
              
           $vip = $user->vip;
    
            // Determine VIP level based on conditions
                if (($gen_team1->where('real_vip','>=',6)->count()) >= 2 && ($gen_team2->where('real_vip','>=',5)->count()+$gen_team3->where('real_vip','>=',5)->count()) >= 15) {
                    $vip = 7;
                    } elseif ($gen_team1->where('real_vip','>=',5)->count() >= 3 && ($gen_team2->where('real_vip','>=',3)->count()+$gen_team3->where('real_vip','>=',3)->count()) >= 12) {
                      $vip = 6;
                    } elseif ($gen_team1->where('real_vip','>=',4)->count() >= 3 && ($gen_team2->where('real_vip','>=',3)->count()+$gen_team3->where('real_vip','>=',3)->count()) >= 5) {
                      $vip = 5;
                    } elseif ($gen_team1->where('real_vip','>=',3)->count() >= 2 && ($gen_team2->where('real_vip','>=',2)->count()+$gen_team3->where('real_vip','>=',2)->count()) >= 5) {
                      $vip = 4;
                    } elseif ($gen_team1->where('real_vip','>=',2)->count() >= 3) {
                      $vip = 3;
                    } 
                    else{
                      $vip = $user->vip;
                    }
                    
            
                
                     echo "<br>";
              echo "ID : ".$user->username."<br>";
              echo "VIP : ".$vip;   

            

            // Check if VIP status has changed
            if ($user->real_vip !== $vip) {
                $user->real_vip = $vip;
                $user->save();
                Log::info("VIP status updated for user ID: {$user->id} to VIP level {$vip}");
            } else {
                Log::info("No change in VIP status for user ID: {$user->id}");
            }
        }

        return response()->json(['message' => 'VIP levels updated successfully.'], 200);
    } catch (\Exception $e) {
        Log::error('Error updating VIP levels: ' . $e->getMessage());
        return response()->json(['error' => 'An error occurred while updating VIP levels. Please try again later.'], 500);
    }
}


  public function my_level_team($userid,$level=3){
      $arrin=array($userid);
      $ret=array();

      $i=1;
      while(!empty($arrin)){
          $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
          if(!empty($alldown)){
              $arrin = array_column($alldown,'id');
              $ret[$i]=$arrin;
              $i++;

              if ($i>$level) {
               break;
              }


          }else{
              $arrin = array();
          }
      }

      $final = array();
      if(!empty($ret)){
          array_walk_recursive($ret, function($item, $key) use (&$final){
              $final[] = $item;
          });
      }


      return $final;

  }


  public function calculateRoi()
{
    
    // date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)


    $investments = Investment::where('roiCandition', 0)->where('status', 'Active')->get();

    foreach ($investments as $investment) {
        $plan = plan::find($investment->plan);
        
        if (!$plan) {
            continue; // Skip if plan not found
        }

        $days = $plan->days;
        $profit = $plan->profit;
        
        $roiCount = Income::where('invest_id', $investment->id)
                          ->where('remarks', 'Trading Bonus')
                          ->count();

          $today=Date("Y-m-d");
        // Check if an income record for the current day already exists
          $todayRoiCount = Income::where('invest_id', $investment->id)
                               ->where('remarks', 'Trading Bonus')
                               ->where('ttime',$today)
                               ->count();
                               
                            //   dd()

        if ($roiCount < $days && $todayRoiCount<=0 &&  $today>$investment->sdate) {
            $bonus = ($investment->amount * $profit) / 100;
            
               echo "ID:".$investment->user_id_fk." Roi:".$bonus."<br>";
            

            Income::create([
                'user_id' => $investment->user_id,
                'user_id_fk' => $investment->user_id_fk,
                'amt' => $investment->amount,
                'comm' => $bonus,
                'level' => 0,
                'ttime' => Date("Y-m-d"),
                'invest_id' => $investment->id,
                'remarks' => 'Trading Bonus'
            ]);

            $newRoiCount = $roiCount + 1;
            
            if ($newRoiCount >= $days) {
                $investment->roiCandition = 1;
                $investment->save();
            }

            $this->add_level_income($investment->user_id, $bonus, $investment->plan);
        }
    }
}

  public function directIncome()
{
    
    // date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)


    $investments = Investment::where('roiCandition', 0)->where('status', 'Active')->get();

    foreach ($investments as $investment) {
     
     
         
         $user = User::where('id',$investment->user_id)->first();
         
        //  dd($user);
         $sponsorId = ($user)?$user->sponsor:0;
         $Sposnor_status = User::where('id',$sponsorId)->first();                      
       
       
       
        // Check if an income record for the current day already exists
          $todayRoiCount = Income::where('rname', $investment->user_id_fk)
                               ->where('remarks', 'Direct Income')
                               ->where('amt',$investment->amount)->where('user_id',$sponsorId)
                               ->first();
         
     
                            //   dd()

        if (!$todayRoiCount && $Sposnor_status) {
            $bonus = ($investment->amount * 5) / 100;
            
               echo "ID:".$investment->user_id_fk." Roi:".$bonus."<br>";


           $data = [
                'user_id' => $Sposnor_status->id,
                'user_id_fk' =>$Sposnor_status->username,
                'amt' => $investment->amount,
                'comm' => $bonus,
                'remarks' => 'Direct Income',
                'level' => 1,
                'rname' => $investment->user_id_fk,
                'fullname' => $user->name,
                'ttime' => $investment->sdate,
                'created_at' => $investment->created_at,

            ];
            // $user_data =  Income::Create($data);

            
        }
    }
}




public function add_level_income($user_id, $bonus, $plan_id)
{
    $plan = Plan::find($plan_id);
    
    if (!$plan) {
        return false; // Skip if plan not found
    }

    $level1 = $plan->level1;
    $level2 = $plan->level2;
    $level3 = $plan->level3;

    $user = User::find($user_id);
    if (!$user) {
        return false; // Skip if user not found
    }

    $sponsor = $user->sponsor;
    $fullname = $user->name;
    $rname = $user->username;
    $user_mid = $user->id;

    $cnt = 1;
    
    while ($user_mid != "" && $user_mid != "1" && $cnt <= 3) {
        $sponsorData = User::where('id', $sponsor)->first();
        
        if (!$sponsorData) {
            break; // Break the loop if no sponsor is found
        }
        
        if ($sponsorData) {
            $sp_status = $sponsorData ? $sponsorData->active_status : "Pending";
        } else {
            $sp_status = "Pending";
        }
        
        $pp = 0;
        if ($sp_status == "Active") {
            if ($cnt == 1) {
                $pp = ($bonus * $level1) / 100;
            } elseif ($cnt == 2) {
                $pp = ($bonus * $level2) / 100;
            } elseif ($cnt == 3) {
                $pp = ($bonus * $level3) / 100;
            }
        }
        
        $user_mid = $sponsorData->id;
        $spid = $sponsorData->id;
        
        if ($spid > 0 && $cnt <= 3 && $pp > 0) {
            Income::create([
                'user_id' => $spid,
                'user_id_fk' => $sponsorData->username,
                'amt' => $bonus,
                'comm' => $pp,
                'remarks' => 'Team Commission',
                'level' => $cnt,
                'rname' => $rname,
                'fullname' => $fullname,
                'ttime' => date("Y-m-d"),
            ]);
        }
        
        $sponsor = $sponsorData->sponsor; // Update $rname to get the next sponsor in the hierarchy
        $cnt++;
    }

    return true;
}

  
  


 public function reward_bonus()
    {  

    $allResult=User::where('active_status','Active')->get();
// print_r($allResult);die;
    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
      $user_id=$value->id;
      $username=$value->username;
      $Power_leg=$value->power_leg;
      $Vicker_leg=$value->vicker_leg;
      
        // $tolteam=$this->my_level_team_count($user_id);


      $investment=Investment::where('user_id',$user_id)->where('status','Active')->sum("amount");
    User::where('id', $user_id)
           ->update([
               'package' => $investment
            ]);
       
    //   $total_team=(!empty($tolteam)?count($tolteam):0);
     
       $directUser=User::where('sponsor',$user_id)->where('package','>=',100)->where('active_status','Active')->count();

     $require_power_bunsess=array('0','1','6','16','36');
     $require_bonus=array('0','5','30','120','220');
 
     
     for($p=1;$p<5;$p++)
      {
        $my_gen_busniess=$require_power_bunsess[$p];
  
        $bonus=$require_bonus[$p];
 
       
        // $power_leg=$my_gen_busniess*50/100;
        // $vicker_leg=$my_gen_busniess*50/100;
        
        // $Require_power_leg=$my_gen_busniess*60/100;
        // $Require_vicker_leg=$my_gen_busniess*40/100;
        
        $check_level=Income::where('remarks','Task Income')->where('user_id',$user_id)->where('level',$p)->count("id");
      
        if($check_level<=0)
        {
         $goalstatus=( $directUser >= $my_gen_busniess? 'Achieved':'Pending');
           if ($goalstatus=='Achieved')
               {
                   
                  echo "<br>";
          echo "ID : ".$username."<br>";
          echo "Level : ".$p;
          User::where('id', $user_id)
           ->update([
               'rank' => $p
            ]);
            
            $data['remarks'] = 'Task Income';
            $data['comm'] = $bonus;
            $data['amt'] = $bonus;
            $data['level']=$p;
            $data['ttime'] = date("Y-m-d");
            $data['user_id_fk'] =$username;
            $data['user_id']=$user_id; 
          $income = Income::firstOrCreate(['remarks' => 'Task Income','level'=>$p,'user_id'=>$user_id],$data);   
    
    
               }
               
        }

          
      }
             
     
      
     
     }
    } 
    
    
      $allResult = Contract::where('c_status', 1)->get();
        if ($allResult) 
    {
        
            foreach ($allResult as $key => $contract) 
     {
         
         
         
          $user = User::where('id',$contract->user_id)->first();
          $contract->c_status = -1;
              $contract->save();
      
              $ref = $contract->c_ref;
              $user_id = $user->id;
              
              $data['remarks'] = 'Quantify Income';
              $data['comm'] = $contract->profit;
              $data['amt'] = $ref;
              $data['invest_id']=$contract->id;
              $data['level']=0;
              $data['ttime'] = date("Y-m-d");
              $data['user_id_fk'] = $user->username;
              $data['user_id']=$user->id;
             $income = Income::create($data);

              add_level_income($user_id,$contract->profit);

      
     }
     
    }
        
   
     

}




 
 public function dltPayout()
 {
     \DB::statement("SET SQL_MODE=''");
     $data = \DB::select("SELECT * , COUNT(id) AS DuplicateRanks FROM incomes WHERE `remarks`='Leadership Ranks and Rewards' GROUP BY user_id HAVING COUNT(id)>1;");
     
         if ($data) 
    {
       $counter=1;
     foreach ($data as $key => $value) 
     {
        
        //  dd($value->id);
        Income::where('id',$value->id)->delete();    
     }
     
     
    }
    
     
     
 }
  


public function dailyIncentive()
{


    $allResult=User::where('active_status','Active')->get();
    $todays=Date("Y-m-d");


    if ($allResult)
    {
        foreach ($allResult as $key => $value)
        {
        $userID=$value->id;
        $userName = $value->username;
        $userRank = $value->rank;
        $endDate=Date("Y-m-d");
        $rewardDetail = Reward::where('user_id',$userID)->orderBy('id','DESC')->limit(1)->first();
         
        if($rewardDetail)
        {
        
        $Checkincome = Income::where('user_id',$userID)->where('remarks','Leadership Ranks and Rewards')->where('level',$rewardDetail->level)->first(); 
        $days=0;
        if(!$Checkincome)
        {
          $days=15;  
        }
        else
        {
          $days = (strtotime($endDate) - strtotime($Checkincome->ttime)) / (60 * 60 * 24);   
        }
        
                 echo "<br>";
          echo "ID : ".$userName."<br>";
          echo "Days : ".$days;
        
          if($days>=15)
          {
               $data['remarks'] = 'Leadership Ranks and Rewards';
            $data['comm'] = $rewardDetail->amount;
            $data['level'] = $rewardDetail->level;
            $data['amt'] = $rewardDetail->amount;
            $data['invest_id']=$rewardDetail->id;
            $data['ttime'] = date("Y-m-d");
            $data['user_id_fk'] = $userName;
            $data['user_id']=$userID; 
          $income = Income::firstOrCreate(['remarks' => 'Leadership Ranks and Rewards','ttime'=>date("Y-m-d"),'user_id'=>$userID],$data);  
          }

         
           
        }
        
        
   


        }
    }
}




public function dynamicupicallback()
{
    
 
  
//   echo "Hello";
//   print_r($response);die();
         $response = file_get_contents('php://input');
          date_default_timezone_set('Asia/Kolkata');
          $day=date('l');
          $todays=date("Y-m-d");
         $result = json_decode($response, true);
           
         \DB::table('activities')->insert(['data' =>$response]);  
         if(!empty($result))
         {
             
             if($result['status']=="completed")
             {
                 
              $orderId= $result['order_number'];
              $username= $result['order_name'];
              $amount= $result['source_amount'];
              $updateTrue = BuyFund::where('orderId',$orderId)->where('status','Pending')->update(['status' => 'Approved']);
           
             }
             else
             {
                if($result['status']=="mismatch" && $result['amount'] >= $result['invoice_total_sum']) 
                {
                    
                         
              $orderId= $result['order_number'];
              $username= $result['order_name'];
              $amount= $result['source_amount'];
               $updateTrue = BuyFund::where('orderId',$orderId)->where('status','Pending')->update(['status' => 'Approved']);
           
      
                    
                }
             }
             
         }
        
            
         
        
           
}


        public  function my_binary($userid){
        $arrin=array($userid);
        $ret=array();
        // print_r($arrin);die();
        while(!empty($arrin)){
         $alldown= User::select('id')->whereIn('Parentid',$arrin)->get()->toArray();
         if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[]=$arrin;
              
              
            }else{
                $arrin = array();
            } 
        }
        // continue;    
        $final = array();         
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }

        return $final;
        
    }  

        public  function team_by_position($userid,$position){
        $ret=array();
        $get_position_user=User::where('Parentid',$userid)->where('position',$position)->first();
        if($get_position_user){
        
            $ret=$this->my_binary($get_position_user->id);
            $ret[]=$get_position_user->id;
        }
       
        return $ret;
    }







   public function my_level_team_count($userid,$level=3){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[$i]=$arrin;
                $i++;

                
                 if ($i>$level) {
                  break;
                 }


            }else{
                $arrin = array();
            }
        }

        // $final = array();
        // if(!empty($ret)){
        //     array_walk_recursive($ret, function($item, $key) use (&$final){
        //         $final[] = $item;
        //     });
        // }


        return $ret;

    }

}
