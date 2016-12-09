<?php
	session_start();
  require("../BD/conexion.php");
	$c_actual	=$_POST['c_actual'];
	$c_cambiar	=$_POST['c_cambiar'];
	$c_nueva	=$_POST['contrasena_nueva'];

	$get_password=" SELECT contrasena FROM admin WHERE id_usuario='".$_SESSION['id_usuario']."' ";

	$result_pass=mysqli_query($con,$get_password)or die(mysqli_error($con));
	$pass=mysqli_fetch_array($result_pass);

	if($c_actual==$pass['contrasena']){
		$change_password="UPDATE admin set contrasena='".$c_nueva."' WHERE id_usuario='".$_SESSION['id_usuario']."'";
		$result_change_password=mysqli_query($con,$change_password)or die(mysqli_error($con));
		echo 1;
	}
	else
	echo 0;


?>
