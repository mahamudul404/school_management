@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Class: {{ $student_class->name }}</h1>

    <form action="{{ route('student_classes.update', $student_class->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Class Name</label>
            <input type="text" name="name" value="{{ $student_class->name }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Class</button>
    </form>

    <a href="{{ route('student_classes.index') }}" class="btn btn-secondary mt-3">Back to Classes</a>
</div>
@endsection
