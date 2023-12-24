@extends('layouts.app')

@section('content')


<div class="page-wrapper">
    <div class="create_content">

    <h2>Edit Trip</h2>

    <form action="{{ route('trips.update', $trip->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="location_id">Location</label>
            <select name="location_id" id="location_id" class="form-control">
                @foreach($locations as $location)
                    <option value="{{ $location->id }}" {{ $trip->location_id == $location->id ? 'selected' : '' }}>{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="trip_date">Trip Date</label>
            <input type="date" name="trip_date" id="trip_date" class="form-control" value="{{ $trip->trip_date }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Trip</button>
    </form>
@endsection
