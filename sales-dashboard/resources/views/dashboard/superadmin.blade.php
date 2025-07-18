<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard Super Admin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Dashboard Super Admin</span>
    </div>
  </nav>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card shadow">
          <div class="card-header bg-white">
            <h5 class="mb-0">Selamat datang Super Admin!</h5>
          </div>
          <div class="card-body">
            <p class="text-success fw-semibold">You're logged in as Super Admin!</p>
            <a href="{{ route('users.create') }}" class="btn btn-success">
              <i class="bi bi-person-plus"></i> Create User
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
