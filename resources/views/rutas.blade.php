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
            <h1 class="display-4 text-white animated slideInDown mb-4">Nuestras Rutas</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('index') }}">Inicio</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Nuestras Rutas</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class="container-xxl py-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="mb-4">Ninguna ruta añadida</h1>
                    <p class="mb-4">Lo sentimos, al parecer no hay ninguna ruta añadida a la plataforma en estos momentos</p>
                    <a class="btn btn-primary py-3 px-5" href="{{ route('index') }}">Volver al Inicio</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
        
    @include('partials._footer');

    @include('partials.copyright')

    @include('partials.js')
    
</body>

</html>