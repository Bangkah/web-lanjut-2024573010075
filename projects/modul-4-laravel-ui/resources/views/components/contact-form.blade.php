@props(['title', 'icon', 'description', 'badge', 'theme', 'name', 'role', 'departments' => 'light'])
<div class="card {{ $theme === 'dark' ? 'bg-dark border-light' : '' }} h-100">
    <div class="card-header">
        <h5>Form Kontak</h5>
    </div>
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control {{ $theme === 'dark' ? 'bg-dark text-light border-light' : '' }}" placeholder="Masukkan nama Anda">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control {{ $theme ===  'dark' ? 'bg-dark text-light border-light' : '' }}" placeholder="nama@example.com">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Department</label>
                <select class="form-select {{ $theme === 'dark' ? 'bg-dark text-light border-light' : '' }}">
                    <option selected>Pilih department...</option>
                    @foreach($departments as $dept)
                    <option value="{{ $dept }}">{{ $dept }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Pesan</label>
                <textarea class="form-control {{ $theme === 'dark' ? 'bg-dark text-light border-light' : '' }}" rows="4" placeholder="Tulis pesan Anda..."></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>
</div>
