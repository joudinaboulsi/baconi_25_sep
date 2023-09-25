@extends('layouts.admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Contact Page</h5>
                <div class="card-body">
                  <form action="{{ route('contactStoreCms') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Title Header</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="title_header" value="{{$contact->title_header}}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">SubTitle Header</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle_header" value="{{ $contact->subtitle_header }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                   @if($contact->background)
                    <img src="../assets/contact/{{ $contact->background}}" width="100">
                    @endif
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Background </label>
                       <input class="form-control" type="file" id="formFile"  name="background" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        @if($contact->logo_contact)
                         <img src="../assets/contact/{{ $contact->logo_contact}}" width="100">
                         @endif
                         
                         </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Logo </label>
                       <input class="form-control" type="file" id="formFile"  name="logo_contact" />
                    
                    </div>
                 
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Tilte Page</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="title_page" value="{{ $contact->title_page }}"
                            aria-describedby="defaultFormControlHelp"  />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Tilte Contact</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="title_contact" value="{{ $contact->title_contact }}"
                            aria-describedby="defaultFormControlHelp"  />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">SubTilte Contact</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="subtitle_contact" value="{{ $contact->subtitle_contact}}"
                            aria-describedby="defaultFormControlHelp"  />
                    
                    </div>

                    
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Tilte Career</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="title_career" value="{{ $contact->title_career}}"
                            aria-describedby="defaultFormControlHelp"  />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">SubTilte Career</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="subtitle_career" value="{{ $contact->subtitle_career}}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Tilte Address</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="title_address" value="{{ $contact->title_address}}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">SubTilte Address</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="subtitle_address" value="{{ $contact->subtitle_address }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>


                    <div class="pt-3 pb-3">
                        @if($contact->image_address)
                         <img src="../assets/contact/{{ $contact->image_address}}" width="100">
                         @endif
                         
                         </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Image Address</label>
                       <input class="form-control" type="file" id="formFile"  name="image_address" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        @if($contact->icon_lb)
                         <img src="../assets/contact/{{ $contact->icon_lb}}" width="100">
                         @endif
                         
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Image Lebanon</label>
                       <input class="form-control" type="file" id="formFile"  name="icon_lb" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        @if($contact->icon_cyprus)
                         <img src="../assets/contact/{{ $contact->icon_cyprus}}" width="100">
                         @endif
                         
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Image Cyprus</label>
                       <input class="form-control" type="file" id="formFile"  name="icon_cyprus" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        @if($contact->icon_jordan)
                         <img src="../assets/contact/{{ $contact->icon_jordan}}" width="100">
                         @endif
                         
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Image Jordan</label>
                       <input class="form-control" type="file" id="formFile"  name="icon_jordan" />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Title One</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="title1" value="{{ $contact->title1 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>


                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Title Two</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="title2" value="{{ $contact->title2 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Title Three</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="title3" value="{{ $contact->title3 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>
                
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Location 1</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="location1" value="{{ $contact->location1 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>
                
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Location 2</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="location2" value="{{ $contact->location2 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>
                
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Location 3</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="location3" value="{{ $contact->location3 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>
                    
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Phone 1</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="phone1" value="{{ $contact->phone1 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Phone 1</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="phone2" value="{{ $contact->phone2 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Phone 3</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="phone3" value="{{ $contact->phone3 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Email 1</label>
                        <input type="email" class="form-control" id="defaultFormContTectrolInput" name="email1" value="{{ $contact->email1 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Email 2</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="email2" value="{{ $contact->email2 }}"
                            aria-describedby="defaultFormControlHelp"  />
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Email 3</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="email3" value="{{ $contact->email3 }}"
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