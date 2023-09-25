@extends('layouts.admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">


    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Companies logo </h5>
                <div class="card-body">
                    <form action="{{ route('companyLogoAdd') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                     
                       
                        <div class="pt-3 pb-3">
                            @if($logo->company1)
                            <img src="../assets/company/{{ $logo->company1}}" width="100">
                            @endif
                         
                        </div>
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">Image</label>
                            <input class="form-control" type="file" id="formFile" name="company1" />

                        </div>
                     

                        <div class="pt-3 pb-3">
                            @if($logo->company2)
                            <img src="../assets/company/{{ $logo->company2}}" width="100">
                            @endif
                         
                        </div>
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">Image</label>
                            <input class="form-control" type="file" id="formFile" name="company2" />

                        </div>


                        <div class="pt-3 pb-3">
                            @if($logo->company3)
                            <img src="../assets/company/{{ $logo->company3}}" width="100">
                            @endif
                         
                        </div>
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">Image</label>
                            <input class="form-control" type="file" id="formFile" name="company3" />

                        </div>
                        <div class="pt-3 pb-3">
                            @if($logo->company4)
                            <img src="../assets/company/{{ $logo->company4}}" width="100">
                            @endif
                         
                        </div>
                        <div class="pt-3 pb-3">
                            <label for="defaultFormControlInput" class="form-label">Image</label>
                            <input class="form-control" type="file" id="formFile" name="company4" />

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