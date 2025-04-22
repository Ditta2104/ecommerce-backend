@extends('layouts.app')

@section('content')
<style>
  body {
    background: linear-gradient(135deg, #f57c00, #fb8c00);
    min-height: 100vh;
  }

  .register-container {
    background: #fff;
    padding: 2rem;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    max-width: 700px;
    margin: auto;
    margin-top: 50px;
    animation: fadeIn 1s ease;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .register-header {
    text-align: center;
    margin-bottom: 2rem;
  }

  .register-header img {
    width: 90px;
    margin-bottom: 1rem;
  }

  .register-header h2 {
    color: #f57c00;
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
  }

  .btn-orange:hover {
    background-color: #ef6c00;
  }

</style>

<div class="register-container">
  <div class="register-header">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcD-RduURYabJjsPozXDpBseEjn2eNG17BVlqFt-AMhA&s&ec=72940544" alt="Logo UNAB">
    <h2>Registro UNAB</h2>
  </div>

  <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="row mb-3">
      <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre completo') }}</label>
      <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo institucional') }}</label>
      <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
      <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
               name="password" required autocomplete="new-password">

        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar contraseña') }}</label>
      <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control"
               name="password_confirmation" required autocomplete="new-password">
      </div>
    </div>

    <div class="row mb-0">
      <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-orange">
          {{ __('Registrarse') }}
        </button>
      </div>
    </div>
  </form>
</div>
@endsection
