<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NextDayCalculatorController extends Controller
{


    public function calculator($day)
    {

       return $nextDay = date('j/n/Y', strtotime($day . ' +1 day'));
    }


}
