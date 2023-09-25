@extends('layouts.admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create</h5>
                <div class="card-body">
                  <form action="{{ route('blogStoreCms') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  
                
                  <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Title Page</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="title"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Text Blog</label>
                        <textarea class="form-control" id="defaultFormControlInput" name="text_blog"
                            aria-describedby="defaultFormControlHelp" /></textarea>
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Created By</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="by"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Created at </label>
                        <input type="date" class="form-control" id="defaultFormControlInput" name="date"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">SubTitle Page</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Image</label>
                        <input class="form-control" type="file" id="formFile"  name="image" 
                        aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Post Blog</label>
                        <textarea class="form-control" id="defaultFormControlInput" name="description"
                            aria-describedby="defaultFormControlHelp" /></textarea>
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">url </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="url" 
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                 
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 1 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t1" 
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 2 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t2" 
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 3 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t3" 
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 4 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t4" 
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 5 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t5" 
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 6 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t6" 
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 7 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t7" 
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Small title 8 </label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="t8" 
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                    
                <div class="demo-inline-spacing">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                  </form>
                </div></div></div></div></div>
  @endsection
