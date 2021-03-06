<?php
   if( isset($_GET["fReQ"])){
       $id_articulo = $_GET['fReQ'];
       /*Conexion al servidor y a la base de datos*/
       require("Sql/articulo.php");
   ?>

<section>

	<div class="section-body contain-lg">
		<div class="row">
			<div class="col-md-6">
								<div class="card card-bordered style-primary">
									<div class="card-head">
										<div class="tools">
											<div class="btn-group">
												<a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
												<a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
											</div>
										</div>
										<header><i class="fa fa-fw md-assignment"></i> Registro de articulos</header>
									</div>
									<div class="card-body style-default-bright">
										<div class="tab-pane active form" id="editar">
											 <div class="form-group floating-label">
													<input type="text" class="form-control" name="descripcion" onChange="removeExtraSpaces(this); " onkeypress="return soloLetras(event)" value="<?php echo $descripcion?>" required>
													<label>Descripcion</label>
											 </div>
											 <div class="form-group floating-label">
													<input type="text" class="form-control" name="modelo" onChange="removeExtraSpaces(this); " onkeypress="return soloLetras(event)" value="<?php echo $modelo?>" required>
													<label>Modelo</label>
											 </div>
											 <div class="form-group floating-label">
													<input type="text" class="form-control" name="precio" onChange="removeExtraSpaces(this); " onkeypress="isNumberKey(event);" value="<?php echo $precio?>" required>
													<label>Precio</label>
											 </div>
											 <div class="form-group floating-label">
													<input type="text" class="form-control" name="existencia" onChange="removeExtraSpaces(this);" onkeypress="isNumberKey(event);"  value="<?php echo $existencia?>" required>
													<label>Existencia</label>
											 </div>
											 <div class="card-actionbar">
													<center><button class="btn btn-flat btn-primary ink-reaction" onclick="editarArticulos();">Guardar</button></center>
											 </div>
										</div>
									</div>
								</div>

							</div>
						</div>
		</div>
	</div>


	</section>
	<?php
	   }
	   ?>
