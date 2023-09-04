@extends('master')

@section('content')

    <section class="mt-5">
        <div>
            <span class="mx-auto my-auto"><img src="{{asset('assets')}}/img/{{$student['image']}}" alt="" class="img-fluid" style="height: 250px; width: 250px" ></span>
            <h1 class="text-center py-2">Student Name : <b>{{$student['name']}}</b></h1>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>Student Sl</th>
                    <td>{{$student['id']}}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{$student['name']}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$student['email']}}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{$student['phone']}}</td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td>{{$student['department_name']}}</td>
                </tr>
                <tr>
                    <th>Department ID</th>
                    <td>{{$student['department_id']}}</td>
                </tr>
                <tr>
                    <th>Session</th>
                    <td>{{$student['session_name']}}</td>
                </tr>
                <tr>
                    <th>Session ID</th>
                    <td>{{$student['session_id']}}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{$student['address']}}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><img src="{{asset('assets')}}/img/{{$student['image']}}" alt="" class="img-fluid" style="height: 50px; width: 50px" ></td>
                </tr>
            </table>
        </div>
    </section>

@endsection
