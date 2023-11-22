<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\tblCustomerController;
//use App\Http\Controllers\LedgerPartiesController;
use App\Http\Controllers\accountsController;
use App\Http\Controllers\UpdateStocksController;
use App\Http\Controllers\loyaltyManagmentController;
use PDF;
use NumberToWords\NumberToWords;




class serviceSalesFlow extends Controller
{
    public function SalesFlow(Request $request){


        $Array=$request->all();
        // dd($Array);
        $tot=$Array[1];
        
        $OverAllDiscount= $Array[2];
        $AmountAfterDiscount=$Array[3];
       $tax =$Array[4];
        $netTotal=$Array[5];
        $AP=$Array[6];
        $RBI=$Array[7];
         $CID=$Array[8];
         $CLB=$Array[9];

         $CCB=$Array[10];
         $AID=$Array[11];
         $coinsDiscount=$Array[12];
         $coinsUsed=$Array[13];
         $name=$Array[14];
       //  return $CLB;
         $dateNow= Carbon::now()->toDateString();//->format('Y-m-d h:iA');
       // $d= Carbon::createFromFormat('dd/mm/YYYY HH:MM:SS', $dateNow);
         //return $dateNow;
         session(['coinsDiscount' => $coinsDiscount]);
          //tot,discount,gross,tax,netTotal,amp,rmb,CID,CLB,CCB
        //insert into sales order
        $invoiceNumber=DB::table('tblsaleinvoice')->insertGetId(['CustomerID'=>$CID,
        'TotalAmount'=>$tot,
        'Discount'=>$OverAllDiscount,
        'DateStamp'=>$dateNow,
        'VAT'=>$tax,
        'NetTotal'=>$netTotal,
        'AmountPaid'=>$AP,
        'Balance'=>$RBI,
        'OrderStatus'=>'PLACED',
        'BillStatus'=>"CLEAR",
        'HoldStatus'=>'1',
        'CustomerBalanceBeforeInvoiceBill'=>$CLB,
        'CustomerBalanceAfterInvoiceBill'=>$CCB,
        'CashPaidBack'=>NULL,
        'CashNote'=>NULL,
        'Remarks'=>NULL,
        'dliveryDate'=>NULL,
        'returnDate' =>NULL,
        'CoinsUsed'=>$coinsUsed,
        'CoinsDiscount'=>$coinsDiscount,
        'ReceiversNames'=>$name
        
        ]);

        $totlpaid=$AP;
        self::insertInDetailedOrder($Array[0],$invoiceNumber,$dateNow);
        $LID=globalVarriablesController::selfLedgerID();
       $oldSelfBalance=0; // LedgerPartiesController::getPartyBalance($LID);
       $oldCustomerBalance=tblCustomerController::getCustomerBalance($CID);
       $paidVia=$AID;

       $oldCustomerCoins=tblCustomerController::getCustomerCoins($CID);
       $currentCustomerCoins=floatval($oldCustomerCoins)-floatval($coinsUsed);
       tblCustomerController::UpdateCustomerCoins($CID,$currentCustomerCoins);
       
       $currentCustomerBalance=floatval($oldCustomerBalance)+floatval($RBI);
       tblCustomerController::UpdateCustomerBalance($CID,$currentCustomerBalance);
       $selfBalance=floatval($oldSelfBalance)+floatval($totlpaid);
       //LedgerPartiesController::UpdatePartiesBalance($LID,$selfBalance);
       $TID = TransactionFlow::addTransaction($invoiceNumber,"Credit","Stock and Service",
       $totlpaid,$dateNow,"1",$oldCustomerBalance,$currentCustomerBalance,$oldSelfBalance,$selfBalance,$LID,"0",NULL,$CID,$paidVia,NULL);
       $OldAccBalance=accountsController::getAccountBalance($AID);
       $newAccountBalance=floatval($OldAccBalance)+floatval($totlpaid);
       
       accountsController::UpdateNewBalance($AID,$newAccountBalance);

       $invoiceDetails=self::getAllInvoiceDetails($invoiceNumber);
       
       //session(['invoiceDetails' => $invoiceDetails]);
       $ProductDetailsArray=array();
       $oneProductInInvoice=array();

       session(['invoiceNumber' => $invoiceNumber]);
         foreach($invoiceDetails as $product){
         $qty=$product->Quantity;
        
         $contact=$product->ProductSerial;
         $customerName=$product->CustomerName;
         $PID=$product->ProductSerial;
         $productName=$product->ProductName;
         $IN=$product->InvoiceNumber;
         $tax=$product->VAT;
        $Pt =$product->NetAmount;
         
         $unitPrice=$product->PerUnitSalePrice;
         $CNIC=$product->CNIC;
         $productName=$product->ProductName;
         $contact=$product->Contect;
         $TotalAmount=$product->TotalAmount;
         $tax=$product->VAT;
         $Discount=$product->Discount;
         $NetTotal=$product->NetTotal;
         $AmountPaid=$product->AmountPaid;
         $Balance=$product->Balance;
         $dat=$product->DateStamp;
         $BillStatus=$product->BillStatus;
         $AmountPaid=$product->AmountPaid;
         $InvoiceBalance=$product->Balance;

         
         array_push($oneProductInInvoice,$PID,$productName,$qty,$unitPrice,$tax,$Pt);
         array_push($ProductDetailsArray,$oneProductInInvoice);
         $oneProductInInvoice=array();
        
         session(['unitPrice' => $unitPrice]);
         session(['qty' => $qty]);
         session(['coinsDiscount' => $coinsDiscount]);
         session(['ProductNames' => $ProductDetailsArray]);
         session(['ivd' => $dat]);
         session(['iu' => $IN]);
         session(['customerID' => $CID]);
         session(['customerName' => $customerName]);
         session(['contact' => $contact]);
         session(['model' => $productName]);
         session(['invoiceNo' => $invoiceNumber]);
         session(['CNIC' => $CNIC]);
         session(['tax' => $tax]);
         session(['total' => $TotalAmount]);
         session(['netTotal' => $netTotal]);
         session(['InvBalance' => $InvoiceBalance]);
         session(['amountPaid' =>  number_format($AmountPaid)]);
         session(['overallDiscount' => $Discount]);

         $numberToWords = new NumberToWords();
            $numberTransformer = $numberToWords->getNumberTransformer('en');
            $a= $numberTransformer->toWords($AmountPaid);
          session(['amountInWords' => ucwords($a)]);
      }

      loyaltyManagmentController::billToRewardsConversion($AmountPaid, $TID, $CID);
      
  return $invoiceNumber;
    }
        //insert into order details
        //inster in transaction Flow
        //update customer balance
        //frf())
    public function insertInDetailedOrder($OrderDetails,$InvoiceID,$date){
      foreach ($OrderDetails as $row){

      $DSID=DB::table('tblsaledetailedinvoice')->insertGetId([
        'InvoiceNumber'=>$InvoiceID,
        'ProductSerial'=>$row[0],
        'SalePrice'=>$row[1],
        'Quantity'=>$row[2],
        'DiscountOffered'=>$row[3],
        'DateStamp'=>$date,
        
        
        'TotalAmount'=>0,
        'NetAmount'=>$row[4],
        
        'Activity'=>"Sales",
        'RentedDays'=>0

      ]);
     $oldStock= UpdateStocksController::getCurrentStock($row[0]);
    $newStock= floatval($oldStock)-floatval($row[2]);
    UpdateStocksController::updateStock($row[0],$newStock);

      }
      return $DSID;
      

    }
    public function apiCheck()
    {
      $obj = (object) [
        'aString' => 'some string',
        'anArray' => [ 1, 2, 3 ]
    ];
    
    return json_encode($obj);
      # code...
    }


