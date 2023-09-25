@extends('layouts.admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">


    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Edit</h5>
                <div class="card-body">
                    <form action="{{ route('tabOneUpdate',$tab->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">Title</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" name="title1" value="{{ $tab->title1 }}"
                              aria-describedby="defaultFormControlHelp" />

                        </div>
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">text1</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" name="text1" value="{{ $tab->text1 }}"
                            aria-describedby="defaultFormControlHelp" />

                        </div>
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">text2</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" name="text2" value="{{ $tab->text2 }}"
                            aria-describedby="defaultFormControlHelp" />

                        </div>
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">text3</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" name="text3" value="{{ $tab->text3 }}"
                            aria-describedby="defaultFormControlHelp" />

                        </div>
                    
                        <div class="pt-3 pb-3">
                            @if($tab->icon)
                            
                            <img src="../assets/service/{{ $tab->icon}}" width="100">                 
                            @endif
                        </div>
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">Icon</label>
                            <input class="form-control" type="file" id="formFile" name="icon" />

                        </div>

                        <div class="pt-3 pb-3">
                            @if($tab->image)
                            
                            <img src="../assets/service/{{ $tab->image}}" width="100">                 
                            @endif
                        </div>
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">Image</label>
                            <input class="form-control" type="file" id="formFile" name="image" />

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