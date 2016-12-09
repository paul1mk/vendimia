<?php
    session_start();
    require("../BD/conexion.php");

    //Obtenemos el valor de los campos por medio de un post y lo recibimos en las siguientes variables:
    //Quitar espacios en blanco al comienzo y final de cada campo
    $id_articulo = $_POST['id_articulo'];

    //Si se cumple la condicion solamente se actualiza la fila de la tabla moral y de usuarios correspondiente al id del usuario
    $cadena="DELETE FROM articulos WHERE id_articulo='$id_articulo'";

    if(mysqli_query($con,$cadena)){
        echo 0;
    }else{
        echo -1;
    }

    session_write_close();
?>
