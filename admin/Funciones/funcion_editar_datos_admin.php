<?php
    session_start();
    require("../BD/conexion.php");
    if(isset($_POST["nombre"]) && isset($_POST["apellido_paterno"]) && isset($_POST["apellido_materno"]) && isset($_POST["correo"])){

        //Obtenemos el valor de los campos por medio de un post y lo recibimos en las siguientes variables:
        //Quitar espacios en blanco al comienzo y final de cada campo
        $nombre = trim($_POST['nombre']);
        $paterno = trim($_POST["apellido_paterno"]);
        $materno = trim($_POST["apellido_materno"]);
        $email = trim($_POST["correo"]);

        //Si se cumple la condicion solamente se actualiza la fila de la tabla moral y de usuarios correspondiente al id del usuario
       $cadena="UPDATE admin SET nombre='$nombre', apellido_paterno='$paterno', apellido_materno='$materno', correo='$email' where id_usuario = ".$_SESSION['id_usuario']."";

        if(mysqli_query($con,$cadena)){
            echo 0;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['apellido_paterno'] = $paterno;
            $_SESSION['apellido_materno'] = $materno;
            $_SESSION['correo']   = $email;
        }else{
            echo -1;
        }

    }
    session_write_close();
?>
