@extends('master')
@section('title')
    View Student
@endsection
@section('content')
    <section class="pt-4">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><B>Students List</B></h4>
                        <table class="table table-striped table-hover table-bordered">
                            <tr>
                                <th>Id.</th>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->Phone}}</td>
                                    <td>{{$student->address}}</td>
                                    <td>
                                        <a href="{{route('edit-student',['id'=>$student->id])}}" class="btn btn-info">Edit</a>
                                            <form action="{{route('delete-student')}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$student->id}}" name="id">
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this!!')">Delete</button>
                                            </form>
                                        <a href=""></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
