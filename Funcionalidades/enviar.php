<?php 

/* Enviar E-mail con Respuesta Automática

*/

// Recibiendo los datos pasados por la pagina "form_contato.php"

$recibenombre = $_POST["nombre"];

$recibemail = $_POST["email"];

$recibemsg  = $_POST["mensaje"];

// Definiendo las cabeceras del e-mail

$headers = "Content-type:text/html; charset=iso-8859-1";

// Vamos a definir ahora el destinatario de e-mail, ya sea el de usted o el de su cliente.


$para = "mym903dana@gmail.com";

// Definiendo el aspecto del mensaje

$mensaje   = "<h3>De:</h3> ";

$mensaje  .= $recibenombre;

$mensaje  .= "<h3>Mensaje</h3>";

$mensaje  .= $recibemsg;

$mensaje  .= "<h3>Correo Electronico</h3>";

$mensaje  .= $recibemail;

$mensaje  .= "</p>";


// Enviando el mensaje para el destinatario

$envia =  mail($para,   "Nuevo Cliente Contactandonos",   $mensaje,   $headers);

// Envia un e-mail para el remitente, agradeciendo la visita en el sitio, y diciendo que en breve el e-mail sera respondido.

$mensaje2  = "<p>Hola <strong>" . $recibenombre . "</strong>. Agradecemos su visita y la oportunidad de recibir su contacto. Antes de 48 horas usted recibira un e-mail con la respuesta a su duda.</p>";

$mensaje2 .= "<p>Observación - No es necesario responder este mensaje.</p>";

$envia =  mail($recibemail,"Su mensaje fué recibido!",$mensaje2,$headers);

echo '<div style="color:green; margin-left:25px; font-size:30px; font-family:verdana;">Mensaje enviado con Exito</div>';
echo '<img src="../imagenes/mensaje.jpg" alt="" class="Clase para la imágen" id="Identificador para la imágen" width="800px" height="800px">';

echo "<meta http-equiv='refresh' content='2;URL=../index.php'>";

?>