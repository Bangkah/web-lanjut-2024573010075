<!DOCTYPE html>
<html>
<head>
    <title>Blade Logic Demo</title>
    <meta charset="UTF-8">
    
</head>
<body>
    <h1>Blade Control Structures Demo</h1>
    
    <h2>1. @@if / @@else</h2>
    @if ($isLoggedIn)
        <p>Welcome back, user!</p>
    @else
        <p>Please log in.</p>
    @endif
    
    <h2>2.@@    foreach</h2>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user['name'] }} - Role: {{ $user['role'] }}</li>
        @endforeach
    </ul>
    
    <h2>3.@@forelse</h2>
    @forelse ($products as $product)
        <p>{{ $product }}</p>
    @empty  
        <p>No products found.</p>
    @endforelse
    
    <h2>4. @@isset</h2>
    @isset($profile['email'])
        <p>User Email: {{ $profile['email'] }}</p>
    @endisset
    
    <h2>5. @@empty</h2>
    @empty($profile['phone'])
        <p>No phone number available.</p>
    @endempty
    
    <h2>6. @    @switch</h2>
    @switch($status)
        @case('active')
            <p>Status: Active</p>
            @break
        @case('inactive')
            <p>Status: Inactive</p>
            @break
        @default
            <p>Status: Unknown</p>
    @endswitch
</body>
</html>
