<!DOCTYPE html>
<html lang="es">

<head>
    
</head>
    @include('partials._head')
<body>

    @include('partials._spinner')

    @include('partials._topbar')

    @include('partials._navbar')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Contactanos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Contacto</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
                    <div class="position-relative h-100">
                        <iframe class="position-relative w-100 h-100"
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=monteria&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase mb-2">Contactanos</h6>
                    <h1 class="display-6 mb-4">Si tienes alguna solicitud no dudes en contactarnos</h1>
                    <p class="mb-4">Las solicitudes enviadas seran respondidas en un plazo maximo de 5 dias habiles al correo que nos proporcione.</p>
                    <form action="#" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" name="name" id="name" placeholder="Nombre Completo" required>
                                    <label for="name">Nombre completo</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light" name="email" id="email" placeholder="Correo Electronico" required>
                                    <label for="email">Correo Electronico</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" name="subject" id="subject" placeholder="Asunto" required>
                                    <label for="subject">Asunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 bg-light" placeholder="Deje un mensaje aqui..." name="message" id="message" style="height: 150px" required></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" name="solicitud" value="Solicitud" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @include('partials._footer');

    @include('partials.copyright')

    @include('partials.js')
    
</body>

</html>