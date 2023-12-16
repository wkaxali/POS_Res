<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TransactionFlow;
use App\Http\Controllers\LedgerPartiesController;
use Carbon\Carbon;
use App\Http\Controllers\accountsController;
use App\Http\Controllers\UpdateStocksController;
use DB;
class OrderFlowController extends Controller
{
    public function OrderFlow(Request $request,$data){
       // var Order=[mainTotal,totlpaid,totRemaining,orderDetails];

        $Array=json_decode($data);
        $mainTotal=$Array[0];
        $totlpaid= $Array[1];
        $totRemaining=$Array[2];
       $orderDetails =$Array[3];
       $AID=$Array[4];
       
       
        
         
         $dateNow= Carbon::now()->toDateTimeString();//->format('Y-m-d h:iA');
       // $d= Carbon::createFromFormat('dd/mm/YYYY HH:MM:SS', $dateNow);


      
       
        $invoiceNumber=DB::table('tblpurchaseorder')->insertGetId(['SupplierID'=>'1',
        'TotalAmount'=>$mainTotal,
        'Discount'=>'0',
        'DateStamp'=>$dateNow,
        'VAT'=>'0',
        'NetTotal'=>$mainTotal,
        'AmountPaid'=>$totlpaid,
        'Balance'=>$totRemaining,
        'OrderStatus'=>"Pending",
        'HoldStatus'=>'0',
        'SupplierBalanceBeforeInvoiceBill'=>NULL,
        'SupplierBalanceAfterInvoiceBill'=>NULL,
        'CashPaidBack'=>NULL,
        'CashNote'=>NULL,
        'Remarks'=>NULL,
        'dliveryDate'=>NULL,
        'returnDate' =>NULL,
        'VATRate'=>NULL
        
        ]);

        
      self::insertInDetailedPurchaseOrder($orderDetails,$invoiceNumber,$dateNow);
      $LID=2;
      $oldSelfBalance=LedgerPartiesController::getPartyBalance(2);
      $oldCompanyBalance=LedgerPartiesController::getPartyBalance(1);
      $paidVia=$AID;
     
      $currentCompanyBalance=floatval($oldCompanyBalance)+floatval($totRemaining);
      LedgerPartiesController::UpdatePartiesBalance(1,$currentCompanyBalance);
      TransactionFlow::addTransaction($invoiceNumber,"Credit","Booking Order",
      $totlpaid,$dateNow,"1",$oldCompanyBalance,$currentCompanyBalance,NULL,NULL,$LID,"0",NULL,'1',$paidVia,NULL);
      $OldAccBalance=accountsController::getAccountBalance($AID);
      $newAccountBalance=floatval($OldAccBalance)-floatval($totlpaid);
      
      accountsController::UpdateNewBalance($AID,$newAccountBalance);
      $selfBalance=floatval($oldSelfBalance)-floatval($totlpaid);
      LedgerPartiesController::UpdatePartiesBalance(2,$selfBalance);
     // $companyBalance=floatval($oldCompanyBalance)+floatval($totlpaid);
   
    
        return "Your order ".$invoiceNumber;
    }

    function getOrderID(){

      $IID=DB::table('tblpurchaseorder')->max("InvoiceNumber");
      return $IID+1;
  }

    function addProductOnlyForAutos($Pname,$Pcateg,$Psubcat,$Pbarcode,$UnitPurchasePrice,$OrderID,$description,$INP){

           
        $ProductSerial=DB::table('productdefination')->insertGetId(['ProductName'=> $Pname, 
        'Category'=>$Pcateg,
        'subCategory'=>$Psubcat ,
        'Company'=>'Forland', 
       'Year'=>'2021'
        ]);
        DB::table('productdefination')
            ->where('ProductSerial', $ProductSerial)
            ->update([
              'ProductID' =>$ProductSerial,
              'description' =>$description,
              'Barcode' =>'*'.$ProductSerial.'*'
            ]);
          
            $SID=DB::table('instock')->insertGetId(['ProductSerial'=> $ProductSerial, 
            'StockIn'=>'1',
            'PerUnitPurchasePrice'=> $UnitPurchasePrice,
             
            'PerUnitSalePrice'=>$INP,
            'ExpairyDate'=>NULL,
            'TotalCost'=>$UnitPurchasePrice,
            'TotalSaleAmount'=>$UnitPurchasePrice,
            'Remarks'=>'Pending In Order No:  '.$OrderID,
            'Status'=>'Pending'
           
            ]);
        return $ProductSerial;
  
        
      }

