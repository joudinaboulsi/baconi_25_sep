@extends('layouts.admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Cpmpany Page</h5>
                <div class="card-body">
                  <form action="{{ route('companyStoreCms') }}" method="POST" enctype="multipart/form-data">
                    @csrf
              
                   
                    <div class="pt-3 pb-3">
                   @if($company->image )
                    <img src="../assets/company/{{ $company->image }}" width="100">
                    @endif 
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Image </label>
                       <input class="form-control" type="file" id="formFile"  name="image" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        @if($company->logo )
                         <img src="../assets/company/{{ $company->logo }}" width="100">
                         @endif 
                         
                         </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Logo </label>
                       <input class="form-control" type="file" id="formFile"  name="logo" />
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Text</label>
                        <textarea class="form-control" id="defaultFormControlInput" name="text" 
                        aria-describedby="defaultFormControlHelp"> {!! $company->text !!} </textarea>

                    
                    </div>

                    <div class="pt-3 pb-3">
                        <label for="defaultFormControlInput" class="form-label">Link</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" name="link" value="{{ $company->link }}"
                            aria-describedby="defaultFormControlHelp" />
                    
                    </div>


                 <h5 class="pt-3 "> Section one</h5><hr>
                       
                       <div class="pt-3 pb-3">
                         @if($company->image1)
                            <img src="../assets/company/{{ $company->image1}}" width="100">
                            @endif
                         
                        </div>
                         <div class="pt-3 pb-3">
                             <label for="defaultFormControlInput" class="form-label">Image1 </label>
                            <input class="form-control" type="file" id="formFile"  name="image1" />
                         
                         </div>
                         <div class="pt-3 pb-3">
                            @if($company->logo1)
                               <img src="../assets/company/{{ $company->logo1}}" width="100">
                               @endif
                            
                           </div>
                         <div class="pt-3 pb-3">
                             <label for="defaultFormControlInput" class="form-label">Logo1 </label>
                            <input class="form-control" type="file" id="formFile"  name="logo1" />
                         
                         </div>
                         <div class="pt-3 pb-3">
                             <label for="defaultFormControlInput" class="form-label">Text1</label>
                             <textarea class="form-control" id="defaultFormControlInput" name="text1"
                             aria-describedby="defaultFormControlHelp">{!! $company->text1 !!} </textarea>
                         
                         </div>
     
                         <div class="pt-3 pb-3">
                             <label for="defaultFormControlInput" class="form-label">Link1</label>
                             <input type="text" class="form-control" id="defaultFormControlInput" name="link1"value="{{ $company->link1 }}"
                                 aria-describedby="defaultFormControlHelp" />
                         
                         </div>
                   
                         <h5 class="pt-3 "> Section Two</h5><hr>

                         <div class="pt-3 pb-3">
                           @if($company->image2)
                            <img src="../assets/company/{{ $company->image2}}" width="100">
                            @endif 
                         
                        </div>
                         <div class="pt-3 pb-3">
                             <label for="defaultFormControlInput" class="form-label">Image2 </label>
                            <input class="form-control" type="file" id="formFile"  name="image2" />
                         
                         </div>
                         <div class="pt-3 pb-3">
                            @if($company->logo2)
                             <img src="../assets/company/{{ $company->logo2}}" width="100">
                             @endif 
                          
                         </div>
                         <div class="pt-3 pb-3">
                             <label for="defaultFormControlInput" class="form-label">Logo2 </label>
                            <input class="form-control" type="file" id="formFile"  name="logo2" />
                         
                         </div>
                         <div class="pt-3 pb-3">
                             <label for="defaultFormControlInput" class="form-label">Text2</label>
                             <textarea class="form-control" id="defaultFormControlInput" name="text2"
                             aria-describedby="defaultFormControlHelp">{!! $company->text2 !!} </textarea>
                         
                         </div>
     
                         <div class="pt-3 pb-3">
                             <label for="defaultFormControlInput" class="form-label">Link2</label>
                             <input type="text" class="form-control" id="defaultFormControlInput" name="link2" value="{{ $company->link2 }}"
                                 aria-describedby="defaultFormControlHelp" />
                         
                         </div>


                         <h5 class="pt-3 "> Section Three</h5><hr>

                         <div class="pt-3 pb-3">
                          @if($company->image3)
                            <img src="../assets/company/{{ $company->image3}}" width="100">
                            @endif 
                         
                        </div>
                         <div class="pt-3 pb-3">
                             <label for="defaultFormControlInput" class="form-label">Image3 </label>
                            <input class="form-control" type="file" id="formFile"  name="image3" />
                         
                         </div>
                         <div class="pt-3 pb-3">
                            @if($company->logo3)
                              <img src="../assets/company/{{ $company->logo3}}" width="100">
                              @endif 
                           
                          </div>
                         <div class="pt-3 pb-3">
                             <label for="defaultFormControlInput" class="form-label">Logo3 </label>
                            <input class="form-control" type="file" id="formFile"  name="logo3" />
                         
                         </div>
                         <div class="pt-3 pb-3">
                             <label for="defaultFormControlInput" class="form-label">Text3</label>
                             <textarea class="form-control" id="defaultFormControlInput" name="text3"
                             aria-describedby="defaultFormControlHelp"> {!! $company->text3 !!}</textarea>
                         
                         </div>
     
                         <div class="pt-3 pb-3">
                             <label for="defaultFormControlInput" class="form-label">Link3</label>
                             <input type="text" class="form-control" id="defaultFormControlInput" name="link3" value="{{ $company->link3 }}"
                                 aria-describedby="defaultFormControlHelp" />
                         
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