@extends('layouts.app')

@section('title', 'Step 1 - Informasi Pribadi')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <!-- Progress Bar -->
        <div class="step-progress">
            <div class="row">
                <div class="col-3 step-item active">
                    <div class="step-number">1</div>
                    <div>Informasi Pribadi</div>
                </div>
                <div class="col-3 step-item">
                    <div class="step-number">2</div>
                    <div>Pendidikan</div>
                </div>
                <div class="col-3 step-item">
                    <div class="step-number">3</div>
                    <div>Pengalaman</div>
                </div>
                <div class="col-3 step-item">
                    <div class="step-number">4</div>
                    <div>Ringkasan</div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Step 1: Informasi Pribadi</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('multistep.storeStep1') }}">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="full_name" class="form-label">Nama Lengkap *</label>
                            <input type="text" class="form-control @error('full_name') is-invalid @enderror" 
                                   id="full_name" name="full_name" 
                                   value="{{ old('full_name', session('step1_data.full_name') ?? '') }}" 
                                   required>
                            @error('full_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" 
                                   value="{{ old('email', session('step1_data.email') ?? '') }}" 
                                   required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Nomor Telepon *</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                                   id="phone" name="phone" 
                                   value="{{ old('phone', session('step1_data.phone') ?? '') }}" 
                                   required>
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label">Alamat *</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" 
                                   id="address" name="address" 
                                   value="{{ old('address', session('step1_data.address') ?? '') }}" 
                                   required>
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div></div> <!-- Spacer -->
                        <button type="submit" class="btn btn-primary">
                            Lanjut ke Step 2 <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
