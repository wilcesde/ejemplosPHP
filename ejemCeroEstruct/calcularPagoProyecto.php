<?php
//Recibir los datos
$tipoProyecto = $_POST['tipoproyecto'];
$valHora = 0;

//Realizar operaciones
if ($tipoProyecto == "a" || $tipoProyecto == "A") {
    $valHora = 20000;
} else {
    if ($tipoProyecto == "b" || $tipoProyecto == "B") {
        $valHora = 10000;
    } else {
        $valHora = 5000;
    }    
}

//Entregar resultado
var_dump($valHora);
print_r(' El resultado es: ' . $valHora);
print("<br>");

$sueldoMes = 0;
$JORLABORAL = 8;
$MESLABORAL = 30;
$sueldoMes = $valHora * $JORLABORAL * $MESLABORAL;
var_dump($sueldoMes);
print("<br>");

$SALARIOTOPE = 1500000;
$HORASEXTRAS = 3;
$INCREMENTOHOREXTRA = 0.06;
$MENSAJE = "Salario es mayor a tope maximo";
$valHoraExtra = 0;
$newSueldo = 0;
if ($sueldoMes <= $SALARIOTOPE) {
    $valHoraExtra = $valHora * $INCREMENTOHOREXTRA * $HORASEXTRAS;
    $newSueldo = $sueldoMes + $valHoraExtra;
} else {
    print_r($MENSAJE);
}

var_dump($valHoraExtra);
print("<br>");
var_dump($newSueldo);