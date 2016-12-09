<section>

	<div class="section-body contain-lg">
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
										<header><i class="fa fa-fw md-account-box"></i> Registro de clientes</header>
									</div>
									<div class="card-body style-default-bright">
										<div class="tab-pane active form" id="editar">
											 <div class="form-group floating-label">
													<input type="text" class="form-control" name="nombre" onChange="removeExtraSpaces(this); " onkeypress="return soloLetras(event)" required>
													<label>Nombre</label>
											 </div>
											 <div class="form-group floating-label">
													<input type="text" class="form-control" name="apellido_paterno" onChange="removeExtraSpaces(this); " onkeypress="return soloLetras(event)" required>
													<label>Apellido Paterno</label>
											 </div>
											 <div class="form-group floating-label">
													<input type="text" class="form-control" name="apellido_materno" onChange="removeExtraSpaces(this); " onkeypress="return soloLetras(event)" required>
													<label>Apellido Materno</label>
											 </div>
											 <div class="form-group floating-label">
													<input type="text" class="form-control" name="rfc" onChange="removeExtraSpaces(this);" pattern="^[a-zA-Z]{3,4}(\d{6})((\D|\d){3})?$" required>
													<label>RFC</label>
											 </div>
											 <div class="card-actionbar">
													<center><button class="btn btn-flat btn-primary ink-reaction" onclick="guardarClientes();">Guardar</button></center>
											 </div>
										</div>
									</div>
								</div>

							</div>
							<div class="col-md-3"></div>
						</div>
		</div>
	</div>


	</section>
