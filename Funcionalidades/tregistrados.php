<?php

include '../Conexion/conexion.php';


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro UCC</title>
</head>
<body>

	<article style="width: 500px;height: 200px;margin-left: 37%;">
		<figure class="text-center" style="font-size: 50px;margin-top:100px;">
			<blockquote class="blockquote">
				<p>Universidad Cooperativa de Colombia.</p>
				<p>Tabla de Usuarios Registrados</p>
			</blockquote>
			<figcaption class="blockquote-footer">
				Sistema de <cite title="Source Title">Registro</cite>			
			</figcaption>
		</figure>
	</article>


<table class="table">
  <thead>
    <tr>

      <th scope="col">Numero de Identificacion</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>      
      <th scope="col">Telefono</th>
      <th scope="col">Correo Institucional</th>
      <th scope="col">Semestre</th>
      <th scope="col">Tipo de Documento</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $sql="SELECT numero,usuario,apellido,telefono,correo,id_semestre,documento.descripcion FROM registro INNER JOIN documento ON registro.id_tipo = documento.id_tipo";
    $resultado = mysqli_query($conexion,$sql);

    while ($mostrar=mysqli_fetch_array($resultado)) {
     ?>
    <tr> 
            <td><?php echo $mostrar['numero'] ?></td>
            <td><?php echo $mostrar['usuario'] ?></td>
            <td><?php echo $mostrar['apellido'] ?></td>            
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['correo'] ?></td> 
            <td><?php echo $mostrar['id_semestre'] ?></td>
            <td><?php echo $mostrar['descripcion'] ?></td>                                
            <td><button type="button" class="btn btn-success">Editar</button></td>
    </tr>
    <?php 
  }
     ?>   
  </tbody>
</table>
</body>
</html>