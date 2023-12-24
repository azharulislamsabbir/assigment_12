<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\SeatAllocation;

class LayoutController extends Controller
{


    public function home(){
        return view('pages.home');
       }
  

       public function deshbordshow()
       {
           $userCount = User::count();
           $bookingCount = SeatAllocation::count();
           $tripCount = Trip::count();
           $locationCount = Location::count();
   
           return view('pages.deshboard', compact('userCount', 'bookingCount', 'tripCount', 'locationCount'));
       }
   
}
