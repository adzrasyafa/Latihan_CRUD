<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard | Sistem CRUD</title>
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet"
  >
  <style>
    /* === Background kalcer modern === */
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #6C63FF, #8E2DE2, #4A00E0);
      background-size: 300% 300%;
      animation: gradientMove 10s ease infinite;
      font-family: "Poppins", sans-serif;
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* === Navbar modern === */
    .navbar {
      background: rgba(0, 0, 0, 0.3) !important;
      backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .navbar-brand {
      color: #fff !important;
      font-weight: 600;
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

    /* === Card Dashboard === */
    .card {
      background: rgba(255, 255, 255, 0.15);
      border: 1px solid rgba(255, 255, 255, 0.25);
      color: #fff;
      backdrop-filter: blur(12px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
    }

    .btn-success {
      background: linear-gradient(90deg, #00C9A7, #00B4DB);
      border: none;
      border-radius: 12px;
      padding: 10px 18px;
      transition: all 0.3s ease;
    }

    .btn-success:hover {
      background: linear-gradient(90deg, #00B4DB, #0083B0);
      transform: scale(1.05);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
    }

    h2 {
      font-weight: 600;
    }

    p {
      color: rgba(255, 255, 255, 0.85);
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
        Sistem CRUD
      </a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('crud.index') }}">Data CRUD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning fw-bold" href="{{ route('logout') }}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container py-5 text-center">
    <div class="card shadow-lg border-0 rounded-4 p-4">
      <h2 class="mb-3">Selamat Datang, {{ session('user') }}</h2>
      <p>Anda berhasil login ke sistem CRUD sederhana berbasis Laravel tanpa database.</p>
      <a href="{{ route('crud.index') }}" class="btn btn-success mt-3">
        Masuk ke Halaman CRUD
      </a>
    </div>
  </div>
</body>
</html>
