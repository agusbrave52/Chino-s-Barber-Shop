<?php 
	$nombre = $_POST['bb-name'];
    $phone = $_POST['bb-phone'];
    $time = $_POST['bb-time'];
    $tipo = $_POST['bb-branch'];
	$date = $_POST['bb-date'];
	$asunto = 'Reserva lugar';
	$mensaje = "Nombre: ".$nombre."<br> Telefono: $phone<br> Hora: $time <br> Fecha: $date <br> Tipo: $tipo <br> Mensaje:".$_POST['bb-message'];


	if(mail('urubravo52@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>