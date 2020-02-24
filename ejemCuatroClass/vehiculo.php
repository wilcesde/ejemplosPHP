<?php
    class Vehiculo{
        //Atraibutos (propiedades)
        //Vienen a ser lo similar a los campos de una tabla
        var $marca;
        var $referencia;
        var $modelo;
        var $placa;

        //Metodos
        function estado(){
            print("Vehiculo apagado");
        }

        function arrancar($p){
            $this->prendido=$p;
        }

        function prender(){
            echo $this->prendido;
        }

    }

    //Crear mi vehiculo a parti de la class vehiculo
    //Esto se llama INSTANCIAR UNA CLASS
    //O crear un objeto a parti de la class
    // $MyCarro = new Vehiculo;
    // $MyCarro->marca = 'Renault';
    // $MyCarro->referencia = 'Sandero';
    // $MyCarro->modelo = 2017;
    // $MyCarro->placa = 'AAA-123';

    //Mostrar los atributos de mi carro
    //echo $MyCarro->marca;
    // echo "Mi transporte es un " . 
    // $MyCarro->referencia . " " . 
    // $MyCarro->marca . " de placa " . 
    // $MyCarro->placa . " modelo " . 
    // $MyCarro->modelo;

    //Mostrar los metodos
    // $MyCarro->arrancar("nos vamos");
    // $MyCarro->prender();
