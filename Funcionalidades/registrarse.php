<?php
include '../Conexion/conexion.php';


$tipo = $_POST["tipo"];
$numero = $_POST["numero"];
$usuario = $_POST["usuario"];
$apellido = $_POST["apellido"];
$semestre = $_POST["semestre"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$password = $_POST["password"];

$insertar = "insert into registro (id_tipo,numero,usuario,apellido,id_semestre,telefono,correo,password) values ('$tipo', '$numero', '$usuario', '$apellido', '$semestre', '$telefono', '$correo', '$password')";

$resultado = mysqli_query($conexion,$insertar);

if (!$resultado){

	  header('Refresh: 1; URL=regusuario.php');

  echo 	'<script>
  	alert("Error al registrarse,pulse aceptar y espere un momento");
	</script>';
	exit;
}else{
		  header('Refresh: 1; URL=../index.php');

  echo 	'<script>
  	alert("Usuario registrado,pulse aceptar y espere un momento");
	</script>';
	exit;
}
?>