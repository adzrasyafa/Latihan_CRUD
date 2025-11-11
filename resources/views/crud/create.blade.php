<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data | Sistem CRUD</title>
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet"
  >
  <style>
    /* === Background Gradasi Modern === */
    body {
      background: linear-gradient(135deg, #6C63FF, #00B4DB, #8E2DE2);
      background-size: 300% 300%;
      animation: moveGradient 10s ease infinite;
      font-family: "Poppins", sans-serif;
      color: #fff;
    }

    @keyframes moveGradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* === Card Style === */
    .card {
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(12px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
      color: #fff;
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }

    /* === Label & Input === */
    label {
      font-weight: 500;
      color: #f1f1f1;
    }

    .form-control {
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      border: none;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.3);
      box-shadow: 0 0 10px rgba(108, 99, 255, 0.5);
      color: #fff;
    }

    /* === Tombol === */
    .btn-success {
      background: linear-gradient(90deg, #00C853, #4CAF50);
      border: none;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    .btn-success:hover {
      background: linear-gradient(90deg, #4CAF50, #00C853);
      transform: scale(1.05);
    }

    .btn-secondary {
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      border: none;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    .btn-secondary:hover {
      background: rgba(255, 255, 255, 0.35);
      transform: scale(1.05);
    }

    h4 {
      color: #fff;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <div class="container py-5">
    <div class="card shadow border-0 rounded-4 p-4">
      <div class="card-body">
        <h4 class="mb-4 text-center">➕ Tambah Data Baru</h4>

        <form 
          action="{{ route('crud.store') }}" 
          method="POST" 
          enctype="multipart/form-data"
        >
          @csrf
          
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Keahlian</label>
            <input type="text" name="keahlian" class="form-control" placeholder="Contoh: Desain Web, Analisis Data" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control">
          </div>

          <div class="d-flex justify-content-center gap-3 mt-4">
            <button type="submit" class="btn btn-success px-4">💾 Simpan</button>
            <a href="{{ route('crud.index') }}" class="btn btn-secondary px-4">⬅️ Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
