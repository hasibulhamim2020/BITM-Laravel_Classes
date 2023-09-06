@extends('master')
@section('title')
    View Student
@endsection

@section('content')

    <section>
        <div class="py-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">Add Student</div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <td>Student ID</td>
                                    <td>Student Name</td>
                                    <td>Email</td>
                                    <td>Phone</td>
                                    <td>Address</td>
                                    <td>Action</td>
                                </tr>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->address}}</td>
                                        <td>
                                            <a href="{{$student->id}}" type="button"></a>
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
