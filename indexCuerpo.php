<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="CSS/index.css" rel="stylesheet">
    <script src="Javascript/VentanasEmergentes.js"></script>
    <script src="Javascript/JSIn.js"></script>
</head>

<body class="pt-5">
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="menu.html" target="principal">Tecnicas de estudio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu de opciones</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tecnicas de estudio
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                            <li><a class="dropdown-item" id="Materias">Preguntas y Respuestas</a></li>
                                <li><a class="dropdown-item" id="fichasestudio">Fichas de estudio</a></li>
                                <li><a class="dropdown-item" id="subrayado">Subrayado</a></li>
                                <li><a class="dropdown-item" id="Test">Test</a></li>
                            </ul>
                        </li>
                        <form class="d-flex" id="SalidaUsuario">
                            <li class="nav-item">
                                <button>
                                    <a class="nav-link active" aria-current="page" href="login.php"> Salir </a>
                                </button>
                                <input type="button" class="btn btn-light" value="Salir">
                            </li>
                        </form>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div>
        <div>
            <iframe id="principal" class="ContenidoPrincipal" width="100%" height="100%"></iframe>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>