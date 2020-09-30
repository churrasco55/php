<?php

//clase:
//una clase es un modelo que se utiliza para crear objetos que comparten un mismo compartamiento, estado e identidad
    class Personas{
        //propiedades:caracteristicas que puede tener un objeto
        public $nombre;
        public $estatura;
        //metodo: es el algoritmo asociado a un objeto que indica la capacidad de lo que este puede hacer
        public function mostrar(){
            echo "soy mi nombre es $this->nombre y mi altura es $this->estatura<br>";
        }
    }
//objeto: una entidad provista de metodo o mensajes a los cuales responde propiedades con valores concretos

$a = new Personas(); 
$a -> nombre = "pedro";
$a -> estatura =160;
$a -> mostrar();

$b = new Personas(); 
$b -> nombre = "marcos";
$b -> estatura =188;
$b -> mostrar();
?>