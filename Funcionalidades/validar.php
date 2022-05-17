<?php
$correo=$_POST['correo'];
$password=$_POST['password'];

$conexion=mysqli_connect("localhost","root","","desarrollo");
$consulta="SELECT * FROM registro WHERE correo='correo' and password='password'";
$resultado=mysqli_query($conexion,$consulta);

if (($correo=='administrador@ucc.com.co')&&($password=='administradorucc')) {
         header('Refresh: 1; URL=tregistrados.php');

echo  '<script>
    alert("Bienvenido Admministrador UCC,espere un momento");
    </script>';
    exit;
}else{

  if($correo=$_POST['correo'] && $password=$_POST['password']){

          header('Refresh: 1; URL=estudiante.php');

  echo  '<script>
    alert("Bienvenido Estudiante UCC,espere un momento");
    </script>';
    exit;
}
}

?>