@extends('layouts.app')

@section('title', 'Pendaftaran Selesai')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-body py-5">
                <div class="mb-4">
                    <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                </div>
                <h2 class="card-title text-success mb-3">Pendaftaran Berhasil!</h2>
                <p class="card-text lead mb-4">
                    Terima kasih telah melengkapi formulir pendaftaran. Data Anda telah berhasil disimpan.
                </p>
                
                <div class="alert alert-info text-start">
                    <h6><i class="fas fa-envelope me-2"></i>Informasi Penting:</h6>
                    <ul class="mb-0">
                        <li>Anda akan menerima email konfirmasi dalam 24 jam</li>
                        <li>Proses verifikasi membutuhkan waktu 2-3 hari kerja</li>
                        <li>Tim kami akan menghubungi Anda untuk langkah selanjutnya</li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="{{ route('multistep.step1') }}" class="btn btn-primary me-2">
                        <i class="fas fa-plus me-2"></i>Daftar Lagi
                    </a>
                    <a href="/" class="btn btn-outline-secondary">
                        <i class="fas fa-home me-2"></i>Kembali ke Home
                    </a>
                </div>
            </div>
        </div>

        <!-- Debug Data (bisa dihapus di production) -->
        @if(env('APP_DEBUG'))
        <div class="card mt-4">
            <div class="card-header">
                <h6 class="mb-0">Data yang Disimpan (Debug)</h6>
            </div>
            <div class="card-body">
                <pre>{{ json_encode($data, JSON_PRETTY_PRINT) }}</pre>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
