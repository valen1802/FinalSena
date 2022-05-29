<?php
if(isset($_POST))
  {

  $nombre= $_POST['nombre'];
  $cedula= $_POST['cedula'];
  $correo= $_POST['email'];
  $celular= $_POST['celular'];
  $password = $_POST['password'];
  $estado= "activo";
  $rol = 02;
    
    include "../conexion/conexion.php";
    
      $sql="SELECT * FROM usuario";
      $result = $con->query($sql);
      $numero = mysqli_num_rows($result)+1;

      $sql= "INSERT INTO usuario(nombre, cedula, correo, celular, password, estado, rol) 
      VALUES (\"$nombre\",\"$cedula\", \"$correo\", \"$celular\", \"$password\", \"$estado\", \"$rol\")";
      

      $query = $con->query($sql);

      if($query!=null){
         echo '<script language="javascript">alert("Ha sido registrado exitosamente");window.location.href="../"</script>';
      }else{
         echo '<script language="javascript">alert("Problemas en el registro");window.location.href="../"</script>';

      }

 }//si no hay sesión
else{
   
    session_destroy();
    header ('location: ./'); //php ir pagina principal
}
?>