@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Subject create page</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action=" {{ route('subjects.update', $subject) }} " method="POST">
          @csrf
          @method('PUT')
          <div>
            <label for="name">Subject Name</label>
            <input type="text" name="name" class="form-control" value=" {{ $subject->name }} " required>
          </div>

          <button type="submit" class="btn btn-success mt-3">Update subject</button>

        </form>
        <a href=" {{ route('subjects.index') }} " class="btn btn-dark mt-3 text-center">Back to Subject</a>
    </div>
@endsection
