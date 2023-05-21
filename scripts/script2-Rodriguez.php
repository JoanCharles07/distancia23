<?php
/**
*Segundo ejemplo de documentación de PHP clase trabajador
*@autor Juan Carlos Rodríguez Miranda
*@version 1.0.1.
*@copyright Public Domain
*@since 1.0.1
*/
class trabajador{
/**
*@var string $nombre variable donde se almacenará el nombre
*/
	public $nombre="";
/**
*Método getNombre(uso este tipo porque es un ejemplo sino usaria __get)
*esta función devuelve el nombre del trabajador.
*@return string con el nombre del trabajador.
*/
	public function getNombre(){		
		return $this->nombre;
	}
/**
*Metodo setNombre, esta función da un nuevo nombre al trabajador.
*@param string nuevoNombre con el nuevo nombre del trabajador
*/
	public function setNombre($nuevoNombre){
		$this->nombre = $nuevoNombre;
	}
}

?>










