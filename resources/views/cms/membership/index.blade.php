@extends('layouts.admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">


    <!-- Striped Rows -->
    <div class="card">

        <h5 class="card-header">About - Memberships Section</h5>
        <div class="card-header">
            <a href="{{ route('membershipCreate') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                     
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                     @foreach ($memberships as $membership)
                        <tr>
                            
                          
                            <td>
                                @if ($membership->image)
                                <img src="../assets/about/{{ $membership->image }}" width="150">
                                @endif
                            </td>
                        
                        
                            <td>
                                <a href="{{route('membershipEdit',$membership->id)}}" class="btn btn-outline-success">Edit</a>
                                <form action="{{ route('membershipDelete',$membership->id) }}" method="POST">
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