@extends('layouts.app')

@section('content')

<div class="page-wrapper">
    <div class="create_content">
    <h2>Users</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Register User</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">View</a>


                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>

                    
                        <form action="{{ route('users.destroy', $user->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    
                </td>
            </tr>
        @endforeach
      
        
        </tbody>
    </table>


    @if ($users->hasPages())
    <div class="pagination">
        {{-- Previous Page Link --}}
        @if ($users->onFirstPage())
            <span class="btn btn-secondary disabled">Previous Page</span>
        @else
            <a href="{{ $users->previousPageUrl() }}" class="btn btn-primary mb-3 float-left">Previous Page</a>
        @endif

        {{-- Next Page Link --}}
        @if ($users->hasMorePages())
            <a href="{{ $users->nextPageUrl() }}" class="btn btn-primary mb-3 float-right">Next Page</a>
        @else
            <span class="btn btn-secondary disabled">Next Page</span>
        @endif
    </div>
@endif








   
    </div>
    </div>
@endsection
