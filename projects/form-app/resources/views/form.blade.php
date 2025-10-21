<!DOCTYPE html>
<html>
<head>
    <title>Pengiriman Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Form Registrasi</h2>
    <form method="POST" action="{{ route('form.handle') }}">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Umur</label>
            <input type="number" name="age" class="form-control" value="{{ old('age') }}">
            @error('age') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
            @error('password') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="male"> Laki-laki
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="female"> Perempuan
            </div>
            @error('gender') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-select">
                <option value="">-- Pilih Role --</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            @error('role') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Bio</label>
            <textarea name="bio" class="form-control">{{ old('bio') }}</textarea>
            @error('bio') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" id="confirm" name="confirm" class="form-check-input">
            <label class="form-check-label" for="confirm">Saya konfirmasi informasi sudah benar</label>
            @error('confirm') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Submit</button>
    </form>

    <script>
        document.getElementById('confirm').addEventListener('change', function() {
            document.getElementById('submitBtn').disabled = !this.checked;
        });
    </script>
</body>
</html>
