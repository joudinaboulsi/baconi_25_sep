@extends('layouts.admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">


    <!-- Striped Rows -->
    <div class="card">

        <h5 class="card-header">Home - Sliders Section</h5>
        <div class="card-header">
            <a href="{{ route('sliderCreateCms') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                     <th>Title</th>
                     <th>subTitle</th>
                     <th>Link</th>
                     <th>url</th>
                        <th>Background</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                     @foreach ($sliders as $slider)
                        <tr>
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->subtitle }}</td>
                            <td>{{ $slider->link }}</td>

                            <td>{{ $slider->url }}</td>

                          
                            <td>
                                @if ($slider->background)
                                <img src="../assets/home/{{ $slider->background }}" width="150">
                                @endif
                            </td>
                        
                        
                            <td>
                                <a href="{{route('sliderEditCms',$slider->id)}}" class="btn btn-outline-success">Edit</a>
                                <form action="{{ route('sliderDelete',$slider->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button> 
                            
                                </form>
                            </td>

                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Striped Rows -->


</div>


@endsection