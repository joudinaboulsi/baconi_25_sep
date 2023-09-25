@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-2 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">HomePage</h5>
                    <div class="card-body">
                        <form action="{{ route('homeStore') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                          
                            <h5 class="pt-3">Section About-us</h5>
                            {{-- <div class="pt-3 pb-3">
                                @if ($home->icon1)
                                    <img src="../assets/home/{{ $home->icon1 }}" width="100">
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Icon 1 </label>
                                <input class="form-control" type="file" id="formFile" name="icon1" />

                            </div> --}}
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Title 1</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title1"
                                    value="{{ $home->title1 }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">SubTitle1</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle1"
                                    value="{{ $home->subtitle1 }}" aria-describedby="defaultFormControlHelp" />

                            </div>

                            {{-- <div class="pt-3 pb-3">
                                @if ($home->icon2)
                                    <img src="../assets/home/{{ $home->icon2 }}" width="100">
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Icon 2 </label>
                                <input class="form-control" type="file" id="formFile" name="icon2" />

                            </div> --}}
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Title 2</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title2"
                                    value="{{ $home->title2 }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">SubTitle2</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle2"
                                    value="{{ $home->subtitle2 }}" aria-describedby="defaultFormControlHelp" />

                            </div>


                            {{-- <div class="pt-3 pb-3">
                                @if ($home->icon3)
                                    <img src="../assets/home/{{ $home->icon3 }}" width="100">
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Icon 3 </label>
                                <input class="form-control" type="file" id="formFile" name="icon3" />

                            </div> --}}
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Title 3</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title3"
                                    value="{{ $home->title3 }} "aria-describedby="defaultFormControlHelp" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">SubTitle 3</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle3"
                                    value="{{ $home->subtitle3 }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($home->icon4)
                                    <img src="../assets/home/{{ $home->icon4 }}" width="100">
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Icon 4 </label>
                                <input class="form-control" type="file" id="formFile" name="icon4" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Title 4</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title4"
                                    value="{{ $home->title4 }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">SubTitle 4</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle4"
                                    value="{{ $home->subtitle4 }}" aria-describedby="defaultFormControlHelp" />

                            </div>
{{-- counter --}}
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">counter 1</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="counter1"
                                    value="{{ $home->counter1 }}" aria-describedby="defaultFormControlHelp" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">title </label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title1_count"
                                    value="{{ $home->title1_count }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">subtitle </label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle1_count"
                                    value="{{ $home->subtitle1_count }}" aria-describedby="defaultFormControlHelp" />

                            </div>

                            <div class="pt-3 pb-3">
                                @if ($home->image_count)
                                    <img src="../assets/home/{{ $home->image_count }}" width="100">
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Image </label>
                                <input class="form-control" type="file" id="formFile" name="image_count" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Years </label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="years"
                                    value="{{ $home->years }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">counter 2</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="counter2"
                                    value="{{ $home->counter2 }}" aria-describedby="defaultFormControlHelp" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">title </label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title2_count"
                                    value="{{ $home->title2_count }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">subtitle </label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle2_count"
                                    value="{{ $home->subtitle2_count }}" aria-describedby="defaultFormControlHelp" />

                            </div>

                            <div class="pt-3 pb-3">
                                @if ($home->logo)
                                    <img src="../assets/home/{{ $home->logo }}" width="100">
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Logo </label>
                                <input class="form-control" type="file" id="formFile" name="logo" />

                            </div>

{{-- section c --}}
                            <h5 class="pt-3">Section services : Consultancy</h5>
                            <div class="pt-3 pb-3">
                                @if ($home->image_section1)
                                    <img src="../assets/home/{{ $home->image_section1 }}" width="100">
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Image </label>
                                <input class="form-control" type="file" id="formFile" name="image_section1" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">subtitle</label>
                                <input type="text" class="form-control" id="defaultFormControlInpue" name="subtitle_section1"
                                    value="{{ $home->subtitle_section1 }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">title</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title_section1"
                                    value="{{ $home->title_section1 }}" aria-describedby="defaultFormControlHelp" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">text 1</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="text_consultancy"
                                    value="{{ $home->text_consultancy}}" aria-describedby="defaultFormControlHelp" />

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">text 2</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="text2_section1"
                                    value="{{ $home->text2_section1}}" aria-describedby="defaultFormControlHelp" />

                            </div>



                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">text 3</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="text3_section1"
                                    value="{{ $home->text3_section1}}" aria-describedby="defaultFormControlHelp" />

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">text 4</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="text4_section1"
                                    value="{{ $home->text4_section1}}" aria-describedby="defaultFormControlHelp" />

                            </div>


                            <!-- s -->


                            <h5 class="pt-3">Section services</h5>
                            <div class="pt-3 pb-3">
                                @if ($home->image1_service)
                                    <img src="../assets/home/{{ $home->image1_service }}" width="100">
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Image  service 1</label>
                                <input class="form-control" type="file" id="formFile" name="image1_service" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Title Service 1</label>
                                <input type="text" class="form-control" id="defaultFormControlInpue" name="title1_service"
                                    value="{{ $home->title1_service }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                            
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">text Service 1</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="p1_service"
                                    value="{{ $home->p1_service }}" aria-describedby="defaultFormControlHelp" />

                            </div>

                            <div class="pt-3 pb-3">
                                @if ($home->image2_service)
                                    <img src="../assets/home/{{ $home->image2_service }}" width="100">
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Image  service 2</label>
                                <input class="form-control" type="file" id="formFile" name="image2_service" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Title Service 2</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title2_service"
                                    value="{{ $home->title2_service}}" aria-describedby="defaultFormControlHelp" />

                            </div>



                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">text Service 2 </label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="p2_service"
                                    value="{{ $home->p2_service}}" aria-describedby="defaultFormControlHelp" />

                            </div>

                            <div class="pt-3 pb-3">
                                @if ($home->image3_service)
                                    <img src="../assets/home/{{ $home->image3_service }}" width="100">
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Image  service 3</label>
                                <input class="form-control" type="file" id="formFile" name="image3_service" />

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Title Service 4</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title3_service"
                                    value="{{ $home->title3_service }}" aria-describedby="defaultFormControlHelp" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">text Service 4</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="p3_service"
                                    value="{{ $home->p3_service}} "aria-describedby="defaultFormControlHelp" />

                            </div>


                            <h5 class="pt-3">Section Videos</h5>
                          
                            <div class="pt-3 pb-3">
                                @if($home->video)
                                
                                 <video width="320" height="240" controls>
                                     <source src="../assets/home/{{ $home->video}}" type="video/mp4">
                               
                               </video>
                                 @endif
                                 
                                 </div>
                                 <div class="pt-3 pb-3">
                                     <label for="defaultFormControlInput" class="form-label">Video </label>
                                    <input class="form-control" type="file" id="formFile"  name="video" />
                                 
                                 </div>
                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Title</label>
                                <input type="text" class="form-control" id="defaultFormControlInpue" name="title_video"
                                    value="{{ $home->title_video }}" aria-describedby="defaultFormControlHelp" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">subtitle</label>
                                <input type="text" class="form-control" id="defaultFormControlInpue" name="subtitle_video"
                                    value="{{ $home->subtitle_video }}"aria-describedby="defaultFormControlHelp" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="defaultFormControlInput" class="form-label">Url</label>
                                <input type="text" class="form-control" id="defaultFormControlInpue" name="link_video"
                                    value="{{ $home->link_video }}" aria-describedby="defaultFormControlHelp" />

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
