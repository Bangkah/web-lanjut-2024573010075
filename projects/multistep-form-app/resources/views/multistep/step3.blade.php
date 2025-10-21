@extends('layouts.app')

@section('title', 'Step 3 - Pengalaman Kerja')

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
                <div class="col-3 step-item active">
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
                <h4 class="mb-0">Step 3: Pengalaman Kerja</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('multistep.storeStep3') }}">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="current_job" class="form-label">Pekerjaan Saat Ini</label>
                            <input type="text" class="form-control @error('current_job') is-invalid @enderror" 
                                   id="current_job" name="current_job" 
                                   value="{{ old('current_job', session('step3_data.current_job') ?? '') }}">
                            @error('current_job')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="company" class="form-label">Perusahaan</label>
                            <input type="text" class="form-control @error('company') is-invalid @enderror" 
                                   id="company" name="company" 
                                   value="{{ old('company', session('step3_data.company') ?? '') }}">
                            @error('company')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="experience_years" class="form-label">Pengalaman Kerja (Tahun) *</label>
                            <input type="number" class="form-control @error('experience_years') is-invalid @enderror" 
                                   id="experience_years" name="experience_years" 
                                   value="{{ old('experience_years', session('step3_data.experience_years') ?? '') }}" 
                                   min="0" max="50" required>
                            @error('experience_years')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="skills" class="form-label">Keahlian/Keterampilan *</label>
                        <textarea class="form-control @error('skills') is-invalid @enderror" 
                                  id="skills" name="skills" rows="3" 
                                  placeholder="Contoh: PHP, Laravel, JavaScript, MySQL..." 
                                  required>{{ old('skills', session('step3_data.skills') ?? '') }}</textarea>
                        @error('skills')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Pisahkan setiap keahlian dengan koma</div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('multistep.step2') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Lihat Ringkasan <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
 