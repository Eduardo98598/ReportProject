<?php 
	require_once('usuario.php');
	require_once('crud_usuario.php');
	require_once('conexion.php');

	//inicio de sesion
	session_start();

	$usuario=new Usuario();
	$crud=new CrudUsuario();
	//verifica si la variable registrarse está definida
	//se da que está definicda cuando el usuario se loguea, ya que la envía en la petición
	if (isset($_POST['signup'])) {
        $usuario->setNombre($_POST['name']);
        $usuario->setApellido($_POST['lastname']);
		$usuario->setCorreo($_POST['email']);
        $usuario->setClave($_POST['pass']);
        $usuario->setPais($_POST['country']);
        $usuario->setCiudad($_POST['city']);
        $usuario->setDatos($_POST['datos']);
        if ($_POST['check'] == 1)  {
            $usuario->setCheck(1);
            // Checkbox is selected
        } else {
        
            $usuario->setCheck(0);
        }
        
		if ($crud->buscarUsuario($_POST['email'])) {
			$crud->insertar($usuario);
			header('Location: ../index.html');
		}else{
			header('Location: error.php?mensaje=El nombre de usuario ya existe');
		}		
		
	}elseif (isset($_POST['login'])) { //verifica si la variable entrar está definida
        $usuario=$crud->obtenerUsuario($_POST['email'],$_POST['pass']);
        if($usuario->getId()==1)
            {
                $_SESSION['email']=$usuario; //si el usuario se encuentra, crea la sesión de usuario

                header('Location: root.php'); //envia a la página que simula la cuenta

            }

            else {
       
        // si el id del objeto retornado no es null, quiere decir que encontro un registro en la base
        
		if ($usuario->getId()!=null) {
            
			$_SESSION['email']=$usuario; //si el usuario se encuentra, crea la sesión de usuario
			header('Location: cuenta.php'); //envia a la página que simula la cuenta
		}else{
            
			header('Location: error.php?mensaje=Tus nombre de usuario o clave son incorrectos'); // cuando los datos son incorrectos envia a la página de error
            
        }
       
        
    }
}
    elseif(isset($_POST['salir'])){ // cuando presiona el botòn salir
		header('Location: ../index.html');
		unset($_SESSION['email']); //destruye la sesión
    }

?>