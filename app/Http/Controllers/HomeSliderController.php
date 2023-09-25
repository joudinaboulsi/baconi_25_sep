<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeSlider;
class HomeSliderController extends Controller
{
    //

    public function index(){

        $sliders = HomeSlider::all();
        return view('cms.home_sliders.index',compact('sliders'));
    }


    public function create(){
        return view('cms.home_sliders.create');

    }


    
    public function store(Request $request){
        
        $newImage='';
        if($request->hasFile('background')){
           $photo = $request->file('background');
             $newImage = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/home/', $newImage);
              
         }


         HomeSlider::insert([
           
            'background'=>$newImage,
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'link'=>$request->link,
            'url'=>$request->url,
         ]);
     

         toastr()->success('Data has beetitle saved successfully!');

         return redirect()->route('sliderCms');
    }


    public function edit($id){
        $slider = HomeSlider::where('id',$id)->first();
        return view('cms.home_sliders.edit',compact('slider'));
    }



    public function update(Request $request,$id){

        $newImage='';
        if($request->hasFile('background')){
           $photo = $request->file('background');
             $newImage = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/home/', $newImage);

             HomeSlider::where('id',$id)->update([
                'background'=>$newImage,
             ]);}
              
             HomeSlider::where('id',$id)->update([
           
             'title'=>$request->title,
             'subtitle'=>$request->subtitle,
             'link'=>$request->link,
             'url'=>$request->url,
          ]);

         toastr()->success('Data has been saved successfully!');
         return redirect()->route('sliderCms');


    }
    public function delete($id){
        $home= HomeSlider::where('id',$id)->firstOrFail();
         
         
        
        $home->delete();
 
         toastr()->success('Data has been deleted successfully!');
 
         return redirect()->route('sliderCms');
     }
 

}
