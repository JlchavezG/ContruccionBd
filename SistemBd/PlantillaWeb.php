<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.0.min.js"></script>
    <title>Plantilla del sistema</title>
</head>
<!-- navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-dark-subtle">
    <div class="container-fluid">
        <a class="navbar-brand text-secondary" href="#">IscjlchavezG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-secondary" data-bs-toggle="offcanvas" href="#offcanvasMenu"
                        role="button" aria-controls="offcanvasMenu">
                        <svg class="bi" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#grip-vertical" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#house-door-fill" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#gear-fill" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="darkSwitch">
                                    <label class="form-check-label" for="darkSwitch">
                                        <svg class="bi text-secondary" width="22" height="22" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#brightness-low" />
                                        </svg>
                                    </label> | <svg class="bi text-secondary" width="15" height="15"
                                        fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#moon-stars" />
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <svg class="bi text-secondary" width="15" height="15" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#sliders" />
                                </svg>&nbsp;&nbsp;<span class="text-secondary">Opciones de Perfil</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#chat-left-text-fill" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#question-square-fill" />
                        </svg>
                    </a>
                </li>
            </ul>
            <span class="navbar-text">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#search" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#bell-fill" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#person-circle" />
                            </svg><span class="text-secondary"> Usuario</span>
                        </a>
                        <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <svg class="bi text-secondary" width="15" height="15" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#person-circle" />
                                    </svg>&nbsp;&nbsp;<span class="text-secondary">Perfil</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <svg class="bi text-secondary" width="15" height="15" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#calendar-fill" />
                                    </svg>&nbsp;&nbsp;<span class="text-secondary">Historial</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider text-secondary">
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <svg class="bi text-secondary" width="17" height="17" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#power" />
                                    </svg>&nbsp;&nbsp;<span class="text-secondary">Cerrar Sesión</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#headset" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#calendar2-week" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="text-secondary">Versión 1.1</span>
                        </a>
                    </li>
                </ul>
            </span>
        </div>
    </div>
</nav>
<!-- termina navbar-->
<!-- menu offcanva-->
<div class="offcanvas offcanvas-start bg-light" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
        <button type="button" class="btn-close text-reset " text-secondary" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-group list-group-flush bg-light">
            <li class="list-group-item list-group-item-action bg-light">
                <svg class="bi" width="20" height="20" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#speedometer" />
                </svg>&nbsp;&nbsp;DashBoard
            </li>
            <li class="list-group-item list-group-item-action bg-light">
                <svg class="bi" width="20" height="20" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#people-fill" />
                </svg>&nbsp;&nbsp;Usuarios
            </li>
            <li class="list-group-item list-group-item-action bg-light">
                <svg class="bi" width="20" height="20" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#card-checklist" />
                </svg>&nbsp;&nbsp;Solicitides
            </li>
            <li class="list-group-item list-group-item-action bg-light">
                <svg class="bi" width="20" height="20" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#building-exclamation" />
                </svg>&nbsp;&nbsp;Laboratorios
            </li>
            <li class="list-group-item list-group-item-action bg-light">
                <svg class="bi" width="20" height="20" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#tags-fill" />
                </svg>&nbsp;&nbsp;Kardex
            </li>
            <li class="list-group-item list-group-item-action bg-light">
                <svg class="bi" width="20" height="20" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#gear-fill" />
                </svg>&nbsp;&nbsp;Configuración
            </li>
            <li class="list-group-item list-group-item-action bg-light">
                <svg class="bi" width="20" height="20" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#power" />
                </svg>&nbsp;&nbsp;Cerrar Sesión
            </li>
        </ul>
        <div class="row container mt-2 text-center">
            <div class="col">
                <svg class="bi" width="15" height="15" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#facebook" />
                </svg>
            </div>
            <div class="col">
                <svg class="bi" width="15" height="15" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#instagram" />
                </svg>
            </div>
            <div class="col">
                <svg class="bi" width="15" height="15" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#github" />
                </svg>
            </div>
            <div class="col">
                <svg class="bi" width="15" height="15" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#twitter" />
                </svg>
            </div>
            <div class="col">
                <svg class="bi" width="15" height="15" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#youtube" />
                </svg>
            </div>
        </div>
    </div>
</div>
<!--termina menu offcanva-->
<!--Modal de Busqueda-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="staticBackdropLabel">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/icons/bootstrap-icons.svg#search" />
                    </svg>&nbsp;&nbsp;Busqueda dentro del sistema
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="Post">
                    <div class="row">
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <input type="text" name="BusquedaTotal" placeholder="Buscar" class="form-control"
                                required />
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 d-grid gap-2">
                            <input type="submit" name="BtnBuscar" id="BtnBuscar" value="Buscar"
                                class="btn btn-sm btn-secondary">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/icons/bootstrap-icons.svg#power" />
                    </svg>&nbsp;&nbsp;Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--Termina Modal de busqueda-->
<!--Seccion de escritorio-->
<div class="container">
    <div class="row py-2 mt-3">
        <div class="col-sm-12 col-md-12 col-lg-12 mt-2">
            <div class="row container mt-2">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card shadow-lg bg-light mt-1">
                        <div class="row py-2">
                            <div class="col text-center">
                                <svg class="bi" width="25" height="25" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#person-plus-fill" />
                                </svg>&nbsp;&nbsp;Usuarios
                            </div>
                            <div class="col text-center">
                                0
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card shadow-lg bg-light mt-1">
                        <div class="row py-2">
                            <div class="col text-center">
                                <svg class="bi" width="25" height="25" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#clipboard-data-fill" />
                                </svg>&nbsp;&nbsp;Kardex
                            </div>
                            <div class="col text-center">
                                0
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card shadow-lg bg-light mt-1">
                        <div class="row py-2">
                            <div class="col text-center">
                                <svg class="bi" width="25" height="25" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#tags-fill" />
                                </svg>
                            </div>
                            <div class="col text-center">
                                0
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- termina primera linea del escritorio-->
    <div class="row py-2 mt-1 container">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="card shadow-lg">
                <div class="accordion-item bg-light">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                            body.</div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<script src="js/dark-mode.js"></script>
</body>

</html>