<?php

class Prueba{

    private $posible_genero=['f','m'];
    private $posible_nombre_m =['juan', 'gabriel','emilio','juancho','david'];
    private $posible_nombre_f =['milka', 'gabriela','emilia','juanchita','daniela'];
    private $posible_apellido = ['armas','poma','terry'];


    public $nombre;
    public $persona;
    public $apellidos;
    public $genero;

    public function __construc(){

    }
    public function crearPersona(){
        $this->genero = $this->posible_genero[rand(0,1)];
        $this->nombre = $this->obtenerNombre();
        $this->apellidos = $this->obtenerApellido().' '.$this->obtenerApellido();
        $this->persona = $this->nombre .' '.$this->apellidos;
        return $this->persona;
    }

    private function obtenerNombre(){
        if($this->genero ==='m'){
            return $this->posible_nombre_m[rand(0,count($this->posible_nombre_m)-1)];
        }
        return $this->posible_nombre_f[rand(0,count($this->posible_nombre_f)-1)];
    }
    private function obtenerApellido(){
        return $this->posible_apellido[rand(0,count($this->posible_apellido)-1)];
    }
    public  static function crear(){
        $persona = new self();
        return $persona->crearPersona();
    }
}