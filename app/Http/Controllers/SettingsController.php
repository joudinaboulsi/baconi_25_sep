<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
class SettingsController extends Controller
{
    //

    public function index(){
        $settings = Settings::where('id',1)->first();
        return view('cms.settings',compact('settings'));
    }



    public function store(Request $request){

        $logo='';
        if($request->hasFile('logo')){
           $photo = $request->file('logo');
             $logo = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/', $logo);
             Settings::where('id',1)->update([
                    'logo'=>  $logo,
                 ]);
        }

        Settings::where('id',1)->update([
 
          'desc' =>$request->desc,
          'fb' =>$request->fb,
          'insta' =>$request->insta,
          'link' =>$request->link,
          'email' =>$request->email,
          'phone' =>$request->phone,

        ]);
    
        toastr()->success('Data has been saved successfully!');
        return  redirect()->back();
    }
}
