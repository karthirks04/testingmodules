<!-- show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Record Details</h1>

    <div>
        <strong>Name:</strong> {{ $data->name }}
    </div>
    <div>
        <strong>Designation:</strong> {{ $data->designation }}
    </div>
    <div>
        <strong>Profile Image:</strong>
        @if($data->profile_image)
            <img src="{{ asset('storage/'.$data->profile_image) }}" alt="Profile Image" width="100">
        @else
            No image available
        @endif
    </div>
    <div>
        <a href="{{ route('crud.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection