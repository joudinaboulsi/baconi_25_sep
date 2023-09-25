@extends('layouts.admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">


    <!-- Striped Rows -->
    <div class="card">

        <h5 class="card-header">Blog Page</h5>
        <div class="card-header">
            <a href="{{ route('blogCreateCms') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                     <th>Title</th>
                     <th>Text blog</th>
                     <th>Created By</th>
                     <th>Created at</th>
                     <th>Subtitle</th>
                     <th>Post blog</th>
                     <th>url</th>
                     <th>Small title1</th>
                     <th>Small title2</th>
                     <th>Small title3</th>
                     <th>Small title4</th>
                     <th>Small title5</th>
                     <th>Small title6</th>
                     <th>Small title7</th>
                     <th>Small title8</th>
                     <th>Image</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ Illuminate\Support\Str::limit($blog->title,20) }}</td>
                            <td>{!! Illuminate\Support\Str::limit($blog->text_blog,20) !!}</td>
                            <td>{{ $blog->by }}</td>
                            <td>{{ $blog->date }}</td>
                            <td>{{ Illuminate\Support\Str::limit($blog->subtitle, 20)}}</td>
                            <td>{!! Illuminate\Support\Str::limit($blog->description,20)  !!}</td>
                            <td>{{ $blog->url }}</td>
                            <td>{{ $blog->t1 }}</td>
                            <td>{{ $blog->t2 }}</td>
                            <td>{{ $blog->t3 }}</td>
                            <td>{{ $blog->t4 }}</td>
                            <td>{{ $blog->t5 }}</td>
                            <td>{{ $blog->t6 }}</td>
                            <td>{{ $blog->t7 }}</td>
                            <td>{{ $blog->t8 }}</td>
                       
                
                          
                            <td>
                                @if ($blog->image)
                                <img src="../assets/blog/{{ $blog->image }}" width="150">
                                @endif
                            </td>
                        
                        
                            <td>
                                <a href="{{route('blogEditCms',$blog->id)}}" class="btn btn-outline-success">Edit</a>
                                <form action="{{ route('blogDelete',$blog->id) }}" method="POST">
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