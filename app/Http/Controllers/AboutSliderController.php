<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutSlider;
class AboutSliderController extends Controller
{
    //

    public function index(){
        $sliders = AboutSlider::all();
        return view('cms.about_sliders.index',compact('sliders'));
    }

    public function create(){
        return view('cms.about_sliders.create');

    }
    
    public function store(Request $request){
        
        $newImage='';
        if($request->hasFile('image')){
           $photo = $request->file('image');
             $newImage = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/about/', $newImage);
              
         }


         AboutSlider::insert([
           
            'image'=>$newImage,
         ]);
     

         toastr()->success('Data has been saved successfully!');

         return redirect()->route('AboutSlider');
    }


    public function edit($id){
        $slider = AboutSlider::where('id',$id)->first();
        return view('cms.about_sliders.edit',compact('slider'));
    }



    public function update(Request $request,$id){

        $newImage='';
        if($request->hasFile('image')){
           $photo = $request->file('image');
             $newImage = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/about/', $newImage);

             AboutSlider::where('id',$id)->update([
                'image'=>$newImage,
             ]);}
              
         
     

         toastr()->success('Data has been saved successfully!');

         return redirect()->route('AboutSlider');

    }

    public function delete($id){
        $about= AboutSlider::where('id',$id)->firstOrFail();
         
         
        
        $about->delete();
 
         toastr()->success('Data has been deleted successfully!');
 
         return redirect()->route('AboutSlider');
     }
 

}


