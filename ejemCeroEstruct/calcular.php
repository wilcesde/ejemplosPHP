<?php
//Recibir los datos
$numUno = $_POST['numUno'];
$numDos = $_POST['numDos'];

//Realizar operaciones
$resultado = $numUno + $numDos;

//Entregar resultado
print_r('El resultado es: ' . $resultado);