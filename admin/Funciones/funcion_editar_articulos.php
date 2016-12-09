<?php
    session_start();
    require("../BD/conexion.php");
    if(isset($_POST["descripcion"]) && isset($_POST["modelo"]) && isset($_POST["precio"]) && isset($_POST["existencia"]) && isset($_POST["id_articulo"])){


        //Obtenemos el valor de los campos por medio de un post y lo recibimos en las siguientes variables:
        //Quitar espacios en blanco al comienzo y final de cada campo
        $descripcion = trim($_POST['descripcion']);
        $modelo = trim($_POST["modelo"]);
        $precio = trim($_POST["precio"]);
        $existencia = trim($_POST["existencia"]);
        $id_articulo = trim($_POST["id_articulo"]);

        $cadena="UPDATE articulos SET descripcion='$descripcion', modelo='$modelo', precio='$precio', existencia='$existencia' where id_articulo = '$id_articulo' ";

        if(mysqli_query($con,$cadena)){
            echo 0;
        }else{
            echo -1;
        }

      }

    session_write_close();
?>
