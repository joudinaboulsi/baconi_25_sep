<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage;
class HomePageController extends Controller
{
  

    
    public function index(){
        $home= HomePage::where('id',1)->first();
        return view('cms.home_page',compact('home'));
    }


    public function store(Request $request){
        $icon1='';
        if($request->hasFile('icon1')){
           $photo = $request->file('icon1');
             $icon1 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/home/', $icon1);
                 HomePage::where('id',1)->update([
                    'icon1'=>  $icon1,
                 ]);
        }


        $icon2='';
        if($request->hasFile('icon2')){
           $photo = $request->file('icon2');
             $icon2 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/home/', $icon2);
             HomePage::where('id',1)->update([
                    'icon2'=>  $icon2,
                 ]);
        }

        $icon3='';
        if($request->hasFile('icon3')){
           $photo = $request->file('icon3');
             $icon3 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/home/', $icon3);
             HomePage::where('id',1)->update([
                    'icon3'=>  $icon3,
                 ]);
        }

        $icon4='';
        if($request->hasFile('icon4')){
           $photo = $request->file('icon4');
             $icon4 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/home/', $icon4);
             HomePage::where('id',1)->update([
                    'icon4'=>  $icon4,
                 ]);
        }


        $image_count='';
        if($request->hasFile('image_count')){
           $photo = $request->file('image_count');
             $image_count = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/home/', $image_count);
             HomePage::where('id',1)->update([
                    'image_count'=>  $image_count,
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
             $photo->move('assets/home/', $logo);
             HomePage::where('id',1)->update([
                    'logo'=>  $logo,
                 ]);
        }


        $image_section1='';
        if($request->hasFile('image_section1')){
           $photo = $request->file('image_section1');
             $image_section1 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/home/', $image_section1);
             HomePage::where('id',1)->update([
                    'image_section1'=>  $image_section1,
                 ]);
        }


        $image1_service='';
        if($request->hasFile('image1_service')){
           $photo = $request->file('image1_service');
             $image1_service = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/home/', $image1_service);
             HomePage::where('id',1)->update([
                    'image1_service'=>  $image1_service,
                 ]);
        }

        $image2_service='';
        if($request->hasFile('image2_service')){
           $photo = $request->file('image2_service');
             $image2_service = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/home/', $image2_service);
             HomePage::where('id',1)->update([
                    'image2_service'=>  $image2_service,
                 ]);
        }

        $image3_service='';
        if($request->hasFile('image3_service')){
           $photo = $request->file('image3_service');
             $image3_service = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/home/', $image3_service);
             HomePage::where('id',1)->update([
                    'image3_service'=>  $image3_service,
                 ]);
        }

      
        $video='';
        if($request->hasFile('video')){
           $photo = $request->file('video');
             $video = $photo->getClientOriginalName();
       
             $photo->move('assets/home/', $video);
             HomePage::where('id',1)->update([  'video'=>$video,]);
         }





        HomePage::where('id',1)->update([
         
            'title1' =>$request->title1,
            'subtitle1' =>$request->subtitle1,
            'title2' =>$request->title2,
            'subtitle2' =>$request->subtitle2,
            'title3' =>$request->title3,
            'subtitle3' =>$request->subtitle3,

            'title4' =>$request->title4,
            'subtitle4' =>$request->subtitle4,
            'counter1' =>$request->counter1,
            'title1_count' =>$request->title1_count,
            'subtitle1_count' =>$request->subtitle1_count,
            'years' =>$request->years,

            'counter2' =>$request->counter2,
            'title2_count' =>$request->title2_count,
            'subtitle2_count' =>$request->subtitle2_count,

            'subtitle_section1' =>$request->subtitle_section1,
            'title_section1' =>$request->title_section1,
          
            'text_consultancy' =>$request->text_consultancy,
            'text2_section1' =>$request->text2_section1,
            'text3_section1' =>$request->text3_section1,
            'text4_section1' =>$request->text4_section1,


            'title1_service' =>$request->title1_service,
            'title2_service' =>$request->title2_service,
            'title3_service' =>$request->title3_service,
            'p1_service' =>$request->p1_service,
            'p2_service' =>$request->p2_service,
            'p3_service' =>$request->p3_service,
         
            'title_video' =>$request->title_video,
            'subtitle_video' =>$request->subtitle_video,
            'link_video' =>$request->link_video,
         

            
            

        ]);

        toastr()->success('Data has been saved successfully!');
        return  redirect()->back();
    }
  

    public function addLogo(){
        $logo = HomePage::where('id',1)->first();
        return view('cms.companies_logo',compact('logo'));
    }

    public function save(Request $request){
        $company1='';
        if($request->hasFile('company1')){
           $photo = $request->file('company1');
             $company1 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/company/', $company1);
             HomePage::where('id',1)->update([
                    'company1'=>  $company1,
                 ]);
         }

         $company2='';
         if($request->hasFile('company2')){
            $photo = $request->file('company2');
              $company2 = str_replace(
                  '/[^A-Za-z0-9]/',
                  '-',
                  time() . $photo->getClientOriginalName()
              );
              $photo->move('assets/company/', $company2);
              HomePage::where('id',1)->update([
                     'company2'=>  $company2,
                  ]);
          }
          $company3='';
          if($request->hasFile('company3')){
             $photo = $request->file('company3');
               $company3 = str_replace(
                   '/[^A-Za-z0-9]/',
                   '-',
                   time() . $photo->getClientOriginalName()
               );
               $photo->move('assets/company/', $company3);
               HomePage::where('id',1)->update([
                      'company3'=>  $company3,
                   ]);
           }
           $company4='';
           if($request->hasFile('company4')){
              $photo = $request->file('company4');
                $company4 = str_replace(
                    '/[^A-Za-z0-9]/',
                    '-',
                    time() . $photo->getClientOriginalName()
                );
                $photo->move('assets/company/', $company4);
                HomePage::where('id',1)->update([
                       'company4'=>  $company4,
                    ]);
            }
        toastr()->success('Data has been saved successfully!');
        return  redirect()->back();
    }
}
