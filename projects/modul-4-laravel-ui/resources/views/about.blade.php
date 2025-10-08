@extends('layouts.app')
@props(['title', 'icon', 'description', 'badge', 'theme' => 'light'])
@section('title', 'About - Partial Views Demo')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="theme-demo {{ $theme === 'dark' ? 'bg-dark border-light' : 'bg-white border' }} mb-4">
            <h1 class="mb-4">About - Partial Views</h1>
            <p class="lead">Halaman ini mendemonstrasikan penggunaan <strong>Partial Views</strong> dengan <code>@@include</code> directive.</p>
        </div>

        <h3 class="mb-4">Tim Kami</h3>
          @php
            $avatars = ['👨💻','👩🎨','👨💼'];
        @endphp
        <div class="row">
            @foreach($team as $member)
            <x-team-member 
                :name="$member['name']"
                :role="$member['role']"
                :theme="$theme"
                :avatar="['👨💻','👩🎨','👨💼'][$loop->index]"
                :description="'Bergabung sejak 2024 dan berkontribusi dalam pengembangan.'"
            />
            @endforeach
        </div>

        <!-- Demonstrasi Partial View dengan Data -->
        @include('partials.team-stats', ['theme' => $theme])
    </div>
</div>
@endsection
