<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class userAccountController extends Controller
{
    public function loginUser (Request $request, $data){
 
        $obj=json_decode($data);
        $login=$obj[0];
        $passcode=$obj[1];


        // ,'OR', 'Email', '=', $email

        $UserData = DB::table('customeinformation')
        ->where([['Email', '=', $login]])->orwhere([['Contect', '=', $login]]);
        $CustomerName = $UserData->first()->CustomerName;
        $Password = $UserData->first()->Password;
        $userID = $UserData->first()->CustomerID;
        
        
        if($passcode!=$Password){
            session(['UserID' =>null]);
            session(['userName' => null]);
            
            return "Invalid User";
        }else{
        session(['userName' => $CustomerName]);
        session(['UserID' => $userID]);
        

         return "User $CustomerName is Logged in";
        }
     }

     public function signUp (Request $request, $data){

        $obj=json_decode($data);
        $name=$obj[0];
        $contact=$obj[1];
        $email=$obj[2];
        $password=$obj[3];
        $rePassword=$obj[4];

        $CustomerCheck = DB::table('customeinformation')
        ->where([['Contect', '=', $contact]]);

        $UserCheck = DB::table('customeinformation')
        ->where([['EmailID', '=', $email]]);

        if($CustomerCheck->exists()){
           
            if($UserCheck->exists()){
                return "Already have user on this Email";
            }else{
                $newUser=DB::table('customeinformation')
                ->where([['Contect', '=', $contact]])
                ->update([
                'Password'=>$password,
                'Email'=>$email,
                ]);
            
            return "Customer $newUser is Signed Up";
            }
        }else{
            $newUser=DB::table('customeinformation')
                ->insertGetId([
                'CustomerName'=>$name,
                'Password'=>$password,
                'Email'=>$email,
                'Contect'=>$contact,
                ]);
            
            return "User $newUser is Added";
        }
     }

     public function adminLogin(Request $request, $data){
        
        $obj=json_decode($data);
        $User=$obj[0];
        $Password=$obj[1];

        $UserCheck = DB::table('userinfo')
        ->where([['Designation', '=', 'Admin'], ['Email', '=', $User], ['Password', '=', $Password]])->orwhere([['Designation', '=', 'Admin'], ['Contact', '=', $Password], ['Password', '=', $Password]]);

        if($UserCheck->exists()){
            $adminName = $UserCheck->first()->UserName;
            $adminID = $UserCheck->first()->UserID;
            $Designation = $UserCheck->first()->Designation;

            session(['userName' => $adminName]);
            session(['AdminID' => $adminID]);
            session(['Designation' => $Designation]);
            return "Admin $adminName is Logged in";
        }else{
            return "Invalid Loggin";
        }
        
     }

     public function regAdmin(Request $request, $data){
       
        $obj=json_decode($data);
        $Username=$obj[0];
        $Email=$obj[1];
        $Contact=$obj[2];
        $Password=$obj[3];
        

        $UserCheck = DB::table('userinfo')
        ->where([['Email', '=', $Email]])->orwhere([['Contact', '=', $Contact]]);
        //return $UserCheck;
        if($UserCheck->exists()){
            return "Already have user on this Email or Contact";
        }else{
            $newUser=DB::table('userinfo')
            ->insertGetId([
            'UserName'=>$Username,
            'Password'=>$Password,
            'Email'=>$Email,
            'Contact'=>$Contact,
            'Designation'=>'Admin',
            ]);
        }
        return 'User '.$newUser.' is registered as Admin';
     }

     public static function getUsers(){
        $data=DB:: select('select * from userinfo');
        return $data;
      }
       public static function editUsers(Request $request, $CO){
        $ata=json_decode($CO);
        $UserID = $ata[0];
        $UserName = $ata[1];
        $Password = $ata[2];
        $Designation = $ata[3];
        $Email = $ata[4];
        $Contact = $ata[5];

        $re = DB::table('userinfo')
        ->where('UserID', $UserID)
        ->update([
          'UserName'=>$UserName,
          'Password'=>$Password,
          'Designation'=>$Designation,
          'Email' =>$Email,
          'Contact' =>$Contact
          ]);

          return $UserID;
        }
     public static function logout($data){
        if($data!="0"){
        session()->forget('AdminID');
        session()->forget('cashierID');
        session()->forget('Designation');

        return "User $data is Logged Out";
        }
        else{
            return "User Already Logged Out";
        }
     }

     public function CashierLogin(Request $request, $data){
        
        $obj=json_decode($data);
        $User=$obj[0];
        $Password=$obj[1];

        $UserCheck = DB::table('userinfo')
        ->where([['Designation', '=', 'Cashier'], ['Email', '=', $User], ['Password', '=', $Password]])->orwhere([['Designation', '=', 'Cashier'], ['Contact', '=', $User], ['Password', '=', $Password]]);

        if($UserCheck->exists()){
            $cashierName = $UserCheck->first()->UserName;
            $cashierID = $UserCheck->first()->UserID;
            $Designation = $UserCheck->first()->Designation;

            session(['userName' => $cashierName]);
            session(['cashierID' => $cashierID]);
            session(['Designation' => $Designation]);
            return "Cashier $cashierName is Logged in";
        }else{
            return "Invalid Loggin";
        }
        
     }

     public function regCashier(Request $request, $data){
       
        $obj=json_decode($data);
        $Username=$obj[0];
        $Email=$obj[1];
        $Contact=$obj[2];
        $Password=$obj[3];
        

        $UserCheck = DB::table('userinfo')
        ->where([['Email', '=', $Email]])->orwhere([['Contact', '=', $Contact]]);

        if($UserCheck->exists()){
            return "Already have user on this Email or Contact";
        }else{
            $newUser=DB::table('userinfo')
            ->insertGetId([
            'UserName'=>$Username,
            'Password'=>$Password,
            'Email'=>$Email,
            'Contact'=>$Contact,
            'Designation'=>'Cashier',
            ]);
        }
        return 'User '.$newUser.' is registered as Cashier';
     }

}

