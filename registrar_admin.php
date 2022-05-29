<?php
if(isset($_POST))
  {
  $nombre= $_POST['nombre'];
  $cedula= $_POST['cedula'];
  $correo= $_POST['correo'];
  $celular= $_POST['celular'];
  $estado= "activo";
  $clave= $_POST['clave'];
  $rol = $_POST['rol'];
    
    include "conexion/conexion.php";
    
      $sql="SELECT * FROM usuario";
      $result = $con->query($sql);
      

      $sql= "INSERT INTO usuario(id, nombre, cedula, correo, celular , clave, estado, rol) VALUES (\"$nombre\", \"$cedula\",\"$correo\" ,\"$celular\",  \"$clave\",\"$estado\" ,\"$rol\")";
      

      $query = $con->query($sql);

      if($query!=null){
         echo '<script language="javascript">alert("Ha sido registrado exitosamente");window.location.href="master.php"</script>';
      }else{
         echo '<script language="javascript">alert("Problemas en el registro");window.location.href="master.php"</script>';

      }

 }//si no hay sesión
else{
   
    session_destroy();
    header ('location: ./'); //php ir pagina principal
}
?>