<?php
/*Conexion al servidor y a la base de datos*/
 require("BD/conexion.php");

  //Consulta para obtener los datos del usuario de la tabla usuarios
  $sql = "SELECT id_configuracion, financiamiento, enganche, plazo FROM configuracion where id_configuracion = 1 ";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($result)) {
    $id_configuracion=$row["id_configuracion"];
    $financiamiento=$row["financiamiento"];
    $enganche=$row["enganche"];
    $plazo=$row["plazo"];
    }

?>
<input type="hidden" id="id_configuracion" name="id_configuracion" value="<?php echo $id_configuracion; ?>">
