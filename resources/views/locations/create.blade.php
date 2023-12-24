@extends('layouts.app')

@section('content')



<div class="page-wrapper">
    <div class="create_content">
        <a href="{{ route('locations.index') }}" class="btn btn-primary mb-3 float-right">Back</a>
    <h2>Create Location</h2>

    <form action="{{ route('locations.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Location Name</label>
            <input type="text" name="name" id="name" class="form-control">
            <input type="text" name="rental_price" id="rental_price" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create Location</button>
        
    </form>
@endsection
