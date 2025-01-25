<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Pinturas Multicolor "Jr"</title>
    <!-- Customized Bootstrap Stylesheet -->
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popFper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    @vite(['resources/js/ubication.js'])

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        #map {
            height: 500px;
            /* Ajusta la altura del mapa según tus necesidades */
            width: 100%;
        }

        #header-carousel .carousel-item {
            height: 700px;
        }

        .circle-container {
            margin: 10px;
            /* Espaciado entre los círculos */
        }

        .circle-container .rounded-circle {
            width: 200px;
            height: 200px;
            border: 2px solid #ddd;
        }

        .circle-container img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .circle-row {
            display: flex;
            justify-content: center;
            /* Alinea los círculos al centro */
            flex-wrap: wrap;
            /* Asegura que los círculos se ajusten a nuevas filas si es necesario */
            gap: 20px;
            /* Espacio entre círculos */
        }
    </style>
</head>
@include('layouts.navbar')

<body>
    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel"
                    data-interval="4000">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active">
                            <img class="position-absolute w-100 h-100" src="img/zhaia productos.png"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">LA MEJOR
                                        CALIDAD</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Tu mejor aliado en
                                        repintado automotriz y para tu hogar, ofreciendo productos de calidad con un
                                        equilibrio perfecto entre economía y rendimiento. </p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="#">Ver Catalogo</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative">
                            <img class="position-absolute w-100 h-100" src="img/pinturasdecasa.png"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">LA MEJOR
                                        PINTURA PARA TU CASA</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Contamos con una amplia
                                        gama de colores, así como opciones de colores personalizados, para adaptarse
                                        perfectamente a las necesidades y estilo de su hogar.</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="#">Ver Catalogo</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative">
                            <img class="position-absolute w-100 h-100" src="img/carrocero.png"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">HAZ QUE
                                        TU AUTO BRILLE</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Tendrás acceso a una
                                        amplia gama de colores de alta calidad, que incluyen tanto opciones estándar
                                        como personalizadas, diseñadas para ofrecerte la mejor igualación posible para
                                        el acabado de tu automóvil.</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="#">Ver Catalogo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 334px;">
                    <img class="img-fluid" src="img/ford.png" alt="">
                    <div class="offer-text">
                        <h3 class="text-white mb-3">Productos Automotrices</h3>
                        <a href="" class="btn btn-primary">Ir a catalogo</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 335px;">
                    <img class="img-fluid" src="img/pinturacasa.png" alt="">
                    <div class="offer-text">
                        <h3 class="text-white mb-3">Productos para tu hogar</h3>
                        <a href="" class="btn btn-primary">Ir a catalogo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Circles Section Start -->
    <div class="container text-center my-4">
        <h1>Contamos con productos de distintas marcas</h1>
        <div class="circle-row">
            <div class="circle-container">
                <div class="rounded-circle overflow-hidden mx-auto">
                    <img src="img/zahia.png" class="img-fluid" alt="Circle 1">
                </div>
            </div>
            <div class="circle-container">
                <div class="rounded-circle overflow-hidden mx-auto">
                    <img src="img/roberlo.png" class="img-fluid" alt="Circle 2">
                </div>
            </div>
            <div class="circle-container">
                <div class="rounded-circle overflow-hidden mx-auto">
                <img src="img/mirka.png" class="img-fluid" alt="Circle 3">
                </div>
            </div>
            <div class="circle-container">
                <div class="rounded-circle overflow-hidden mx-auto">
                    <img src="img/3m.png" class="img-fluid" alt="Circle 4">
                </div>
            </div>
            <div class="circle-container">
                <div class="rounded-circle overflow-hidden mx-auto">
                    <img src="img/dewalt.png" class="img-fluid" alt="Circle 5">
                </div>
            </div>
            <div class="circle-container">
                <div class="rounded-circle overflow-hidden mx-auto">
                    <img src="img/fandeli.png" class="img-fluid" alt="Circle 6">
                </div>
            </div>
            <div class="circle-container">
                <div class="rounded-circle overflow-hidden mx-auto">
                    <img src="img/goni.png" class="img-fluid" alt="Circle 6">
                </div>
            </div>
            <div class="circle-container">
                <div class="rounded-circle overflow-hidden mx-auto">
                    <img src="img/truper.png" class="img-fluid" alt="Circle 6">
                </div>
            </div>
        </div>
    </div>
    <!-- Circles Section End -->
    </div>
    <div class="container mt-5">
        <h1>¿No sabes donde encontrarnos? Aqui te dejamos nuestra ubicación exacta.</h1>
        <div id="map"></div>
    </div>

</body>

</html>
