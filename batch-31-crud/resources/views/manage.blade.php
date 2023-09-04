
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
                                </tr>

                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
{{--                                    <td>{{ $student->id }}</td>--}}
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->address }}</td>
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
