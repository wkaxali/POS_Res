<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use DB;

class deleteFilesController extends Controller
{
    function replaceImage(Request $request){
        $this->validate($request, [
            'select_file'  => 'required|image|mimes:jpg,png,gif|max:2048'
        ]);
     
        $image = $request->file('select_file');
    
        $new_name = 'xyz' . '.' . $image->getClientOriginalExtension();
    
        $image->move(public_path('images'), $new_name);
        $path = 'images\\'.$new_name;

        // $insertImagePath=DB::table("productdefination")->where('ProductID', $pid)
        // ->update(['image' => $path]);
    
        return back()->with('success', $new_name.' Uploaded Successfully at index '.$path)->with('path', $new_name);

        //unlink('images\\72.jpg');
    }
    
    function upload(Request $request)
    {
      $this->validate($request, [
       'select_file'  => 'required|image|mimes:jpg,png,gif|max:2048'
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
