<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class orderViewController extends Controller
{

    public function setPreparedOrders($id){

        DB::table('tblsaleinvoice')
        ->where('InvoiceNumber', $id)
        ->update([
        
        'OrderStatus'=>"PREPARED"
        ]);
      
      return "Order Is Prepared";
    }
    
   public function PlaceOrder(Request $request){
        $reqObj = $request->all();
        $id = $reqObj['id'];
        $data=DB::table('tblsaleinvoice')
        ->where('InvoiceNumber', $id)
        ->first()->OrderStatus;
        if($data=="PREPARING"){
            $result = DB::table('tblsaleinvoice')
        ->where('InvoiceNumber', $id)
            ->update([
            'OrderStatus'=>"PREPARED"]);
            return "Order is PREPARED"; 
        } if($data=="PLACED"){
            $result = DB::table('tblsaleinvoice')
            ->where('InvoiceNumber', $id)
                ->update([
                'OrderStatus'=>"PREPARING"]);
                return "Order is PREPARING"; 
        } if($data=="PREPARED"){
            $result = DB::table('tblsaleinvoice')
            ->where('InvoiceNumber', $id)
                ->update([
                'OrderStatus'=>"DISPATCHED"]);
                return "Order is DISPATCHED"; 
        } if($data=="DISPATCHED"){
            $result = DB::table('tblsaleinvoice')
            ->where('InvoiceNumber', $id)
                ->update([
                'OrderStatus'=>"RECEIVED"]);
                return "Order is RECEIVED"; 
        }
       
     }
   

    public function setDelivered($id){

        DB::table('tblsaleinvoice')
        ->where('InvoiceNumber', $id)
        ->update([
        
        'OrderStatus'=>"DISPATCHED"
        ]);
      
      return "Order is Dispatched";
    }

    public function receivedOrders($id){

        DB::table('tblsaleinvoice')
        ->where('InvoiceNumber', $id)
        ->update([
        
        'OrderStatus'=>"RECEIVED"
        ]);
      
      return "Order Is Received";
    }

    public static function getstatus($id){
        $data=DB:: select('select OrderStatus from tblsaleinvoice where InvoiceNumber='.$id);
        
      
        
        return $data;
      }
      public function getAllOrders($status){
        $Allcards="";
        
        if($status=="ALL"){
            $invoiceDetails=DB::select('select * from  tblsaleinvoice order by InvoiceNumber DESC');
        }else{
            $invoiceDetails=DB::select('select * from tblsaleinvoice  where OrderStatus="'.$status.'" order by InvoiceNumber DESC ');
        }
        
        foreach ($invoiceDetails as $obj){
        $productDetails=DB::select('select * from vw_customersale_invoice where InvoiceNumber ='.$obj->InvoiceNumber);
        $innerProducts='';
        foreach($productDetails as $p){
      $innerProducts=$innerProducts.'  
      <div class="card-body text-center">
          <ul>
              <li>
                  <div class="">
                      '.$p->ProductName.' &times; <strong style="color: red;"> '.$p->Quantity.'</strong>
                  </div></li>
                  </ul>
           
            </div>';
    
    }
    //$ProductName=$obj->ProductName;
    $contact=$obj->ReceiversContact;
    $customerName=$obj->ReceiversNames;
   
    
    $IN=$obj->InvoiceNumber;
    $Status=$obj->OrderStatus;
    $cv="";
    if($Status=="PLACED"){
        $cv="AdminCard";
        }if($Status=="PREPARING"){
            $cv="KitchenCard";
            }if($Status=="PREPARED"){
                $cv="DeliveryPendingCard";
                }if($Status=="DISPATCHED"){
                    $cv="DeliveredCard";
                    }if($Status=="RECEIVED"){
                        $cv="ReceivedCard";
                    }if($Status=="Cancel"){
                        $cv="Cancel";
                    }
                    $button="";
                    if($Status=="PLACED"){
                        $button="Prepare";
                        }if($Status=="PREPARING"){
                            $button="Prepared";
                            }if($Status=="PREPARED"){
                                $button="Dispatched";
                                }if($Status=="DISPATCHED"){
                                    $button="Delivered";
                                    }
                                        
                                if($Status=="Cancel" || $Status=="RECEIVED"){
                                        $button="Cancel";
                                        $buttonhide = "buttonhide";
                                    }else{
                                        $buttonhide = "";
                                    }

                    
        $TotalAmount=$obj->TotalAmount;

        $Allcards=$Allcards.'   
        <div class="col-md-4">
        <div class="card" id='.$cv.'>
        <div class="card-header">
            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
            Order Number#  '.$IN.'
            </div><br>
            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
            Status:  '.$Status.'  <br>
            </div>

            <div style="font-weight: 900; font-size: /19px;  color: #ffffff;" class="cardHeader-right">
                
        
            </div>
            <div class="clear"></div>
        </div>
        <div class="card-header ">
            <div class="cardHeader-left" style="font-weight: 600;">
            
            </div>
            <div  style="font-weight: 600; class="cardHeader-left" >
            Customer Name:  '.$customerName.'
             </div>
            <div class="clear"></div>
        </div>
        <div class="card-header text-left" style="font-weight: 500;">
           Address  '.$obj->ReceiversAddress.' <br>
           Contact: '.$obj->ReceiversContact.'
        </div>

        '.$innerProducts.'
            Total Amount:'.$TotalAmount.'
        <div class="card-footer text-center" id="'.$buttonhide.'">
            <button class="btn btn-danger" onclick="cancelOrder('.$obj->InvoiceNumber.')">Cancel</button>
            <button class="btn btn-success" onclick="getID('.$obj->InvoiceNumber.')">'.$button.'</button>
        </div>
        </div>
        </div>
       
    
                '   
             ;
        }


        return $Allcards;
    }



    public function getOrders(){
        $dateNow= Carbon::now()->toDateString();
         //dd($dateNow);
        $dateStart= '2021-01-24 00:00:00';//date('d-m-y').' 00:00:00';
        $dateEnd= '2024-07-24 23:59:59';;//date('d-m-y').' 23:59:59';
       // dd($dateStart);
        $InvoiceNo=146;
        $Allcards="";
       // $card="";
       $invoiceDetails=DB::select('select * from tblsaleinvoice where DateStamp between "'.$dateStart .'"and"'.$dateEnd.'" and OrderStatus="PLACED" order by InvoiceNumber DESC');
                                
//dd($data);
foreach ($invoiceDetails as $obj){
    $productDetails=DB::select('select * from vw_customersale_invoice where InvoiceNumber='.$obj->InvoiceNumber);
    $innerProducts='';
    foreach($productDetails as $p){
      $innerProducts=$innerProducts.'  
      <div class="card-body text-center">
          <ul>
              <li>
                  <div class="">
                      '.$p->ProductName.' &times; <strong style="color: red;"> '.$p->Quantity.'</strong>
                  </div></li>
                  </ul>
                 
                  
                     
      </div>';
    //   <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
    //                   Commodi, reprehenderit.</div>
    }
    //$ProductName=$obj->ProductName;
    $contact=$obj->ReceiversContact;
    $customerName=$obj->ReceiversNames;
   
    
    $IN=$obj->InvoiceNumber;
    $TotalAmount=$obj->TotalAmount;

    $Allcards=$Allcards.'   
    <div class="col-md-4">
    <div class="card" id="FirstCard">
        <div class="card-header">
            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
            Order Number#  '.$IN.'  <br>
            
            
            </div>
            <div style="font-weight: 900; font-size: /19px;  color: #ffffff;" class="cardHeader-right">
                
        
            </div>
            <div class="clear"></div>
        </div>
        <div class="card-header ">
            <div class="cardHeader-left" style="font-weight: 600;">
            
            </div>
            <div  style="font-weight: 600; class="cardHeader-left" >
            Customer Name:  '.$customerName.'
             </div>
            <div class="clear"></div>
        </div>
        <div class="card-header text-left" style="font-weight: 500;">
           Address  '.$obj->ReceiversAddress.' <br>
           Contact: '.$obj->ReceiversContact.'
        </div>

        '.$innerProducts.'
            Total Amount:'.$TotalAmount.'
        <div class="card-footer text-center">
            <button class="btn btn-danger" onclick="cancelOrder('.$obj->InvoiceNumber.')">Cancel</button>
            <button class="btn btn-success" onclick="getID('.$obj->InvoiceNumber.')">Start</button>
        </div>
        </div>
        </div>
       
    
                '   
             ;
        }


        return $Allcards;
    }








    public function getPreparingOrders(){
        $dateNow= Carbon::now()->toDateString();
        //  dd($dateNow);
        $dateStart= '2010-01-28 00:00:00';//date('d-m-y').' 00:00:00';
        $dateEnd= '2022-03-25 23:59:59';;//date('d-m-y').' 23:59:59';
       // dd($dateStart);
        $InvoiceNo=146;
        $Allcards="";
       // $card="";
       $invoiceDetails=DB::select('select * from tblsaleinvoice where DateStamp between "'.$dateStart .'"and"'.$dateEnd.'" and OrderStatus="PREPARING" order by InvoiceNumber DESC');
                                
//dd($data);
foreach ($invoiceDetails as $obj){
    $productDetails=DB::select('select * from vw_customersale_invoice where InvoiceNumber='.$obj->InvoiceNumber);
    $innerProducts='';
    foreach($productDetails as $p){
      $innerProducts=$innerProducts.'  
      <div class="card-body text-center">
          <ul>
              <li>
                  <div class="">
                      '.$p->ProductName.' &times; <strong style="color: red;"> '.$p->Quantity.'</strong>
                  </div></li>
                  </ul>
                 
                  
                     
      </div>';
    //   <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
    //                   Commodi, reprehenderit.</div>
    }
    //$ProductName=$obj->ProductName;
    $contact=$obj->ReceiversContact;
    $customerName=$obj->ReceiversNames;
   
    
    $IN=$obj->InvoiceNumber;
    $TotalAmount=$obj->TotalAmount;

    $Allcards=$Allcards.'   
    <div class="col-md-4">
    <div class="card" id="FirstCard">
        <div class="card-header">
            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
            Order Number#  '.$IN.'  <br>
            
            
            </div>
            <div style="font-weight: 900; font-size: /19px;  color: #ffffff;" class="cardHeader-right">
                
        
            </div>
            <div class="clear"></div>
        </div>
        <div class="card-header ">
            <div class="cardHeader-left" style="font-weight: 600;">
            
            </div>
            <div  style="font-weight: 600; class="cardHeader-left" >
            Customer Name:  '.$customerName.'
             </div>
            <div class="clear"></div>
        </div>
        <div class="card-header text-left" style="font-weight: 500;">
           Address  '.$obj->ReceiversAddress.'<br>
           Contact: '.$obj->ReceiversContact.'
        </div>

        '.$innerProducts.'
            Total Amount:'.$TotalAmount.'
        <div class="card-footer text-center">
            <button class="btn btn-danger" onclick="cancelOrder('.$obj->InvoiceNumber.')">Cancel</button>
            <button class="btn btn-success" onclick="getID('.$obj->InvoiceNumber.')">Prepared</button>
        </div>                             
        </div>
        </div>
       
    
                '   
             ;
        }


        return $Allcards;
    }











    public function getDeliveryPendingOrders(){
        $dateNow= Carbon::now()->toDateString();
         //dd($dateNow);
        $dateStart= '2010-01-28 00:00:00';//date('d-m-y').' 00:00:00';
        $dateEnd= '2022-03-25 23:59:59';;//date('d-m-y').' 23:59:59';
       // dd($dateStart);
        $InvoiceNo=146;
        $Allcards="";
       // $card="";
       $invoiceDetails=DB::select('select * from tblsaleinvoice where DateStamp between "'.$dateStart .'"and"'.$dateEnd.'" and OrderStatus="PREPARED" order by InvoiceNumber DESC');
                                
//dd($data);
foreach ($invoiceDetails as $obj){
    $productDetails=DB::select('select * from vw_customersale_invoice where InvoiceNumber='.$obj->InvoiceNumber);
    $innerProducts='';
    foreach($productDetails as $p){
      $innerProducts=$innerProducts.'  
      <div class="card-body text-center">
          <ul>
              <li>
                  <div class="">
                      '.$p->ProductName.' &times; <strong style="color: red;"> '.$p->Quantity.'</strong>
                  </div></li>
                  </ul>
                 
                  
                     
      </div>';
    //   <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
    //                   Commodi, reprehenderit.</div>
    }
    //$ProductName=$obj->ProductName;
    $contact=$obj->ReceiversContact;
    $customerName=$obj->ReceiversNames;
   
    
    $IN=$obj->InvoiceNumber;
    $TotalAmount=$obj->TotalAmount;

    $Allcards=$Allcards.'   
    <div class="col-md-4">
    <div class="card" id="FirstCard">
        <div class="card-header">
            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
            Order Number#  '.$IN.'  <br>
            
            
            </div>
            <div style="font-weight: 900; font-size: /19px;  color: #ffffff;" class="cardHeader-right">
                
        
            </div>
            <div class="clear"></div>
        </div>
        <div class="card-header ">
            <div class="cardHeader-left" style="font-weight: 600;">
            
            </div>
            <div  style="font-weight: 600; class="cardHeader-left" >
            Customer Name:  '.$customerName.'
             </div>
            <div class="clear"></div>
        </div>
        <div class="card-header text-left" style="font-weight: 500;">
           Address  '.$obj->ReceiversAddress.'<br>
           Contact: '.$obj->ReceiversContact.'
        </div>

        '.$innerProducts.'
            Total Amount:'.$TotalAmount.'
        <div class="card-footer text-center">
            <button class="btn btn-danger" onclick="cancelOrder('.$obj->InvoiceNumber.')">Cancel</button>
            <button class="btn btn-success" onclick="getID('.$obj->InvoiceNumber.')">Dispatch</button>
            </div>                             
        </div>
        </div>
        </div>
       
    
                '   
             ;
        }


        return $Allcards;
    }







    public function deliveredOrders(){
        $dateNow= Carbon::now()->toDateString();
         //dd($dateNow);
        $dateStart= '2010-01-28 00:00:00';//date('d-m-y').' 00:00:00';
        $dateEnd= '2022-03-25 23:59:59';;//date('d-m-y').' 23:59:59';
       // dd($dateStart);
        $InvoiceNo=146;
        $Allcards="";
       // $card="";
       $invoiceDetails=DB::select('select * from tblsaleinvoice where OrderStatus="DISPATCHED" order by InvoiceNumber DESC');
                                
//dd($data);
foreach ($invoiceDetails as $obj){
    $productDetails=DB::select('select * from vw_customersale_invoice where InvoiceNumber='.$obj->InvoiceNumber);
    $innerProducts='';
    foreach($productDetails as $p){
      $innerProducts=$innerProducts.'  
      <div class="card-body text-center">
          <ul>
              <li>
                  <div class="">
                      '.$p->ProductName.' &times; <strong style="color: red;"> '.$p->Quantity.'</strong>
                  </div></li>
                  </ul>
                 
                  
                     
      </div>';
    //   <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
    //                   Commodi, reprehenderit.</div>
    }
    //$ProductName=$obj->ProductName;
    $contact=$obj->ReceiversContact;
    $customerName=$obj->ReceiversNames;
   
    
    $IN=$obj->InvoiceNumber;
    $TotalAmount=$obj->TotalAmount;

    $Allcards=$Allcards.'   
    <div class="col-md-4">
    <div class="card" id="FirstCard">
        <div class="card-header">
            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
            Order Number#  '.$IN.'  <br>
            
            
            </div>
            <div style="font-weight: 900; font-size: /19px;  color: #ffffff;" class="cardHeader-right">
                
        
            </div>
            <div class="clear"></div>
        </div>
        <div class="card-header ">
            <div class="cardHeader-left" style="font-weight: 600;">
            
            </div>
            <div  style="font-weight: 600; class="cardHeader-left" >
            Customer Name:  '.$customerName.'
             </div>
            <div class="clear"></div>
        </div>
        <div class="card-header text-left" style="font-weight: 500;">
           Address  '.$obj->ReceiversAddress.'<br>
           Contact: '.$obj->ReceiversContact.'
        </div>

        '.$innerProducts.'
            Total Amount:'.$TotalAmount.'
        <div class="card-footer text-center">
        <button class="btn btn-danger" onclick="cancelOrder('.$obj->InvoiceNumber.')">Cancel</button>
        <button class="btn btn-success" onclick="getID('.$obj->InvoiceNumber.')">Received</button>
            </div>                             
        </div>
        </div>
        </div>
       
    
                '   
             ;
        }


        return $Allcards;
    }


    

    public function received(){
        $dateNow= Carbon::now()->toDateString();
         //dd($dateNow);
        $dateStart= '2010-01-28 00:00:00';//date('d-m-y').' 00:00:00';
        $dateEnd= '2022-03-25 23:59:59';;//date('d-m-y').' 23:59:59';
       // dd($dateStart);
        $InvoiceNo=146;
        $Allcards="";
       // $card="";
       $invoiceDetails=DB::select('select * from tblsaleinvoice where OrderStatus="RECEIVED" order by InvoiceNumber DESC');
                                
//dd($data);
foreach ($invoiceDetails as $obj){
    $productDetails=DB::select('select * from vw_customersale_invoice where InvoiceNumber='.$obj->InvoiceNumber);
    $innerProducts='';
    foreach($productDetails as $p){
      $innerProducts=$innerProducts.'  
      <div class="card-body text-center">
          <ul>
              <li>
                  <div class="">
                      '.$p->ProductName.' &times; <strong style="color: red;"> '.$p->Quantity.'</strong>
                  </div></li>
                  </ul>
                 
                  
                     
      </div>';
    //   <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
    //                   Commodi, reprehenderit.</div>
    }
    //$ProductName=$obj->ProductName;
    $contact=$obj->ReceiversContact;
    $customerName=$obj->ReceiversNames;
   
    
    $IN=$obj->InvoiceNumber;
    $TotalAmount=$obj->TotalAmount;

    $Allcards=$Allcards.'   
    <div class="col-md-4">
    <div class="card" id="FirstCard">
        <div class="card-header">
            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
            Order Number#  '.$IN.'  <br>
            
            
            </div>
            <div style="font-weight: 900; font-size: /19px;  color: #ffffff;" class="cardHeader-right">
                
        
            </div>
            <div class="clear"></div>
        </div>
        <div class="card-header ">
            <div class="cardHeader-left" style="font-weight: 600;">
            
            </div>
            <div  style="font-weight: 600; class="cardHeader-left" >
            Customer Name:  '.$customerName.'
             </div>
            <div class="clear"></div>
        </div>
        <div class="card-header text-left" style="font-weight: 500;">
           Address  '.$obj->ReceiversAddress.'<br>
           Contact: '.$obj->ReceiversContact.'
        </div>

        '.$innerProducts.'
            Total Amount:'.$TotalAmount.'
                                  
        </div>
        </div>
        </div>
       
    
                '   
             ;
        }


        return $Allcards;
    }

    public static function getOrderStatus(){
        $data=DB:: select('select * from vw_order_status_view');
    
        $option='<option value=></option>';
    
    
        foreach ($data as $d){
          //print $option;
    
            $option=$option.'
            <option value= '.$d->OrderStatus.'>'.$d->OrderStatus.'</option>';
          
        }
        return $option;


    }

    public static function cancelOrder(Request $request){
        $array = $request->all();
        $id = $array['id'];
        DB::table('tblsaleinvoice')
        ->where('InvoiceNumber', $id)
        ->update([
        'OrderStatus'=>"Cancel"
        ]);
        return "Order Number $id is Canceled";
    }

}


