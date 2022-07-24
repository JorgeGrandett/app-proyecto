<!DOCTYPE html>
<html lang="es">

<head>
    @include('partials._head')
</head>

<body>
    
    @include('partials._spinner')

    @include('partials._topbar')
    
    @include('partials._navbar')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Acerca de nosotros</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('index') }}">Inicio</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Acerca de nosotros</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">Acerca de nosotros</h6>
                        <h1 class="display-6 mb-4">Ayudamos a conductores de carros intermunicipales a llegar a mas personas</h1>
                        <p>Por medio de nuestra plataforma web promovemos la publicacion de rutas y puestos vacios que tengan los conductores, auemntadndo asi su potencial clientela.</p>
                        <p class="mb-4">Desde el inicio de nuestra trayectoria nuestra mision fue promover el y mejorar la interaccion de los conductores y los pasajeros por medio de una plataforma amigable y sencilla</p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Sin registro
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Conductores confiables
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Precios accesibles 
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Mayor cobertura
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-5" href="{{ route('contact') }}">Contactanos</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+573135555555">
                                    <span class="flex-shrink-0 btn-square bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </span>
                                    <span class="px-3">+57 313 555 5555</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Algunos de nuestros Conductores</h6>
                <h1 class="display-6 mb-4">Contamos con una flota de conductores altamente experimentada    </h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social text-center">
                            <span>Jose</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-social text-center">
                            <span>Francisco</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-social text-center">
                            <span>Manuel</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-social text-center">
                            <span>Antonio</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    @include('partials._footer');

    @include('partials.copyright')

    @include('partials.js')

</body>

</html>