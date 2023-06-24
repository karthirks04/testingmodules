<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Record</h1>

    <form action="{{ route('crud.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" name="designation" id="designation" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="profile_image">Profile Image</label>
            <input type="file" name="profile_image" id="profile_image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection