<nav class="navbar navbar-expand-lg bg-white fixed-top shadow-sm rounded">
    <div class="container">
        <a class="navbar-brand logo-nav-bar" href="#">ReIbCi</a>
        <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="text-light"><i data-eva-fill="#fff" data-eva="menu-outline"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#libre">Libre
                        Acceso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#autores">Autores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> Ediciones <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu multi-level">

                        <li class="dropdown-submenu">
                            <span role="button" type="button" class="dropdown-item" data-toggle="dropdown">
                                2020

                            </span>
                            <ul class="dropdown-menu">
                                <li>
                                    <span class="subcabeza dropdown-item text-center">
                                        2020
                                    </span>
                                </li>
                                <li>
                                    <a class="subitem dropdown-item text-center" href="#">Enero</a>
                                </li>
                                <li>
                                    <a class="subitem dropdown-item text-center" href="#">Febrero</a>
                                </li>
                            </ul>

                        </li>
                    </ul>

                </li>



                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ediciones
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">2020</a>
                        <a class="dropdown-item" href="#">2019</a>
                        <a class="dropdown-item" href="#">2018</a>
                        <a class="dropdown-item" href="#">2017</a>
                        <a class="dropdown-item" href="#">2016</a>
                        <a class="dropdown-item" href="#">2015</a>
                        <a class="dropdown-item" href="#">2014</a>
                    </div>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="#">Avisos</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">Búsqueda</a>
                </li>


                <li class="">
                    <a href="#about" class="get-started-btn boton-descargar">Plantilla {{ $year }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
