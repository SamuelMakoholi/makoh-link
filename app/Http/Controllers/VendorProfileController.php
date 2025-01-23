<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Vendor;
use App\Models\ProfileStatus;

class VendorProfileController extends Controller
{
    //

    public function index()
    {
        return view('vendor.dashboard.profile');
    }

    public function profileUpdate(Request $request)
    {

        $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'unique:users,email,'.Auth::user()->id],
            'phone' =>['required'],
            'national_id' =>['required'],
            'address' =>['required'],
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();


        $vendor = Vendor::updateOrCreate(
            ['user_id' => Auth::user()->id],
            [
                'phone' => $request->phone,
                'national_id' => $request->national_id,
                'address' => $request->address
            ]
        );

        // $profile = ProfileStatus::where('user_id', $user->id)->first();
        // $profile->status = 1;
        // $profile->save();



        toastr()->success('Profile Updated Successfully!');

        return redirect()->back();

    }

public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required','confirmed', 'min:8']
        ]);


        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);

        toastr()->success('Profile Password Updated Successfully!');

        return redirect()->back();
    }
}
