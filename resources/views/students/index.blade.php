@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <div class="container">
        <h1>Students</h1>
        <a href=" {{ route('students.create') }} " class="btn btn-primary mb-3">Add Students</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td> {{ $student->name }} </td>
                        <td>{{ $student->email }} </td>
                        <td> {{ $student->phone }} </td>
                        <td>
                            <a href=" {{ route('students.edit', $student->id) }} " class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you Sure?')" type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
