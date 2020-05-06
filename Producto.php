<?php

class Producto{
    
    private $id;
    private $nombre;
    private $precio;
    
    public function __construct($id, $nombre, $precio) {
       $this->setId($id);
       $this->setNombre($nombre);
       $this->setPrecio($precio);
    }
    
    // Accesadores
    public function getId(){
        return $this->id;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getPrecio(){
        return $this->precio;
    }
    
    // Mutadores
    private function setId($id){
        $this->id = $id;
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function setPrecio($precio){
        $this->precio = $precio;
    }
}