<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(!session()->has('username')){
            return redirect()->route('login');
        }

        return view('dashboard');
    }
}
