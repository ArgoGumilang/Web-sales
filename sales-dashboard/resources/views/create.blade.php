<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input User Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-sm mt-4">
    <div class="row justify-content-center pb-3">
        <div class="p-4 bg-light rounded-3 border col-xl-6 shadow-lg">
            <div class="text-center">
                <h4>Input User Baru</h4>
            </div>
            <hr>

            {{-- Pesan sukses --}}
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            {{-- Validasi error --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- FORM --}}
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold">Username (Telegram)</label>
                    <input type="text" class="form-control" name="username" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Sales</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">ID Telegram</label>
                    <input type="text" class="form-control" name="telegram_id" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="password_confirmation" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Role</label>
                    <select name="role" class="form-select" required>
                        <option value="0">0 - Super Admin</option>
                        <option value="1">1 - Admin</option>
                        <option value="2">2 - Sales</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-danger btn-lg mt-3">Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-success btn-lg mt-3">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

</body>
</html>