    public function insertInDetailedPurchaseOrder($OrderDetails,$InvoiceID,$date){
        
        
        
        
        foreach ($OrderDetails as $row){
            // $(tr).find('td:eq(0)').text(), //AutoCategory
        // $(tr).find('td:eq(2)').text(), //Price
        // $(tr).find('td:eq(3)').text(), //qty
       
        $autoCategory=$row[0];
        $purchasePrice=$row[1];
        $qty=$row[2];
        $amountTot=$row[3];
        $AmountPaid=$row[4];
        $remAmount=$row[5];
        $Pname=$row[6];
        $description=$row[7];
        $invoicePrice=$row[8];
        for($i=0;$i<$qty;$i++){
        // $(tr).find('td:eq(4)').text(), //totamount
        // $(tr).find('td:eq(5)').text(), //Paid
        // $(tr).find('td:eq(6)').text() //remAmount
       $productSerial= self::addProductOnlyForAutos($Pname,"20",NULL,NULL,$purchasePrice,$InvoiceID,$description,$invoicePrice);
       print ($productSerial);
      
  
        $DSID=DB::table('tblpurchaseoorderdetaile')->insertGetId(['InvoiceNumber'=>$InvoiceID,
            
        'ProductSerial'=>$productSerial,
        'PurchasePricePerUnit'=>$purchasePrice,
        'ProductCategory'=>$autoCategory,
        'DiscountOffered'=>'0',
        'DateStamp'=>$date,
        
        'TotalAmount'=>$amountTot,
        'NetAmount'=>$amountTot,
        
        'Activity'=>"Place Order",
        'OrderedQuantiy'=>'1',
        
        
        'RetailPricePerUnit'=>$purchasePrice,
        'DilevedStatus'=>'Pending',
        'AmountPaid'=>$AmountPaid,
        
        'Balance'=>$remAmount,
        'DeliveredQuantity'=>0
  
        ]);
        }
        }
        return $DSID;
        
  
      }



      /////
      public function insertInDetailedPurchaseOrderForSP($OrderDetails,$InvoiceID,$date){
        
        
        
        
        foreach ($OrderDetails as $row){
          // $(tr).find('td:eq(0)').text(), //productID
          // $(tr).find('td:eq(3)').text(), //purchase
          // $(tr).find('td:eq(4) input[type="text"]').val(), //qty
          // $(tr).find('td:eq(5) input[type="text"]').val(), //discount
          // $(tr).find('td:eq(6)').text() //totamount
        $pid=$row[0];
        $purchasePrice=$row[1];
        $qty=$row[2];
        
        $dis=$row[3];
        $totamount=$row[4];
        
       // for($i=0;$i<$qty;$i++){
        // $(tr).find('td:eq(4)').text(), //totamount
        // $(tr).find('td:eq(5)').text(), //Paid
        // $(tr).find('td:eq(6)').text() //remAmount
       
      
  
        $DSID=DB::table('tblpurchaseoorderdetaile')->insertGetId(['InvoiceNumber'=>$InvoiceID,
            
        'ProductSerial'=>$pid,
        'PurchasePricePerUnit'=>$purchasePrice,
        
        'DiscountOffered'=>$dis,
        'DateStamp'=>$date,
        
        'TotalAmount'=>$totamount,
        'NetAmount'=>$totamount,
        
        'Activity'=>"Purchased Stock",
        'OrderedQuantiy'=>$qty,
        
        
        'RetailPricePerUnit'=>$purchasePrice,
        'DilevedStatus'=>'Delivered',
        'AmountPaid'=>$totamount,
        
        'Balance'=>"0",
        'DeliveredQuantity'=>$qty
  
        ]);


        $oldStock= UpdateStocksController::getCurrentStock($pid);
    $newStock= floatval($oldStock)+floatval($qty);
    UpdateStocksController::updateStock($pid,$newStock);
       // }
        }
        return $DSID;
        
  
      }
      /////
      public function addInTransactionFlowForPurchase($invoiceNumber,$dateNow,$AP,$userID,$pattyCash,$CLB,$CCB){

        // [TransactionID]
        
        $TID=DB::table('tblTransactionFlow')->insertGetId(['InvoiceNo'=>$invoiceNumber,
        'TransectionCatogery'=>"Booking Order",
        'Amount'=>$AP,
        'DateStamp'=>$dateNow,
        'UserID'=>$userID,
        'PattyCash'=>$pattyCash,
        'TransactionType'=>"Debit",
        
        'SBB'=>NULL,
        'SBA'=>NULL,
        'CBB'=>$CLB,
        'CBA'=>$CCB
        
        
        
        
        
        
        ]);
        
      }

