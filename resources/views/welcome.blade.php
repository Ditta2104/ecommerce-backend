<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones UNAB</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f0f8ff;
        }

        .navbar {
            background-color: #0d6efd;
        }

        .navbar-brand {
            font-weight: bold;
            color: white;
        }

        .promo-card {
            border: 2px solid #0d6efd;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .promo-card .card-header {
            background-color: #0d6efd;
            color: white;
        }

        .promo-card .card-body {
            background-color: #ffffff;
        }

        .footer {
            background-color: #0d6efd;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .category-title {
            color: #0d6efd;
            font-weight: bold;
        }

        .category-card {
            border: 2px solid #0d6efd;
            border-radius: 10px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Promociones UNAB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Promociones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Carrusel de promociones -->
    <div id="promoCarousel" class="carousel slide my-5" data-ride="carousel">
        <div class="carousel-inner">
            <!-- Promoción 1 - Becas Talenteo TIC -->
            <div class="carousel-item active">
                <img class="d-block w-100" src="//unab.edu.co/wp-content/uploads/2024/05/sld-img2-becas-talenteo-tic.jpg" alt="Becas Talenteo TIC">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Becas Talenteo TIC</h5>
                    <p>Descubre cómo puedes aplicar a las becas Talenteo en TIC. ¡No pierdas la oportunidad!</p>
                    <a href="https://unab.edu.co/medicina-unab-fortalece-formacion-en-atencion-integral/" class="btn btn-light">Más información</a>
                </div>
            </div>
            <!-- Promoción 2 - Becados del Ejército -->
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.elnuevosiglo.com.co/sites/default/files/2024-02/ejercito.png" alt="Becados del Ejército">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Becados del Ejército</h5>
                    <p>Los becados del Ejército se están formando en seguridad y salud en el trabajo en la UNAB.</p>
                    <a href="https://unab.edu.co/becados-del-ejercito-se-forman-en-sst-en-la-unab/" class="btn btn-light">Leer más</a>
                </div>
            </div>
            <!-- Promoción 3 - Formación en Medicina -->
            <div class="carousel-item">
                <img class="d-block w-100" src="https://unab.edu.co/wp-content/uploads/2022/01/3.Pasillo-El-Bosque.jpg" alt="Formación en Medicina UNAB">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fortalecimiento de la formación en Medicina</h5>
                    <p>La Facultad de Medicina fortalece su formación en atención integral para futuros médicos.</p>
                    <a href="https://unab.edu.co/medicina-unab-fortalece-formacion-en-atencion-integral/" class="btn btn-light">Ver más</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#promoCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#promoCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Sección de Categorías de Productos -->
    <div class="container my-5">
        <h2 class="text-center category-title">Categorías de Productos UNAB</h2>
        <div class="row">
            <!-- Categoría de Libros -->
            <div class="col-md-4">
                <div class="card category-card">
                    <h4>Libros Académicos</h4>
                    <p>Adquiere los libros recomendados para tus cursos y programas académicos.</p>
                    <a href="#" class="btn btn-primary">Ver Productos</a>
                </div>
            </div>

            <!-- Categoría de Merchandising -->
            <div class="col-md-4">
                <div class="card category-card">
                    <h4>Merchandising UNAB</h4>
                    <p>Consigue tu camiseta, taza, o artículos exclusivos con el logo de la UNAB.</p>
                    <a href="#" class="btn btn-primary">Ver Productos</a>
                </div>
            </div>

            <!-- Categoría de Tecnología -->
            <div class="col-md-4">
                <div class="card category-card">
                    <h4>Productos Tecnológicos</h4>
                    <p>Compra dispositivos electrónicos como computadoras, tabletas, y más, con descuentos exclusivos.</p>
                    <a href="#" class="btn btn-primary">Ver Productos</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <div class="footer">
        <p>&copy; 2025 Universidad Autónoma de Bucaramanga | Todos los derechos reservados</p>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
