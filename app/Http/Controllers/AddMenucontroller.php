<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
// class AddMenucontroller extends Controller
// {
//     public function insertProduct(Request $request, $CO)
//     {

//         $obj=json_decode($CO);
//         $Pname=$obj[0];
//         $Pcateg=$obj[1];
//         $Psaleprice=$obj[2];
//         $Ppurchaseprice=$obj[3];

//         self:: insertintblproductdefination( $Pname,$Pcateg,$Psaleprice,$Ppurchaseprice);
        
//         $StockProductSerial=DB::table("productdefination")->max('ProductSerial');
//         DB::table('productdefination')
//             ->where('ProductSerial', $StockProductSerial)
//             ->update(['ProductID' =>$StockProductSerial
            
            
            
            
//             ]);
//         //$e=DB::table("productdefination")->insertGetId(['ProductName'=>$Pname
        
//         //]
    
    
    
//     //);
//        //return print(mysql_insert_id());
    
//       // return $e;
      
//       print("Agya yha tk");
    
//         self:: insertintblinstock(null,$StockProductSerial,"404","0",$Ppurchaseprice,$Psaleprice,null,$Psaleprice,$Ppurchaseprice,null);
//         return "Getting from controller".$StockProductSerial;
//     }

//         public function insertintblproductdefination(


          
//             $PDProductName,
//             $PDCategory,
//             $PproductCost,
//              $Pproductsaleprice
//             ){
       
//             $result= DB::insert('insert into productdefination (ProductName,Category,productCost,
//             productsaleprice)
//             value(?,?,?,?)',
//             [$PDProductName, $PDCategory,$PproductCost,
//             $Pproductsaleprice]);
            
            
//             if ($result==1){
        
//             print("product");



//             }


        
//         }

//         public function insertstock()
//          {
//             $obj=json_decode($CO);
//             $StockID=$obj[0];
//             $StockProductSerial=$obj[1];
//             $StockIn=$obj[2];
//             $PreviousStock=$obj[3];
//             $stockPerUnitPurchasePrice=$obj[4];
//             $StockPerUnitSalePrice=$obj[5];
//             $StockExpairyDate=$obj[6];
//             $StockAverageSalePricePerUnit=$obj[7];
//             $StockAveragePurchasePricePerUnit=$obj[8];
//             $dateNow= Carbon::now()->toDateTimeString();
//             $StockdateStamp=$dateNow;

//             self:: insertintblproductdefination($StockID,$StockProductSerial,$StockIn,$PreviousStock,$stockPerUnitPurchasePrice,$StockPerUnitSalePrice,null,$StockAverageSalePricePerUnit,$StockAveragePurchasePricePerUnit,null);

//         return "Getting from controller".$obj[0];




//         }
//         public function insertintblinstock (
       
       
//             $SStockID,
//             $SProductSerial,
//             $SStockIn,
//             $SPreviousStock,
//             $SPerUnitPurchasePrice,
//             $SPerUnitSalePrice,
//             $SExpairyDate,
//             $SAverageSalePricePerUnit,
//             $SAveragePurchasePricePerUnit,
//             $SdateStamp
//             ){
//             $result= DB::insert('insert into instock (ProductSerial,StockIn,PreviousStock,
//             PerUnitPurchasePrice, PerUnitSalePrice,
//             AverageSalePricePerUnit,AveragePurchasePricePerUnit)
//             value(?,?,?,?,?,?,?)',
//             [$SProductSerial,$SStockIn,$SPreviousStock, $SPerUnitPurchasePrice, $SPerUnitSalePrice,
//             $SAverageSalePricePerUnit,$SAveragePurchasePricePerUnit]);
            
            
//             if ($result==1){
        
//             print("einstock");
        
        
//             }
//         }
// }


use DB;


