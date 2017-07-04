
<!--Para reenviar el mensaje al cliente usando su propio correo-->
<?php
	
	$nombre  = $_POST["nombre"];
	$correo  = $_POST["correo"];

	echo "Usted envio un mensaje a CJS Servicios Integrales desde el correo : ".$correo.<br>;
	echo "Nuestro equipo de pondra en contacto pronto con : ".$nombre."<br>";

	mail($correo,$nombre);
?>