@extends('layout')

@section('content')

    @include('partials.navbar')
    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <br>
        <div class="row align-items-center my-5">
            <div class="col-lg-7">
                <img style="width: 900px; height: 300px;" class="img-fluid rounded mb-4 mb-lg-0"
                    src="https://cdn.pixabay.com/photo/2016/02/19/10/10/city-1209105_960_720.jpg" alt="">
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-5">
                <h1 class="font-weight-light">Revista Iberoamericana De Ciencias</h1>
                <p class="text-justify pt-2">La revista iberoamericana de ciencias (ISSN 2334-2501) es una revista
                    electrónica de
                    publicación
                    bimensual, dirigida al público iberoamericano, que publica artículos en castellano.</p>
                <br>
                <a class="btn boton-descargar" href="#">{{ $currentMonth }} {{ $currentYear }}</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->



        <!-- Content Row -->
        <div class="row">


            <div style="cursor:pointer" class="mt-3 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
                data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="ri-file-upload-line"></i></div>
                    <h4 class="title"><a href="">Enviar Artículo</a></h4>
                    <p class="description">{{ $nextMonth }} {{ $year }}. La recepción de artículos es permanente</p>
                </div>
            </div>
            <div style="cursor:pointer" class="mt-3 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
                data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="ri-notification-line"></i></div>
                    <h4 class="title"><a href="">Nuevo Aviso</a></h4>
                    <p class="description">Se incorporo un diseño mejorado para brindarte una mejor experiencia</p>
                </div>
            </div>
            <div style="cursor:pointer" class="mt-3 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
                data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="ri-history-line"></i></div>
                    <h4 class="title"><a href="">Última Edición</a></h4>
                    <p class="description">Disponible la edición del mes {{ $currentMonth }} {{ $currentYear }}</p>
                </div>
            </div>

            <div style="cursor:pointer" id="cartaplantilla"
                class="mt-3 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="ri-file-download-line"></i></div>
                    <h4 class="title"><a href="">Descargar Plantilla</a></h4>
                    <p class="description">Descarga el formato que se publicará en la Revista Iberoamericana de Ciencias</p>
                </div>
            </div>

        </div>
        <!-- /.row -->
        <!-- Call to Action Well -->
        <div class="card my-3 py-2 text-center bg-white border-0">
            <div class="card-body ">
                {{-- <p class="text-dark m-0 lead">{{ $home ?? 'YES' }}</p>
                --}}
            </div>
        </div>
    </div>
    <!-- /.container -->
    @include('home.libreacceso')
    @include('home.contadores')
    @include('home.autores')
    @include('home.indices')
    @include('home.instrucciones')
    @include('home.enviar')
    @include('home.contacto')
    @include('partials.footer')
    {{--
    <!-- Footer -->
    <footer class="py-5 bg-dark shadow ">
        <div class="container ">
            <p class="m-0 text-center text-white">Copyright © 2020. Revista Iberoamericana de Ciencias.
                editor@reibci.org | Privacy Policy</p>
        </div>
        <!-- /.container -->
    </footer> --}}
@endsection
