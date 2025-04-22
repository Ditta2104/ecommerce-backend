<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Iniciar Sesión UNAB</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #f57c00, #fb8c00);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }

    .login-container {
      background: #fff;
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      max-width: 400px;
      width: 100%;
      text-align: center;
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .login-container img {
      width: 100px;
      margin-bottom: 1rem;
    }

    .login-container h2 {
      color: #f57c00;
      margin-bottom: 1.5rem;
    }

    .form-group {
      text-align: left;
      margin-bottom: 1rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      color: #444;
    }

    .form-control {
      border-radius: 10px;
      padding: 0.6rem;
    }

    .btn-orange {
      background-color: #f57c00;
      color: white;
      border: none;
      border-radius: 10px;
      width: 100%;
      padding: 0.75rem;
      font-weight: bold;
      transition: background-color 0.3s;
      margin-top: 0.5rem;
    }

    .btn-orange:hover {
      background-color: #ef6c00;
    }

    .register-link {
      display: inline-block;
      margin-top: 1rem;
      color: #f57c00;
      font-weight: bold;
      text-decoration: none;
      transition: color 0.3s;
    }

    .register-link:hover {
      color: #ef6c00;
      text-decoration: underline;
    }

    .footer {
      margin-top: 2rem;
      font-size: 0.85rem;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcD-RduURYabJjsPozXDpBseEjn2eNG17BVlqFt-AMhA&s&ec=72940544" alt="Logo UNAB">
    <h2>Iniciar Sesión UNAB</h2>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-group">
        <label for="email">Correo institucional</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@unab.edu.co" required autofocus>
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
      </div>
      <button type="submit" class="btn btn-orange">Entrar</button>
    </form>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="register-link">¿No tienes cuenta? Regístrate aquí</a>
    @endif

    <div class="footer">
      © UNAB - Universidad Autónoma de Bucaramanga
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>

