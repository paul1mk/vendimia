<?php
   session_start();
   if(isset($_SESSION['Activa_admin'])){//verifica que la session este iniciada si no te redirecciona al menu principal
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Vendimia</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- Menu -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="css/theme/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="css/theme/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="css/theme/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="css/theme/material-design-iconic-font.min.css?1421434286" />
		<!-- Tabla -->
		<link type="text/css" rel="stylesheet" href="css/theme/libs/DataTables/jquery.dataTables.css?1423553989" />
		<link type="text/css" rel="stylesheet" href="css/theme/libs/DataTables/extensions/dataTables.colVis.css?1423553990" />
		<link type="text/css" rel="stylesheet" href="css/theme/libs/DataTables/extensions/dataTables.tableTools.css?1423553990" />
		<!-- Alertas -->
		<link type="text/css" rel="stylesheet" href="css/theme/libs/toastr/toastr.css?1425466569" />

		<script src="js/libs/jquery/jquery-1.11.2.min.js"></script>

	</head>
	<body class="menubar-hoverable header-fixed menubar-pin ">

		<header id="header" class="header-inverse" style="background: #18222d;" >
			<div class="headerbar">

				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="menu_admin.php">

									<img src="../img/big.png" alt="">
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>

				<div class="headerbar-right">
					</ul>
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="../img/1.jpg" alt="" />
								<span class="profile-info">
									<?php echo $_SESSION["nombre"].' '.$_SESSION["apellido_paterno"].' '.$_SESSION["apellido_materno"]; ?>
									<small>Administrador</small>
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">
								<li class="dropdown-header">Config</li>
								<li><a href="?opc=1">Mi perfil <i class="fa fa-child"></i></a></li>
								<li><a href="?opc=5">Configuración <i class="fa fa-cogs"></i></a></li>
								<li class="divider"></li>
								<li><a href="#simpleModal" data-toggle="modal"><i class="fa fa-fw fa-power-off text-danger"></i> Salir</a></li>
							</ul>
						</li>
					</ul>

				</div>
			</div>
		</header>

		<div id="base">

			<div id="content" style="background: #FFFFFF;">
				 <section style="background: #FFFFFF;">
						<div class="section-body">
							 <?php
									if (isset($_GET['opc'])){
											$llamar = $_GET['opc'];
											switch ($llamar){

											case 1:include("Perfil/perfil.php"); break;
                      case 2:include("Articulos/articulos.php"); break;
                      case 3:include("Articulos/consultas_articulos.php"); break;
                      case 4:include("Articulos/actualizar_articulos.php"); break;
                      case 5:include("Configuracion/configuracion.php"); break;
                      case 6:include("Clientes/clientes.php"); break;
                      case 7:include("Clientes/consultas_clientes.php"); break;
                      case 8:include("Ventas/ventas.php"); break;
                      case 9:include("Ventas/consultas_ventas.php"); break;
                      case 10:include("Ventas/ventas_consultas.php"); break;
											default:include("404.php");break;
													}
											}else{

											include("Configuracion/configuracion.php");
											}
									?>
						</div>
				 </section>
			</div>

			<div id="menubar" class="menubar">
        <div class="menubar-fixed-panel">
           <div>
              <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
              <i class="fa fa-bars"></i>
              </a>
           </div>
           <div class="expanded">
              <a href="menu.php">
              <span class="text-lg text-bold text-primary ">ADMIN</span>
              </a>
           </div>
        </div>
				<div class="menubar-scroll-panel">

					<!--  Inicia Menu Lateral izquierdo -->
					<ul id="main-menu" class="gui-controls">

						<li>
							<a href="menu_admin.php" class="active">
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Inicio</span>
							</a>
						</li>
            <li class="gui-folder">
              <a>
                <div class="gui-icon"><i  class="fa fa-briefcase"></i></div>
                <span class="title">Ventas</span>
              </a>
              <ul>
                <li><a  href="?opc=8"><span class="title">Registrar ventas</span></a></li>
                <li><a href="?opc=10" ><span class="title">Consultas ventas</span></a></li>
              </ul>
            </li>
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-group (alias)"></i></div>
								<span class="title">Clientes</span>
							</a>
							<ul>
								<li><a href="?opc=6" ><span class="title">Registrar clientes</span></a></li>
								<li><a href="?opc=7" ><span class="title">Consultar clientes</span></a></li>
							</ul>
						</li>
            <li class="gui-folder">
              <a>
                <div class="gui-icon"><i  class="fa fa-folder-open"></i></div>
                <span class="title">Articulos</span>
              </a>
              <ul>
                <li><a  href="?opc=2"><span class="title">Registrar articulos</span></a></li>
                <li><a href="?opc=3" ><span class="title">Consultas articulos</span></a></li>
              </ul>
            </li>
            <li>
               <a href="?opc=5">
                  <div class="gui-icon"><i class="fa fa-cogs"></i></div>
                  <span class="title">Configuracion</span>
               </a>
            </li>
					</ul>
					<div class="menubar-foot-panel"></div>
				</div>
			</div>
			<!-- Fin Menu lateral izquierdo -->

		</div>


		<div class="modal fade" id="simpleModal" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true">
			 <div class="modal-dialog">
					<div class="modal-content" style="border:1px solid #242a31;">
						 <div class="modal-header" style="background-color: #242a31;">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="simpleModalLabel" align="center" style="color: white;">
									 <center><img src="../img/1.jpg" class="img size-1" alt="Logo" ></center>
								</h4>
						 </div>
						 <div class="modal-body">
								<h2 align="center">¿Esta seguro que desea cerrar sesión?</h2>
						 </div>
						 <div class="modal-footer" >
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
								<button type="button" onClick="logout();" class="btn btn-danger">Aceptar</button>
						 </div>
					</div>
			 </div>
		</div>

		<!-- INICIO JAVASCRIPT -->
		<script src="js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="js/libs/spin.js/spin.min.js"></script>
		<script src="js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="js/core/source/App.js"></script>
		<script src="js/core/source/AppNavigation.js"></script>
		<script src="js/core/source/AppOffcanvas.js"></script>
		<script src="js/core/source/AppCard.js"></script>
		<script src="js/core/source/AppForm.js"></script>
		<script src="js/core/source/AppNavSearch.js"></script>
		<script src="js/core/source/AppVendor.js"></script>
		<script src="js/core/demo/Demo.js"></script>
		<!-- Tabla -->
		<script src="js/libs/DataTables/jquery.dataTables.min.js"></script>
		<script src="js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
		<script src="js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="js/core/demo/DemoTableDynamic.js"></script>
		<!-- Acciones javascript -->
		<script src="js/ajax.js"></script>
		<!-- Alertas -->
		<script src="js/libs/toastr/toastr.js"></script>
		<script src="js/core/demo/DemoUIMessages.js"></script>
		<!-- FINAL JAVASCRIPT -->

	</body>
</html>
<?php
}else{
    header('location: ../login.php');
}
?>
