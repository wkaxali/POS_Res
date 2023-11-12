<?php

namespace App\Http\Controllers;
use App\Http\Controllers\salesflowController;
use Illuminate\Http\Request;
use DB;
class loyaltyManagmentController extends Controller
{
public static function billToRewardsConversion($amount,$TID,$CID){
$convertionRate=self::getConversionRate("USD");
$amountToConvertedInCoins= self::PercentageOnBillAmount($amount);
$coinsGenerated=$convertionRate*$amountToConvertedInCoins;

//query for insert;
// $CID=9;

DB::table('tbl_coin_generation')->insertGetId([
'TID'=>$TID,
'Amount'=>$amount,
'ConversionRate'=>$convertionRate,
'CoinsGenerated'=>$coinsGenerated,
'CID'=>$CID
]);

$ParentID = DB::table('tbl_referred_customer')
->where('ReferredCustomerID', '=', $CID);


while($coinsGenerated>10){

$ParentID = DB::table('tbl_referred_customer')
->where('ReferredCustomerID', '=', $CID);

if($ParentID->exists()){
$pid=$ParentID->first()->ReferredByID;
DB::table('tbl_coins_flow_on_order')->insertGetId([
'TID'=>$TID,
'Points'=>$coinsGenerated,
'CID'=>$CID,
'ParentID'=>$pid,

]);
$OldCoins= self::getCoins($CID);
$CurrentCoins=floatval($OldCoins)+floatval($coinsGenerated);
self::UpdateCoins($CID,$CurrentCoins);

$CID = $pid;
$coinsGenerated=((double)$coinsGenerated)/2;

}
else{
$OldCoins= self::getCoins($CID);
$CurrentCoins=floatval($OldCoins)+floatval($coinsGenerated);
self::UpdateCoins($CID,$CurrentCoins);
DB::table('tbl_coins_flow_on_order')->insertGetId([
'TID'=>$TID,
'Points'=>$coinsGenerated,
'CID'=>$CID,
'ParentID'=>NULL

]);
return;

}


}


}

public static function getConversionRate($Curr){
$ConversionRate = DB::table('tbl_companyinfo')
->first()->CoinConversionRate;

return 100;
}
public static function PercentageOnBillAmount($amount){
$rate = DB::table('tbl_companyinfo')
->first()->PercentageOnBillAmount;

return $amount*($rate/100);
}



public static function updateCoins($ProfileID,$coins){
DB::table('customeinformation')
->where('CustomerID', $ProfileID)
->update(['CoinBalance' =>$coins

]);
}

public static function coinsFlowOnOrdder(){

}

public static function getCoins($CID){


$re = DB::table('customeinformation')
->where('CustomerID', '=', $CID)
->first()->CoinBalance;

return $re;

}

public static function ResverseCoinsFlow($amount, $TID, $CID, $OldCID){
    $convertionRate=self::getConversionRate("USD");
    $amountToConvertedInCoins=  self::PercentageOnBillAmount($amount);
    $coinsGenerated=$convertionRate*$amountToConvertedInCoins;

    $coinFlow = DB::select('select * from tbl_coins_flow_on_order where TID ='.$TID);
    foreach($coinFlow as $cf){
        $points = $cf->Points;
        $OldCID = $cf->CID;
        $oldCoins = self::getCoins($OldCID);
        $newCoins = $oldCoins - $points;
        self::updateCoins($OldCID, $newCoins);
    }

    DB:: delete("delete from tbl_coins_flow_on_order where TID =".$TID);
    DB:: delete("delete from tbl_coin_generation where TID =".$TID);
    self::billToRewardsConversion($amount,$TID,$CID);

}
}