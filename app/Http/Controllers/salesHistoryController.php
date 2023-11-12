<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class salesHistoryController extends Controller
{
    public static function getSalesHistory(){
        $data=DB:: select('select * from vw_transactionflow_sales where TransactionCatogery="Stock and Service" or TransactionCatogery="Sales"');
        $AmountAfterDiscount=0;
        $SaleAmountPaid=0;
        $SaleRemainingBalance=0;
        foreach($data as $d){
            $AmountAfterDiscount += floatval($d->AmountAfterDiscount);
            $SaleAmountPaid += floatval($d->SaleAmountPaid);
            $SaleRemainingBalance += floatval($d->SaleRemainingBalance);
          }
        return [$data, $AmountAfterDiscount, $SaleAmountPaid, $SaleRemainingBalance];
    }

    public static function filterSalesHistory($catID, $customerID){
        $data=0;
        if($catID=="All" AND $customerID=="All"){
            $data=DB:: select('select * from vw_transactionflow_sales where TransactionCatogery="Stock and Service" or TransactionCatogery="Sales"');
        
        }else if($catID=="All" AND $customerID!="All"){
            
            $data=DB:: select('select * from vw_transactionflow_sales where (TransactionCatogery="Stock and Service" or TransactionCatogery="Sales") and CustomerID='.$customerID);
           
        }else if($catID!="All" AND $customerID=="All"){
            $data=DB:: select('select * from vw_transactionflow_sales where TransactionCatogery="'.$catID.'"');
        
        }else if($catID!="All" AND $customerID!="All"){
            $data=DB:: select('select * from vw_transactionflow_sales where TransactionCatogery="'.$catID.'" and CustomerID='.$customerID);
        
        }
        $AmountAfterDiscount=0;
        $SaleAmountPaid=0;
        $SaleRemainingBalance=0;
        foreach($data as $d){
            $AmountAfterDiscount += floatval($d->AmountAfterDiscount);
            $SaleAmountPaid += floatval($d->SaleAmountPaid);
            $SaleRemainingBalance += floatval($d->SaleRemainingBalance);
          }
        return [$data, $AmountAfterDiscount, $SaleAmountPaid, $SaleRemainingBalance];
    }

    public static function filterSalesDateData($date1,$date2){
        
            $data=DB:: select('select * from vw_transactionflow_sales where DateStamp between "'.$date1 .'"and"'.$date2.'"');
        

        $AmountAfterDiscount=0;
        $SaleAmountPaid=0;
        $SaleRemainingBalance=0;
        foreach($data as $d){
            $AmountAfterDiscount += floatval($d->AmountAfterDiscount);
            $SaleAmountPaid += floatval($d->SaleAmountPaid);
            $SaleRemainingBalance += floatval($d->SaleRemainingBalance);
          }
        return [$data, $AmountAfterDiscount, $SaleAmountPaid, $SaleRemainingBalance];
    }
    
    public static function saleStockHistory(){
        $data=DB:: select('select * from vw_transactionflow_sales where TransactionCatogery="Stock and Service"');
        return $data;
    }

    public static function getSoldStockHistory(){
        $data=DB:: select('select * from vw_all_transactions where TransactionCatogery="Sales" or TransactionCatogery="Customer Paid to Company"');
        return $data;
    }

    
}
