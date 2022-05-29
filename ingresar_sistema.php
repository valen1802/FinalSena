<?php
 

 if(isset($_POST)) {
 
	require("conexion/conexion.php");

	$loginNombre = $_POST['nombre'];
	$loginPassword = $_POST['cedula'];

	$consulta = "SELECT * FROM usuario U WHERE U.cedula='$loginNombre' AND U.password='$loginPassword' LIMIT 1";


		if($resultado = $con->query($consulta)) {
			while($row = $resultado->fetch_array()) {
				$usuario=$row["cedula"];
				$userok = $row["nombre"];
				$passok = $row["clave"];
				$estado = $row["estado"];
				$rol=$row["rol"];
			}
			$resultado->close();
		}
		$con->close();


		if(isset($loginNombre) && isset($loginPassword)) {

			if($loginNombre == $usuario && $loginPassword == $passok && $estado=="activo"){
				 if ($rol == "administrador") {
					 session_start();
					 $_SESSION["nombre"] = $userok;
					 $_SESSION["rol"]=$rol;
					 $_SESSION["cedula"]=$usuario;
					header("Location: administrador.php");	
					 }	

					 if ($rol == "bodeguero") {
					 session_start();
					$_SESSION["nombre"] = $userok;
					$_SESSION["rol"]=$rol;
					$_SESSION["cedula"]=$usuario;
					header("Location: bodeguero.php");	
				}
			}
			else {
				Header("Location: index.php");	
			}

		}
	} else {

		  session_destroy();
		header('location: ./');
	}

?>