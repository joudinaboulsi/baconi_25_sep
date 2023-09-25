<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderCompany;
class SliderCompanyController extends Controller
{
   
    public function index(){
        $sliders = SliderCompany::all();
         return view('cms.slider_companies.index',compact('sliders'));
     }
 
 
     public function create(){
         return view('cms.slider_companies.create');
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
              $photo->move('assets/company/', $newImage);
               
          }
 
 
          SliderCompany::insert([
             'image'=>$newImage,

          ]);
      
 
          toastr()->success('Data has been saved successfully!');
 
          return redirect()->route('sliderCompany');
 
 
     }
 
 
 
     public function edit($id){
 
         $slider = SliderCompany::where('id',$id)->first();
         return view('cms.slider_companies.edit',compact('slider'));
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
              $photo->move('assets/company/', $newImage);
              SliderCompany::where('id',$id)->update([
                 'image'=>$newImage,
            ]);
               
          }
 
 
         
          toastr()->success('Data has been saved successfully!');
 
          return redirect()->route('sliderCompany');
 
 
     }
     public function delete($id){
         $slider= SliderCompany::where('id',$id)->firstOrFail();
          
          
         
         $slider->delete();
  
          toastr()->success('Data has been deleted successfully!');
  
          return redirect()->route('sliderCompany');
      }
  
}
