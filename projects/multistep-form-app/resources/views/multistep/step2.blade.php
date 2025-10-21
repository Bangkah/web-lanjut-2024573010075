@extends('layouts.app')

@section('title', 'Step 2 - Informasi Pendidikan')

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
                <div class="col-3 step-item active">
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
                <h4 class="mb-0">Step 2: Informasi Pendidikan</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('multistep.storeStep2') }}">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="education" class="form-label">Tingkat Pendidikan *</label>
                        <select class="form-select @error('education') is-invalid @enderror" 
                                id="education" name="education" required>
                            <option value="">Pilih Tingkat Pendidikan</option>
                            <option value="SMA" {{ old('education', session('step2_data.education') ?? '') == 'SMA' ? 'selected' : '' }}>SMA</option>
                            <option value="D3" {{ old('education', session('step2_data.education') ?? '') == 'D3' ? 'selected' : '' }}>D3</option>
                            <option value="S1" {{ old('education', session('step2_data.education') ?? '') == 'S1' ? 'selected' : '' }}>S1</option>
                            <option value="S2" {{ old('education', session('step2_data.education') ?? '') == 'S2' ? 'selected' : '' }}>S2</option>
                            <option value="S3" {{ old('education', session('step2_data.education') ?? '') == 'S3' ? 'selected' : '' }}>S3</option>
                        </select>
                        @error('education')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label for="institution" class="form-label">Nama Institusi *</label>
                            <input type="text" class="form-control @error('institution') is-invalid @enderror" 
                                   id="institution" name="institution" 
                                   value="{{ old('institution', session('step2_data.institution') ?? '') }}" 
                                   required>
                            @error('institution')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label for="graduation_year" class="form-label">Tahun Lulus *</label>
                            <input type="number" class="form-control @error('graduation_year') is-invalid @enderror" 
                                   id="graduation_year" name="graduation_year" 
                                   value="{{ old('graduation_year', session('step2_data.graduation_year') ?? '') }}" 
                                   min="1900" max="{{ date('Y') }}" required>
                            @error('graduation_year')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="major" class="form-label">Jurusan *</label>
                        <input type="text" class="form-control @error('major') is-invalid @enderror" 
                               id="major" name="major" 
                               value="{{ old('major', session('step2_data.major') ?? '') }}" 
                               required>
                        @error('major')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('multistep.step1') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Lanjut ke Step 3 <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
