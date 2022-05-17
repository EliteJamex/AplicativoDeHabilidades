<html>

<head>
<?php
    include_once("../Clases/Materias.php");
    include_once("../Clases/Respuestas.php");
    include_once("../Clases/Preguntas.php");
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../CSS/BaseArchivos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../Javascript/JSIndex.js"></script>
</head>

<body>
    <div class="ContenedorCentral d-flex justify-content-center">
        <div class="ContenedorIndex row d-flex justify-content-between">
            <div class="ContenedorLogoUni col-4">
                <img src="../Imagenes/ucc2.jpg">
            </div>
            <div class="InformacionFormulario col-4 d-flex justify-content-center">
                <h1> MATERIAS </h1>
                <div>
                    <h4>Cantidad estudiantes: </h4>
                </div>
            </div>
            <div class="ContenedorLogoOperacion col-4">
                <img src="../Imagenes/Mapa mental.png">
            </div>
            <div class="Contenido">
                <div class="row">
                    <div class="col-3">
                        <div class="MenuContenido">
                            <h1>Menu</h1>
                            <div>
                                <ul>
                                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                                        <?php
                                        $Materias = new MateriaS(0, '', 0);
                                        $TotalMaterias = $Materias::SelecMaterias();
                                        $NumMaterias = mysqli_num_rows($Materias::SelecMaterias());
                                        if ($TotalMaterias) {
                                            while ($fila = mysqli_fetch_array($TotalMaterias)) {
                                                $id = $fila["id_materias"];
                                                $nombremateria = $fila["nom_materias"];
                                        ?>
                                                <li>
                                                    <a name="Materia" href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>?id=<?php echo $id ?>"><?php echo $nombremateria ?></a>
                                                </li>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <h1>Publicaciones</h1>
                        <button class="LinkVentana" onclick="AbrirVentana();">Crear pregunta</button>
                        <div>
                            <div class="acordeon">
                                <?php
                                if (isset($_POST)) {
                                    $Preguntas = new Preguntas(0, '', 0, 0);
                                    $idmateria = $_GET['id'];
                                    $TotalPreguntas = $Preguntas::SelectPreguntas($idmateria);
                                    if ($TotalPreguntas) {
                                        while ($filapreg = mysqli_fetch_array($TotalPreguntas)) {
                                            $idpregunta = $filapreg["id_pregunta"];
                                            $pregunta = $filapreg["Pregunta_materia"];
                                            $idUsuario = $filapreg["id_usu"];
                                ?>
                                            <section id="<?php echo $idpregunta; ?>">
                                                <a href="#<?php echo $idpregunta; ?>"><?php echo $pregunta; ?></a>
                                                <p>
                                                    Ingresa un comentario:
                                                    <input type="text" id="P<?php echo $idpregunta; ?>" placeholder="Ingrese un comentario">
                                                    <button class="Botones" id="submit"><a href="">Aceptar</a></button>
                                                </p>
                                                <p>
                                                    <b>Comentarios</b>
                                                    <br>
                                                    <?php
                                                    $Respuestas = new Respuestas(0, '', 0);
                                                    $TotalRespuestas = $Respuestas::ConsultarRespuesta($idpregunta);
                                                    if ($TotalRespuestas) {
                                                        while ($filarespu = mysqli_fetch_array($TotalRespuestas)) {
                                                            $idrespues = $filarespu["id_respuesta"];
                                                            $respues = $filarespu["Respuesta_Pregunta"];
                                                            $id_usurespuesta = $filarespu["id_usu"];

                                                            $ObtenerNombre = $Respuestas::ConsultarUsuarioPorIdRespuesta($id_usurespuesta);
                                                            if ($ObtenerNombre) {
                                                                while ($filasusuario = mysqli_fetch_array($ObtenerNombre)) {
                                                                    $NombreUsuario = $filasusuario["Usuario"];

                                                    ?>
                                                                    <b class="NomUsuario"><?php echo $NombreUsuario; ?></b>
                                                                    <br>
                                                                    <b class="Comentario"><?php echo $respues; ?></b>
                                                                    <br><br>
                                                    <?php
                                                                }
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </p>
                                            </section>
                                <?php
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ventana">
        <div class="form">
            <div class="cerrar"> <a href="javascript:CerrarVentana()">Cerrar X</a></div>
            <h1>Formulario</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, cumque! Esse, perferendis labore! Ratione molestias eaque quasi vitae ipsa, voluptatem quibusdam? Aperiam deleniti provident eos delectus soluta eaque aspernatur ab.</p>
        </div>
    </div>
    <div class="footer fixed-bottom d-flex justify-content-center">
        <div class="fixed-left">
            <img src="../Imagenes/ucc.jpg" alt="ImagenUcc">
        </div>
        <p>
            <b>Universidad Cooperativa de Colombia</b><br>
            Todos los derechos reservados - Bogotá - Colombia - 2022<br>
            Realizado por estudiantes de Ingenieria de Sistemas - Diseño Orientado A Objetos
        </p>
        <div class="fixed-right">
            <img src="../Imagenes/ucc2.jpg" alt="ImagenUcc">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>