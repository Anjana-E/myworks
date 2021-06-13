<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppageController extends Controller
{
    public function shop_index(){

        // dd('shop page');
        return view('shop/shoper');

    }
}
