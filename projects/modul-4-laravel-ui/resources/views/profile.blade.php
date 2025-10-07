@extends('layouts.app')

@section('title', 'Profile - Theme Demo')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="theme-demo {{ $theme === 'dark' ? 'bg-dark border-light' : 'bg-white border' }} mb-4">
            <h1 class="mb-4">Profile - Theme Demo</h1>
            <p class="lead">Halaman ini menunjukkan implementasi <strong>Theme Switching</strong> dengan session persistence.</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card {{ $theme === 'dark' ? 'bg-dark border-light' : '' }} text-center">
                    <div class="card-body">
                        <div class="mb-3">
                            <span class="fs-1">👤</span>
                        </div>
                        <h4>{{ $user['name'] }}</h4>
                        <p class="text-muted">{{ $user['email'] }}</p>
                        <p class="text-muted">Bergabung: {{ date('d M Y', strtotime($user['join_date'])) }}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8">
                <div class="card {{ $theme === 'dark' ? 'bg-dark border-light' : '' }}">
                    <div class="card-header">
                        <h5>Preferensi Pengguna</h5>
                    </div>
                    <div class="card-body">
                        <h6>Theme Saat Ini:</h6>
                        <div class="alert alert-{{ $theme === 'dark' ? 'dark' : 'info' }} d-flex align-items-center">
                            <span class="me-2 fs-4">{{ $theme === 'dark' ? '🌙' : '☀️' }}</span>
                            <div>
                                <strong>Mode {{ ucfirst($theme) }}</strong> - 
                                @if($theme === 'dark')
                                    Nyaman di malam hari dan mengurangi ketegangan mata.
                                @else
                                    Cerah dan jelas, cocok untuk siang hari.
                                @endif
                            </div>
                        </div>
                        
                        <h6 class="mt-4">Preferensi Lainnya:</h6>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach($user['preferences'] as $pref)
                            <span class="badge bg-secondary">{{ $pref }}</span>
                            @endforeach
                        </div>
                        
                        <div class="mt-4">
                            <h6>Ubah Tema:</h6>
                            <div class="btn-group" role="group">
                                <a href="{{ route('switch-theme', 'light') }}" 
                                   class="btn btn-{{ $theme === 'light' ? 'primary' : 'outline-primary' }}">
                                    Light Mode
                                </a>
                                <a href="{{ route('switch-theme', 'dark') }}" 
                                   class="btn btn-{{ $theme === 'dark' ? 'primary' : 'outline-primary' }}">
                                    Dark Mode
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
