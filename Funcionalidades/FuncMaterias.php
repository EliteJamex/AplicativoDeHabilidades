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
    <script src="../Javascript/VentanasEmergentes.js"></script>
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
                                <form action="InsertarDatos.php" method="POST">
                                    <?php
                                    if (isset($_POST)) {
                                        $Preguntas = new Preguntas(0, '', '', 0);
                                        $idmateria = $_GET['id'];
                                        $TotalPreguntas = $Preguntas::SelectPreguntas($idmateria);
                                        if ($TotalPreguntas) {
                                            while ($filapreg = mysqli_fetch_array($TotalPreguntas)) {
                                                $idpregunta = $filapreg["id_pregunta"];
                                                $pregunta = $filapreg["Pregunta_materia"];
                                                $idUsuario = $filapreg["numero"];
                                    ?>
                                                <section id="<?php echo $idpregunta; ?>">
                                                    <a href="#<?php echo $idpregunta; ?>"><?php echo $pregunta; ?></a>
                                                    <div>
                                                        <p>
                                                            <b>Comentarios</b>
                                                            <br>
                                                            <?php
                                                            $Respuestas = new Respuestas(0, '', 0, '');
                                                            $TotalRespuestas = $Respuestas::ConsultarRespuesta($idpregunta);
                                                            if ($TotalRespuestas) {
                                                                while ($filarespu = mysqli_fetch_array($TotalRespuestas)) {
                                                                    $idrespues = $filarespu["id_respuesta"];
                                                                    $respues = $filarespu["Respuesta_Pregunta"];
                                                                    $UsuarioId = $filarespu["numero"];

                                                                    $ObtenerNombre = $Respuestas::ConsultarUsuarioPorIdRespuesta($idrespues);

                                                                    if ($ObtenerNombre) {
                                                                        while ($filasusuario = mysqli_fetch_array($ObtenerNombre)) {
                                                                            $NombreUsuario = $filasusuario["registro"];

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
                                                    </div>
                                                </section>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1>Datos: <?php echo $idpregunta;
                echo $idusu;
                echo $Comentario; ?></h1>
    <?php
    ?>
    <div class="ventana">
        <div class="form">
            <div class="cerrar"> <a href="javascript:CerrarVentana()">Cerrar X</a></div>
            <form action="InsertarDatos.php" method="POST">
                <h1>Seleccione la materia: </h1>
                <select name="SeleccionMat">
                    <?php
                        $ObjMaterias = new MateriaS(0,'',0);
                        $TotalMaterias = $ObjMaterias::SelecMaterias();
                        if($TotalMaterias)
                        {
                            while ($filamat = mysqli_fetch_array($TotalMaterias)) {
                                $idpregunta = $filamat["id_materias"];
                                $pregunta = $filamat["Pregunta_materia"];
                                $idUsuario = $filamat["numero"];
    
                                echo '<option value="'.$pregunta.'">'.$pregunta.'</option>';
                            }
                        }
                    ?>
                </select>
                <h1>Seleccione una pregunta: </h1>
                <select name="SeleccionPre">
                <?php
                    if($TotalPreguntas)
                    {
                        while ($filapreg = mysqli_fetch_array($TotalPreguntas)) {
                            $idpregunta = $filapreg["id_pregunta"];
                            $pregunta = $filapreg["Pregunta_materia"];
                            $idUsuario = $filapreg["numero"];

                            echo '<option value="'.$pregunta.'">'.$pregunta.'</option>';
                        }
                    }
                ?>
                </select>
            </form>
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