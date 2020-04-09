<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;


class SettingsController extends Controller
{
    public function index()
    {
        $settings=Setting::find(1);

        return view('back.settings', compact('settings'));
    }


    public function update(Request $request)
    {
        $settings=Setting::find(1);
        $settings->about=$request->about;
        $settings->phone=$request->phone;
        $settings->address=$request->address;
        $settings->email=$request->email;

        $settings->mon=$request->mon;
        $settings->tue=$request->tue;
        $settings->wed=$request->wed;
        $settings->thu=$request->thu;
        $settings->fri=$request->fri;
        $settings->sat=$request->sat;
        $settings->sun=$request->sun;


        $settings->facebook=$request->facebook;
        $settings->twitter=$request->twitter;
        $settings->linkedin=$request->linkedin;
        $settings->google=$request->google;        
        $settings->instagram=$request->instagram;
  
    
    
        $settings->save();
       // toastr()->success( 'The operation completed successfully');
        return redirect()->back()->with('toast_success', 'The operation completed successfully!');
    }
}
