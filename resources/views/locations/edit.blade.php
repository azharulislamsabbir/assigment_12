@extends('layouts.app')

@section('content')
\


<div class="page-wrapper">
    <div class="create_content">

    <h2>Edit Location</h2>

    <form action="{{ route('locations.update', $location->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Location Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $location->name }}">
            <input type="text" name="rental_price" id="rental_price" class="form-control" value="{{ $location->rental_price }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Location</button>
    </form>
@endsection
