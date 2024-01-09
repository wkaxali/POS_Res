<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use DB;

class companySetupController extends Controller
{
    // function getTouchStatus(){
    //     $data=DB:: select('select touchToggle from companyinfo where id=0');
    //     return $data;
    // }
    // function changeTouchScreenStatus(Request $request){
    //     $Array= $request->all();
    //     $qr="UPDATE companyinfo SET touchToggle='".$Array[0]."'WHERE (`id` = '0')";
    //     $affected = DB::update($qr);
    //     return $affected;

    // }

    function addCompanyInfo(Request $request){
        $Array = $request ->all();
        $companyName = $Array['companyName'];
        $storeName = $Array['storeName'];
        $address = $Array['address'];
        $companyEmail = $Array['companyEmail'];
        $phoneNumber = $Array['phoneNumber'];
        $mobileNumber = $Array['mobileNumber'];
        $ownerName = $Array['ownerName'];
        $devName = $Array['devName'];
        $devNumber = $Array['devNumber'];
        $devAddress = $Array['devAddress'];
        $TOStext = $Array['TOStext'];
        
        $qr="UPDATE companyinfo SET CompanyName='".$companyName."',
        StoreName='".$storeName."',
        Address='".$address."',
        CompanyEmail='".$companyEmail."',
        Phone='".$phoneNumber."',
        Mobile='".$mobileNumber."',
        Owner='".$ownerName."',
        DeveloperName='".$devName."',
        DeveloperMobile='".$devNumber."',
        DeveloperAddress='".$devAddress."',
        TremsAndConditions='".$TOStext."' WHERE (`id` = '0')";
        $affected = DB::update($qr);
        return $affected;
    }
    function getCompanyInfo(){
        $data=DB::select('select * from companyinfo where id=0');
        return $data;
    }
}

// UPDATE `fmm`.`tbltouchScreenToggle` SET `toggle` = '1' WHERE (`id` = '0');