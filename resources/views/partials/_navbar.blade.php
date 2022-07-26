<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-0"><i class="fa fa-car text-primary me-2"></i>Yo Te Llevo!</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('index') }}" class="nav-item nav-link active">Inicio</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">Acerca de nosotros</a>
            <a href="{{ route('rutas') }}" class="nav-item nav-link">Nuestras Rutas</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contactanos</a>
        </div>
        <a href="{{ route('drivers') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">¿Eres conductor?<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->