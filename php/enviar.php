<?php 
	$nombre = $_POST['nombre'];
    $phone = $_POST['telefono'];
    $time = $_POST['hora'];
    $tipo = $_POST['corte'];
	$date = $_POST['fecha'];
	$asunto = 'Reserva lugar';
	$mensaje = "Nombre: " + $nombre + "<br> Telefono: " + $phone + " <br> Hora: " + $time + " <br> Fecha: " + $date + " <br> Tipo: " + $tipo + " <br> Mensaje:" + $_POST['mensaje'];


	if(mail('urubravo52@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>