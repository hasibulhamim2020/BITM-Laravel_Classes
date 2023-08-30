@extends('master')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div>
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
{{--                                <th>address</th>--}}
                                <th>Image</th>
{{--                                <th>department</th>--}}
{{--                                <th>session</th>--}}
                                <th>Action</th>
                            </tr>

                    @foreach($students as $student)

                            <tr>
                                <td>{{$student['id']}}</td>
                                <td>{{$student['name']}}</td>
                                <td>{{$student['email']}}</td>
                                <td>{{$student['phone']}}</td>
{{--                                <td>{{$student['address']}}</td>--}}
                                <td>{{$student['image']}}</td>
{{--                                <td>{{$student['department_id']}}</td>--}}
{{--                                <td>{{$student['session_id']}}</td>--}}
                                <td>
                                    <a href="{{ route('details', [
                                                                'id'=>$student['id']
                                                                ]
                                                                ) }}" class="btn btn-success">Details</a>
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
