<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProfileStatus;

use Auth;

class VendorDashboardController extends Controller
{
    //


    public function dashboard()
    {
        $message = '';
        $profile = ProfileStatus::where('user_id', Auth::user()->id)->first();

        if($profile->status == 0){
            $message="Your profile is incomplete! Please fill your profile and increase a chance to get noticed";
        }
        return view('vendor.dashboard.dashboard', compact('message'));
    }
}
