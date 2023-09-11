
@extends('master')
@section('title')
    Create
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header"><h5><b>Student Manage Table</b></h5></div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-striped">
                                <tr>
                                    <th>Sl.</th>
                                    <th>deparment Name</th>
                                    <th>deparment code</th>
                                    <th>status</th>
                                    <th>action</th>
                                </tr>
                                @foreach ($departments as $department)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $department->name }}</td>
                                        <td>{{ $department->code }}</td>
                                        <td>{{ $department->status == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{route('departments.edit',$department->id)}}" class="btn btn-primary btn-sm">Edit</a>


                                            @if($department-> status == 1)
                                                <a href="{{route('departments.show',$department->id)}}" class="btn btn-info btn-sm">Inactive</a>
                                            @else
                                                <a href="{{route('departments.show',$department->id)}}" class="btn btn-info btn-sm">Active</a>
                                            @endif


                                                <form action="{{route('delete',['id'=>$department->id])}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$department->id}}" name="id">
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this!!')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
