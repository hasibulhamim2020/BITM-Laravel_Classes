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
                        <div class="card-header"><h5><b>Student Create Form</b></h5></div>
                        <div class="card-body">
                            <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                                @csrf
{{--                            {{csrf_field()}}--}}
                                <div class="mb-3">
                                    <label for="name" class="form-label">Student Name</label>
                                    <input id="name" type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="department" class="form-label">Student Department</label>
                                    <select id="department" type="text" name="department_id" class="form-control">
                                        <option >Please Select A Department</option>

                                        @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="session" class="form-label">Student Session</label>
                                    <select id="session" type="text" name="session_id" class="form-control">
                                        <option >Please Select A Session</option>

                                        @foreach($sessions as $session)
                                            <option value="{{$session->id}}">{{$session->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Student Email</label>
                                    <input id="email" type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Student Phone</label>
                                    <input id="phone" type="text" name="phone" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Student address</label>
                                    <textarea id="address"  name="address" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Upload image</label>
                                    <input id="image" type="file" name="image" class="form-control">
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
