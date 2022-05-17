<!DOCTYPE html>
<html lang="en">
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
				<p>Contactenos</p>
			</blockquote>
			<figcaption class="blockquote-footer">
				Sistema de <cite title="Source Title">Registro</cite>
			</figcaption>
		</figure>
	</article>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h3 style="color:green;"><strong>Contactenos !</strong></h3>
			</div>
			<div class="articulo">
				<article>
					<p>Para comunicarse con la UCC Universidad Cooperativa de Colombia, le invitamos a diligenciar este formulario. Sus respuestas nos ayudarán a darle la información más útil posible. La información personal será considerada confidencial y se utilizará solamente para responder a sus preguntas.
					</p>
					<section class="main">
						<div class="wrapp">
							<div class="mensaje">
								<h3 style="color:green;"><strong>Dejanos tus Inquietudes !</strong></h3>
							</div>
						</div>
					</section>
					<form id="form" class="topBefore" action="enviar.php" method="POST" style="border:solid 2px gray; width: 600px; height: 400px; border-radius: 5px;margin-left: 20%;">
						<input name="nombre" type="text" placeholder="Nombres Completos" required style="margin-left: 50px;margin-top: 20px;width: 80%;height: 15%;"><br><br>
						<input name="email" type="text" placeholder="Email" required style="margin-left: 50px;width: 80%;height: 15%;"><br><br>
						<textarea name="mensaje" type="text" placeholder="Mensaje" required style="margin-left: 50px;width: 80%;height: 25%;"></textarea><br><br>
						<input id="boton" type="submit" value="Contactenos" style="margin-left: 50px;width: 80%;height: 15%">
					</form>
				</article>
			</div>
		</div>
	</section>
	<iframe style="margin-left:55%;border:3px solid green;margin-top: -70%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127269.2385502581!2d-74.15398414303557!3d4.56457560772421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99876fc43585%3A0x215805f3ea4a5850!2sUniversidad%20Cooperativa%20de%20Colombia%20Bloque%201!5e0!3m2!1ses!2sco!4v1650410370644!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<footer>
		<div class="wrapp">
			<section class="footers border  pt-5 pb-3">
				<div class="{{ $container }} pt-5">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-4 footers-one ">
							<div class="footers-info mt-3">
								<p>Ingenieria de Sistemas</p>
								<p>Bogota - Colombia</p>
							</div>
							<div class="social-icons" style="color: gray;">
								<a href="https://www.facebook.com/"><i id="social-fb" class="fab fa-facebook-square fa-2x social"></i></a>
								<a href="https://twitter.com/"><i id="social-tw" class="fab fa-twitter-square fa-2x social"></i></a>
								<a href="https://plus.google.com/"><i id="social-gp" class="fab fa-google-plus-square fa-2x social"></i></a>
								<a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-2x social"></i></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="copyright border">
				<div class="container" style="color: gray;">
					<div class="row text-center">
						<div class="col-md-12 pt-3">
							<p class="text-muted">© UCC</p>
						</div>
					</div>
				</div>
			</section>
		</div>
	</footer>
</body>

</html>