<?php
   session_start();
   session_destroy();/*Destruir sesion del usuario al cerrar sesion*/
   header('location:login.php');/*Redireccionar a la pagina principal*/
?>
