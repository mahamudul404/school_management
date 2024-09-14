@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Classes List</h1>

    <a href="{{ route('student_classes.create') }}" class="btn btn-primary mb-3">Add New Class</a>

    @if($student_classes->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($student_classes as $class)
                    <tr>
                        <td>{{ $class->id }}</td>
                        <td>{{ $class->name }}</td>
                        <td>
                            <a href="{{ route('student_classes.show', $class->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('student_classes.edit', $class->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('student_classes.destroy', $class->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No classes available.</p>
    @endif
</div>
@endsection
