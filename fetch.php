<?php


$connect = mysqli_connect("localhost","root", "", "finalsena");
if(isset($_POST["id_novedad"]))
{
	$output = array();
	$procedure = "
	CREATE PROCEDURE whereNovedad(IN id_novedad int(15))
	BEGIN
	SELECT * FROM novedades WHERE id_novedad = id_novedad;
	END;
	";
	if(mysqli_query($connect, "DROP PROCEDURE IF EXISTS whereNovedad"))
	{
		if(mysqli_query($connect, $procedure))
		{
			$query = "CALL whereNovedad(".$_POST["id_novedad"].")";
			$result = mysqli_query($connect, $query);

			while($row = mysqli_fetch_array($result))
			{
				$output['asunto'] = $row["asunto"];
				$output['descripcion'] = $row["descripcion"];
				$output['cedula_bodeguero'] = $row["cedula_bodeguero"];
				$output['cod_herramienta'] = $row["cod_herramienta"];
				$output['cantidad'] = $row["cantidad"];
			}
			echo json_encode($output);
		}
	}

}
?>