<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\salesflow;
use DB;
class tblCustomerController extends Controller
{
    
    public function customerinfo(Request $request, $CO){


        $obj=json_decode($CO);
        $customerName=$obj[0];
        $customeradd=$obj[1];
        $customercon=$obj[2];


        self:: insertintblcustomeinformation($customerName,$customeradd,$customercon);

       // return "Getting from controller".$obj[0];
    }
    public function insertintblcustomeinformation(
        
        $CCustomerName,
        $CAddress,
        $CContect


        ){
            $result= DB::insert('insert into customeinformation (CustomerName,Address,
            Contect)
            value(?,?,?)',
            [$CCustomerName, $CAddress, $CContect]);
            
            
            if ($result==1){
    
            //print("customer add");
            
    
    
            }

    }


    public static function addCustomer(Request $request){
        $ata=$request->all();
        
        $customerName = $ata['customerName'];
        $address = $ata['address'];
        $contact = $ata['contact'];
       
        $refID = $ata['refID'];
        $rank = $ata['rank'];
        $email = $ata['email'];
        
        $DBContact=DB::table('customeinformation')
        ->where('Contect', '=', $contact)
        ->orwhere('Email', '=', $email);
        
        if($DBContact->exists()){
            return "Customer Already Exists";
        }else{
            
            $CID = DB::table('customeinformation')->insertGetId([
                'CustomerName'=>$customerName,
                'Address'=>$address,
                'Contect'=>$contact,
                
                'rank'=>$rank,
                'Email'=>$email,
                'Balance'=>"0",
                ]);
              if($refID!=""){
                  $re = DB::table('tbl_referred_customer')
                  ->insert([
                    'ReferredCustomerID'=>$CID,
                    'ReferredByID'=>$refID,
                    'PercentageDiscount'=>"10",
                    ]);
        }
        return "Customer ".$CID." is Added";
        }  
    }

    public static function customerTree($CID){
        
        $rank = DB::table('customeinformation')
        ->where('CustomerID', '=', $CID)
        ->first()->Rank;

        $name = DB::table('customeinformation')
        ->where('CustomerID', '=', $CID)
        ->first()->CustomerName;

        $coins = DB::table('customeinformation')
        ->where('CustomerID', '=', $CID)
        ->first()->Balance;

        session(['Rank' => $rank]);
        session(['Coins' => $coins]);
        session(['Name' => $name]);

    }

    public static function logedInCustomerData($customerID){
        $data = DB::select("select * from customeinformation where CustomerID =".$customerID);
        return $data;
    }

    public function getCustomers(){
        $results = DB::select("select * from customeinformation");
        return $results;
    }


    
    public static function editCustomer(Request $request){
        $ata=$request->all();
        $CID = $ata['CID'];
        $customerName = $ata['customerName'];
        $contact = $ata['contact'];
        $CNIC = $ata['CNIC'];
        $balance = $ata['Balance'];
        $RID = $ata['RID'];
        $comments = $ata['Comments'];

        $re = DB::table('customeinformation')
        ->where('CustomerID', $CID)
        ->update([
          'CustomerName'=>$customerName,
          'Contect'=>$contact,
          'CNIC'=>$CNIC,
          'Balance'=>$balance,
          'Rank'=>$RID,
          'Comments'=>$comments,
          ]);

          return $CID;
        }
        
        public function getCustomersHistory(){
            $results=DB::select('select * from vw_customersale_invoice ' );
            return $results;
        }

        public function filterCustomerData($CID){
            if ($CID=="All"){
                $results=DB::select('select * from vw_customersale_invoice' );
            }else{
            $results=DB::select('select * from vw_customersale_invoice where CustomerID= '.$CID );
            return $results;
        }
        }
    

        public function getCustomersName(){

            $results=DB::select('select * from customeinformation');
            $sOp='<option value=" ">All</option>';           
            $tableOfHtml="";
                foreach ($results as $ro){
                    $tableOfHtml=$tableOfHtml." <option value=".$ro->CustomerID.">".$ro->CustomerName."</option>";
                }
            
                $endSelect="</select>";
                $allHtml=$sOp . $tableOfHtml . $endSelect;
                return $allHtml;   
    
        }


        public function getAllCustomers(){

            $results=DB::select('select * from customeinformation');
            $sOp='<option value=" ">Select Customer</option>';           
            $tableOfHtml="";
                foreach ($results as $ro){
                    $tableOfHtml=$tableOfHtml." <option value=".$ro->CustomerID.">".$ro->CustomerName."</option>";
                }
            
                $endSelect="</select>";
                $allHtml=$sOp . $tableOfHtml . $endSelect;
                return $allHtml;   
    
        }

        public function getCustomerDetail($CID){
            $results=DB::select('select * from customeinformation where CustomerID= '.$CID);
            return $results;
        }

        public static function UpdateCustomerBalance($CID,$newBalance){
            DB::table('customeinformation')
                ->where('CustomerID', $CID)
                ->update(['Balance' =>$newBalance
                ]);
        }

        public static function getCustomerBalance($CID){
            $re = DB::table('customeinformation')
                ->where('CustomerID', '=', $CID)
                 ->first()->Balance;

                 return $re;
        }

        public static function UpdateCustomerCoins($CID,$newBalance){
            DB::table('customeinformation')
                ->where('CustomerID', $CID)
                ->update(['CoinBalance' =>$newBalance
                ]);
        }

        public static function getCustomerCoins($CID){
            $re = DB::table('customeinformation')
                ->where('CustomerID', '=', $CID)
                 ->first()->CoinBalance;

                 return $re;
        }
}

