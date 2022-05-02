<html>

<head>
    <?php
    include_once("Clases/Materias.php");
    include_once("Clases/Preguntas.php");
    ?>
    <link href="https://code.jquery.com/jquery-3.3.1.min.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="CSS/ArchivosMaestroMate.css" rel="stylesheet">
    <script src="Javascript/FuncionalidadesGenerales.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="ContenedorCentral d-flex justify-content-center">
            <div class="ContenedorIndex d-flex justify-content-between row">
                <div class="ContenedorLogoUni col-4">
                    <img src="Imagenes/ImagenLogin.jpg">
                </div>
                <div class="InformacionFuncionalidad col-4">
                    <?php
                    $resultadoQuery = MateriaS::SelecMaterias();
                    if ($resultadoQuery) {
                        while ($row = mysqli_fetch_array($resultadoQuery)) {
                            $nombre = $row["nom_materias"];

                    ?>
                            <input type="button" value="<?php echo $nombre; ?>">
                    <?php
                        }
                    }

                    ?>
                    <h1> MATERIAS </h1>
                    <div>
                        <h4>Cantidad estudiantes: </h4>
                    </div>
                </div>
                <div class="ContenedorLogoOperacion col-4">
                    <img src="Imagenes/Mapa mental.png">
                </div>
                <div id="tabsDiv">
                    <!-- Informacion Menus -->
                    <?php
                    $Preguntas = new Preguntas(0, '', 0, 0);
                    $Materias = new MateriaS(0, '', 0);
                    $TotalMaterias = $Materias::SelecMaterias();
                    $NumMaterias = mysqli_num_rows($Materias::SelecMaterias());

                    $i = 1;
                    if($TotalMaterias)
                    {
                        ?>
                        <script src="Javascript/JsMaterias.js">
                            AgregarDivs(<?php echo $pregunta; ?>,ArrayRespuestas,idmateria)
                        </script>
                        <?php
                        /*
                        while ($filamateria = mysqli_fetch_array($TotalMaterias)) {
                            
                            $TotalPreguntas = $Preguntas::SelectPreguntas($i);
                            $id_materia = $fila["id_materias"];
                            if($TotalPreguntas)
                            {
                                while ($filapreg = mysqli_fetch_array($TotalPreguntas)) {
                                    $id_pregunta = $filapreg["id_pregunta"];
                                    $pregunta = $filapreg["Pregunta_materia"];
                                }
                            }
                            $i++;
                            
                        }
                        */
                        
                    }
                    
                    ?>
                    <!-- Menu Izquierdo interactivo -->
                    <ul class="ulClass" style="height:300px">
                        <?php
                        if ($TotalMaterias) {
                            while ($fila = mysqli_fetch_array($TotalMaterias)) {
                                $id = $fila["id_materias"];
                                $nombremateria = $fila["nom_materias"];
                        ?>
                                <li style="list-style-type:none;">
                                    <button class="linkClass" onclick="displayContent(event, '<?php echo $id; ?>')">
                                        <?php echo $nombremateria ?>
                                    </button>
                                </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="Javascript/QueryMaterias.js"></script>
</body>

</html>