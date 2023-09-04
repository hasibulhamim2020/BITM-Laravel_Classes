@extends('master')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 -md-2">
                    <div class="card">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>sl</th>
                                <th>name</th>
                                <th>email</th>
                                <th>phone</th>
{{--                                <th>address</th>--}}
                                <th>image</th>
{{--                                <th>department</th>--}}
{{--                                <th>session</th>--}}
                                <th>action</th>
                            </tr>

                    @foreach($students as $student)

                            <tr>
                                <td>{{$student['id']}}</td>
                                <td>{{$student['name']}}</td>
                                <td>{{$student['email']}}</td>
                                <td>{{$student['phone']}}</td>
{{--                                <td>{{$student['address']}}</td>--}}
                                <td><img src="{{asset('assets')}}/img/{{$student['image']}}" alt="" class="img-fluid" style="height: 50px; width: 50px" ></td>
{{--                                <td>{{$student['department_id']}}</td>--}}
{{--                                <td>{{$student['session_id']}}</td>--}}
                                <td>
                                    <a href="{{ route('details', [
                                                                'id'=>$student['id']
                                                                ]
                                                                ) }}" class="btn btn-success"> details</a>
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
