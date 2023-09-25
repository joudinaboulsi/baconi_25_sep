<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MembershipSlider;
class MembershipSliderController extends Controller
{
    public function index(){
        $memberships = MembershipSlider::all();
        return view('cms.membership.index',compact('memberships'));
    }

    public function create(){
        return view('cms.membership.create');

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


         MembershipSlider::insert([
           
            'image'=>$newImage,
         ]);
     

         toastr()->success('Data has been saved successfully!');

         return redirect()->route('membership');
    }


    public function edit($id){
        $membership = MembershipSlider::where('id',$id)->first();
        return view('cms.membership.edit',compact('membership'));
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

             MembershipSlider::where('id',$id)->update([
                'image'=>$newImage,
             ]);}
              
         
     

         toastr()->success('Data has been saved successfully!');

         return redirect()->route('membership');

    }


    public function delete($id){
        $member= MembershipSlider::where('id',$id)->firstOrFail();
         
         
        
        $member->delete();
 
         toastr()->success('Data has been deleted successfully!');
 
         return redirect()->route('membership');
     }
 
}
