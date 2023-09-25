@extends('layouts.admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">


    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Edit </h5>
                <div class="card-body">
                    <form action="{{ route('teamUpdateCms',$team->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" name="name"
                               value="{{ $team->name }}" aria-describedby="defaultFormControlHelp" />

                        </div>
                     
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">Position</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" name="position"
                            value="{{ $team->position }}" aria-describedby="defaultFormControlHelp" />

                        </div>
                        <div class="pt-3 pb-3">
                            @if($team->image)
                            <img src="../assets/about/{{ $team->image}}" width="100">
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