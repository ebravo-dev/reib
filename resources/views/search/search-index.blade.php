@extends('layout')

@section('content')
    @include('partials.navbar')
    <div class="vertical-center">
        @if ($errors->any())
            <a id="gotohome" hidden href="{{ route('search.index') }}"></a>
            <div id="avisomodal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">
                        <div class="p-5">

                            <div class="text-center">
                                <p class="h3 pb-2">Advertencia</p>
                            </div>
                            <div class="text-center pb-3">
                                <i class="ri-error-warning-fill" style="font-size:46px; color:#ffc107;"></i>
                            </div>
                            <p class="pb-3 h6 text-center">Debe ingresar por lo menos un parametro
                            </p>
                            <div class="text-center pt-2">
                                <button id="closetohome" type="button" class="btn btn-outline-secondary">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="container bg-white pr-5 pl-5 mb-5">
            <div class="text-center   pb-2">
                <span style="font-family:'Raleway'; font-size: 32px;
                              font-weight: bold;
                              text-transform: uppercase;
                              color: #124265;" class="">Buscar Artículos</span>
            </div>


            <div class=" mb-4 text-center">
                <p style="font-family:'Open Sans';" class="h5 font-weight-light">Accede a más de cien
                    publicaciones cientificas disponibles</p>
            </div>

            <form action="{{ route('search.show') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="searchbar pt-3 pr-4 pl-2 bg-white mr-5 ml-5 mt-2">
                    <div class="input-group-prepend">
                        <div class="">
                            <div class="dropdown">
                                <input id="sinceinput" type="text" name="since" value="0" hidden>
                                <p style=" font-size:15px;" class="btn dropdown-toggle" type="button" id="sincebutton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="pr-3">Desde</span>
                                </p>
                                <div id="sincedropdown" class="dropdown-menu" aria-labelledby="sincebutton">
                                    <h6 class="dropdown-header pl-4">AÑO</h6>
                                    <a class="dropdown-item" href="#">2020</a>
                                    <a class="dropdown-item" href="#">2019</a>
                                    <a class="dropdown-item" href="#">2018</a>
                                    <a class="dropdown-item" href="#">2017</a>
                                </div>

                            </div>
                        </div>
                        <input name="query" style="font-size:16px; font-family:'Poppins';" id="inputbar"
                            placeholder="Buscar" type="text" class="form-control font-weight-light"
                            aria-label="Text input with dropdown button">

                        <i id="searchicon" class="ri-search-line"
                            style="cursor:pointer;font-size: 24px; color:#2487ce;"></i>
                        <input type="submit" id="searchsubmit" hidden>
                    </div>
                </div>
            </form>
        </div>

    </div>

    @include('partials.footer')
@endsection
