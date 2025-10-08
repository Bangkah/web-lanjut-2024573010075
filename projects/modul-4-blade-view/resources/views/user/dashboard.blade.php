
    @extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
    <h2 class="mb-4">User Dashboard</h2>
    <p>Welcome to your dashboard, {{ $username }}!</p>
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">View Profile</a>
        <a href="#" class="list-group-item list-group-item-action">Edit Settings</a>
        <a href="#" class="list-group-item list-group-item-action">Logout</a>
    </div>
@endsection

