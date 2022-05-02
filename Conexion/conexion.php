
<?php   
    function ConexxBD()
    {
        $SERVIDOR = "localhost";
        $Usuario = "root";
        $Contrasenna = "";
        $NomBD = "desarrollo";

        $Connex = mysqli_connect($SERVIDOR, $Usuario, $Contrasenna, $NomBD);
        if (!$Connex) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $Connex;
    }
    $Conexion = ConexxBD();
    function EjecucionQuery($query)
    {
        $respuesta = $GLOBALS['Conexion']->query($query);
        return $respuesta;
    }
?>