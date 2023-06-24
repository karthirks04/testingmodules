<!-- edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Record</h1>

    <form action="{{ route('crud.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $data->name }}" required>
        </div>
        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" name="designation" id="designation" class="form-control" value="{{ $data->designation }}" required>
        </div>
        <div class="form-group">
            <label for="profile_image">Profile Image</label>
            <input type="file" name="profile_image" id="profile_image" class="form-control-file">
            @if($data->profile_image)
                <img src="{{ asset('storage/'.$data->profile_image) }}" alt="Profile Image" width="100">
            @else
                No image available
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection