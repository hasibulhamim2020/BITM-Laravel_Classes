@extends('master')
@section('title')
    Create
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
{{--@foreach($sessions as $session)--}}
{{--    {{$session->name}}    <br>--}}
{{--    @foreach($session->students as $student)--}}
{{--        {{$student->name}}--}}
{{--        <br>--}}
{{--@endforeach--}}
{{--    <br>--}}
{{--    <br>--}}
{{--@endforeach--}}




@foreach($sessions as $session)
    <table>
        <h5>{{$session->name}}</h5>
        <ol>
            @foreach($session->students as $student)
                <li>{{$student->name}}
                </li>
                @endforeach
        </ol>
    </table>
@endforeach



@endsection

            </section>
                </div>
