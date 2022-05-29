<?php
if(isset($_POST))
  {
  $cod_herramienta= $_POST['cod_herramienta'];
  $nombre_herramienta= $_POST['nombre_herramienta'];
  $cantidad_disponible= $_POST['cantidad_disponible'];
  $precio_herramienta= $_POST['precio_herramienta'];
  $nivel= $_POST['nivel'];

    
    include "conexion.php";
    
      $sql="SELECT * FROM herramienta";
      $result = $con->query($sql);
      $numero = mysqli_num_rows($result)+1;

      $sql= "INSERT INTO herramienta(id_herramienta, cod_herramienta, nombre_herramienta, cantidad_disponible, precio_herramienta,nivel) VALUES (\"$numero\",\"$cod_herramienta\", \"$nombre_herramienta\",\"$cantidad_disponible\" ,\"$precio_herramienta\",  \"$nivel\")";
      

      $query = $con->query($sql);

      if($query!=null){
         echo '<script language="javascript">alert("Ha sido registrado exitosamente");window.location.href="herramientas.php"</script>';
      }else{
         echo '<script language="javascript">alert("Problemas en el registro");window.location.href="herramientas.php"</script>';

      }

 }//si no hay sesión
else{
   
    session_destroy();
    header ('location: ./'); //php ir pagina principal
}
?>