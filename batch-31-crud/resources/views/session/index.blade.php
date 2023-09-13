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
                                    <th>Session Name</th>
                                    <th>Session code</th>
                                    <th>status</th>
                                    <th>action</th>
                                </tr>
                                @foreach ($sessions as $session)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $session->name }}</td>
                                        <td>{{ $session->code }}</td>
                                        <td>{{ $session->status == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{route('sessions.edit',$session->id)}}" class="btn btn-primary btn-sm">Edit</a>

                                            <a href="{{route('session.wise.student')}}" class="btn btn-success btn-sm">session wise student list</a>

                                        @if($session-> status == 1)
                                                <a href="{{route('sessions.show',$session->id)}}" class="btn btn-info btn-sm">Inactive</a>
                                            @else
                                                <a href="{{route('sessions.show',$session->id)}}" class="btn btn-info btn-sm">Active</a>
                                            @endif
                                                <form action="{{route('sessions.destroy',$session->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this!!')">Delete</button>
                                                </form>
                                        </td>
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
