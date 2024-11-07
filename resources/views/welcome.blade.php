<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="BiColor - Tu tienda de moda favorita con las últimas tendencias en ropa y accesorios" />
    <meta name="author" content="BiColor" />
    <title>BiColor - Tienda de Ropa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('panel')}}">
                <img src="{{ asset('assets/img/icon.png') }}" alt="Logo BiColor" width="30" height="30" class="d-inline-block align-text-top">
                BiColor
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('panel')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Colección</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Novedades</a>
                    </li>
                </ul>
                <form class="d-flex" action="{{route('login')}}" method="get">
                    <button class="btn btn-outline-light" type="submit">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="carouselExample" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/img/img_carrusel_1_1.png')}}" class="d-block w-100" alt="Nueva colección primavera">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/img_carrusel_1_1.png')}}" class="d-block w-100" alt="Ofertas especiales">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/img_carrusel_1_1.png')}}" class="d-block w-100" alt="Colección exclusiva">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <div class="container-md">
        <div class="row my-4 g-5">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-center text-primary border-primary fs-5 fw-semibold border-3 rounded-start rounded-end">
                        Compra en BiColor Online
                    </div>
                    <div class="card-body">
                        <ul class="text-dark">
                            <li>
                                <p class="card-text mb-2">Envíos gratis en compras superiores a $50.</p>
                            </li>
                            <li>
                                <p class="card-text mb-2">Accede a ofertas exclusivas y descuentos especiales para clientes registrados.</p>
                            </li>
                            <li>
                                <p class="card-text mb-2">Recibe notificaciones sobre nuevas colecciones y tendencias.</p>
                            </li>
                            <li>
                                <p class="card-text mb-2">Devoluciones gratuitas en todas tus compras.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-center text-primary border-primary fs-5 fw-semibold border-3 rounded-start rounded-end">
                        Visita Nuestras Tiendas
                    </div>
                    <div class="card-body">
                        <ul class="text-dark">
                            <li>
                                <p class="card-text mb-2">Asesoramiento personalizado con nuestros expertos en moda.</p>
                            </li>
                            <li>
                                <p class="card-text mb-2">Pruébate las prendas antes de comprar.</p>
                            </li>
                            <li>
                                <p class="card-text mb-2">Descubre las últimas tendencias en nuestras exhibiciones.</p>
                            </li>
                            <li>
                                <p class="card-text mb-2">Eventos exclusivos y presentaciones de nuevas colecciones.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container-fluid bg-dark text-center">
        <div class="container p-5">
            <h2 class="text-light mb-5">Descubre tu estilo en <span class="text-primary">BiColor</span></h2>
            <div class="">
                <a href="{{route('login') }}" role="button" class="btn btn-primary">Comprar ahora</a>
            </div>
        </div>
    </section>

    <footer class="text-center text-white bg-dark">
        <div class="container p-4 pb-0">
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                </a>
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                </a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-white" href="#">BiColor.com</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>