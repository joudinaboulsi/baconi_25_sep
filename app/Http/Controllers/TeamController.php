<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
class TeamController extends Controller
{
    //

    public function index(){
       $teams = Team::all();
        return view('cms.team.index',compact('teams'));
    }


    public function create(){
        return view('cms.team.create');
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


         Team::insert([
            'name'=>$request->name,
            'position'=>$request->position,
            'image'=>$newImage,
         ]);
     

         toastr()->success('Data has been saved successfully!');

         return redirect()->route('teamCms');


    }



    public function edit($id){

        $team = Team::where('id',$id)->first();
        return view('cms.team.edit',compact('team'));
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
             Team::where('id',$id)->update([
                'image'=>$newImage,
           ]);
              
         }


         Team::where('id',$id)->update([
            'name'=>$request->name,
            'position'=>$request->position,
            
         ]);
     

         toastr()->success('Data has been saved successfully!');

         return redirect()->route('teamCms');


    }
    public function delete($id){
        $team= Team::where('id',$id)->firstOrFail();
         
         
        
        $team->delete();
 
         toastr()->success('Data has been deleted successfully!');
 
         return redirect()->route('teamCms');
     }
 
 

}
