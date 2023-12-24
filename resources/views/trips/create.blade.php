@extends('layouts.app')

@section('content')


<div class="page-wrapper">
    <div class="create_content">
        <a href="{{ route('trips.index') }}" class="btn btn-primary mb-3 float-right">Back</a>
    <h2>Create Trip</h2>

    <form action="{{ route('trips.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="location_id">Location</label>
            <select name="location_id" id="location_id" class="form-control">
                @foreach($locations as $location)
                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="trip_date">Trip Date</label>
            <input type="date" name="trip_date" id="trip_date" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create Trip</button>
        
    </form>
@endsection
