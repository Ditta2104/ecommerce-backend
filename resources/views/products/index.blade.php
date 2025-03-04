<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos - Estilo UNAB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            color: #333;
        }
        .unab-orange {
            color: #FF6B35;
        }
        .unab-bg-orange {
            background-color: #FF6B35;
            color: #fff;
        }
        .navbar-unab {
            background-color: #FF6B35;
            padding: 10px 0;
        }
        .navbar-unab .navbar-brand img {
            max-width: 150px;
        }
        .navbar-unab .nav-link {
            color: #fff !important;
            font-weight: bold;
        }
        .navbar-unab .nav-link:hover {
            color: #f8f9fa !important;
        }
        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        .product-card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #FF6B35;
        }
        .product-info {
            font-size: 1rem;
            color: #555;
        }
        .product-price {
            font-size: 1.25rem;
            font-weight: bold;
            color: #FF6B35;
        }
        .product-rating {
            color: #FF6B35;
            font-size: 1rem;
        }
        .product-category {
            font-size: 0.9rem;
            color: #777;
        }
        .btn-add-to-cart {
            background-color: #FF6B35;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn-add-to-cart:hover {
            background-color: #e65a2b;
        }
    </style>
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

    <!-- Listado de Productos -->
    <div class="container mt-5">
        <h1 class="text-center unab-orange mb-4">Listado de Productos</h1>
        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4">
                <div class="product-card">
                    <div class="product-title">Interstellar (4K UHD + Blu-ray + Digital)</div>
                    <div class="product-info">Matthew McConaughey, Anne Hathaway, Christopher Nolan</div>
                    <div class="product-category">Categoría: Ciencia Ficción</div>
                    <div class="product-rating">4.8 ★★★★★★ 9,785 calificaciones</div>
                    <div class="product-price">US$ 25.99</div>
                    <button class="btn btn-add-to-cart w-100">Añadir al carrito</button>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="col-md-4">
                <div class="product-card">
                    <div class="product-title">Inception (4K UHD + Blu-ray + Digital)</div>
                    <div class="product-info">Leonardo DiCaprio, Joseph Gordon-Levitt, Christopher Nolan</div>
                    <div class="product-category">Categoría: Acción</div>
                    <div class="product-rating">4.7 ★★★★★★ 8,432 calificaciones</div>
                    <div class="product-price">US$ 22.99</div>
                    <button class="btn btn-add-to-cart w-100">Añadir al carrito</button>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="col-md-4">
                <div class="product-card">
                    <div class="product-title">The Dark Knight (4K UHD + Blu-ray + Digital)</div>
                    <div class="product-info">Christian Bale, Heath Ledger, Christopher Nolan</div>
                    <div class="product-category">Categoría: Superhéroes</div>
                    <div class="product-rating">4.9 ★★★★★★ 10,345 calificaciones</div>
                    <div class="product-price">US$ 27.99</div>
                    <button class="btn btn-add-to-cart w-100">Añadir al carrito</button>
                </div>
            </div>
            <!-- Producto 4 -->
            <div class="col-md-4">
                <div class="product-card">
                    <div class="product-title">Dunkirk (4K UHD + Blu-ray + Digital)</div>
                    <div class="product-info">Fionn Whitehead, Tom Hardy, Christopher Nolan</div>
                    <div class="product-category">Categoría: Guerra</div>
                    <div class="product-rating">4.6 ★★★★★★ 7,890 calificaciones</div>
                    <div class="product-price">US$ 24.99</div>
                    <button class="btn btn-add-to-cart w-100">Añadir al carrito</button>
                </div>
            </div>
            <!-- Producto 5 -->
            <div class="col-md-4">
                <div class="product-card">
                    <div class="product-title">Tenet (4K UHD + Blu-ray + Digital)</div>
                    <div class="product-info">John David Washington, Robert Pattinson, Christopher Nolan</div>
                    <div class="product-category">Categoría: Thriller</div>
                    <div class="product-rating">4.5 ★★★★★★ 8,123 calificaciones</div>
                    <div class="product-price">US$ 26.99</div>
                    <button class="btn btn-add-to-cart w-100">Añadir al carrito</button>
                </div>
            </div>
            <!-- Producto 6 -->
            <div class="col-md-4">
                <div class="product-card">
                    <div class="product-title">The Prestige (4K UHD + Blu-ray + Digital)</div>
                    <div class="product-info">Christian Bale, Hugh Jackman, Christopher Nolan</div>
                    <div class="product-category">Categoría: Drama</div>
                    <div class="product-rating">4.7 ★★★★★★ 9,012 calificaciones</div>
                    <div class="product-price">US$ 23.99</div>
                    <button class="btn btn-add-to-cart w-100">Añadir al carrito</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>