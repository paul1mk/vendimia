<?php
/*Conexion al servidor y a la base de datos*/
 require("BD/conexion.php");

  //Consulta para obtener los datos del usuario de la tabla usuarios
  $sql = "SELECT id_articulo, descripcion, modelo, precio, existencia FROM articulos where id_articulo = '$id_articulo' ";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($result)) {
    $id_articulo=$row["id_articulo"];
    $descripcion=$row["descripcion"];
    $modelo=$row["modelo"];
    $precio=$row["precio"];
    $existencia=$row["existencia"];
    }

?>
<input type="hidden" id="id_articulo" name="id_articulo" value="<?php echo $id_articulo; ?>">
