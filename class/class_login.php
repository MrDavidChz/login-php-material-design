<?php
session_start();
require_once("conexion.php");
class login
{
	public function generateSession()
	{
		//recogemos las variables post del formulario
		$name     = $_POST['name'];
		$password = $_POST['password'];
		//validación de Usuario con un name y password ya definido
		$this->validaUsuario($name,$password);

		//validacion de un Usuario a Nivel Base de Datos cargar la base de datos y en la clase de la conexion poner los datos de la base de datos
		//$this->validaUsuarioDB($name,$password);


	}

	public function validaUsuarioDB($name,$password){

		$username = strip_tags($name);
		$pass     = strip_tags($password);
		$pass =md5($pass );

		//generamos consulta

	    $query = "SELECT * FROM usuarios WHERE username='".$username."' AND password='".$pass."';";
		//ejecucion de consulta
		$result = mysql_query($query,Conectar::conect());
		$reg    = mysql_num_rows($result);
		if ($reg == 0)
		{
			header("Location:index.php?usuario=no_existe");
		}else{
				$reg=mysql_fetch_array($resultado);
				if($reg)
			{
				$_SESSION['nick'] = $reg['username'];
				header("Location:index.php");
			}
		}
		
		 
	}

	public function validaUsuario($name,$password){

		$username = 'demo';
		$pass     =  '123456';

		 if ($name==$username && $pass==$password) {
		 		$_SESSION['nick'] = $username;	
				header("Location:index.php");
		 } else {
		 	header("Location:index.php?usuario=no_existe");
		 }
		 
	}
}
?>
