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
	<div>
		<img src="../imagenes/campus.jpg" style="width:1100px;height:900px;margin-left:5px ;margin-top: 15px;">
	</div>
	<div>
		<article style="width: 500px;height: 20px;margin-left: 63%;margin-top: -52%;">
			<figure class="text-center" style="font-size: 50px;margin-top:100px;">
				<blockquote class="blockquote">
					<p>Universidad Cooperativa de Colombia.</p>
				</blockquote>
				<figcaption class="blockquote-footer">
					Registro<cite title="Source Title"> Usuario</cite>
				</figcaption>
			</figure>
		</article>

		<section style="width: 600px;height: 800px;margin-left: 60%;margin-top:5%;">

			<form action="registrarse.php" method="POST">

				<div class="mb-3" style="width:80%;">
					<label><strong>Tipo de Documento</strong></label>
					<select type="text" name="tipo" style="border: 2px solid black;text-align: center;width:90%;height:40px;border-radius: 5px;">
						<option selected>Seleccione Tipo de Documento</option>
						<option value="1">Cedula</option>
						<option value="2">Pasaporte</option>
						<option value="3">Tarjeta de Identidad</option>
					</select>
				</div>

				<div class="mb-3" style="width:80%;">
					<label><strong>Numero de Documento</strong></label>
					<input type="text" name="numero" style="border: 2px solid black;text-align: center;width:90%;height:40px;border-radius: 5px;">
				</div>

				<div class="mb-3" style="width:80%;">
					<label><strong>Nombre Usuario</strong></label>
					<input type="text" name="usuario" style="border: 2px solid black;text-align: center;width:90%;height:40px;border-radius: 5px;">
				</div>

				<div class="mb-3" style="width:80%;">
					<label><strong>Apellido Usuario</strong></label>
					<input type="text" name="apellido" style="border: 2px solid black;text-align: center;width:90%;height:40px;border-radius: 5px;">
				</div>

				<div class="mb-3" style="width:80%;">
					<label><strong>Semestre</strong></label>
					<select name="semestre" style="border: 2px solid black;text-align: center;width:90%;height:40px;border-radius: 5px;">
						<option selected>Seleccione Periodo Academico</option>
						<option value="1">Primero</option>
						<option value="2">Segundo</option>
						<option value="3">Tercero</option>
						<option value="4">Cuarto</option>
						<option value="5">Quinto</option>
						<option value="6">Sexto</option>
						<option value="7">Septimo</option>
						<option value="8">Octavo</option>
						<option value="9">Noveno</option>
						<option value="10">Decimo</option>
					</select>
				</div>

				<div class="mb-3" style="width:80%;">
					<label><strong>Telefono</strong></label>
					<input type="text" name="telefono" style="border: 2px solid black;text-align: center;width:90%;height:40px;border-radius: 5px;">
				</div>

				<div class="mb-3" style="width:80%;">
					<label><strong>Correo Institucional</strong></label>
					<input type="text" name="correo" style="border: 2px solid black;text-align: center;width:90%;height:40px;border-radius: 5px;">
				</div>

				<div class="mb-3" style="width:80%;">
					<label><strong>Contraseña</strong></label>
					<input type="password" name="password" style="border: 2px solid black;text-align: center;width:90%;height:40px;border-radius: 5px;">
				</div>

				<input type="submit" value="Enviar" class="btn btn-success">
			</form>
		</section>
	</div>
</body>

</html>