class AddMenucontroller extends Controller
{
    public function fetchMenu($CID){


        $results=DB::select('select * from  vw_stockdetails where Category='.$CID);
        
        $MenuTable="";
        foreach ($results as $ro){
            
            $MenuTable=$MenuTable.'<div class="card">
            <div class="myPare">
            <div class="item-5">
            <img src="./img/khyberpass_menustarter.jpg" class="img-fluid" style="height:70px;width:70px;border-radius:10px;" >
            </div>
                <div class="item-1">
               
                    <!-- <h5 id="demo"></h5> -->
                    <h5>'.$ro->ProductName.'<input type="text" style="width: 100px;" value=\''.$ro->ProductName.'\' name=""
                            id="pname"><input type="text" value='.$ro->ProductCat.' style="width: 100px;" name=""
                            id="pid"> <input style="width: 100px;" value='.$ro->PerUnitSalePrice.' type="number" name=""
                            id="salePrice"><input style="width: 100px;" value='.$ro->PerUnitSalePrice.' type="text" name=""
                            id="inp-4"></h5>
                    <p>'.$ro->productDescription.'</p>
                </div>

                <div class="item-3">
                    <div class="itemPricing">
                        <div id="demo-2">£'.$ro->PerUnitSalePrice.'</div>
                    </div>

                </div>
                 <div class="item-4">
                    <button class="btn btn-success" onclick="addItem(this)" value="Increment Value">Add</button>

                 </div>
            </div>
        </div>';
        

        }


        return $MenuTable;
    }
    function getCategories(){
        $results=DB::select('select * from  tblpcategory');
        $pill="";
        
        foreach ($results as $ro){
            $pill=$pill.'
        <li class="nav-item">
        <a class="nav-link active" id="pills-Starter-tab" data-toggle="pill" href="#pills-Starter"
            role="tab" aria-controls="pills-Starter" aria-selected="true"
             onclick="FetchMenu('.$ro->PCID.')
             ">'.$ro->CategoryName.'</a> </li>';
        }
        return $pill;
   
    }
    function getAllCategories(){
        $results=DB::select('select * from  tblpcategory');
        $option='<option value=" "></option>';
        
        foreach ($results as $ro){
            $options=$options.'<option value='.$ro->PCID.'>'.$ro->CategoryName.'</option>';
        }
        return $options;
    }
   
    public function fetchAllMenu(){


        $results=DB::select('select * from  vw_stockdetails');
        
        return $results;
    }

    public static function loadProductCategory(){
        $data=DB:: select('select * from tblpcategory where CategoryName <> "Autos"');
        
        $option='<option value=" "></option>';
    
    
        foreach ($data as $d){
          //print $option;
    
            $option=$option.'
            <option value= '.$d->PCID.'>'.$d->CategoryName.'</option>';
          
        }
        return $option;
      }

      public static function insertProducts(Request $request, $CO){

        $array=json_decode($CO);
        foreach($array as $obj){

        $ProductName=$obj[0];
        $ProductCat=$obj[1];
        $Productsaleprice=$obj[2];
        $ProductCost=$obj[3];
        $Description=$obj[4];
        
        $ProductSerial=DB::table('productdefination')->insertGetId([
        'ProductName'=>$ProductName,
        'Category'=>$ProductCat,
        ]);
        DB::table('productdefination')
        ->where('ProductSerial', $ProductSerial)
        ->update(['ProductID' =>$ProductSerial,
        'Barcode' =>'*'.$ProductSerial.'*'
     
        ]);

        $id2=DB::table('instock')->insertGetId([
            'ProductSerial'=>$ProductSerial,
            'StockIn'=>'0',
            
             
            
            'TotalCost'=>$ProductCost,
            'TotalSaleAmount'=>$Productsaleprice,
            'PerUnitSalePrice'=>$Productsaleprice,
            'PerUnitPurchasePrice'=>$ProductCost,
            'Remarks'=>$Description,
            ]);


        }
        return "Done all";
       
}

}
