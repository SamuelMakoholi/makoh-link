<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorDashboardController extends Controller
{
    //


    public function dashboard()
    {
        return view('vendor.dashboard.dashboard');
    }
}
