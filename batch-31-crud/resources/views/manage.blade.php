
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
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>
                                        <a href="{{route('edit',['id'=>$student->id])}}" class="btn btn-primary btn-sm">Edit</a>
{{--                                        <a href="{{route('delete',['id'=>$student->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this!!')">Delete</a>--}}
                                        <form action="{{route('delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{$student->id}}" name="id">
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
