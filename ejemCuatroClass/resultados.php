<?php

require 'vehiculo.php';

$myCar = new vehiculo();

$myCar->marca = $_POST['txtmarca'];
$myCar->referencia = $_POST['txtreferencia'];
$myCar->modelo = $_POST['txtmodelo'];
$myCar->placa = $_POST['txtplaca'];

//Mostrar propiedades
echo "Marca vehiculo " . $myCar->marca . " ";

//Mostrar metodos
$myCar->estado();
print_r(" ");
$myCar->arrancar("Estamos arrancando");
$myCar->prender();