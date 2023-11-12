<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class menuController extends Controller
{
public function fetchMenu($CID){


$results=DB::select('select * from vw_stockdetails where Category='.$CID);
//return with('success', 'Image Uploaded Successfully')->with('path', '1271487004.jpg');
$menuCard="";
foreach ($results as $ro){

$menuCard=$menuCard.'<div class="card">
<div class="myPare">
<div class="item-5">
<img src="'.$ro->image.'" class="img-fluid" style="height:70px;width:70px;border-radius:10px;" >
</div>
<div class="item-1">

<!-- <h5 id="demo"></h5> -->
<h5>'.$ro->ProductName.'<input type="text" style="width: 100px;" value=\''.$ro->ProductName.'\' name=""
id="pname"><input type="text" value='.$ro->ProductID.' style="width: 100px;" name=""
id="pid"> <input style="width: 100px;" value='.$ro->PerUnitSalePrice.' type="number" name=""
id="salePrice"><input style="width: 100px;" value='.$ro->PerUnitSalePrice.' type="text" name=""
id="inp-4"></h5>
<p></p> 
</div>

<div class="item-3">
<div class="itemPricing">
<div id="demo-2">£'.$ro->PerUnitSalePrice.'</div><input type="hidden" id="desc" name="desc" value="'.$ro->description.'">
</div>

</div>
<div class="item-4">
<button class="btn btn-success" onclick="addItem(this)" value="Increment Value">Add</button>

</div>
</div>
</div>';
}




return $menuCard;
}
function getCategories(){
$results=DB::select('select * from tblpcategory');
$pill="";

foreach ($results as $ro){
$pill=$pill.'
<li class="nav-item">
<a class="nav-link active" id="pills-Starter-tab" data-toggle="pill" href="#pills-Starter"
role="tab" aria-controls="pills-Starter" aria-selected="true"
onclick="FetchMenu('.$ro->PCID.')
">'.$ro->CategoryName.'</a> </li>';
}
return $pill;

}
function getCategoriesForSelectMenu(){
$results=DB::select('select * from tblpcategory');
$options="";

foreach ($results as $ro){
$options=$options.'<option value='.$ro->PCID.'>'.$ro->CategoryName.'</option>';
}
return $options;
}

public function fetchAllMenu(){


$results=DB::select('select * from vw_stockdetails');







return $results;
}
public function fetchAllMenuCate($catID){


$results=DB::select('select * from vw_stockdetails where PCID='.$catID);

return $results;
}


public function AddCategory($catID){

$catgName=$catID;

$newUser=DB::table('tblpcategory')
->insertGetId([
'CategoryName'=>$catgName,
]);

return $catgName." category is added";
}
public static function editCategoryName(Request $request, $CO){
$ata=json_decode($CO);
$PCID=$ata[0];
$CategoryName = $ata[1];


$re = DB::table('tblpcategory')
->where('PCID', $PCID)
->update([
'CategoryName'=>$CategoryName,

]);

return $PCID;
}
 function getCategoryview(){
  $results=DB::select('select * from tblpcategory');
  return $results;
 }

}