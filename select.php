<!DOCTYPE html>
<html>
<head>
	<title>Novedades </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<style type="text/css">
		
        .transparente{
			opacity: 0.9;
			-moz-opacity: 0.8;
			filter: alpha(opacity=80);
			-khtml-opacity: 0.9;
			}
            th {
            padding: 50px 35px;
            text-align: left;
            font-weight: 500;
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
        }

       #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	border-collapse: collapse;
	width: 85%;

}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #a2eaf0;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #17d2e1;
    color: white;
}

	    </style>
</html>

<?php
//select.php
$output='';
$connect=mysqli_connect("localhost", "root" ,"" ,"finalsena");
if (isset($_POST["action"]))
 {
	$procedure="
		CREATE PROCEDURE selectNovedad()
			BEGIN
				SELECT * FROM novedades ORDER BY id_novedad DESC;
			END;

	";
	if(mysqli_query($connect, "DROP PROCEDURE IF EXISTS selectNovedad"))
	{
		if (mysqli_query($connect, $procedure))
		 {
			$query = "CALL selectNovedad()";
			$result = mysqli_query($connect, $query);
			$output .= '
			
                <table id="customers" align="center">
               
                    <tr>
					<h1>
					
						<th width="35%"><font color="#ffffff" size=4><b>Asunto</b></th>
						<th width="35%"><font color="#ffffff" size=4><b>Descripción</b></th>
						<th width="35%"><font color="#ffffff" size=4><b>Cédula Bodeguero</b></th>
						<th width="35%"><font color="#ffffff" size=4><b>Código Herramienta</b></th>
						<th width="35%"><font color="#ffffff" size=4><b>Cantidad</b></th>
						<th width="15%"><font color="#ffffff" size=4><b>Update </b></th>
						<th width="15%"><font color="#ffffff" size=4><b>Delete </b></th></font>
				
                    </tr>
					</h1>
				
                    
				';

		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result)) 
			{
				$output .='
					<tr>					
                    <td>'.$row["asunto"].'</td>
						<td>'.$row["descripcion"].'</td>
						<td>'.$row["cedula_bodeguero"].'</td>
						<td>'.$row["cod_herramienta"].'</td>
						<td>'.$row["cantidad"].'</td>
						<td><button  type="button" name="update" id_novedad="'.$row["id_novedad"].'" class="update">Update</button></td>
						<td><button  type="button" name="delete" id_novedad="'.$row["id_novedad"].'" class="delete">Delete</button></td>
                    </tr>
       
					';
			}	
		}	
				else
				{
					$output .='
						<tr>
							<td colspan="4">data not found</td>
						</tr>


					';
					
				}
									}
				$output .='</table>';
				echo $output;
			}
}
?>