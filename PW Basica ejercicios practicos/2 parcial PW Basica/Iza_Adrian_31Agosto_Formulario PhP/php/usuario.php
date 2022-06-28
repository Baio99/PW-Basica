<?php

class Usuario {
	public $nombre;
	public $apellido;
	public $cedula;
	public $fechan;
	public $genero;
	public $estC;
	public $telefono;
	public $direccion;
	
	//Metodos
	public function __construct($nombre, $apellido, $cedula, $fechan, $genero, $estC, $telefono, $direccion) {
    	$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->cedula = $cedula;
		$this->fechan = $fechan;
		$this->genero = $genero;
		$this->estC = $estC;
		$this->telefono = $telefono;
		$this->direccion = $direccion;
  	}
	
	public function getNombre(){
		return $this->nombre;
	}
	
	public function getApellido(){
		return $this->apellido;
	}
	
	public function getCedula(){
		return $this->cedula;
		
	}
	
	public function getfechan(){
		return $this->fechan;
	}
	
	public function getGenero(){
		return $this->genero;
	}
	
	
	
	public function getestC(){
		return $this->estC;
	}
	
	public function getDireccion(){
		return $this->direccion;
	}
	
	public function getTelefono(){
		return $this->telefono;
	}
	
	
}

?>