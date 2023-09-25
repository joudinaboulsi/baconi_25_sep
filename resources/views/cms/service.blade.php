@extends('layouts.admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Service Page</h5>
                <div class="card-body">
                  <form action="{{ route('serviceCmsStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">SubTitle Header</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle_page" value="{{$service->subtitle_page}}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Title Header</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="title_page" value="{{ $service->title_page }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                   @if($service->video)
                   
                    <video width="320" height="240" controls>
                        <source src="../assets/service/{{ $service->video}}" type="video/mp4">
                  
                  </video>
                    @endif
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Video </label>
                       <input class="form-control" type="file" id="formFile"  name="video" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        @if($service->image_section1)
                         <img src="../assets/service/{{ $service->image_section1}}" width="100">
                         @endif
                         
                         </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Image Section One </label>
                       <input class="form-control" type="file" id="formFile"  name="image_section1" />
                    
                    </div>
                 
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Tilte  Section One</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="title_section1" value="{{ $service->title_section1 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Subtitle Srction One</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="subtitle_section1" value="{{ $service->subtitle_section1 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Text Section one</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="text_section1" value="{{ $service->text_section1}}"
                            aria-describedby="defaultFormControlHelp"  />
                    
                    </div>

                    
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Link </label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="link_section1" value="{{ $service->link_section1 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Url</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="url_section1" value="{{ $service->url_section1 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>


                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Tilte Tab 1</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="title_tab1" value="{{ $service->title_tab1}}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Tilte Tab 2</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="title_tab2" value="{{ $service->title_tab2 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>
                  <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Tilte Tab 3</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="title_tab3" value="{{ $service->title_tab3 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>
                   <h5  class="pt-3">Content Tab One</h5>
                   <div class="pt-3 pb-3">
                    <label for="defaultFormControlInput" class="form-label">small text </label>
                    <input type="text" class="form-control" id="defaultFormContTectrolInput" name="p_tab1" value="{{ $service->p_tab1 }}"
                        aria-describedby="defaultFormControlHelp"  />
                </div>
                   <h5  class="pt-3 pb-3">Content Tab Two</h5>

                    <div class="pt-3 pb-3">
                        @if($service->icon_tab2)
                         <img src="../assets/service/{{ $service->icon_tab2}}" width="100">
                         @endif
                         
                         </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">icon tab2</label>
                       <input class="form-control" type="file" id="formFile"  name="icon_tab2" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        @if($service->image_tab2)
                         <img src="../assets/service/{{ $service->image_tab2}}" width="100">
                         @endif
                         
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">image tab2</label>
                       <input class="form-control" type="file" id="formFile"  name="image_tab2" />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">small title tab2</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="small_title_tab2" value="{{ $service->small_title_tab2 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>


                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">text tab2</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="text_tab2" value="{{ $service->text_tab2 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">text2 tab2</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="text2_tab2" value="{{ $service->text2_tab2 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>


                    <h5  class="pt-3 pb-3">Content Tab Three</h5>

                    <div class="pt-3 pb-3">
                        @if($service->icon_tab3)
                         <img src="../assets/service/{{ $service->icon_tab3}}" width="100">
                         @endif
                         
                         </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">icon tab3</label>
                       <input class="form-control" type="file" id="formFile"  name="icon_tab3" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        @if($service->image_tab3)
                         <img src="../assets/service/{{ $service->image_tab3}}" width="100">
                         @endif
                         
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">image tab3</label>
                       <input class="form-control" type="file" id="formFile"  name="image_tab3" />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">small title tab3</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="small_title_tab3" 
                        value="{{ $service->small_title_tab3 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>


                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">text tab3</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="text_tab3" value="{{ $service->text_tab3 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">text2 tab3</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="text2_tab3" value="{{ $service->text2_tab3}}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>














                <div class="demo-inline-spacing">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection