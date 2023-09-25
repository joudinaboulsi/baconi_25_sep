@extends('layouts.admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">


    <!-- Striped Rows -->
    <div class="card">

        <h5 class="card-header">Service Tab One Section</h5>
        <div class="card-header">
            <a href="{{ route('tabOneCreate') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                       <th>title</th>
                        <th>text1</th>
                        <th>text2</th>
                        <th>text3</th>
                        <th>image</th>
                       
                        
                        <th>icon</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 @foreach ($tabs as $tab)
                        <tr>
             

                            <td>  {{ $tab->title1 }}</td>
                            <td>{{$tab->text1}}</td>
                            <td>{{$tab->text2}}</td>
                            <td>{{$tab->text3}}</td>
                            <td>{{$tab->text4}}</td>
                            <td>
                                @if ($tab->image)
                                <img src="../assets/service/{{ $tab->image }}" width="100">
                                @endif
                            </td>
                            <td>
                                @if ($tab->icon)
                                <img src="../assets/service/{{ $tab->icon }}">
                                @endif
                            </td>
                        
                        
                            <td>
                                <a href="{{route('tabOneEdit',$tab->id)}}" class="btn btn-outline-success">Edit</a>

                                <form action="{{ route('tabOneDelete',$tab->id) }}" method="POST">
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