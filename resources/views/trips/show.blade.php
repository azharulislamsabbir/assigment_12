@extends('layouts.app')

@section('content')



<div class="page-wrapper">
    <div class="create_content">

    <h2>Trip Details</h2>
    
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Location</th>
            <th>Trip Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $trip->id }}</td>
                <td>{{ $trip->location->name }}</td>
                <td>{{ $trip->trip_date }}</td>
                <td>
                    <a href="{{ route('trips.edit', $trip->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('trips.destroy', $trip->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
