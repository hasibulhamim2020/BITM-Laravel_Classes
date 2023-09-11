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
                        <div class="card-header"><h5><b>Session Create Form</b></h5></div>
                        <div class="card-body">
                            <form action="{{route('sessions.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Session Name</label>
                                    <input id="name" type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="code" class="form-label">Session code</label>
                                    <input id="code" type="code" name="code" class="form-control">
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
