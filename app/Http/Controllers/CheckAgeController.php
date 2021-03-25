<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckAgeController extends Controller
{

    public function teenagers()
    {
        return view('customer.teenagers');
    }
}
