<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use DB;
use PDF;
use NumberToWords\NumberToWords;

class thermalprintingController extends Controller
{
     public static function thermalPrinting(){

        $IN = session()->get('invoiceNumber');
        $overallDiscount = session()->get('overallDiscount');
        $coinsDiscount = session()->get('coinsDiscount');
        $totalDiscount= $coinsDiscount+$overallDiscount;
        $invoiceDetails=serviceSalesFlow::getAllInvoiceDetails($IN);
        
       
        $order="";
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
            $taxAmount = $TotalAmount*$tax/100;

             

        $order = $order.'<tr>
            <td class="quantity"  >'.$productName.'</td>
            <td class="description"  >'.$qty.'</td>
            <td class="price"  >'.$unitPrice*$qty.'</td>   
        </tr>';
    }

       
        
         $productHtmlTDs ='<table> 
         <tbody>
                    <tr>
                        <th class="quantity"  >Items</th>
                        <th class="description"  >Qty.</th>
                        <th class="price" >Price</th>   
                    </tr> 
                 
                    '.$order.'
                    <tr>
                    <td class="quantity" style="width: 75px;"></td>
                    <td class="description">Total</td>
                    <td class="price" max-width: 40px;>'.$TotalAmount.'  </td>
                </tr>
                <tr> 
                    <td class="quantity" style="width: 75px;"></td>
                    <td class="description" style="width: 75px;">Discounts</td>
                    <td class="price" style="width: 75px;">'.$totalDiscount.'</td>
                </tr>
                <tr>
                    <td class="quantity" style="width: 75px;"></td>
                    <td class="description" style="width: 75px;">Tax</td>
                    <td class="price" style="width: 75px;">'.$taxAmount.'</td>
                </tr>
                <tr>
                    <td class="quantity" style="width: 75px;"></td>
                    <td class="description" style="width: 75px;">Net Total</td>
                    <td class="price" style="width: 75px;">'.$NetTotal.' </td>
                </tr>
                
                </tbody> </table> 
                <p class="left">Order No. '.$IN.'</p>
                <p>Date/Time: '.$dat.'</p>
                <p class="centered">Thanks for your purchase!</p>
                '; 
                PDF::SetTitle('Request for Invoice');
                PDF::AddPage();
                // PDF::Write(0,'Hello World');
                PDF::writeHTML($productHtmlTDs, true, false, true, false, '');
                PDF::Output('invoiceRequest.pdf');

    //   return $productHtmlTDs;
    }
}