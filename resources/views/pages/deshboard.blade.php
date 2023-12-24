<!-- resources/views/dashboard/index.blade.php -->

@extends('layouts.app')

@section('deshboard_content')





<div class="page-wrapper">
    <div class="create_content">
 
    <h2>Dashboard</h2>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg1"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3> <p class="card-text">{{ $userCount }}</p></h3>
                        <span class="widget-title1">User <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg2"><i class="fa fa-ticket"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3> <p class="card-text">{{ $bookingCount }}</p></h3>
                        <span class="widget-title2">Booking <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg3"><i class="fa fa-bus" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>  <p class="card-text">{{ $tripCount }}</p></h3>
                        <span class="widget-title3">Trip <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg4"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3> <p class="card-text">{{ $locationCount }}</p></h3>
                        <span class="widget-title4">Lacation <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>


        @endsection