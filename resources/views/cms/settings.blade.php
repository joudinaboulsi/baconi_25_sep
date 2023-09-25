@extends('layouts.admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Settings</h5>
                <div class="card-body">
                  <form action="{{ route('settingsStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">About Baconi</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="desc" value="{{ $settings->desc }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Facebook</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="fb" value="{{ $settings->fb }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Instagram</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="insta" value="{{ $settings->insta }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">LinkedIn</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="link" value="{{ $settings->link }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                    @if($settings->logo)
                    <img src="../assets/{{ $settings->logo}}" width="100">
                    @endif 
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Logo </label>
                       <input class="form-control" type="file" id="formFile"  name="logo" />
                    
                    </div>

                    
                 
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Email</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="email" value="{{ $settings->email }}"
                            aria-describedby="defaultFormControlHelp"  />
                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="defaultFormContTectrolInput" name="phone" value="{{ $settings->phone }}"
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