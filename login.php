<?php session_start();
    //Condicion que obtiene los datos de sesion del usuario que ingresara a SIFEM (Modo empresa)
    if(isset($_SESSION['Activa_admin'])){
       header('location: admin/menu_admin.php');
    /*Si no se cumple la condicion redirecciona de nuevo al index*/
    }else{
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Login Example - Semantic</title>
  <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
  <script src="semantic/semantic.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  </head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">

      <img src="img/big.png" class="image">


    <form class="ui large form" role="form" action="" method="post">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="mail icon"></i>
            <input type="text" placeholder="Email" name="correo" id="correo" title="Email no valido" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" placeholder="Password" maxlength="8" length="8" name="contrasena" id="contrasena" required>

          </div>
        </div>
        <button class="ui fluid large teal button" type="submit" id="enviar" name="entrar">Iniciar sesión</button>
      </div>

      <div class="ui error message"></div>

    </form>

  </div>
</div>

<?php
    /*Archivo que contiene la funcionalidad de validar usuario*/
    require 'funciones/funcion_validar_usuario.php';
?>


</body>
</html>
<?php
}
?>
