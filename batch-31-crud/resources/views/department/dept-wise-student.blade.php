{{$department->name}}

@foreach($department->students as $student)
    {{$student->name}}
    <br>
@endforeach
