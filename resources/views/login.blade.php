<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login | Sistem CRUD</title>
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet"
  >
  <style>
    /* === Background gradient kalcer === */
    body {
      height: 100vh;
      background: linear-gradient(135deg, #6C63FF, #8E2DE2, #4A00E0);
      background-size: 300% 300%;
      animation: gradientMove 10s ease infinite;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: "Poppins", sans-serif;
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* === Kartu login dengan efek glass === */
    .login-card {
      backdrop-filter: blur(14px);
      background: rgba(255, 255, 255, 0.15);
      border: 1px solid rgba(255, 255, 255, 0.25);
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      color: #fff;
      transition: all 0.3s ease;
    }

    .login-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }

    /* === Input dan tombol === */
    .form-control {
      border-radius: 12px;
      border: none;
      padding: 10px 14px;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.25);
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
      color: #fff;
    }

    .form-label {
      font-weight: 500;
      color: #f1f1f1;
    }

    /* === Tombol login === */
    .btn-login {
      background: linear-gradient(90deg, #6C63FF, #8E2DE2);
      border: none;
      border-radius: 12px;
      padding: 10px 0;
      color: #fff;
      font-weight: 500;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
    }

    .btn-login:hover {
      background: linear-gradient(90deg, #8E2DE2, #4A00E0);
      transform: scale(1.03);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
    }

    /* === Footer === */
    footer {
      text-align: center;
      color: #e0e0e0;
      margin-top: 20px;
      font-size: 0.9rem;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="login-card p-4 shadow-lg">
          <h3 class="text-center fw-semibold mb-4">🔐 Login Admin</h3>

          @if (session('error'))
            <div class="alert alert-danger text-center py-2">
              {{ session('error') }}
            </div>
          @endif

          <form action="{{ route('login.post') }}" method="POST">
            @csrf
            
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input 
                type="text" 
                name="username" 
                class="form-control" 
                required
              >
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input 
                type="password" 
                name="password" 
                class="form-control" 
                required
              >
            </div>

            <button type="submit" class="btn btn-login w-100">Login</button>
          </form>
        </div>

        <footer>© {{ date('Y') }} Sistem CRUD Laravel</footer>
      </div>
    </div>
  </div>
</body>
</html>
