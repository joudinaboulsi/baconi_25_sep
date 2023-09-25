<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Contact;
use App\Team;
use App\PrincipleSlider;
use App\MembershipSlider;
use App\AboutSlider;
use App\SeoPage;
use Session;
use SEO;
use SEOMeta;
use App\Settings;
use App\Company;
use App\SliderCompany;
use App\Blog;
use App\Service;
use Dymantic\InstagramFeed\InstagramFeed;
use App\HomeSlider;
use App\HomePage;
use App\ServiceTabOne;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function __construct()
    {
        app()->singleton('contact', function(){
            $settings = Settings::where('id','1')->get();
            return $settings[0];
        });
    }
    public function setSeo($page_data)
    {
        //get url of the page
        $url = url()->current();

        SEO::setTitle($page_data->meta_title, false);
        SEO::setDescription($page_data->meta_description, false);
        SEOMeta::setKeywords($page_data->meta_keywords, false);
       
        if($page_data->image != NULL) // check if we have an OG image
            SEO::addImages(getenv('APP_URL').'/assets/seo/'.$page_data->image); 
    }
    
    public function home(){
        $page_data =SeoPage::where('id',1)->get();
       
        $this->setSeo($page_data[0]);
        // $feed = InstagramFeed::fetch();
        $sliders = HomeSlider::all();
        $homes = HomePage::where('id', '1')->get();
        $blogs = Blog::all();
        $companies = SliderCompany::all();

        return view('pages.home',compact('page_data','sliders','homes','companies','blogs'));
    }

    public function about(){
        $page_data =SeoPage::where('id',2)->get();
        // dd($page_data);
        $this->setSeo($page_data[0]);
        $abouts = About::where('id',1)->get();
        $memberships = MembershipSlider::all();
        $principles = PrincipleSlider::all();
        $sliders = AboutSlider::all();
        $team= Team::all();
     
        return view('pages.about',compact('abouts','memberships','principles','team','sliders','page_data'));
    }

    public function services(){

        $page_data =SeoPage::where('id',3)->get();
       
        $this->setSeo($page_data[0]);
        $services= Service::where('id',1)->get();
        $service_tab = ServiceTabOne::all();
        return view('pages.services',compact('services','service_tab','page_data'));
    }

    public function companies(){
        $page_data =SeoPage::where('id',4)->get();
       
        $this->setSeo($page_data[0]);
        $companies = Company::all();
        $sliders = SliderCompany::all();
        return view('pages.companies',compact('companies','sliders','page_data'));
    }

    public function blog(){
       $page_data =SeoPage::where('id',5)->get();
       
        $this->setSeo($page_data[0]);
        $blogs = Blog::all();
        return view('pages.blogs',compact('blogs','page_data'));
    }


    public function blogDetail($id){
        $blogs = Blog::where('id',$id)->get();
        $latest_blogs = Blog::latest('date')->paginate(10);
        $services = Service::all();
        return view('pages.blog_details',compact('blogs','services','latest_blogs'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
    
        $blogs = Blog::where('title', 'like', "%$query%")
                     ->orWhere('text_blog', 'like', "%$query%")
                     ->get();
    
        return view('pages.search', compact('blogs'));
    }



    public function contact(){
        $page_data =SeoPage::where('id',6)->get();
       
        $this->setSeo($page_data[0]);
        $contact = Contact::all();
        return view('pages.contact',compact('contact','page_data'));
    }
    
      //Get the contact form details and send the mail
      public function send_mail(Request $request)
      {
          $name = $request->input('name');
          $email_client = $request->input('email');
          $phone = $request->input('phone');
          $msg_client = $request->input('message');
          
          // if form is full
          if (! empty($_POST))
          {
              // send email to admin
              Mail::send('emails.contact', array('name' => $name, 'email' => $email_client, 'phone'=>$pohone,'messsage' => $msg_client), function($message) use ($email_client, $name,$phone) {
                 $message->from($email_client, $name);
                 $message->to('info@baconigroup.com')->subject('Message from Website');
              });
  
              \Session::flash('msg', 'Successfully sent!' );
              return redirect()->back();
          }
      }
      public function send_career(Request $request)
      {
          $name = $request->input('name');
          $email_client = $request->input('email');
          $phone = $request->input('phone');
          $msg_client = $request->input('message');
          $file = $request->file('file');
          $fileName = $file->getClientOriginalName();
          // if form is full
          if (! empty($_POST))
          {
              // send email to admin
              Mail::send('emails.career', array('name' => $name, 'email' => $email_client, 'phone'=>$phone,'messsage' => $msg_client), function($message) use ($email_client, $name, $phone,$file, $fileName) {
                 $message->from($email_client, $name);
                 $message->to('info@baconigroup.com')->subject('Message from Website')
                 ->attach($file, [
                    'as' => $fileName,
                    'mime' => $file->getClientMimeType(),
                ]);
              });

             

  
              \Session::flash('msg', 'Successfully sent!' );
              return redirect()->back();
          }
      }


}
