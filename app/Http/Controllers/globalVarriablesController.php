<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class globalVarriablesController extends Controller
{
    public static function selfLedgerID(){
        $LID = 2;
        return $LID;
    }

}

