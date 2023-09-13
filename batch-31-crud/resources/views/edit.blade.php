@extends('master')
@section('title')
    Edit
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header"><h5><b>Student Create Form</b></h5></div>
                        <div class="card-body">
                            <form action="{{route('update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                {{--                            {{csrf_field()}}--}}
                                <input type="hidden" value="{{ $student->id }}" name="id">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Student Name</label>
                                    <input value="{{ $student->name }}" id="name" type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="department" class="form-label">Student Department</label>
                                    <select id="department" type="text" name="department_id" class="form-control">
{{--                                        <option >{{$student->department->name}}</option>--}}
                                        @foreach($departments as $department)
                                            <option value="{{$department->id}}" {{($department->id == $student->department_id)? 'selected':''}}>{{$department->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="session" class="form-label">Student Session</label>
                                    <select id="session" type="text" name="session_id" class="form-control">
{{--                                        <option >{{$student->session->name}}</option>--}}
                                        @foreach($sessions as $session)
                                            <option value="{{$session->id}}" {{($session->id == $student->session_id)? 'selected':''}}>{{$session->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Student Email</label>
                                    <input value="{{ $student->email }}" id="email" type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Student Phone</label>
                                    <input value="{{ $student->phone }}" id="phone" type="text" name="phone" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Student address</label>
                                    <textarea id="address"  name="address" class="form-control">{{ $student->address }}</textarea>
                                </div>
                                <div>
                                    <label for="image" class="form-label">Image</label>
                                    <br>
                                    <img src="{{ asset($student->image) }}" style="height: 150px" width="150px" alt="Not found">
                                    <br><br>
                                    <input id="image" type="file" name="image" class="form-control">
                                    <br><br>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Student Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
