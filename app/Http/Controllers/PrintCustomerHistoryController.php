<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use PDF;
 
class PrintCustomerHistoryController extends Controller
{

    public static function printCustomerHistory($CustomerID){

        $data='';
        if ($CustomerID=="All"){
            $data=DB::select('select * from vw_customersale_invoice' );
        }else{
        $data=DB::select('select * from vw_customersale_invoice where CustomerID= '.$CustomerID );
    }
           
          $table='
          <h2 style="text-align:center;" >Sales Transaction History</h2><br>
          <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:17.5px"><thead></thead>
          <tbody>
        
          </tbody>
          </table> <br><br>
          <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
            <tbody>
                <tr>
                <th>Invoice Number</th>
                <th>Customer Name</th>
                <th>Contact</th>
                <th>Product Name</th>
                <th> Amount</th>
                <th>Date Stamp</th>
                <th>Discount</th>
                <th>Quantity</th> 
                <th>Status</th>   
                    
                </tr>
            </tbody>
           
            </table> ';
          
           
          
          foreach ($data as $d){
              
          
              $table=$table.'
             
          <table cellpadding = "2" cellspacing = "0"  border="0.2" style="font-size:7.5px"><thead></thead>
              <tbody>
              <tr>
              <td height:80px;>'.$d->InvoiceNumber.'</td> 
              <td height:80px;>'.$d->CustomerName.'</td>
              <td height:80px;>'.$d->Contect.' </td>
              <td height:80px;>'.$d->ProductName .'</td>
              <td height:80px;>'.$d->TotalSaleAmount.'</td>
              <td height:80px;>'.$d->DateStamp.'</td>
              <td height:80px;>'.$d->Discount.'</td>
              <td height:80px;>'.$d->Quantity.'</td>
              <td height:80px;>'.$d->Status.'</td>
             
              </tr>   
              </tbody>
          </table> 
         
      



               ';}
               $table=$table.'
             
               <table border="0">
           <br>
           <br>
           
           <br>
           <br>
           <br>
           <br>
           <br>
           
           
           
           
           <tr>
           
           
           <td bgcolor="crimson" align="center" border="0"><h4>8-km Sheikhupura Road, Opposite Millat Tractors Limited,Lahore,Tel:0300-0600061 </h4></td>
           
           
           
           
           </tr>
           
           
           
           </table>
           ';
          
          
           return $table;
    }
    
}
