@extends('layouts.app')

@section('title', 'Add Teachers')

@section('content')

<div class="container">
  <h1>Create Teachers</h1>
  <form action=" {{ route('teachers.store') }} " method="POST">
    @csrf
    <div class="mb-3">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="phone">Phone</label>
      <input type="number" name="phone" id="phone" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Add student</button>

  </form>

</div>
  
@endsection