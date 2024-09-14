@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Class: {{ $student_class->name }}</h1>

    <h3>Students in this Class:</h3>
    @if($student_class->students->count())
        <ul class="list-group">
            @foreach($student_class->students as $student)
                <li class="list-group-item">{{ $student->name }}</li>
            @endforeach
        </ul>
    @else
        <p>No students assigned to this class yet.</p>
    @endif

    <a href="{{ route('student_classes.index') }}" class="btn btn-secondary mt-3">Back to Classes</a>
</div>
@endsection
