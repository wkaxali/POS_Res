<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CUDproduct extends Controller
{
    public function insertProduct(Request $request)
    {
        //[ProductName,ProductCat,ProductDes,PurchasePrice,SalePrice,StockIn];
        //$e=0;
        $obj=$request->all();
        $Pname=$obj['ProductName'];
        $Pcateg=$obj['ProductCat'];
        $PDes=$obj['ProductDes'];
        $Ppurchaseprice=$obj['PurchasePrice'];
        $Psaleprice=$obj['SalePrice'];
        $Psubcat=$obj['StockIn'];
        $Pbarcode=$obj['Pbarcode'];
        $Premark=$obj['Premark'];
        
        

        // //self:: insertintblproductdefination(null,$Pname,$Pcateg,$Psubcat,$PDes,null,null,$Pbarcode,$Premark,null,null);
        
        // $StockProductSerial=DB::table("productdefination")->max('ProductSerial');
        $StockProductSerial=DB::table("productdefination")->insertGetId(['ProductName'=>$Pname,
        'Category'=>$Pcateg,
        'subCategory'=>$Psubcat,
        'description'=>$PDes,
        'Barcode'=>$Pbarcode,
        'Remarks'=>$Premark

    ]);
        
    DB::table('productdefination')
    ->where('ProductSerial', $StockProductSerial)
    ->update(['ProductID' => $StockProductSerial]);

       //return print(mysql_insert_id());
   
    self:: insertintblinstock(null,$StockProductSerial,"404","0",$Ppurchaseprice,$Psaleprice,null,$Psaleprice,$Ppurchaseprice,null);
    return "Getting from controller".$obj[0];
    }

        public function insertintblproductdefination(


            $PDProductSerial,
            $PDProductName,
            $PDCategory,
            $PDsubCategory,
            $PDCompany,
            $PDUserCategory,
            $PDProductID,
            $PDBarcode,
            $PDRemarks,
            $PDYear,
            $PDarabicName
            ){
       
            $result= DB::insert('insert into productdefination (ProductName,Category,subCategory,
            Company,UserCategory, ProductID,Remarks,Barcode,Year,arabicName)
            value(?,?,?,?,?,?,?,?,?,?)',
            [$PDProductName, $PDCategory,$PDsubCategory, $PDCompany, $PDUserCategory,
            $PDProductID, $PDRemarks,$PDBarcode,$PDYear,$PDarabicName]);
            
            
            if ($result==1){
        
            print("product");

            }
            else{
                print("Error");
            }


        
        }

        public function insertstock()
         {
            $obj=json_decode($CO);
            $StockID=$obj[0];
            $StockProductSerial=$obj[1];
            $StockIn=$obj[2];
            $PreviousStock=$obj[3];
            $stockPerUnitPurchasePrice=$obj[4];
            $StockPerUnitSalePrice=$obj[5];
            $StockExpairyDate=$obj[6];
            $StockAverageSalePricePerUnit=$obj[7];
            $StockAveragePurchasePricePerUnit=$obj[8];
            $StockdateStamp=$obj[9];

            self:: insertintblproductdefination($StockID,$StockProductSerial,$StockIn,$PreviousStock,$stockPerUnitPurchasePrice,$StockPerUnitSalePrice,null,$StockAverageSalePricePerUnit,$StockAveragePurchasePricePerUnit,null);

        //return "Getting from controller".$obj[0];




        }
        public function insertintblinstock (
       
       
            $SStockID,
            $SProductSerial,
            $SStockIn,
            $SPreviousStock,
            $SPerUnitPurchasePrice,
            $SPerUnitSalePrice,
            $SExpairyDate,
            $SAverageSalePricePerUnit,
            $SAveragePurchasePricePerUnit,
            $SdateStamp
            ){
            $result= DB::insert('insert into instock (ProductSerial,StockIn,PreviousStock,
            PerUnitPurchasePrice, PerUnitSalePrice,
            AverageSalePricePerUnit,AveragePurchasePricePerUnit)
            value(?,?,?,?,?,?,?)',
            [$SProductSerial,$SStockIn,$SPreviousStock, $SPerUnitPurchasePrice, $SPerUnitSalePrice,
            $SAverageSalePricePerUnit,$SAveragePurchasePricePerUnit]);
            
            
            if ($result==1){
        
            //print("einstock");
        
        
            }
        }
        public function UpdateProductName(
            $PName,
            $PiD
        ){
          
   
           
                            
            
            
            $qr="UPDATE   productdefination   SET   ProductName='".$PName."'";
            $qr=$qr." WHERE  ProductSerial=".$PiD;
            $affected = DB::update($qr);
            
            
        
       
       }
    
    public function instock(
        $stockId,
        $stockName,
        
        $unitprice,
        $salepurches

        
        ){
          
            $qr="UPDATE   instock   SET    ";
            $qr=$qr."PerUnitPurchasePrice=".$unitprice.",AverageSalePricePerUnit=".$salepurches;

            $qr=$qr." WHERE  ProductSerial=".$stockId;
            $affected = DB::update($qr);
            
    
          //  print("Number of Rows Affacted".$affected);
            
        
    
            


    }
    public function updateDescription(Request $request, $CO){
     //   [ID,Name,PDesc,Psale];
        $obj=json_decode($CO);
        $PId=$obj[0];
        $Pname=$obj[1];
        $PDesc=$obj[2];
        $Psale=$obj[3];

        self::DescritpionUpadte($PId,$PDesc);
        self::UpdateProductName( $Pname,$PId);
        self::updateSalePurchasePrice($PId,"0",$Psale);
        return "Updated";




    }
    public function DescritpionUpadte(
        $stockId,

        $Des
        
          ){
            $qr="UPDATE   productdefination   SET    ";
            $qr=$qr."description='".$Des;

            $qr=$qr."' WHERE  ProductSerial=".$stockId;
            $affected = DB::update($qr);
            
    
           return ("Number of Rows Affacted".$affected);
            
        
    
            


    }
    public function updateSalePurchasePrice(
        $stockId,
        
        
        $unitprice,
        $salepurches

        
        ){
          
            $qr="UPDATE   instock   SET    ";
            $qr=$qr."PerUnitPurchasePrice=".$unitprice.",AverageSalePricePerUnit=".$salepurches;

            $qr=$qr." WHERE  ProductSerial=".$stockId;
            $affected = DB::update($qr);
            
    
          //  print("Number of Rows Affacted".$affected);
            
        
    
            


    }

    public function DeletionofProductID($PDelId){
           
            $sql = "DELETE FROM productdefination WHERE ProductSerial=$PDelId";
           return $affected = DB::delete($sql);
        }
        
    public static function getAllProducts(){
        $results=DB::select('select * from  vw_stockdetails where category <>1');    
        return $results;
    }

    public static function getCategories(){
        $results=DB::select('select * from  tblpcategory');    
        return $results;
    }

    public static function getMenu($PCID){
        $results=DB::select('select * from  vw_stockdetails where Category ='.$PCID);    
        return $results;
    }

    public static function getImage($id){
        $results=DB::table('vw_stockdetails')
        ->where('ProductSerial', '=',$id)
        ->first()->image;    
        return $results;
    }
        
}

