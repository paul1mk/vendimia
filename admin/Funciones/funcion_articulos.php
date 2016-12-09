<?php
    session_start();
    require("../BD/conexion.php");
    if(isset($_POST["descripcion"]) && isset($_POST["modelo"]) && isset($_POST["precio"]) && isset($_POST["existencia"])){

      $sql = 'SELECT descripcion FROM articulos';
      $rec = mysqli_query($con,$sql);
      $verificar_articulo = 0;

      while($result = mysqli_fetch_object($rec)){
          //Condicion para comparar si el correo electronico ingresado ya esta registrado en la base de datos
          if($result->descripcion == $_POST['descripcion']){
              $verificar_articulo = 1;/*Si se cumple la condicion la variable pasa a tomar el valor de 1*/
          }
      }

      if($verificar_articulo==1){
        //Obtenemos el valor de los campos por medio de un post y lo recibimos en las siguientes variables:
        //Quitar espacios en blanco al comienzo y final de cada campo
        $descripcion = trim($_POST['descripcion']);
        $modelo = trim($_POST["modelo"]);
        $precio = trim($_POST["precio"]);
        $existencia = trim($_POST["existencia"]);

        $cadena="UPDATE articulos SET descripcion='$descripcion', modelo='$modelo', precio='$precio', existencia='$existencia' where descripcion = $descripcion";
        if(mysqli_query($con,$cadena)){
            echo 0;
        }else{
            echo -1;
        }
      }

        if($verificar_articulo==0){
        //Obtenemos el valor de los campos por medio de un post y lo recibimos en las siguientes variables:
        //Quitar espacios en blanco al comienzo y final de cada campo
        $descripcion = trim($_POST['descripcion']);
        $modelo = trim($_POST["modelo"]);
        $precio = trim($_POST["precio"]);
        $existencia = trim($_POST["existencia"]);

        //Si se cumple la condicion solamente se actualiza la fila de la tabla moral y de usuarios correspondiente al id del usuario

       $cadena="insert into articulos (descripcion, modelo, precio, existencia, id_usuario) values ('$descripcion','$modelo','$precio','$existencia','$_SESSION[id_usuario]')";

        if(mysqli_query($con,$cadena)){
            echo 0;
        }else{
            echo -1;
        }
}
    }
    session_write_close();
?>
