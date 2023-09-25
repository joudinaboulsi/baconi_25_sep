<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class ServiceController extends Controller
{
    //

    public function index(){
        $service = Service::where('id',1)->first();
        return view('cms.service',compact('service'));
    }





    public function store(Request $request){
      
        $video='';
        if($request->hasFile('video')){
           $photo = $request->file('video');
             $video = $photo->getClientOriginalName();
       
             $photo->move('assets/service/', $video);
             Service::where('id',1)->update([  'video'=>$video,]);
         }

         
        $newImage='';
        if($request->hasFile('image_section1')){
           $photo = $request->file('image_section1');
             $newImage = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/service/', $newImage);
             Service::where('id',1)->update([  'image_section1'=>$newImage,]);
         }


         $newImage1='';
         if($request->hasFile('image_tab2')){
            $photo = $request->file('image_tab2');
              $newImage1 = str_replace(
                  '/[^A-Za-z0-9]/',
                  '-',
                  time() . $photo->getClientOriginalName()
              );
              $photo->move('assets/service/', $newImage1);
              Service::where('id',1)->update([  'image_tab2'=>$newImage1,]);
          }

          $newImage2='';
          if($request->hasFile('image_tab3')){
             $photo = $request->file('image_tab3');
               $newImage2 = str_replace(
                   '/[^A-Za-z0-9]/',
                   '-',
                   time() . $photo->getClientOriginalName()
               );
               $photo->move('assets/service/', $newImage2);
               Service::where('id',1)->update([  'image_tab3'=>$newImage2,]);
           }
           $icon='';
           if($request->hasFile('icon_tab2')){
              $photo = $request->file('icon_tab2');
                $icon = str_replace(
                    '/[^A-Za-z0-9]/',
                    '-',
                    time() . $photo->getClientOriginalName()
                );
                $photo->move('assets/service/', $icon);
                Service::where('id',1)->update([  'icon_tab2'=>$icon,]);
            }
            $icon1='';
            if($request->hasFile('icon_tab3')){
               $photo = $request->file('icon_tab3');
                 $icon1 = str_replace(
                     '/[^A-Za-z0-9]/',
                     '-',
                     time() . $photo->getClientOriginalName()
                 );
                 $photo->move('assets/service/', $icon1);
                 Service::where('id',1)->update([  'icon_tab3'=>$icon1,]);
             }
  
 


           Service::where('id',1)->update([
             
            'subtitle_page' => $request->subtitle_page,
            'title_page' => $request->title_page,
            'title_section1' => $request->title_section1,
            'subtitle_section1' => $request->subtitle_section1,
            'text_section1' => $request->text_section1,

            'link_section1' => $request->link_section1,
            'url_section1' => $request->url_section1,
            'title_tab1' => $request->title_tab1,
            'p_tab1' => $request->p_tab1,
            'title_tab2' => $request->title_tab2,
            'title_tab3' => $request->title_tab3,
            'small_title_tab2' => $request->small_title_tab2,
            'text_tab2' => $request->text_tab2,
            'text2_tab2' => $request->text2_tab2,
            'small_title_tab3' => $request->small_title_tab3,
            'text_tab3' => $request->text_tab3,
            'text2_tab3' => $request->text2_tab3,
           

    
         ]);
     

         toastr()->success('Data has been saved successfully!');

         return redirect()->route('serviceCms');
 
    }
}
