@extends('layout.app')

@section('name')
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
@endsection
    
