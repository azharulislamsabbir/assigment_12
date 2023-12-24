<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SeatAllocation;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = SeatAllocation::with(['user', 'trip'])->get();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        $users = User::all();
        $trips = Trip::all();
        return view('tickets.create', compact('users', 'trips'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'trip_id' => 'required|exists:trips,id',
            'seat_number' => 'required|integer|min:1|max:36',
        ]);

        // Check if the seat is available for the given trip

        $existingBooking = SeatAllocation::where('trip_id', $request->trip_id)
            ->where('seat_number', $request->seat_number)
            ->exists();

        if ($existingBooking) {
            return redirect()->back()->with('error', 'Seat already booked for this trip');
        }

        SeatAllocation::create($request->all());

        return redirect()->route('tickets.index')->with('success', 'Ticket booked successfully');
    }

    public function show($ticketId)
    {
        $ticket = SeatAllocation::with(['user', 'trip'])->findOrFail($ticketId);
        return view('tickets.show', compact('ticket'));
    }

    public function edit($ticketId)
    {
        $ticket = SeatAllocation::findOrFail($ticketId);
        $users = User::all();
        $trips = Trip::all();
        return view('tickets.edit', compact('ticket', 'users', 'trips'));
    }

    public function update(Request $request, $ticketId)
    {
        $ticket = SeatAllocation::findOrFail($ticketId);

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'trip_id' => 'required|exists:trips,id',
            'seat_number' => 'required|integer|min:1|max:36',
        ]);

        // Check if the seat is available for the given trip
        $existingBooking = SeatAllocation::where('trip_id', $request->trip_id)
            ->where('seat_number', $request->seat_number)
            ->where('id', '!=', $ticket->id)
            ->exists();

        if ($existingBooking) {
            return redirect()->back()->with('error', 'Seat already booked for this trip');
        }

        $ticket->update($request->all());

        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully');
    }

    public function destroy($ticketId)
    {
        $ticket = SeatAllocation::findOrFail($ticketId);
        $ticket->delete();

        return redirect()->route('tickets.index')->with('success', 'Ticket canceled successfully');
    }
}
