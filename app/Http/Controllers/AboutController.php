<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
class AboutController extends Controller
{
    //

    public function index(){
        $about= About::where('id',1)->first();
        return view('cms.about',compact('about'));
    }



    public function store(Request $request){
        $background='';
        if($request->hasFile('background')){
           $photo = $request->file('background');
             $background = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/about/', $background);
                 About::where('id',1)->update([
                    'background'=>  $background,
                 ]);
        }


        $image='';
        if($request->hasFile('image')){
           $photo = $request->file('image');
             $image = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/about/', $image);
             About::where('id',1)->update([
                    'image'=>  $image,
                 ]);
        }


        About::where('id',1)->update([

            'title_page' => $request->title_page,
            'subtitle_page' =>$request->subtitle_page,
            
            'title_section1' =>$request->title_section1,
            'text_section1' =>$request->text_section1,
            'title_section2' =>$request->title_section2,
            'text_section2' =>$request->text_section2,
            'title_section3' =>$request->title_section3,
            'text_section3' =>$request->text_section3,


            'title_section4' =>$request->title_section4,
            'text_section4' =>$request->text_section4,
            'title_team' =>$request->title_team,
           
           
        ]);


        toastr()->success('Data has been saved successfully!');

        return redirect()->route('aboutCms');
    
    }
}
