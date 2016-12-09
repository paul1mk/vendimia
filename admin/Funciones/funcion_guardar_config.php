<?php
    session_start();
    require("../BD/conexion.php");
    if(isset($_POST["financiamiento"]) && isset($_POST["enganche"]) && isset($_POST["plazo"])){

        $financiamiento = trim($_POST['financiamiento']);
        $enganche = trim($_POST["enganche"]);
        $plazo = trim($_POST["plazo"]);

        $cadena="UPDATE configuracion SET financiamiento='$financiamiento', enganche='$enganche', plazo='$plazo' where id_configuracion = '1' ";
        if(mysqli_query($con,$cadena)){
            echo 0;
        }else{
            echo -1;
        }
      }

    session_write_close();
?>
