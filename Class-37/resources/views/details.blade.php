@extends('master')

@section('content')

    <section class="mt-5">
        <div>
            <h1 class="text-center py-2">Student Name : <b>{{$students['name']}}</b></h1>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>Student Sl</th>
                    <td>{{$students['id']}}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{$students['name']}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$students['email']}}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{$students['phone']}}</td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td>{{$students['department_name']}}</td>
                </tr>
                <tr>
                    <th>Department ID</th>
                    <td>{{$students['department_id']}}</td>
                </tr>
                <tr>
                    <th>Session</th>
                    <td>{{$students['session_year']}}</td>
                </tr>
                <tr>
                    <th>Session ID</th>
                    <td>{{$students['session_id']}}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{$students['address']}}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>{{$students['image']}}</td>
                </tr>
            </table>
        </div>
    </section>

@endsection
