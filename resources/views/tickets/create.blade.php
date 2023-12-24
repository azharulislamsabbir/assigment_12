@extends('layouts.app')

@section('content')



<div class="page-wrapper">
    <div class="create_content">




        <a href="{{ route('tickets.index') }}" class="btn btn-primary mb-3 float-right">Back</a>

    <h2>Book Ticket</h2>

    <form action="{{ route('tickets.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="user_id">Select User</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="trip_id">Select Trip</label>
            <select name="trip_id" id="trip_id" class="form-control">
                @foreach($trips as $trip)
                    <option value="{{ $trip->id }}">{{ $trip->location->name }} - {{ $trip->trip_date }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="seat_number">Select Seat Number</label>
            <select name="seat_number" id="seat_number" class="form-control">
                @for ($i = 1; $i <= 36; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Book Ticket</button>
    </form>
@endsection
