@extends('layouts.admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">


    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create</h5>
                <div class="card-body">
                    <form action="{{ route('sliderStoreCms') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">Title</label>
                            <input class="form-control" type="tetx" id="formFile" name="title" />

                        </div>

                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">subTitle</label>
                            <input class="form-control" type="tetx" id="formFile" name="subtitle" />

                        </div>
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">link</label>
                            <input class="form-control" type="tetx" id="formFile" name="link" />

                        </div>
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">url</label>
                            <input class="form-control" type="tetx" id="formFile" name="url" />

                        </div>
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">Background</label>
                            <input class="form-control" type="file" id="formFile" name="background" />

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