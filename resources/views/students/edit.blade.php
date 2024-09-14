@extends('layouts.app')
@section('title', 'Edit Student')

@section('content')
 <div class="container">
  <h1>Edit Students</h1>
  <form action=" {{ route('students.update', $student->id) }} " method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}" required>
    </div>

    <div class="mb-3">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control" value="{{$student->email}}" required>
    </div>

    <div class="mb-3">
      <label for="phone">Phone</label>
      <input type="number" name="phone" id="phone" class="form-control" value="{{$student->phone}}" required>
    </div>

    <button type="submit" class="btn btn-primary">Add student</button>

  </form>

</div>
  

@endsection