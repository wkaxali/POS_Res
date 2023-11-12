<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class checkNewController extends Controller
{
    function check(){
    $ParentID = DB::table('tbl_referred_customer') ->where('ReferredCustomerID', '=', "1");
    $results=DB::select('select ReferredByID from  tbl_referred_customer where ReferredCustomerID=4');
   
    dd($results[0]); 
    }
}
