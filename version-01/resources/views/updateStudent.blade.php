@extends('master')
@section('title')
    Student Add
@endsection

@section('content')

    <section>
        <div class="py-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">Student Add Form</div>
                        <div class="card-body">
                            <div>
                                <form action="{{route('store')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Student Name</label>
                                        <input id="name" type="text" name="name" class="form-control">
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
                                    <button type="submit" class="btn btn-primary">Submit Student Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