      function spareParts(){
        $data=DB:: select('select * from vw_stockdetails where Category = 21');
        return $data;
      }

      function viewStock(){
        $data=DB:: select('select * from vw_stockdetails where Category = 20');
        return $data;
      }

      function viewAllStock(){
        $data=DB:: select('select * from vw_stockdetails');
        
        return $data;
      }
      public static function editEmployee(Request $request, $CO){
        $ata=json_decode($CO);
        $EID = $ata[0];
        $firstName = $ata[1];
        $lastName = $ata[2];
        $CNIC = $ata[3];
        $contact = $ata[4];
        $address = $ata[5];
        $email = $ata[6];
        $designation = $ata[7];
        $date = $ata[8];

        $re = DB::table('tblemployees')
        ->where('EID', $EID)
        ->update([
          'FirstName'=>$firstName,
          'LastName'=>$lastName,
          'CNIC'=>$CNIC,
          'ContactNo'=>$contact,
          'HomeAddress'=>$address,
          'EmailID'=>$email,
          'DesignationID'=>$designation,
          'JoiningDate'=>$date
          ]);

          return $EID;
        }
        
        public static function UpdateStock(Request $request){
        $ata=$request->all();
        $productID = $ata['PID'];
        $productName = $ata['productName'];
        $category = $ata['category'];
        $description = $ata['description'];
        $PerUnitPurchasePrice = $ata['costprice'];
        $PerUnitSalePrice = $ata['saleprice'];
        $instock = $ata['instock'];

        $re = DB::table('productdefination')
        ->where('ProductSerial', $productID)
        ->update([
          'ProductName'=>$productName,
          'Category'=>$category,
          'description'=>$description,
          ]);

          $data = DB::table('instock')
        ->where('ProductSerial', $productID)
        ->update([
          'PerUnitPurchasePrice'=>$PerUnitPurchasePrice,
          'PerUnitSalePrice'=>$PerUnitSalePrice,
          'StockIn'=>$instock,
          
          ]);

          return $productID;
        }
      function viewCustomer(){
        $data=DB:: select('select * from customeinformation');
        return $data;
      }
      
      function transactionHistory(){
        $data=DB:: select('select * from tbltransactionflow');
        return $data;
      }
      
      function companyLedger(){
        $data=DB:: select('select * from vw_purchase_transactions where paidTo = 1');
        return $data;
      }

      function scratchFunc(){
        $data=DB:: select('select CustomerName, Contect, Address, Balance, CNIC from customeinformation');
        $table='
        <table id="myTable" class=" table-striped" style="width: 100%; text-align: center;">
          <thead>
              <tr>
                  <th id ="Cusname">Name</th>
                  <th id="CusCont">Contact</th>
                  <th id ="Cusaddr">Address</th>
                  <th id="CusIntrs">Interested In</th>
                  <th id ="CusMeet"> Who Meet</th>

              </tr>
          </thead>
          <tbody>';
 

        foreach ($data as $d){
          //print $option;

            $table=$table.'
           
       
            <tr>
            <td>'.$d->CustomerName.'</td>
            <td>'.$d->Contect.'</td>
            <td>'.$d->Address.'</td>
            <td>'.$d->Balance.'</td>
            <td>'.$d->CNIC.'</td>
            </tr>';
      
        }
        return $table.'<table>';
      }

      function getTransaction(){
      
        $data=DB:: select('select * from companyinfo');
        $i=1;
        $table="
        <table>
        <tr>
        <td>Increment</td>
        <td>Transaction ID</td>
        <td>Invoice Number</td>
        <td>Transection Catogery</td> </tr>";
 

        foreach ($data as $d){
          //print $option;

            $table=$table.'
           
       
            <tr>
            <td>'.$i.'</td>
            <td>'.$d->CompanyName.'</td>
            <td>'.$d->StoreName.'</td>
            <td>'.$d->Address.'</td>
            
     
        </tr>';
        
        $i++;
        }
        return $table.'<table>';
        
        
    }
    
    ////
    
