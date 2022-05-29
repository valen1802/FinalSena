<?php

if(isset($_POST["action"]))
{
	$output = '';
	$connect = mysqli_connect("localhost", "root", "", "finalsena");
	if($_POST["action"] =="Agregar")

	{  
		$asunto 				    = mysqli_real_escape_string($connect, $_POST["asunto"]);
		$descripcion 				= mysqli_real_escape_string($connect, $_POST["descripcion"]);
		$cedula_bodeguero 			= mysqli_real_escape_string($connect, $_POST["cedula_bodeguero"]);
		$cod_herramienta 			= mysqli_real_escape_string($connect, $_POST["cod_herramienta"]);
		$cantidad 	= mysqli_real_escape_string($connect, $_POST["cantidad"]);

		$procedure = "
			CREATE PROCEDURE insertNovedad(IN asunto varchar(150), descripcion varchar(500), cedula_bodeguero int(15), cod_herramienta varchar(45), cantidad int(15))
			BEGIN
			INSERT INTO novedades(asunto, descripcion, cedula_bodeguero, cod_herramienta, cantidad) VALUES (asunto, descripcion, cedula_bodeguero, cod_herramienta, cantidad);
			END;
		";
		if(mysqli_query($connect, "DROP PROCEDURE IF EXISTS insertNovedad"))
		{
			if(mysqli_query($connect, $procedure))
			{
				$query = "CALL insertNovedad('".$asunto."', '".$descripcion."', '".$cedula_bodeguero."', '".$cod_herramienta."', '".$cantidad."')";
				mysqli_query($connect, $query);
				echo 'Data Insertada';
			}
		}
	}
	if($_POST["action"] == "Edit")
	{
		$asunto 				= mysqli_real_escape_string($connect, $_POST["asunto"]);
		$descripcion 				= mysqli_real_escape_string($connect, $_POST["descripcion"]);
		$cedula_bodeguero 			= mysqli_real_escape_string($connect, $_POST["cedula_bodeguero"]);
		$cod_herramienta 			= mysqli_real_escape_string($connect, $_POST["cod_herramienta"]);
		$cantidad 	= mysqli_real_escape_string($connect, $_POST["cantidad"]);
	
		$procedure = "
			CREATE PROCEDURE updateNovedad(IN id_novedad int(11), asunto varchar(150), descripcion varchar(500), cedula_bodeguero int(15), cod_herramienta varchar(45), cantidad int(15))
			BEGIN
			UPDATE novedades SET asunto = asunto, descripcion = descripcion, cedula_bodeguero = cedula_bodeguero, cod_herramienta = cod_herramienta, cantidad= cantidad
			WHERE id_novedad = id_novedad;
			END;
		";
		if(mysqli_query($connect, "DROP PROCEDURE IF EXISTS updateNovedad"))
		{
			if(mysqli_query($connect, $procedure))
			{
				$query = "CALL updateNovedad('".$_POST["id_novedad"]."', '".$asunto."', '".$descripcion."', '".$cedula_bodeguero."', '".$cod_herramienta."', '".$cantidad."')";

			 mysqli_query($connect, $query);
			 echo"DATOS ACTUALIZADOS";
				
			}
		}

	}
	if($_POST["action"] == "Delete")
	{
		$procedure = "
		CREATE PROCEDURE deleteNovedad(IN id_novedad int(15))
		BEGIN
		DELETE FROM novedades WHERE id_novedad = id_novedad;
		END;
		";
		if(mysqli_query($connect, "DROP PROCEDURE IF EXISTS deleteNovedad"))
		{
			if(mysqli_query($connect, $procedure))
			{ 
				$query = "CALL deleteNovedad('".$_POST["id_novedad"]."')";
				mysqli_query($connect, $query);
				echo 'DATO ELIMINADO';
			}
		}
	}	
 }
 ?>