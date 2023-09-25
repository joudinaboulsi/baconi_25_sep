<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    //


    public function index(){
        $company= COmpany::where('id',1)->first();
        return view('cms.company',compact('company'));
    }


    public function store(Request $request){


        $image='';
        if($request->hasFile('image')){
           $photo = $request->file('image');
             $image = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/company/', $image);
                 company::where('id',1)->update([
                    'image'=>  $image,
                 ]);
        }


        $logo='';
        if($request->hasFile('logo')){
           $photo = $request->file('logo');
             $logo = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/company/', $logo);
                 company::where('id',1)->update([
                    'logo'=>  $logo,
                 ]);
        }




        
        $image1='';
        if($request->hasFile('image1')){
           $photo = $request->file('image1');
             $image1 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/company/', $image1);
                 company::where('id',1)->update([
                    'image1'=>  $image1,
                 ]);
        }


        $logo1='';
        if($request->hasFile('logo1')){
           $photo = $request->file('logo1');
             $logo1 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/company/', $logo1);
                 company::where('id',1)->update([
                    'logo1'=>  $logo1,
                 ]);
        }

                
        $image2='';
        if($request->hasFile('image2')){
           $photo = $request->file('image2');
             $image2 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/company/', $image2);
                 company::where('id',1)->update([
                    'image2'=>  $image2,
                 ]);
        }


        $logo2='';
        if($request->hasFile('logo2')){
           $photo = $request->file('logo2');
             $logo2 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/company/', $logo2);
                 company::where('id',1)->update([
                    'logo2'=>  $logo2,
                 ]);
        }

        
        $image3='';
        if($request->hasFile('image3')){
           $photo = $request->file('image3');
             $image3 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/company/', $image3);
                 company::where('id',1)->update([
                    'image3'=>  $image3,
                 ]);
        }


        $logo3='';
        if($request->hasFile('logo3')){
           $photo = $request->file('logo3');
             $logo3 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/company/', $logo3);
                 company::where('id',1)->update([
                    'logo3'=>  $logo3,
                 ]);
        }

        company::where('id',1)->update([
            'text' =>$request->text,
            'link' =>$request->link,
            'text1' =>$request->text1,
            'link1' =>$request->link1,
            'text2' =>$request->text2,
            'link2' =>$request->link2,

            'text3' =>$request->text3,
            'link3' =>$request->link3,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('companyCms');
     



    }
}
