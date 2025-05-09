<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <!-- Navbar UNAB -->
    <nav class="navbar navbar-expand-lg navbar-unab">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.periodico15.com%2Flogo-unab-header%2F&psig=AOvVaw2tJSsFxqsGNy7qQslesjO2&ust=1741204473800000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCIDhrKKa8YsDFQAAAAAdAAAAABAI" alt="Logo UNAB">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Formulario de Compra -->
    <div class="form-container">
        <h2>Formulario de Compra</h2>
        <form>
            <!-- Datos del Cliente -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Ingrese su correo" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" placeholder="Ingrese su teléfono" required>
            </div>

            <!-- Dirección de Envío -->
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección de Envío</label>
                <input type="text" class="form-control" id="direccion" placeholder="Ingrese su dirección" required>
            </div>
            <div class="mb-3">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" placeholder="Ingrese su ciudad" required>
            </div>
            <div class="mb-3">
                <label for="codigoPostal" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="codigoPostal" placeholder="Ingrese su código postal" required>
            </div>

            <!-- Método de Pago -->
            <div class="mb-3">
                <label for="metodoPago" class="form-label">Método de Pago</label>
                <select class="form-select" id="metodoPago" required>
                    <option value="">Seleccione un método de pago</option>
                    <option value="tarjeta">Tarjeta de Crédito/Débito</option>
                    <option value="paypal">PayPal</option>
                    <option value="transferencia">Transferencia Bancaria</option>
                </select>
            </div>

            <!-- Botón de Envío -->
            <button type="submit" class="btn btn-submit">Realizar Compra</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>