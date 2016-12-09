<?php
    require "BD-Config/conexion.php";

    if(isset($_POST['entrar'])){

        if(verificar_admin($con, $_POST['correo'], $_POST['contrasena'], $result) == 1){
            $_SESSION['id_usuario'] = $result->id_usuario;
            $_SESSION['correo'] = $result->correo;
            $_SESSION['nombre'] = $result->nombre;
            $_SESSION['apellido_paterno'] = $result->apellido_paterno;
            $_SESSION['apellido_materno'] = $result->apellido_materno;
            $_SESSION['Activa_admin'] = "si_admin";
 ?>
             <script>
 window.location = "login.php";
 </script>

<?php
        }else{
?>
                <?php echo "Error usuario/password " ?>
<?php
        }
    }


    function verificar_admin($con, $user, $password, &$result){
        $u = mysqli_real_escape_string($con,$user);/*aqui se limpian las variables de los caracteres especiales*/
        $p = mysqli_real_escape_string($con,$password);

        /*Consulta para obtener los datos del usuario segun el correo eletronico y contraseña ingresados*/
        $sql = "SELECT * FROM admin WHERE BINARY correo = '$u' AND BINARY contrasena = '$p'";
        $rec = mysqli_query($con,$sql); /*en la consulta de arriba <$sql> la palabra BINARY es la que distingue minusculas de MAYUSCULAS */

        $count = 0;
        while($row = mysqli_fetch_object($rec)){/*inicia el bucle con la consulta anterior*/
            $count++;
            $result = $row;/*todo el resultado queda guardado en la variable $result*/
        }

        if($count == 1){
            return 1;
        }
        else{
            return 0;
        }
    }
?>
