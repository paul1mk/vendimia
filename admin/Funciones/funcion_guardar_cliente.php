<?php
    session_start();
    require("../BD/conexion.php");
    if(isset($_POST["nombre"]) && isset($_POST["apellido_paterno"]) && isset($_POST["apellido_materno"]) && isset($_POST["rfc"])){

      $valores = array();
      $max_num = 1;
      for ($x=0;$x<$max_num;$x++) {
      $num_aleatorio = rand(1,999999);
      array_push($valores,$num_aleatorio);
      }

      for ($x=0;$x<count($valores);$x++)
      $num_cliente= "$valores[0]";

      $sql = 'SELECT nombre FROM clientes';
      $rec = mysqli_query($con,$sql);
      $verificar_rfc = 0;

      while($result = mysqli_fetch_object($rec)){
          //Condicion para comparar si el correo electronico ingresado ya esta registrado en la base de datos
          if($result->rfc == $_POST['rfc']){
              $verificar_rfc = 1;/*Si se cumple la condicion la variable pasa a tomar el valor de 1*/
          }
      }

      if($verificar_rfc==1){
        //Obtenemos el valor de los campos por medio de un post y lo recibimos en las siguientes variables:
        //Quitar espacios en blanco al comienzo y final de cada campo
        $nombre = trim($_POST['nombre']);
        $apellido_paterno = trim($_POST["apellido_paterno"]);
        $apellido_materno = trim($_POST["apellido_materno"]);
        $rfc = trim($_POST["rfc"]);

        $cadena="UPDATE clientes SET nombre='$nombre', apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno', rfc='$rfc', num_cliente='$num_cliente' where rfc = $rfc";
        if(mysqli_query($con,$cadena)){
            echo 0;
        }else{
            echo -1;
        }
      }

        if($verificar_rfc==0){
        //Obtenemos el valor de los campos por medio de un post y lo recibimos en las siguientes variables:
        //Quitar espacios en blanco al comienzo y final de cada campo
        $nombre = trim($_POST['nombre']);
        $apellido_paterno = trim($_POST["apellido_paterno"]);
        $apellido_materno = trim($_POST["apellido_materno"]);
        $rfc = trim($_POST["rfc"]);

        //Si se cumple la condicion solamente se actualiza la fila de la tabla moral y de usuarios correspondiente al id del usuario

       $cadena="insert into clientes (nombre, apellido_paterno, apellido_materno, rfc, num_cliente) values ('$nombre','$apellido_paterno','$apellido_materno','$rfc','$num_cliente')";

        if(mysqli_query($con,$cadena)){
            echo 0;
        }else{
            echo -1;
        }
}
    }
    session_write_close();
?>
