<?php
//recibir los datos del form html

$ciudad = $_POST['ciudad'];
$checkin = $_POST['fecha_ingreso'];
$huespedes = $_POST['huespedes'];
$checkout = $_POST['fecha_salida'];


echo("<h1>reserva de alojamineto</h1>");
echo("se ha realizado una reserva en la ciudad de " .$ciudad);
echo("se ha realizado una reserva en la ciudad de " .$huespedes. "persona");
echo("se ha realizado una reserva para el check-in en  " .$checkin);
// mostrar cantidad de noches tomando en cuenta $checkin y $checkout
$fecha_de_inicio = new DataTime($checkin);
$fecha_de_salida = new DataTime($checkout);



$noches = $fecha_inicio->diff($fecha_de_salida);

$diasDiferencia = $noches->days;


echo("<br>se ha realizado una reserva para" .$diasDiferencia. "noches");


?>