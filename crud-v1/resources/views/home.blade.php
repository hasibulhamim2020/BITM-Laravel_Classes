@extends('master')
@section('title')
    Home
@endsection

@section('content')
    <section class="pt-4">

        <h1 class="text-center">Welcome To Student Management system of <br>
        <b>Dhaka International University...</b></h1>

        <h5 class="py-5">Here You can do Some operations like..</h5>
        <section>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Student</th>
                            <th>Department</th>
                            <th>Session</th>
                        </tr>
                        <tr>
                            <td>
                                <ol>
                                    <li>New Student Add</li>
                                    <li>Student List Check</li>
                                    <li>Student Data Update</li>
                                    <li>Student Data Delete</li>
                                </ol>
                            </td>
                            <td>
                                <ol>
                                    <li>New Department Add</li>
                                    <li>Department List Check</li>
                                    <li>Department Data Update</li>
                                    <li>Department Data Delete</li>
                                </ol>
                            </td>
                            <td>
                                <ol>
                                    <li>New Session Add</li>
                                    <li>Session List Check</li>
                                    <li>Session Data Update</li>
                                    <li>Session Data Delete</li>
                                </ol>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

    </section>
@endsection
