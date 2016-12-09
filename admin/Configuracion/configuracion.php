<?php
     /*Conexion al servidor y a la base de datos*/
     require("Sql/configuracion.php");
?>
<section>

	<div class="section-body contain-lg">
		<?php

			 if(!empty($id_configuracion)){
			 ?>
		<div class="row">
     <div class="col-md-3"></div>
      <div class="col-md-6">
								<div class="card card-bordered style-primary">
									<div class="card-head">
										<div class="tools">
											<div class="btn-group">
												<a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
												<a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
											</div>
										</div>
										<header><i class="fa fa-fw md-settings"></i> Configuracion general</header>
									</div>
									<div class="card-body style-default-bright">
										<div class="tab-pane active form">
											 <div class="form-group floating-label">
													<input type="text" class="form-control" name="financiamiento" onChange="removeExtraSpaces(this); " onkeypress="isNumberKey(event);" value="<?php echo $financiamiento; ?>" required>
													<label>Tasa Financiamiento</label>
											 </div>
											 <div class="form-group floating-label">
													<input type="text" class="form-control" name="enganche" onChange="removeExtraSpaces(this); " onkeypress="isNumberKey(event);" value="<?php echo $enganche; ?>" required>
													<label>% Enganche</label>
											 </div>
											 <div class="form-group floating-label">
													<input type="text" class="form-control" name="plazo" onChange="removeExtraSpaces(this); " onkeypress="NumberKey(event);" value="<?php echo $plazo; ?>" required>
													<label>Plazo Máximo</label>
											 </div>
											 <div class="card-actionbar">
													<center><button class="btn btn-flat btn-primary ink-reaction" onclick="guardarConfiguracion();">Guardar</button></center>
											 </div>
										</div>
									</div>
								</div>

							</div>
              <div class="col-md-3"></div>
						</div>
						<?php
						   }else{
						   ?>
							 <div class="row">
                 <div class="col-md-3"></div>
					 			<div class="col-md-6">
					 								<div class="card card-bordered style-primary">
					 									<div class="card-head">
					 										<div class="tools">
					 											<div class="btn-group">
					 												<a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
					 												<a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
					 											</div>
					 										</div>
					 										<header><i class="fa fa-fw md-settings"></i> Configuracion general</header>
					 									</div>
					 									<div class="card-body style-default-bright">
					 										<div class="tab-pane active form">
					 											 <div class="form-group floating-label">
					 													<input type="text" class="form-control" name="financiamiento" onChange="removeExtraSpaces(this); " onkeypress="isNumberKey(event);" required>
					 													<label>Tasa Financiamiento</label>
					 											 </div>
					 											 <div class="form-group floating-label">
					 													<input type="text" class="form-control" name="enganche" onChange="removeExtraSpaces(this); " onkeypress="isNumberKey(event);"  required>
					 													<label>% Enganche</label>
					 											 </div>
					 											 <div class="form-group floating-label">
					 													<input type="text" class="form-control" name="plazo" onChange="removeExtraSpaces(this); " onkeypress="NumberKey(event);" required>
					 													<label>Plazo Máximo</label>
					 											 </div>
					 											 <div class="card-actionbar">
					 													<center><button class="btn btn-flat btn-primary ink-reaction" onclick="guardarConfiguracion();">Guardar</button></center>
					 											 </div>
					 										</div>
					 									</div>
					 								</div>

					 							</div>
                        <div class="col-md-3"></div>
					 						</div>
											<?php
                       }
												 ?>
		</div>
	</div>

	</section>
