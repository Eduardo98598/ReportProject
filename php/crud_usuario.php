<?php 
	require_once('conexion.php');
	require_once('usuario.php');
	
	class CrudUsuario{

		public function __construct(){}

		//inserta los datos del usuario
		public function insertar($usuario){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO users VALUES(NULL, :nombre, :apellido, :correo, :contrasenia, :pais, :ciudad, :datos, :check)');
            $insert->bindValue('nombre',$usuario->getNombre());
            $insert->bindValue('apellido',$usuario->getApellido());
            $insert->bindValue('correo',$usuario->getCorreo());
			//encripta la clave
			$pass=password_hash($usuario->getClave(),PASSWORD_DEFAULT);
            $insert->bindValue('contrasenia',$pass);
            
            $insert->bindValue('pais',$usuario->getPais());
            $insert->bindValue('ciudad',$usuario->getCiudad());
            $insert->bindValue('datos',$usuario->getDatos());
            $insert->bindValue('check',$usuario->getCheck());
			$insert->execute();
		}

		//obtiene el usuario para el login
		public function obtenerUsuario($nombre, $clave){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM users WHERE correo=:correo');//AND clave=:clave
			$select->bindValue('correo',$nombre);
			$select->execute();
			$registro=$select->fetch();
			$usuario=new Usuario();
			//verifica si la clave es conrrecta
			if (password_verify($clave, $registro['contrasenia'])) {				
				//si es correcta, asigna los valores que trae desde la base de datos
				$usuario->setId($registro['id']);
				$usuario->setNombre($registro['correo']);
				$usuario->setClave($registro['contrasenia']);
			}			
			return $usuario;
		}

		//busca el nombre del usuario si existe
		public function buscarUsuario($correo){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM users WHERE correo=:correo');
			$select->bindValue('correo',$correo);
			$select->execute();
			$registro=$select->fetch();
			if($registro['id']!=NULL){
				$usado=False;
			}else{
				$usado=True;
			}	
			return $usado;
		}
	}
?>