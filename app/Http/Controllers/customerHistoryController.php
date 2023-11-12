<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class customerHistoryController extends Controller
{
    public function getCustomersHistory(){
        $results=DB::select('select * from vw_customersale_invoice ' );
        return $results;
    }

    public function filterCustomerData($CID){
        if ($CID=="All"){
            $results=DB::select('select * from vw_customersale_invoice' );
        }if($CID!="All"){
        $results=DB::select('select * from vw_customersale_invoice where CustomerID= '.$CID );
        
    }
    return $results;
    }


    public function getCustomerName(){

        $results=DB::select('select * from customeinformation');
        $sOp='<option value="All">All</option>';           
        $tableOfHtml="";
            foreach ($results as $ro){
                $tableOfHtml=$tableOfHtml." <option value=".$ro->CustomerID.">".$ro->CustomerName."</option>";
            }
        
            $endSelect="</select>";
            $allHtml=$sOp . $tableOfHtml . $endSelect;
            return $allHtml;   

    }
}
