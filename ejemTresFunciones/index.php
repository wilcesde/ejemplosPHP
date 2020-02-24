<?php
    // Funciones sin parametros
    function saludo(){
        echo "Como estan?";
    }

    //Ejecutar la funcion
    saludo();

    // Funciones con parametros
    // function saludo($nombre){
    //     echo "Como estas " . $nombre;
    //     echo "<br>";
    // }

    // saludo('Maria');
    // saludo('Juan');
    // saludo('Ana');

    // Funcion con return.
    // function sum($a, $b){
    //     $resultado = ($a+$b);
    //     return $resultado;
    // }

    // sum(10, 5);
    // echo "Total: " . $resultado;
    // $c = sum(9, 2);
    // echo $c;

    //Usar funciones que estan en otro archivo
    // include 'operAritm.php';
    // include_once 'operAritm.php';
    //require 'operAritm.php';

    //restar(16, 4);