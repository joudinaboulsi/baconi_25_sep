@extends('layouts.admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Edit</h5>
                <div class="card-body">
                  <form action="{{ route('blogUpdateCms',$blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  
                
                  <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Title Page</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="title" value="{{ $blog->title }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Text Blog</label>
                        <textarea class="form-control" id="defaultFormControlInput" name="text_blog"
                            aria-describedby="defaultFormControlHelp" />{!! $blog->text_blog !!}</textarea>
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Created By</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="by" value="{{ $blog->by }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Created at </label>
                        <input type="date" class="form-control" id="defaultFormControlInput" name="date" value="{{ $blog->date }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">SubTitle Page</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle" value="{{ $blog->subtitle }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        @if($blog->image)
                        <img src="../assets/blog/{{ $blog->image}}" width="100">
                        @endif
                     
                    </div>
                
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Image</label>
                        <input class="form-control" type="file" id="formFile"  name="image" 
                        aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Post Blog</label>
                        <textarea class="form-control" id="defaultFormControlInput" name="description"
                            aria-describedby="defaultFormControlHelp" />{!! $blog->description !!}</textarea>
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">url </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="url" value="{{ $blog->url }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                 
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 1 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t1" value="{{ $blog->t1 }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 2 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t2" value="{{ $blog->t2 }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 3 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t3" value="{{ $blog->t3 }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 4 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t4"value="{{ $blog->t4 }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 5 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t5" value="{{ $blog->t5 }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 6 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t6" value="{{ $blog->t6 }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 7 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t7" value="{{ $blog->t7 }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 8 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t8" value="{{ $blog->t8 }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                    
                <div class="demo-inline-spacing">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                  </form>
                </div></div></div></div></div>
  @endsection
