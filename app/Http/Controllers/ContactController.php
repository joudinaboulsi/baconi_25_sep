<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    //
    public function index(){

        $contact= Contact::where('id','1')->first();
   
        return view('cms.contact',compact('contact'));
    }



public function store(Request $request){

    $b='';
    if($request->hasFile('background')){
       $photo = $request->file('background');
         $b = str_replace(
             '/[^A-Za-z0-9]/',
             '-',
             time() . $photo->getClientOriginalName()
         );
         $photo->move('assets/contact/', $b);
             Contact::where('id',1)->update([
                'background'=>  $b,
             ]);
       }
       $b1='';
       if($request->hasFile('logo_contact')){
          $photo = $request->file('logo_contact');
            $b1 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/contact/', $b1);
                Contact::where('id',1)->update([
                   'logo_contact'=>  $b1,
                ]);
          }

          $icon='';
          if($request->hasFile('icon_lb')){
             $photo = $request->file('icon_lb');
               $icon = str_replace(
                   '/[^A-Za-z0-9]/',
                   '-',
                   time() . $photo->getClientOriginalName()
               );
               $photo->move('assets/contact/', $icon);
                   Contact::where('id',1)->update([
                      'icon_lb'=>  $icon,
                   ]);
             }
   
             $icon1='';
             if($request->hasFile('icon_jordan')){
                $photo = $request->file('icon_jordan');
                  $icon1 = str_replace(
                      '/[^A-Za-z0-9]/',
                      '-',
                      time() . $photo->getClientOriginalName()
                  );
                  $photo->move('assets/contact/', $icon1);
                      Contact::where('id',1)->update([
                         'icon_jordan'=>  $icon1,
                      ]);
                }
      
                $icon2='';
                if($request->hasFile('icon_cyprus')){
                   $photo = $request->file('icon_cyprus');
                     $icon2 = str_replace(
                         '/[^A-Za-z0-9]/',
                         '-',
                         time() . $photo->getClientOriginalName()
                     );
                     $photo->move('assets/contact/', $icon2);
                         Contact::where('id',1)->update([
                            'icon_cyprus'=>  $icon2,
                         ]);
                   }
         
                   $address_image='';
                   if($request->hasFile('image_address')){
                      $photo = $request->file('image_address');
                        $address_image = str_replace(
                            '/[^A-Za-z0-9]/',
                            '-',
                            time() . $photo->getClientOriginalName()
                        );
                        $photo->move('assets/contact/', $address_image);
                            Contact::where('id',1)->update([
                               'image_address'=>  $address_image,
                            ]);
                      }


    Contact::where('id','1')->update(


        [
            'title_header' => $request->title_header,
            'subtitle_header' =>$request->subtitle_header,
            'title_page' =>$request->title_page,
            'title_contact' =>$request->title_contact,
            'subtitle_contact' =>$request->subtitle_contact,
            'title_career' =>$request->title_career,
            'subtitle_career' =>$request->subtitle_career,
            'title_address' =>$request->title_address,
            'subtitle_address' =>$request->subtitle_address,


            
            'title1' =>$request->title1,
            'title2' =>$request->title2,
            'title3' =>$request->title3,


            'location1' =>$request->location1,
            'location2' =>$request->location2,
            'location3' =>$request->location3,
            'phone1' =>$request->phone1,

            'phone2' =>$request->phone2,
            'email1' =>$request->email1,
            'email2' =>$request->email2,
            'email3' =>$request->email3,
         
           
       
        ]
    );
        toastr()->success('Data has been saved successfully!');
        return  redirect()->back();

}


}
