<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceTabOne;
class ServiceTabOneController extends Controller
{
    //

    public function index(){
        $tabs =  ServiceTabOne::all();
        return view('cms.service_tabone.index',compact('tabs'));
    }


    public function create(){
        return view('cms.service_tabone.create');
    }



    public function store(Request $request){

        $newImage='';
        if($request->hasFile('icon')){
           $photo = $request->file('icon');
             $newImage = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/service/', $newImage);
              
         }

         $image='';
         if($request->hasFile('image')){
            $photo = $request->file('image');
              $image = str_replace(
                  '/[^A-Za-z0-9]/',
                  '-',
                  time() . $photo->getClientOriginalName()
              );
              $photo->move('assets/service/', $image);
              
          }


         ServiceTabOne::insert([
            'title1' => $request->title1,
    
            'text1' => $request->text1,
            'text2' => $request->text2,
            'text3' => $request->text3,
           
            'icon'=>$newImage,
            'image'=>$image,
         ]);
     

         toastr()->success('Data has been saved successfully!');

         return redirect()->route('tabOne');
    }
   

   
    public function edit($id){

        $tab = ServiceTabOne::where('id',$id)->first();
        return view('cms.service_tabone.edit',compact('tab'));
    }



    public function update(Request $request,$id){

        $newImage='';
        if($request->hasFile('icon')){
           $photo = $request->file('icon');
             $newImage = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/service/', $newImage);
             ServiceTabOne::where('id',$id)->update([  'icon'=>$newImage,]);
         }
         $image='';
         if($request->hasFile('image')){
            $photo = $request->file('image');
              $image = str_replace(
                  '/[^A-Za-z0-9]/',
                  '-',
                  time() . $photo->getClientOriginalName()
              );
              $photo->move('assets/service/', $image);
              ServiceTabOne::where('id',$id)->update([  'image'=>$image,]);
          }
 

         ServiceTabOne::where('id',$id)->update([
         
            'title1' => $request->title1,
            'text1' => $request->text1,
            'text2' => $request->text2,
            'text3' => $request->text3,
           
         
          
         ]);
     

         toastr()->success('Data has been saved successfully!');

         return redirect()->route('tabOne');
    }
   

    public function delete($id){
        $tab= ServiceTabOne::find($id);
        $tab->delete();
        
        toastr()->success('Data has been deleted successfully!');

        return redirect()->route('tabOne');
    }

}
