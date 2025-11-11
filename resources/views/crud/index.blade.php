<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data CRUD</title>
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet"
  >
  <style>
    /* === Gradasi Modern === */
    body {
      background: linear-gradient(135deg, #6C63FF, #8E2DE2, #4A00E0);
      background-size: 300% 300%;
      animation: moveGradient 12s ease infinite;
      font-family: "Poppins", sans-serif;
    }

    @keyframes moveGradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* === Navbar Transparan & Blur === */
    .navbar {
      background: rgba(0, 0, 0, 0.35) !important;
      backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.15);
    }

    .navbar-brand {
      font-weight: 600;
      color: #fff !important;
      letter-spacing: 0.5px;
    }

    .nav-link {
      color: rgba(255, 255, 255, 0.8) !important;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      color: #fff !important;
      transform: translateY(-2px);
    }

    .nav-link.text-warning {
      color: #FFD700 !important;
    }

    /* === Container Card === */
    .card {
      background: rgba(255, 255, 255, 0.15);
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      color: #fff;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.35);
    }

    /* === Tabel === */
    table {
      border-radius: 12px;
      overflow: hidden;
      background-color: rgba(255, 255, 255, 0.9);
    }

    thead {
      background: linear-gradient(90deg, #6C63FF, #4A00E0);
      color: #fff;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    tbody tr:hover {
      background-color: rgba(108, 99, 255, 0.1);
      transition: 0.2s;
    }

    /* === Tombol === */
    .btn-success {
      background: linear-gradient(90deg, #00C9A7, #00B4DB);
      border: none;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    .btn-success:hover {
      background: linear-gradient(90deg, #00B4DB, #0083B0);
      transform: scale(1.05);
    }

    .btn-warning {
      background: linear-gradient(90deg, #FFB347, #FFCC33);
      border: none;
      color: #fff;
    }

    .btn-warning:hover {
      background: linear-gradient(90deg, #FFCC33, #FFB347);
      transform: scale(1.05);
    }

    .btn-danger {
      background: linear-gradient(90deg, #FF416C, #FF4B2B);
      border: none;
    }

    .btn-danger:hover {
      transform: scale(1.05);
      background: linear-gradient(90deg, #FF4B2B, #FF416C);
    }

    h3 {
      color: #fff;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">Sistem CRUD</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning fw-bold" href="{{ route('logout') }}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten -->
  <div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h3>Data Keahlian</h3>
      <a href="{{ route('crud.create') }}" class="btn btn-success">+ Tambah Data</a>
    </div>

    <div class="card shadow border-0 rounded-4">
      <div class="card-body">
        <table class="table table-striped table-bordered align-middle text-center mb-0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Keahlian</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            @forelse ($data as $item)
              <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['keahlian'] }}</td>
                <td>
                  @if ($item['foto'])
                    <img src="{{ asset('uploads/'.$item['foto']) }}" width="60" class="rounded-3 shadow-sm">
                  @endif
                </td>
                <td>
                  <a href="{{ route('crud.edit', $item['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                  <a href="{{ route('crud.delete', $item['id']) }}" class="btn btn-danger btn-sm"
                     onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                  </a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="text-muted">Belum ada data.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
