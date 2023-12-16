<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
class UploadfileController extends Controller
{
    function index()
    {
     return view('upload');
    }
    
    function upload(Request $request)
    {
      $this->validate($request, [
       'select_file'  => 'required|image|mimes:jpg,png,gif|max:2048'
      ]);
    
    $productArray = $request->pname;
    $obj=json_decode($productArray);
    // dd($obj->ProductName);
    $productName=$obj->ProductName;
    $productCat=$obj->ProductCat;
    $productDes=$obj->ProductDes;
    $purchasePrice=$obj->PurchasePrice;
    $salePrice=$obj->SalePrice;
    $stockIn=$obj->StockIn;

    $pid=DB::table("productdefination")->insertGetId([
        'ProductName'=>$productName,
        'Category'=>$productCat,
        'description'=>$productDes
    ]);

    $InsertProductID=DB::table("productdefination")->where('ProductSerial', $pid)
    ->update(['ProductID' => $pid]);

    $StockID=DB::table("instock")->insertGetId([
      'ProductSerial'=>$pid,
      'PerUnitPurchasePrice'=>$purchasePrice,
      'PerUnitSalePrice'=>$salePrice,
      'StockIn'=>$stockIn
    ]);

     $image = $request->file('select_file');

     $new_name = "$pid" . '.' . $image->getClientOriginalExtension();

     $image->move(public_path('images'), $new_name);
     $path = 'images\\'.$new_name;
  
     $insertImagePath=DB::table("productdefination")->where('ProductID', $pid)
     ->update(['image' => $path]);
     //dd($insertImagePath);

     return back()->with('success', $productName.' Uploaded Successfully at index '.$path)->with('path', $pid.".jpg");
    }
}
?>