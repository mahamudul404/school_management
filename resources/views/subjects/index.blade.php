@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Subjects List</h1>

        <a href=" {{ route('subjects.create') }} " class="btn btn-primary">Add new Subjects </a>

        <table class="table table-bordered mt-4">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($subjects as $subject)
                    <tr>
                        <th> {{ $subject->id }} </th>
                        <th> {{ $subject->name }} </th>
                        <th>
                          <a href=" {{ route('subjects.edit', $subject) }} " class="btn btn-primary">Edit</a>
                          <form action=" {{ route('subjects.destroy', $subject->id) }} " method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </th>
                    </tr>
                @endforeach

            </tbody>
        </table>


    </div>
@endsection