    public static function printSaleRequestOnInvoiceNumber($invoiceNumber){
        $results=DB::select('select * from vw_customersale_invoice where InvoiceNumber= '.$invoiceNumber);
        $invoiceDetails=self::getAllInvoiceDetails($invoiceNumber);
       
        //session(['invoiceDetails' => $invoiceDetails]);
        $ProductDetailsArray=array();
        $oneProductInInvoice=array();
        foreach($invoiceDetails as $product){
          $qty=$product->Quantity;
         
          $contact=$product->ProductSerial;
          $customerName=$product->CustomerName;
          $CID=$product->CustomerID;
          $cAddrss=$product->Address;
          $PID=$product->ProductSerial;
          $IN=$product->InvoiceNumber;
          $tax=$product->VAT;
          $Pt =$product->NetAmount;
          $unitPrice=$product->PerUnitSalePrice;
          $CNIC=$product->CNIC;
          $productName=$product->ProductName;
          $contact=$product->Contect;
          $TotalAmount=$product->TotalAmount;
          $tax=$product->VAT;
          $Discount=$product->Discount;
          $netTotal=$product->NetTotal;
          $AmountPaid=$product->AmountPaid;
          $Balance=$product->Balance;
          $dat=$product->DateStamp;
          $BillStatus=$product->BillStatus;
          $AmountPaid=$product->AmountPaid;
          $InvoiceBalance=$product->Balance;
 
          
          array_push($oneProductInInvoice,$PID,$productName,$qty,$unitPrice,$tax,$Pt);
          array_push($ProductDetailsArray,$oneProductInInvoice);
          $oneProductInInvoice=array();
 
          session(['ProductNames' => $ProductDetailsArray]);
          session(['ivd' => $dat]);
          session(['iu' => $IN]);
          session(['customerID' => $CID]);
          session(['customerName' => $customerName]);
          session(['contact' => $contact]);
          session(['model' => $productName]);
          session(['invoiceNo' => $invoiceNumber]);
          session(['CNIC' => $CNIC]);
          session(['tax' => $tax]);
          session(['total' => $TotalAmount]);
          session(['netTotal' => $netTotal]);
          session(['InvBalance' => $InvoiceBalance]);
          session(['amountPaid' =>  number_format($AmountPaid)]);
          session(['overallDiscount' => $Discount]);
          session(['address' => $cAddrss]);
          session(['qty' => $qty]);
          
          $numberToWords = new NumberToWords();
             $numberTransformer = $numberToWords->getNumberTransformer('en');
             $a= $numberTransformer->toWords($AmountPaid);
           session(['amountInWords' => ucwords($a)]);
       }
       return $results;
      }


