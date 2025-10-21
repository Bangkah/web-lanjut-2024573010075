@extends('layouts.app')

@section('title', 'Ringkasan Data')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <!-- Progress Bar -->
        <div class="step-progress">
            <div class="row">
                <div class="col-3 step-item completed">
                    <div class="step-number">✓</div>
                    <div>Informasi Pribadi</div>
                </div>
                <div class="col-3 step-item completed">
                    <div class="step-number">✓</div>
                    <div>Pendidikan</div>
                </div>
                <div class="col-3 step-item completed">
                    <div class="step-number">✓</div>
                    <div>Pengalaman</div>
                </div>
                <div class="col-3 step-item active">
                    <div class="step-number">4</div>
                    <div>Ringkasan</div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Ringkasan Data Anda</h4>
            </div>
            <div class="card-body">
                <!-- Informasi Pribadi -->
                <div class="mb-4">
                    <h5 class="border-bottom pb-2">
                        <i class="fas fa-user me-2"></i>Informasi Pribadi
                        <a href="{{ route('multistep.step1') }}" class="btn btn-sm btn-outline-primary float-end">Edit</a>
                    </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Nama Lengkap:</strong><br>
                            {{ $step1Data['full_name'] }}
                        </div>
                        <div class="col-md-6">
                            <strong>Email:</strong><br>
                            {{ $step1Data['email'] }}
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <strong>Telepon:</strong><br>
                            {{ $step1Data['phone'] }}
                        </div>
                        <div class="col-md-6">
                            <strong>Alamat:</strong><br>
                            {{ $step1Data['address'] }}
                        </div>
                    </div>
                </div>

                <!-- Informasi Pendidikan -->
                <div class="mb-4">
                    <h5 class="border-bottom pb-2">
                        <i class="fas fa-graduation-cap me-2"></i>Informasi Pendidikan
                        <a href="{{ route('multistep.step2') }}" class="btn btn-sm btn-outline-primary float-end">Edit</a>
                    </h5>
                    <div class="row">
                        <div class="col-md-4">
                            <strong>Tingkat Pendidikan:</strong><br>
                            {{ $step2Data['education'] }}
                        </div>
                        <div class="col-md-4">
                            <strong>Institusi:</strong><br>
                            {{ $step2Data['institution'] }}
                        </div>
                        <div class="col-md-4">
                            <strong>Tahun Lulus:</strong><br>
                            {{ $step2Data['graduation_year'] }}
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <strong>Jurusan:</strong><br>
                            {{ $step2Data['major'] }}
                        </div>
                    </div>
                </div>

                <!-- Pengalaman Kerja -->
                <div class="mb-4">
                    <h5 class="border-bottom pb-2">
                        <i class="fas fa-briefcase me-2"></i>Pengalaman Kerja
                        <a href="{{ route('multistep.step3') }}" class="btn btn-sm btn-outline-primary float-end">Edit</a>
                    </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Pekerjaan Saat Ini:</strong><br>
                            {{ $step3Data['current_job'] ?? 'Tidak disebutkan' }}
                        </div>
                        <div class="col-md-6">
                            <strong>Perusahaan:</strong><br>
                            {{ $step3Data['company'] ?? 'Tidak disebutkan' }}
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <strong>Pengalaman Kerja:</strong><br>
                            {{ $step3Data['experience_years'] }} tahun
                        </div>
                        <div class="col-md-6">
                            <strong>Keahlian:</strong><br>
                            {{ $step3Data['skills'] }}
                        </div>
                    </div>
                </div>

                <div class="alert alert-info">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Perhatian:</strong> Pastikan semua data sudah benar sebelum mengirim.
                </div>

                <form method="POST" action="{{ route('multistep.complete') }}">
                    @csrf
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('multistep.step3') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Kembali
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-check me-2"></i>Kirim Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
