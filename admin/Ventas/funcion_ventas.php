<?php

    require("../BD/conexion.php");

    if(isset($_POST["nombre_cliente"]) && isset($_POST["paterno_cliente"]) && isset($_POST["materno_cliente"])
    && isset($_POST["descripcion_articulo"]) && isset($_POST["modelo_articulo"])
    && isset($_POST["cantidad_articulo"]) && isset($_POST["precio_articulo"]) && isset($_POST["importe_articulo"])
    && isset($_POST["enganche_ventas"]) && isset($_POST["bonificacion_enganche"]) &&
    isset($_POST["total"]) && isset($_POST["folio_venta"]) && isset($_POST["num_cliente"])) {

          $nombre_cliente = $_POST['nombre_cliente'];
          $paterno_cliente = $_POST["paterno_cliente"];
          $materno_cliente = $_POST["materno_cliente"];
          $descripcion_articulo = $_POST["descripcion_articulo"];
          $modelo_articulo = $_POST['modelo_articulo'];
          $cantidad_articulo = $_POST["cantidad_articulo"];
          $precio_articulo = $_POST["precio_articulo"];
          $importe_articulo = $_POST["importe_articulo"];
          $enganche_ventas = $_POST['enganche_ventas'];
          $bonificacion_enganche = $_POST["bonificacion_enganche"];
          $total = $_POST["total"];
          $folio_venta = $_POST["folio_venta"];
          $num_cliente = $_POST["num_cliente"];
          //Si se cumple la condicion solamente se actualiza la fila de la tabla moral y de usuarios correspondiente al id del usuario

          $cadena="INSERT INTO ventas (nombre_cliente, paterno_cliente, materno_cliente,
            descripcion_articulo, modelo_articulo, cantidad_articulo, precio_articulo, importe_articulo,
            enganche_ventas, bonificacion_enganche, total, folio_venta, num_cliente) VALUES ('$nombre_cliente',
              '$paterno_cliente','$materno_cliente','$descripcion_articulo','$modelo_articulo',
              '$cantidad_articulo','$precio_articulo','$importe_articulo','$enganche_ventas','$bonificacion_enganche',
              '$total','$folio_venta','$num_cliente')";

          if(mysqli_query($con,$cadena)){
              echo 0;

              header("location:menu_admin.php?opc=9");
          }else{
              echo -1;

          }


    }
    session_write_close();
?>
