@extends('layouts.app')

@section('content')




<div class="page-wrapper">
    <div class="create_content">









    <h2>Edit Ticket</h2>

    <form action="{{ route('tickets.update', $ticket->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="user_id">Select User</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $ticket->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="trip_id">Select Trip</label>
            <select name="trip_id" id="trip_id" class="form-control">
                @foreach($trips as $trip)
                    <option value="{{ $trip->id }}" {{ $ticket->trip_id == $trip->id ? 'selected' : '' }}>{{ $trip->location->name }} - {{ $trip->trip_date }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="seat_number">Select Seat Number</label>
            <select name="seat_number" id="seat_number" class="form-control">
                @for ($i = 1; $i <= 36; $i++)
                    <option value="{{ $i }}" {{ $ticket->seat_number == $i ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Ticket</button>
    </form>
@endsection
