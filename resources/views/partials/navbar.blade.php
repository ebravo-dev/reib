<nav class="navbar navbar-expand-lg bg-white fixed-top shadow-sm rounded">
    <div class="container">
        <a class="navbar-brand logo-nav-bar" href="{{ route('home.index') }}">ReIbCi</a>
        <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="text-light"><i data-eva-fill="#fff" data-eva="menu-outline"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home.index') }}">Inicio
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}#libre">Libre
                        Acceso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}#autores">Autores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}#contacto">Contacto</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> Ediciones <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu multi-level">
                        @foreach ($editions as $key => $edition)
                            <li class="dropdown-submenu">
                                <span role="button" type="button" class="dropdown-item" data-toggle="dropdown">
                                    {{ $key }}

                                </span>
                                <ul class="dropdown-menu">
                                    <li>
                                        <span class="subcabeza dropdown-item text-center">
                                            {{ $key }}
                                        </span>
                                    </li>
                                    @foreach ($edition as $month)
                                        <li>
                                            {{-- <a
                                                class="subitem dropdown-item text-center"
                                                href="./ediciones/{{ $key }}/{{ $month }}">{{ $month }}</a>
                                            --}}
                                            <a class="subitem dropdown-item text-center"
                                                href="{{ route('ediciones.show', [$key, $month]) }}">{{ $month }}</a>
                                        </li>
                                    @endforeach
                                </ul>

                            </li>
                        @endforeach

                    </ul>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Avisos</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">Búsqueda</a>
                </li>


                <li class="">
                    <a href="http://reibci.org/plantilla/plantilla_ReIbCi.doc"
                        class="get-started-btn boton-descargar">Plantilla {{ $year }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
