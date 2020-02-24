<?php
//Recibir los datos
$cantHuesped = $_POST['canthuesped'];
$diasEstadia = $_POST['diasestadia'];

$INDIVIDUAL = 2500;
$DOBLE = 4600;
$FAMILIAR = 5200;
$precioHabitacion = 0;
$IVA = 0.19;
$precioConIva = 0;
$dcto = 0;
$precioConDcto = 0;

//Realizar operaciones
switch ($cantHuesped) {
    case 1:
        $precioHabitacion = $diasEstadia * $INDIVIDUAL;
        $precioConIva = $precioHabitacion * $IVA + $precioHabitacion;
        $dcto = 0.05;        
        break;
    case 2:
        $precioHabitacion = $diasEstadia * $DOBLE;
        $precioConIva = $precioHabitacion * $IVA + $precioHabitacion;
        $dcto = 0.09;
        break;
    default:
        $precioHabitacion = $diasEstadia * $FAMILIAR;
        $precioConIva = $precioHabitacion * $IVA + $precioHabitacion;
        $dcto = 0.15;
        break;
}

$precioConDcto = $precioConIva - $precioConIva * $dcto;

var_dump($precioHabitacion);
print("<br>");
var_dump($precioConIva);
print("<br>");
var_dump($precioConDcto);


//Entregar resultado
//print_r('El resultado es: ' . $resultado);