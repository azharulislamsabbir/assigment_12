@extends('layouts.app')

@section('content')


<div class="page-wrapper">
    <div class="create_content">


        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <h2>Booked Tickets</h2>
    <a href="{{ route('tickets.create') }}" class="btn btn-primary mb-3">Book Ticket</a>

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
        @foreach($tickets as $ticket)
            <tr>
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->user->name }}</td>
                <td>{{ $ticket->trip->location->name }} - {{ $ticket->trip->trip_date }}</td>
                <td>{{ $ticket->seat_number }}</td>
                <td>
                    <a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-info">View</a>
                    <form action="{{ route('tickets.destroy', $ticket->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Cancel</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
