<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrincipleSlider;

class PrincipleSliderController extends Controller
{
   
    public function index(){
        $principles = PrincipleSlider::all();
        return view('cms.principles.index',compact('principles'));
    }

    public function create(){
        return view('cms.principles.create');

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


         PrincipleSlider::insert([
           
            'image'=>$newImage,
         ]);
     

         toastr()->success('Data has been saved successfully!');

         return redirect()->route('principles');
    }


    public function edit($id){
        $principle = PrincipleSlider::where('id',$id)->first();
        return view('cms.principles.edit',compact('principle'));
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

             PrincipleSlider::where('id',$id)->update([
                'image'=>$newImage,
             ]);}
              
         
     

         toastr()->success('Data has been saved successfully!');

         return redirect()->route('principles');

    }
     public function delete($id){

        $principle= PrincipleSlider::where('id',$id)->firstOrFail();
         
         
        
        $principle->delete();
 
         toastr()->success('Data has been deleted successfully!');
 
         return redirect()->route('principles');
     }
 
}
