<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

use PDF;
class saleHistoryPrintController extends Controller
{
    public static function printSaleHistory2( $category,$CustomerID ){

        
        $data=0;
        if($category=="All" AND $CustomerID=="All"){
            $data=DB:: select('select * from vw_customersale_invoice where TransactionCatogery="Stock and Service" or TransactionCatogery="Sales"');
        
        }else if($category=="All" AND $CustomerID!="All"){
            
            $data=DB:: select('select * from vw_customersale_invoice where (TransactionCatogery="Stock and Service" or TransactionCatogery="Sales") and CustomerID='.$CustomerID);
           // return $data;
        }else if($category!="All" AND $CustomerID=="All"){
            $data=DB:: select('select * from vw_customersale_invoice where TransactionCatogery="'.$category.'"');
        
        }else if($category!="All" AND $CustomerID!="All"){
            $data=DB:: select('select * from vw_customersale_invoice where TransactionCatogery="'.$category.'" and CustomerID='.$CustomerID);
        
        }
        $totalSaleAmount=0;
        $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalSaleAmount += floatval($d->TotalAmount);
            $remainingAmount += floatval($d->AmountPaid);
            $invoiceBalance += floatval($d->Balance);
          }
           
          $table='
          <h2 style="text-align:center;" >Sales Transaction History</h2><br>
          <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
          <tbody>
          <tr><br><br><br><br>
          
          <td max-height="20px" ><h2>Total Sales Amount: : '.$totalSaleAmount.' </h2></td>
          <td max-height="20px" ><h2>Total Amount : '.$remainingAmount.' </h2></td>
          <td max-height="20px" ><h2>Total Balance: '.$invoiceBalance.' </h2></td>

          </tr><tr><td max-height="20px"><h3>Filter by : '.$category.'</h3></td></tr>
          </tbody>
          </table> <br><br>
          <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
            <tbody>
                <tr>
                <th>Invoice Number</th>
                <th>Customer Name</th>
                <th>Account Name</th>
                <th>Transaction Category</th>
                <th>Total Sale Amount</th>
                <th>Amount Paid</th>
                <th>Balance</th>
                <th>Transaction Date</th> 
                    
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
              <td height:80px;>'.$d->AccountName.' ('.$d->AccountNumber.')</td>
              <td height:80px;>'.$d->TransactionCatogery .'</td>
              <td height:80px;>'.$d->TotalAmount.'</td>
              <td height:80px;>'.$d->AmountPaid.'</td>
              <td height:80px;>'.$d->Balance.'</td>
              <td height:80px;>'.$d->DateStamp.'</td>
             
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
          
          
          PDF::SetTitle('Transaction History');
          PDF::AddPage();
          PDF::writeHTML($table, true, false, true, false, '');
          
          PDF::Output('Transaction.pdf');
    }
    

    public static function printSaleHistory($date1,$date2,$catID, $CustomerID){
        $data=0;
        if($catID=="All" AND $CustomerID=="All"){
            $data=DB:: select('select * from vw_customersale_invoice where (TransactionCatogery="Stock and Service" or TransactionCatogery="Sales") and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }else if($catID=="All" AND $CustomerID!="All"){
            
            $data=DB:: select('select * from vw_customersale_invoice where (TransactionCatogery="Stock and Service" or TransactionCatogery="Sales") and DateStamp between "'.$date1 .'"and"'.$date2.'" and CustomerID='.$CustomerID);
           // return $data;
        }else if($catID!="All" AND $CustomerID=="All"){
            $data=DB:: select('select * from vw_customersale_invoice where TransactionCatogery="'.$catID.'" and DateStamp between "'.$date1 .'"and"'.$date2.'"');
        
        }else if($catID!="All" AND $CustomerID!="All"){
            $data=DB:: select('select * from vw_customersale_invoice where TransactionCatogery="'.$catID.'" and  DateStamp between "'.$date1 .'"and"'.$date2.'" and CustomerID='.$CustomerID);
        
        } $totalSaleAmount=0;
        $remainingAmount=0;
        $invoiceBalance=0;
        foreach($data as $d){
            $totalSaleAmount += floatval($d->TotalAmount);
            $remainingAmount += floatval($d->AmountPaid);
            $invoiceBalance += floatval($d->Balance);
          }
           
          $table='
          <h2 style="text-align:center;" >Sales Transaction History</h2><br>
          <table cellpadding = "2" cellspacing = "0"  border="0" style="font-size:7.5px"><thead></thead>
          <tbody>
          <tr><br><br><br><br>
          
          <td max-height="20px" ><h2>Total Sales Amount:  '.$totalSaleAmount.' </h2></td>
          <td max-height="20px" ><h2>Total Amount Paid:'.$remainingAmount.' </h2></td>
          <td max-height="20px" ><h2>Total Balance: '.$invoiceBalance.' </h2></td>

          </tr><tr><td max-height="20px"><h3>Filter by : '.$catID.'</h3> <h3>Date From: '.$date1.' To '.$date2.'</h3></td></tr>
          </tbody>
          </table> <br><br>
          <table cellpadding = "3" cellspacing = "0"  border="0.2" style="font-size:8.2px"><thead></thead>
            <tbody>
                <tr>
                <th>Invoice Number</th>
                <th>Customer Name</th>
                <th>Account Name</th>
                <th>Transaction Category</th>
                <th>Total Sale Amount</th>
                <th>Amount Paid</th>
                <th>Balance</th>
                <th>Transaction Date</th> 
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
              <td height:80px;>'.$d->AccountName.' ('.$d->AccountNumber.')</td>
              <td height:80px;>'.$d->TransactionCatogery .'</td>
              <td height:80px;>'.$d->TotalAmount.'</td>
              <td height:80px;>'.$d->AmountPaid.'</td>
              <td height:80px;>'.$d->Balance.'</td>
              <td height:80px;>'.$d->DateStamp.'</td>
             
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
          
          
          PDF::SetTitle('Transaction History');
          PDF::AddPage();
          PDF::writeHTML($table, true, false, true, false, '');
          
          PDF::Output('Transaction.pdf');
    }
  }
 