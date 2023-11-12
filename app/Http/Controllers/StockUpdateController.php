<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class StockUpdateController extends Controller
{
    public function UpdateInStock(Request $request,$table){
         $obj = json_decode($table);

         $IDstock=$obj[0];
         $StockName=$obj[1];
         $Description=$obj[2];
         $UnitPrice=$obj[3];
         $Salepurches=$obj[4];

         self:: instock($IDstock,$StockName,$UnitPrice, $Salepurches);
         self:: UpdateProductName($StockName,$IDstock,$Description);

      // return "Getting from controller";
    
    }
    
        public function instock($stockId,$unitprice,$salepurches){
          
            DB::table('instock')
                ->where('ProductSerial', $stockId)
                ->update([
                    'PerUnitPurchasePrice'=>$unitprice,
                    'PerUnitSalePrice'=>$salepurches
                    ]);
           
            //  print("Number of Rows Affacted".$affected);
        }
        public function UpdateProductName($StockName,$stockId,$Description){
            DB::table('productdefination')
                ->where('ProductSerial', $stockId)
                ->update([
                    'ProductName'=>$StockName,
                    'description'=>$Description,
                    //'imagePath'=>$path
                    ]);
       }

       
    }

