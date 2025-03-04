<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Película - Estilo UNAB</title>
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
        .movie-title {
            font-size: 2rem;
            font-weight: bold;
        }
        .movie-info {
            font-size: 1.1rem;
            color: #555;
        }
        .rating {
            color: #FF6B35;
            font-size: 1.2rem;
        }
        .price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #FF6B35;
        }
        .shipping-info {
            font-size: 0.9rem;
            color: #555;
        }
        .image-container {
            text-align: center;
            margin: 20px 0;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
        }
        .options-table {
            width: 100%;
            margin-top: 20px;
        }
        .options-table th, .options-table td {
            padding: 8px;
            text-align: left;
        }
        .unab-logo {
            max-width: 150px;
            margin-bottom: 20px;
        }
        .header {
            background-color: #FF6B35;
            padding: 20px;
            text-align: center;
        }
        .header img {
            max-width: 150px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="https://www.unab.edu.co/images/logo-unab.png" alt="Logo UNAB" class="unab-logo">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="movie-title unab-orange">4K UHD + Blu-ray + Digital</div>
                <div class="movie-info">Matthew McConaughey (Actor), Anne Hathaway (Actor), Christopher Nolan (Director)</div>
                <div class="movie-info">Clasificado: PG-13 | Formato: Blu-ray</div>
                <div class="rating">4.8 ★★★★★★ 9,785 calificaciones</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="price">US$ 2,599</div>
                <div class="shipping-info">Devoluciones internacionales gratis ▼</div>
                <div class="shipping-info">Sin cargos de importación y US$6.01 de envío a Colombia Detalles ▼</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 image-container">
                <a href="https://m.media-amazon.com/images/I/817AKBwmKvL._SX522_.jpg" target="_blank">
                    <img src="https://m.media-amazon.com/images/I/817AKBwmKvL._SX522_.jpg" alt="Película">
                </a>
                <div>Haz clic en la imagen para obtener una vista ampliada</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="options-table">
                    <tr>
                        <th class="unab-bg-orange">Blu-ray</th>
                        <th class="unab-bg-orange">DVD</th>
                        <th class="unab-bg-orange">4K</th>
                    </tr>
                    <tr>
                        <td>US$7.49</td>
                        <td>US$4.99</td>
                        <td>US$25.99</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="unab-orange">Opciones de 4K adicionales</h3>
                <ul>
                    <li><strong>Edición:</strong> 4K diciembre 19, 2017</li>
                    <li><strong>Discos:</strong> 3</li>
                    <li><strong>Precio de Amazon:</strong> US$25.99</li>
                    <li><strong>Nuevo desde:</strong> US$9.99</li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>