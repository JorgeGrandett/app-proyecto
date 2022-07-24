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
            <h1 class="display-4 text-white animated slideInDown mb-4">Conductores</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('index') }}">Inicio</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Conductores</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Courses Start -->
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Nuestras rutas</h6>
                <h1 class="display-6 mb-4">Rutas preferidas de nuestros clientes</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$12 000</div>
                            <h5 class="mb-3">Monteria - Planeta Rica</h5>
                            <p>Viaja a desde Monteria a Planera Rica y viceversa al menor costo</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>1 hora</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-1.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="{{ route('rutas') }}">Mas informacion</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$4 000</div>
                            <h5 class="mb-3">Monteria - Cerete</h5>
                            <p>Viaja a desde Monteria a Cerete y viceversa al menor costo</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>30 minutos</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-2.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="{{ route('rutas') }}">Mas informacion</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$20 000</div>
                            <h5 class="mb-3">Monteria - Cobeñas</h5>
                            <p>Viaja a desde Monteria a Cobeñas y viceversa al menor costo</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>1 hora y 30 minutos</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-3.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="{{ route('rutas') }}">Mas informacion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->

    @include('partials._footer');

    @include('partials.copyright')

    @include('partials.js')
    
</body>

</html>