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

	<img src="imagenes/ucc.jpg" style="width: 1000px;height: 900px;">



	<article style="width: 500px;height: 200px;margin-left: 63%;margin-top: -45%;">
		<figure class="text-center" style="font-size: 50px;margin-top:100px;">
			<blockquote class="blockquote">
				<p>Universidad Cooperativa de Colombia.</p>
				<p>Inicio de Sesion</p>
			</blockquote>
			<figcaption class="blockquote-footer">
				Sistema de <cite title="Source Title">Registro</cite>			
			</figcaption>
		</figure>
	</article>

	<section style="width: 600px;height: 300px;margin-left: 60%;margin-top:5%;">
		<form action="templates/validar.php" method="POST">
			<div class="mb-3" style="width:80%;">
				<label for="exampleInputEmail1" class="form-label"><strong>Correo Institucional</strong></label>
				<input type="email" class="form-control" name="correo" aria-describedby="emailHelp" style="border: 2px solid black;">
				<div id="emailHelp" class="form-text">Por favor,solo ingrese su correo institucional.</div>
			</div>
			<div class="mb-3" style="width:80%;">
				<label for="exampleInputPassword1" class="form-label"><strong>Contraseña</strong></label>
				<input type="password" class="form-control" name="password" style="border: 2px solid black;">
			</div>

			<input type="submit" value="Enviar" class="btn btn-success">
		</form>
	</section>

	<div style="width: 25%;margin-left: 60%;text-align: center;">
		<p><strong>Si aun no esta registrado,pulse el boton Registrarse </strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z"/>
</svg></p>		
		<a href="/Funcionalidades/registrarse.php" type="submit" class="btn btn-success">Registrarse</a>

</div>

	<div style="width: 25%;margin-left: 60%;text-align: center;">
		<p><strong>Si gusta contactarnos,pulse el boton Contactenos </strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z"/>
</svg></p>

                <a href="/Funcionalidades/contactenos.php" type="submit" class="btn btn-success">Contactenos</a>
	</div>
	

</body>
</html>