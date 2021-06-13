<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index()
    {

        if(Auth::user()->hasRole('user')){
            return view('userdah');

        }elseif(Auth::user()->hasRole('franchise'))
        {
            return view('franchisedahs');
        }elseif(Auth::user()->hasRole('admin')){
            return view('admin');
        }
    }

    public function logout(){
        //dd('logout');

        Auth::logout();
        return redirect('ecommerce');
    }
}
