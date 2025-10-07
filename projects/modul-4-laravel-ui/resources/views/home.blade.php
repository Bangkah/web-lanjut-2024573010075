@extends('layouts.app')

@section('title', 'Home - Integrated Demo')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="theme-demo {{ $theme === 'dark' ? 'bg-dark border-light' : 'bg-white border' }} mb-5">
            <h1 class="display-4 mb-4">🚀 Laravel UI Integrated Demo</h1>
            <p class="lead">Demonstrasi lengkap Partial Views, Blade Components, dan Theme Switching dalam satu aplikasi terpadu.</p>
            
            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <x-feature-card 
                        title="Partial Views"
                        icon="📁"
                        description="Gunakan @include untuk reusable UI components dengan data sederhana."
                        badge="Latihan 13"
                    />
                </div>
                <div class="col-md-4 mb-4">
                    <x-feature-card 
                        title="Blade Components" 
                        icon="🧩"
                        description="Komponen Blade dengan props dan slots untuk UI yang lebih kompleks."
                        badge="Latihan 14"
                    />
                </div>
                <div class="col-md-4 mb-4">
                    <x-feature-card 
                        title="Theme Switching"
                        icon="🎨"
                        description="Toggle antara light dan dark mode dengan session persistence."
                        badge="Latihan 15"
                    />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card {{ $theme === 'dark' ? 'bg-dark border-light' : '' }} mb-4">
                    <div class="card-header">
                        <h5>Fitur Utama</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach($features as $feature)
                            <li class="list-group-item {{ $theme === 'dark' ? 'bg-dark text-light' : '' }}">
                                - {{ $feature }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card {{ $theme === 'dark' ? 'bg-dark border-light' : '' }}">
                    <div class="card-header">
                        <h5>Teknologi yang Digunakan</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-primary">Laravel 12</span>
                            <span class="badge bg-success">Blade Templates</span>
                            <span class="badge bg-info">Bootstrap 5</span>
                            <span class="badge bg-warning">PHP 8.4</span>
                            <span class="badge bg-danger">Session Management</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
