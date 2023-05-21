<?php
/**
*Segundo ejemplo de documentación de PHP clase trabajador
*@autor Juan Carlos Rodríguez Miranda
*@version 1.1
*@copyright Public Domain
*@since 1.0.1
*/
class trabajador{
/**
*@var string $nombre variable donde se almacenará el nombre
*@var string $apellido variable donde se almacenara el apellido
*/
	public $nombre="";
	public $apellido="";
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
/**
*Método getApellido
*esta función devuelve el nombre del trabajador.
*@return string con el apellido del trabajador.
*/
        public function getApellido(){            
                return $this->apellido;
        }
/**
*Metodo setApellido, esta función da un nuevo apellido al trabajador.
*@param string nuevoApellido con el nuevo apellido del trabajador
*/
        public function setNombre($nuevoApellido){
                $this->apellido = $nuevoApellido;
        }

}

?>










