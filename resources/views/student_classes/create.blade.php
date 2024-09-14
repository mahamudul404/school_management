@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Class</h1>

    <form action="{{ route('student_classes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Class Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Create Class</button>
    </form>

    <a href="{{ route('student_classes.index') }}" class="btn btn-secondary mt-3">Back to Classes</a>
</div>
@endsection
