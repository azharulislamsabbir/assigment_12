@extends('layouts.app')

@section('content')







<div class="page-wrapper">
    <div class="create_content">
        <a href="{{ route('users.index') }}" class="btn btn-primary mb-3 float-right">Back</a>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <h2>Register User</h2>
    
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Register User</button>
    </form>
    </div>
    </div>
@endsection
