<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use DB;
use PDF;
use NumberToWords\NumberToWords;


class ThermalPrintingController extends Controller
{
    public static function thermalPrinting()
    {
        $invoiceNumber = session()->get('invoiceNumber');
        $overallDiscount = session()->get('overallDiscount');
        $coinsDiscount = session()->get('coinsDiscount');
        $totalDiscount = $coinsDiscount + $overallDiscount;
        $invoiceDetails = serviceSalesFlow::getAllInvoiceDetails($invoiceNumber);

        $orderItems = '';
        $totalAmount = 0;
        $taxAmount = 0;
        foreach ($invoiceDetails as $product) {
            $productName = $product->ProductName;
            $qty = $product->Quantity;
            $unitPrice = $product->PerUnitSalePrice;
            $lineTotal = $unitPrice * $qty;
            $orderItems .= "
                $productName
                $qty x $unitPrice = $lineTotal\n";
            $totalAmount += $lineTotal;
            $taxAmount += $lineTotal * $product->VAT / 100;
        }

        // Generate text for the thermal printer receipt
        $receiptText = "
            --------------------------------
            Order No. $invoiceNumber\n
            Date/Time: " . date('Y-m-d H:i:s') . "\n
            --------------------------------
            Items             Qty.  Price
            --------------------------------
            $orderItems
            --------------------------------
            Total:            $totalAmount
            Discounts:        $totalDiscount
            Tax:              $taxAmount
            Net Total:        $totalAmount
            --------------------------------
            Thanks for your purchase!
        ";

        // Create PDF
        PDF::SetTitle('Customer Receipt');
        PDF::AddPage();
        PDF::SetFont('courier', '', 10); // Use a monospaced font for better alignment on thermal printers
        PDF::write(0, $receiptText, '', 0, 'L', true, 0, false, false, 0);
        PDF::Output('customer_receipt.pdf');
    }
}