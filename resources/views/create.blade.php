@extends('layout')
@section('content')
    <h3>Add Student</h3>
    <form method="POST" action="{{route('students.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" class="form-control" name = "name">
        </div>

        <div class="form-group">
            <label for="name">Email: </label>
            <input type="text" class="form-control" name = "email">
        </div>

        <div class="form-group">
            <label for="name">Phone: </label>
            <input type="text" class="form-control" name = "phone">
        </div>

        <div class="form-group">
            <label for="name">Section: </label>
            <input type="text" class="form-control" name = "section">
        </div>

        <div class="forl-group">
            <label for="image">Image: </label>
            <input type="file" class="form-control" name = "image">
        </div>

        <button type="submit" class="btn btn-primary">Add student</button>
    </form>
@endsection