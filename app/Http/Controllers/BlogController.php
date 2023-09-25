<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller
{
    //

    public function index(){

        $blogs = Blog::all();
        return view('cms.blog.index',compact('blogs'));
    }


    public function create(){
        return view('cms.blog.create');
    }


    public function store(Request $request){


        $image='';
        if($request->hasFile('image')){
           $photo = $request->file('image');
             $image = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/blog/', $image);
               
        }


        Blog::insert([
            'title' =>$request->title,
            'by' =>$request->by,
            'date' =>$request->date,
            'text_blog' =>$request->text_blog,
            'subtitle' =>$request->subtitle,
            'description' =>$request->description,
            'url' =>$request->url,
            't1' =>$request->t1,
            't2' =>$request->t2,
            't3' =>$request->t3,
            't4' =>$request->t4,
            't5' =>$request->t5,
            't6' =>$request->t6,
            't7' =>$request->t7,
            't8' =>$request->t8,
            'image' =>$image
         
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('blogCms');
    }


    public function edit($id){
        $blog = Blog::where('id',$id)->first();
        return view('cms.blog.edit',compact('blog'));

    }


    
    public function update(Request $request,$id){


        $image='';
        if($request->hasFile('image')){
           $photo = $request->file('image');
             $image = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/blog/', $image);
             Blog::where('id',$id)->update([ 'image' =>$image]);
               
        }


        Blog::where('id',$id)->update([
            'title' =>$request->title,
            'by' =>$request->by,
            'date' =>$request->date,
            'text_blog' =>$request->text_blog,
            'subtitle' =>$request->subtitle,
            'description' =>$request->description,
            'url' =>$request->url,
            't1' =>$request->t1,
            't2' =>$request->t2,
            't3' =>$request->t3,
            't4' =>$request->t4,
            't5' =>$request->t5,
            't6' =>$request->t6,
            't7' =>$request->t7,
            't8' =>$request->t8,
           
         
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('blogCms');
    }


    public function delete($id){
       $bglog= Blog::where('id',$id)->firstOrFail();
        
        
       
       $bglog->delete();

        toastr()->success('Data has been deleted successfully!');

        return redirect()->route('blogCms');
    }



}
