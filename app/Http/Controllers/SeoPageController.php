<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SeoPage;
class SeoPageController extends Controller
{
    //
    public function index()
    {
        $pages = SeoPage::all();
        return view('cms.seo.index', compact('pages'));
    }



    public function edit($id)
    { 
         $page = SeoPage::where('id', $id)
            ->get();
        $page = $page[0];
        return view('cms.seo.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $page = SeoPage::where('id', $id)
            ->get();
        $page = $page[0];

        $image='';
        if($request->hasFile('image')){
           $photo = $request->file('image');
             $image = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/seo/', $image);
             SeoPage::where('id',$id)->update([
                    'image'=>  $image,
                 ]);
            }

        $page = SeoPage::where('id', $id)
            ->update([
              
               
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
              
             
            ]);

            toastr()->success('Data has been saved successfully!');

            return redirect()->route('seoCms');
    }
}