    public function addInTransactionFlowForSales($invoiceNumber,$dateNow,$AP,$userID,$pattyCash,$CLB,$CCB){

      // [TransactionID]
      
      $TID=DB::table('tblTransactionFlow')->insertGetId(['InvoiceNo'=>$invoiceNumber,
      'TransactionCatogery'=>"Sales",
      'Amount'=>$AP,
      'DateStamp'=>$dateNow,
      'UserID'=>$userID,
      'PattyCash'=>$pattyCash,
      
      'SBB'=>NULL,
      'SBA'=>NULL,
      'CBB'=>$CLB,
      'CBA'=>$CCB
         
      ]);

    }


    public function getInvoiceNewID(){
      $IID=DB::table('tblsaleinvoice')->max("InvoiceNumber");
     return $IID+1;
     
    }
    

    public function UpdateRecipe(Request $request,$RecipeTable,$MenuID,$Ecost,$salePrice){
        
      print($MenuID);

      self::deleteintblrecipetoraw($MenuID);
   $obj = json_decode($RecipeTable);
   foreach ($obj as $row){
      
          $RMID=$row[0];
          $RMName=$row[1];
          $qty=$row[2];
          $unit=$row[3];
          $unitCost=$row[4];
          $TotalCostOfThisItem=$row[5];

      // print("RMID".$RMID);
      // print("    Name".$RMName);
      // print("    Qty".$qty);
      // print("   unt".$unit);
      // print("   unit cost".$unitCost);
      // print("   Cost Total cost".$unitCost);
      

    self::insertinrecipetblraw($MenuID,$RMID,$unit,$qty," ",$TotalCostOfThisItem);


   }
   self::updateIntblMenuproductsForSaleAndPurchase($MenuID,$Ecost,$salePrice);
   return 0;

     
   }



   public function deleteintblrecipetoraw($MenuID){

  
  
      $Deleted = DB:: delete("delete from tblrecipetoraw where PID=".$MenuID); 
       
       print($Deleted);
  

   }
   public static function getAllInvoiceDetails($InvoiceNo){
    $invoiceDetails=DB::select('select * from vw_customersale_invoice where InvoiceNumber= '.$InvoiceNo);
   
    foreach($invoiceDetails as $product){
        session(['invoicePrice' => $product->PerUnitSalePrice]);
        session(['netAmount' => number_format($product->NetAmount)]);
        session(['discount' => $product->Discount]);
        session(['customerName' => $product->CustomerName]);
        session(['address' => $product->Address]);
        session(['invoiceNo' => $product->InvoiceNumber]);
        session(['cnic' => $product->CNIC]);
        session(['engineNo' => $product->EngineNumber]);
        session(['chassisNo' => $product->ChasisNumber]);
        session(['ivd' => $product->DateStamp]);
        session(['iu' => $product->InvoiceNumber]);
        session(['color' => $product->color]);
        session(['invoiceDate' => $product->DateStamp]);
        session(['description' => $product->description]);
        
        session(['contact' => $product->Contect]);
        session(['model' => $product->ProductName]);
        session(['referenceNumber' => $product->ProductName]);
        
        session(['CNIC' => $product->CNIC]);
        session(['tax' => number_format($product->VAT)]);
        session(['total' => $product->TotalAmount]);
        session(['netTotal' => $product->NetTotal]);
        session(['InvBalance' => $product->Balance]);
        session(['amountPaid' =>  number_format($product->AmountPaid)]);
        session(['overallDiscount' => $product->Discount]);
        session(['description' => $product->description]);

        $numberToWords = new NumberToWords();
        $numberTransformer = $numberToWords->getNumberTransformer('en');
        $a= $numberTransformer->toWords($product->AmountPaid);
        $b= $numberTransformer->toWords($product->NetAmount);
        session(['amountInWords' => ucwords($a)]);
        session(['netAmountInWords' => ucwords($b)]);
        

    }
    return $invoiceDetails;

}

