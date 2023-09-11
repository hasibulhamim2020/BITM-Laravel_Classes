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
                        <div class="card-header"><h5><b>Session Edit Form</b></h5></div>
                        <div class="card-body">
                            <form action="{{route('departments.update',$session->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Session Name</label>
                                    <input value="{{$session->name}}" id="name" type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="code" class="form-label">Session code</label>
                                    <input value="{{$session->code}}" id="code" type="code" name="code" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Session Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