    //// 
      function getOrderItem($OID){
        $results=DB::select('select * from vw_purchaseorderdetails where InvoiceNumber='.$OID);
        $table="";
        $i=1;
        $option='<option value=" "></option>';
  
        foreach ($results as $ro){
        $charges= TransactionFlow::getChargesOrComissions($ro->ProductID,"Transportation Charges","Cost");

          //return $charges;

          if( $ro->DilevedStatus!="Pending"){
                $option=$ro->DilevedStatus;
          }
          else{
            $option='<select
             id="category"
            tabindex="null"><option value=1 >Received</option><option value=2 selected>Pending</option></select></td>';

          }
          if($charges==0){
          $tc=' value='.$charges;
          }
          else{
            $tc=' value='.$charges.' readonly ="true"';
          }
          if($ro->ChasisNumber==""){
            $CHN=' value='.$ro->ChasisNumber;
            }
            else{
              $CHN=' value='.$ro->ChasisNumber.' readonly ="true"';
            }
            if($ro->EngineNumber==""){
              $EN=' value='.$ro->EngineNumber;
              }
              else{
                $EN=' value='.$ro->EngineNumber.' readonly ="true"';
              }
            if($ro->Color==""){
              $color=' value='.$ro->Color;
              }
              else{
                $color=' value='.$ro->Color.' readonly ="true"';
              }
          //print $option;

            $table=$table.'
            <tr>
            <td>'.$i.'</td>
            <td style="display:none">'.$ro->ProductID.'</td>
            <td>'.$ro->ProductName.'</td>
            <td><input type="text" '.$color.'></td>
            <td><input type="text" '.$CHN.'></td>
            <td><input type="text" '.$EN.'></td>
            <td><input type="text"'.$tc.'></td>
            <td> 
                    '.$option.'</td>
                 

                
        </tr>';
        $i++;
        $option="";
        }
        return $table;




      }


      public function PurchaseOrderWithStockUpdate(Request $request,$data){
       //myRow2 = [myTrows, tot, discount, gross, tax, netTotal, amp, rmb, SID, SLB, SCB];
 
         $Array=json_decode($data);
         $mainTotal=$Array[1];
         $netTotal=$Array[5];
         $totlpaid= $Array[6];
         $totRemaining=$Array[7];
        $orderDetails =$Array[0];
        //$pid=$orderDetails[0];
        $SID=$Array[8];
        $SLB=$Array[9];
        $SCB=$Array[10];
        $AID=$Array[11];
        
         
          
          $dateNow= Carbon::now()->toDateTimeString();//->format('Y-m-d h:iA');
        // $d= Carbon::createFromFormat('dd/mm/YYYY HH:MM:SS', $dateNow);
 
 
       
        
         $invoiceNumber=DB::table('tblpurchaseorder')->insertGetId(['SupplierID'=>$SID,
         'TotalAmount'=>$mainTotal,
         'Discount'=>'0',
         'DateStamp'=>$dateNow,
         'VAT'=>'0',
         'NetTotal'=>$netTotal,
         'AmountPaid'=>$totlpaid,
         'Balance'=>$totRemaining,
         'OrderStatus'=>"Pending",
         'HoldStatus'=>'0',
         'SupplierBalanceBeforeInvoiceBill'=>$SLB,
         'SupplierBalanceAfterInvoiceBill'=>$SCB,
         'CashPaidBack'=>NULL,
         'CashNote'=>NULL,
         'Remarks'=>NULL,
         'dliveryDate'=>NULL,
         'returnDate' =>NULL,
         'VATRate'=>NULL
         
         ]);
 
         
       self::insertInDetailedPurchaseOrderForSP($orderDetails,$invoiceNumber,$dateNow);
       $LID=2;
       $oldSelfBalance=LedgerPartiesController::getPartyBalance(2);
       $oldCompanyBalance=LedgerPartiesController::getPartyBalance($SID);
       $paidVia=$AID;
     
       $currentCompanyBalance=floatval($oldCompanyBalance)+floatval($totRemaining);
       LedgerPartiesController::UpdatePartiesBalance($SID,$currentCompanyBalance);
       $selfBalance=floatval($oldSelfBalance)-floatval($totlpaid);
       LedgerPartiesController::UpdatePartiesBalance(2,$selfBalance);
       TransactionFlow::addTransaction($invoiceNumber,"Credit","Stock Purchased",
       $totlpaid,$dateNow,"1",$oldCompanyBalance,$currentCompanyBalance,$oldSelfBalance,$selfBalance,$LID,"0",NULL,$SID,$paidVia,NULL);
       $OldAccBalance=accountsController::getAccountBalance($AID);
       $newAccountBalance=floatval($OldAccBalance)-floatval($totlpaid);
       
       accountsController::UpdateNewBalance($AID,$newAccountBalance);
       
      // $companyBalance=floatval($oldCompanyBalance)+floatval($totlpaid);
    
     
         return "Your order ".$invoiceNumber;
     }
}
