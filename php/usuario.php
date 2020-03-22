<?php 
	/*
	*
	*
	*/
	class Usuario{
		private $id;
		private $nombre;
		private $apellido;
		private $correo;
		private $clave;
		private $pais;
		private $ciudad;
		private $datos;
		private $check;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getApellido(){
			return $this->apellido;
		}

		public function setApellido($apellido){
			$this->apellido = $apellido;
		}

		public function getCorreo(){
			return $this->correo;
		}

		public function setCorreo($correo){
			$this->correo= $correo;
		}

		public function getClave(){
			return $this->clave;
		}

		public function setClave($clave){
			$this->clave = $clave;
		}

		public function getPais(){
			return $this->pais;
		}

		public function setPais($pais){
			$this->pais = $pais;
		}

		public function getCiudad(){
			return $this->ciudad;
		}

		public function setCiudad($ciudad){
			$this->ciudad = $ciudad;
		}

		public function getDatos(){
			return $this->datos;
		}

		public function setDatos($datos){
			$this->datos = $datos;
		}

		public function getCheck(){
			return $this->check;
		}

		public function setCheck($check){
			$this->check = $check;
		}


	}
?>