@extends('master')
@section('title')
    New Student
@endsection

@section('content')
    <section class="pt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>Add New Student Details</b></h4>

                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="department" class="form-label">Department:</label>
                                <input type="text" id="department" name="department" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="session" class="form-label">Session:</label>
                                <input type="text" id="session" name="session" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone:</label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address:</label>
                                <input type="text" id="address" name="address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Upload Image</label>
                                <input type="text" id="image" name="image" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Add Student</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