   public function insertinrecipetblraw($Rpid,$Rrawid,$Runit,$Rquantity,$remarks,$REcost){

     
      
 $result= DB::insert('insert into tblrecipetoraw (PID, RAWID, Unit, Quantity, Remarks, ECost ) values (?, ?,?,?,?,?)', [$Rpid,$Rrawid,$Runit,$Rquantity,$remarks, $REcost]);
  

  if($result==1){

      print('nextone');




          }
  }


  public function updateIntblMenuproductsForSaleAndPurchase($PID,$ERCost,$SalePrice){

      
  
  
      $qr="UPDATE   tblmenuproducts SET   SalePrice='".$SalePrice."', RecipeCost ='".$ERCost."' WHERE  PID =".$PID;
      $affected = DB::update($qr);
  print("Number of Rows Affacted".$affected);
  
  } 



  public function saleServiceInvoice()
  {
      
      

      $newHTML='<table border="0">
      <thead>
          <tr>
              <th><br><h1>FORLAND MODREN MOTORS</h1></th>
              
             
          </tr>
      </thead>
      
      <tbody>
      <tr>
      <br>
      <td>
     
      NTN:82588676-6 <br>

      STRN:3277876204764 <br>
      Customer\'s Copy
      </td>




      
      
      </tr>
      <tr><td align="center"><h1>Sales Invoice</h1></td></tr>


      
      </tbody>


          
  </table>
  <br>
  <br>
  <br>

  <table border="0">
      <tbody>
          <tr>
              <td><br><span style="font-size: medium;">Customer Name</span></td>
              <td align="center"><br>____________</td>
              <td><br><span style="font-size: medium;">Booking No</span></td>
              <td align="center"><br>____________</td>
              
             
          </tr>
          <tr>
              <td><br><span style="font-size: medium;">Address</span></td>
              <td align="center"><br>____________</td>
              <td><br><span style="font-size: medium;">Invoice Number</span></td>
              <td align="center"><br>____________</td>
              
             
          </tr>
          <tr>
              <td><br><span style="font-size: medium;">CNIC/NTN</span></td>
              <td align="center"><br>____________</td>
              <td><br><span style="font-size: medium;">Invoice Date</span></td>
              <td align="center"><br>____________</td>
              
             
          </tr>
          <tr>
              <td><br><span style="font-size: medium;">Contact</span></td>
              <td align="center"><br>____________</td>
              <td><br><span style="font-size: medium;"></span></td>
              <td align="center"><br>____________</td>
              
             
          </tr>
      </tbody>
      </table>
  


<br>
<br>
<br>
<br>
<table border="1" >
<tr ><td>
      <table border="0">
      <thead>
      <tr>
          <td  align="left" bgcolor="#C0C0C0" >
             Description </td>
             <td align="center" bgcolor="#C0C0C0" >color</td>
             <td align="center"bgcolor="#C0C0C0" >Engine No</td>
             <td align="center" bgcolor="	#C0C0C0">Chassis No</td>
             <td align="center" bgcolor="	#C0C0C0">Amount</td>
       
      </tr>
  </thead>
          <tbody >
              <tr >
                  <td ></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr> <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
          <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
          <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
      </tbody>
  </table>
  </td>
</tr>
</table>
  


<table border="0">
  <thead>
  <tr>
      <th width="60%" border="1" align="center">
         Total in Word </th>
    
      <th  width="40%" border="1" align="center"> Tootal PKR</th>
    
  </tr>
</thead>
      <tbody>
      <tr>
          <td width="60%" border="1" align="center">1000</td>
          <td width="40%" border="1" align="center">10000</td>
         
        
      </tr>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
     
      <br>
      <tr>
      <td width="60%" border="0"></td>
      <td width="40%" align="center" border="0">_______________________</td>
      
     
    
  </tr>
  <tr>
  <br>
     
      <td width="60%" border="0"></td>
      <td width="40%" align="center" border="0">Sign and Signature</td>
      
     
    
  </tr>
  
  
   
   
  </tbody>
</table>
<br><br> <br>
<br>
<table border="0">

<tr>
  
     
      <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Milat Tractors Limited,Lahore,Tel:0300-0600061  </h4></td>
      
      
     
    
  </tr>
  <tr>
  
     
      <td bgcolor="crimson" align="center" border="0"><h5> Email Adress: forlandmodernmotoprs@yahoo.com </h5></td>
      
      
     
    
  </tr>
  
</table>

  
  
  
  
  
  ';     // $html= $htmldata;

      
      PDF::SetTitle('Sale Invoice');
      PDF::AddPage();
      PDF::writeHTML($newHTML, true, false, true, false, '');

      PDF::Output('saleInvoice.pdf');
     
  }


}
