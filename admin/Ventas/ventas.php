<section>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


	<script>
	$(function() {
		$( "#nombre" ).autocomplete({
			source: 'Ventas/cliente.php'
		});
	});
	</script>
	<script>
	$(function() {
		$( "#descripcion" ).autocomplete({
			source: 'Ventas/articulo.php'
		});
	});
	</script>

	<div class="section-body contain-lg">
		<div class="row">
			<div class="col-md-12">
				<form action="?opc=9" method="POST">
								<div class="form card card-bordered style-primary">
									<div class="card-head">
										<div class="tools">
											<div class="btn-group">
												<a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
												<a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
											</div>
										</div>
										<header><i class="fa fa-fw fa-bar-chart"></i> Registro de ventas</header>
									</div>
									<div class="card-body style-default-bright">
										<div class="row ui-widget">
											<div class="col-sm-5">
												<div class="form-group">
													<input type="text" class="form-control" id="nombre" name="nombre">
													<label for="nombre">Buscar cliente</label>
												</div>
											</div>
											<div class="col-sm-5">
												<div class="form-group">
													<input type="text" class="form-control" id="descripcion" name="descripcion">
													<label for="descripcion">Buscar articulo</label>
												</div>
											</div>
											<div class="col-sm-2">
												<div class="form-group">
														<button type="submit" class="btn ink-reaction btn-floating-action btn-primary"><i class="fa md-search"></i></button>
												</div>
											</div>
										</div>
										<div class="row">

							        <div class="col-lg-12">
							          <div class="table-responsive">
							            <table class="table table-hover" style="border:1px solid #BFBFBF;">
							              <thead>
							                <tr>
							                  <th>Descripcion articulo</th>
							                  <th>Modelo</th>
							                  <th>Cantidad</th>
							                  <th>Precio</th>
							                  <th>Importe</th>
							                  <th class="text-right">Acciones</th>
							                </tr>
							              </thead>
							              <tbody>
							                <tr>
							                  <td></td>
							                  <td></td>
																<td></td>
																<td></td>
																<td></td>
							                  <td class="text-right">

							                  </td>
							                </tr>

							              </tbody>
							            </table>
							          </div>
							        </div>
							      </div>

										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">

												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">

												</div>
											</div>
											<div class="col-xs-4">
												<div class="well">
													<div class="clearfix">
														<div class="pull-left"> Enganche : </div>
														<div class="pull-right">  </div>
													</div>
													<div class="clearfix">
														<div class="pull-left"> Bonificación enganche : </div>
														<div class="pull-right">  </div>
													</div>
													<div class="clearfix">
														<div class="pull-left"> Total : </div>
														<div class="pull-right">  </div>
													</div>
												</div>
										</div>

									</div>
								</div>

							</div>
						</form>
						</div>

		</div>
	</div>


	</section>
