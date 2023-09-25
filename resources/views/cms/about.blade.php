@extends('layouts.admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">About Page</h5>
                <div class="card-body">
                  <form action="{{ route('aboutStoreCms') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="pt-3 pb-3">
                         @if($about->background)
                        <img src="../assets/about/{{ $about->background}}" width="100">
                        @endif
                     
                    </div>
                     <div class="pt-3 pb-3">
                         <label for="defaultFormControlInput" class="form-label">Background </label>
                        <input class="form-control" type="file" id="formFile"  name="background" />
                     
                     </div>
                  <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Title Page</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="title_page"  value="{{ $about->title_page }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">SubTitle Page</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle_page" value="{{ $about->subtitle_page }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                 

                    <h5  class="pt-3">Section One</h5>

                    <div class="pt-3 pb-3">
                        @if($about->image)
                       <img src="../assets/about/{{ $about->image}}" width="100">
                       @endif
                    
                   </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Image</label>
                        <input class="form-control" type="file" id="formFile"  name="image" 
                        aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Title </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="title_section1" value="{{ $about->title_section1 }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Text </label>
                        <textarea class="form-control" id="defaultFormControlInput" name="text_section1" 
                            aria-describedby="defaultFormControlHelp" />{!! $about->text_section1 !!}</textarea>
                    
                    </div>
                    <h5  class="pt-3">Section Two</h5>
                   
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Title </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="title_section2" value="{{ $about->title_section2 }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Description </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="text_section2"  value="{{ $about->text_section2 }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <h5  class="pt-3">Section Three</h5>
                   
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Title </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="title_section3"  value="{{ $about->title_section3 }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Description </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="text_section3" value="{{  $about->text_section3 }}"
                            aria-describedby="defaultFormControlHelp" />
                    </div>
                    <h5  class="pt-3">Section four </h5>
                   
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Title </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="title_section4"   value="{{ $about->title_section4 }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Description </label>
                        <textarea class="form-control" id="defaultFormControlInput" name="text_section4" 
                            aria-describedby="defaultFormControlHelp" />{!! $about->text_section4 !!}</textarea>
                    
                    </div>
                    <h5  class="pt-3">Team </h5>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Title </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="title_team"  value="{{ $about->title_team }}""
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                    
                <div class="demo-inline-spacing">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                  </form>
                </div></div></div></div></div>
  @endsection
