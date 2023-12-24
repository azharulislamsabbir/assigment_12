@extends('layouts.app')

@section('content')

<div class="page-wrapper">
    <div class="create_content">
    <h2>Edit User</h2>

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
    </div>
    </div>
@endsection
