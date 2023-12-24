@extends('layouts.app')

@section('content')


<div class="page-wrapper">
    <div class="create_content">








    <h2>Ticket Details</h2>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Trip</th>
            <th>Seat Number</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->user->name }}</td>
                <td>{{ $ticket->trip->location->name }} - {{ $ticket->trip->trip_date }}</td>
                <td>{{ $ticket->seat_number }}</td>
                <td>
                    <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('tickets.destroy', $ticket->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Cancel</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
