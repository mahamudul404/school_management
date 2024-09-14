@extends('layouts.app')
@section('title', 'Teachers')
@section('content')
<div class="container">
    <h1>Teachers</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href=" {{ route('teachers.create') }} " class="btn btn-primary mb-3">Add Teacher</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td> {{ $teacher->name }} </td>
                    <td> {{ $teacher->email }} </td>
                    <td> {{ $teacher->phone }} </td>
                    <td>
                        <a href=" {{ route('teachers.edit', $teacher->id) }} " class="btn btn-warning">Edit</a>
                        <form action=" {{ route('teachers.destroy', $teacher->id) }} " method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
