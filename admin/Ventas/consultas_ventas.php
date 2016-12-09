<section>
  <?php //Ejemplo aprenderaprogramar.com
         $nombre2 = $_POST['nombre'];
         $descripcion2 =$_POST['descripcion'];
         require("BD/conexion.php");
          //Consulta para obtener los datos del usuario de la tabla usuarios
          $sql = "SELECT clientes.id_cliente, clientes.nombre, clientes.apellido_paterno, clientes.apellido_materno, clientes.rfc, clientes.num_cliente,
          articulos.id_articulo, articulos.descripcion, articulos.modelo, articulos.precio, articulos.existencia, configuracion.id_configuracion,
          configuracion.financiamiento, configuracion.enganche, configuracion.plazo FROM clientes INNER JOIN articulos INNER JOIN configuracion where clientes.nombre = '$nombre2' AND articulos.descripcion = '$descripcion2'";
          $result = mysqli_query($con,$sql);
          while($row = mysqli_fetch_array($result)) {
            $id_cliente=$row["id_cliente"];
            $nombre=$row["nombre"];
            $apellido_paterno=$row["apellido_paterno"];
            $apellido_materno=$row["apellido_materno"];
            $rfc=$row["rfc"];
            $num_cliente=$row["num_cliente"];
            $id_articulo=$row["id_articulo"];
            $descripcion=$row["descripcion"];
            $modelo=$row["modelo"];
            $precio=$row["precio"];
            $existencia=$row["existencia"];
            $id_configuracion=$row["id_configuracion"];
            $financiamiento_configuracion=$row["financiamiento"];
            $enganche_configuracion=$row["enganche"];
            $plazo=$row["plazo"];
            }

            $sql2 = "SELECT * FROM ventas where nombre_cliente = '$nombre2'";
            $result2 = mysqli_query($con,$sql2);
            while($row2 = mysqli_fetch_array($result2)) {
              $nombre_cliente2=$row2["nombre_cliente"];
              $paterno_cliente2=$row2["paterno_cliente"];
              $materno_cliente2=$row2["materno_cliente"];
              $descripcion_articulo2=$row2["descripcion_articulo"];
              $modelo_articulo2=$row2["modelo_articulo"];
              $cantidad_articulo2=$row2["cantidad_articulo"];
              $precio_articulo2=$row2["precio_articulo"];
              $importe_articulo2=$row2["importe_articulo"];
              $enganche_ventas2=$row2["enganche_ventas"];
              $bonificacion_enganche2=$row2["bonificacion_enganche"];
              $total2=$row2["total"];
              $num_cliente2=$row2["num_cliente"];
              $folio_venta=$row2["folio_venta"];
              $id_venta2=$row2["id_venta"];
              $precio_contado=$row2["precio_contado"];
              $total_pagar=$row2["total_pagar"];
              $abono=$row2["abono"];
              $ahorro=$row2["ahorro"];
              $meses=$row2["meses"];
              }

            $nombre_cliente=$nombre;
            $paterno_cliente= $apellido_paterno;
            $materno_cliente=$apellido_materno;
            $mes=3;
            $descripcion_articulo=$descripcion2;
            $modelo_articulo= $modelo;
            $cantidad_articulo=$existencia;

            $precio_articulo = $precio*(1+($financiamiento_configuracion*12)/100);
            $importe_articulo = $precio_articulo * $cantidad_articulo;
            $enganche = ($enganche_configuracion/100)* $importe_articulo;
            $bonificacion_enganche = $enganche_configuracion *(($financiamiento_configuracion*12)/100);
            $total = $importe_articulo - $enganche_configuracion - $bonificacion_enganche;


            $precio_contado = $total*(1+($financiamiento_configuracion * $mes));
            $total_pagar = $precio_contado*(1+($financiamiento_configuracion * $mes));
            $abono = $total_pagar / $mes;
            $ahorro = $total + $total_pagar;

            $valores = array();
            $max_num = 1;
            for ($x=0;$x<$max_num;$x++) {
            $num_aleatorio = rand(1,999999);
            array_push($valores,$num_aleatorio);
            }

            for ($x=0;$x<count($valores);$x++)
            $folio_venta= "$valores[0]";

  ?>

  	<div class="section-body contain-lg">
		<div class="row">
			<div class="col-md-12">

								<div class="form card card-bordered style-primary">
                  <input type="hidden" id="num_cliente" name="num_cliente" value="<?php echo $num_cliente; ?>">
                  <input type="hidden" id="nombre_cliente" name="nombre_cliente" value="<?php echo $nombre_cliente; ?>">
                  <input type="hidden" id="paterno_cliente" name="paterno_cliente" value="<?php echo $paterno_cliente; ?>">
                  <input type="hidden" id="materno_cliente" name="materno_cliente" value="<?php echo $materno_cliente; ?>">
                  <input type="hidden" id="bonificacion_enganche" name="bonificacion_enganche" value="<?php echo $bonificacion_enganche; ?>">
                  <input type="hidden" id="folio_venta" name="folio_venta" value="<?php echo $folio_venta; ?>">

                  <input type="hidden" id="meses" name="meses" value="<?php echo $meses; ?>">
                  <input type="hidden" id="precio_contado" name="precio_contado" value="<?php echo $precio_contado; ?>">
                  <input type="hidden" id="total_pagar" name="total_pagar" value="<?php echo $total_pagar; ?>">
                  <input type="hidden" id="abono" name="abono" value="<?php echo $abono; ?>">
                  <input type="hidden" id="ahorro" name="ahorro" value="<?php echo $ahorro; ?>">
                  <div class="card-head">
										<div class="tools">
											<div class="btn-group">
												<a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
												<a class="btn btn-icon-toggle btn-close" ><i class="md md-close"></i></a>
											</div>
										</div>
										<header><i class="fa fa-fw fa-bar-chart"></i> Registro de ventas</header>
									</div>
									<div class="card-body style-default-bright">
										<div class="row ui-widget">
											<div class="col-sm-5">
												<div class="form-group">
													<input type="text" class="form-control" name="nombre" value="<?php echo $nombre2; ?>" readonly>
													<label for="nombre">Buscar cliente</label>
												</div>
											</div>
											<div class="col-sm-5">
												<div class="form-group">
													<input type="text" class="form-control" name="descripcion" value="<?php echo $descripcion2; ?>" readonly>
													<label for="descripcion">Buscar articulo</label>
												</div>
											</div>
											<div class="col-sm-2">
												<div class="form-group">
														<button class="btn ink-reaction btn-floating-action btn-primary" onclick="calcularVenta();"><i class="fa md-save"></i></button>
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
                                <?php
                                   if(!empty($folio_venta)){
                                   ?>
                                   <th class="text-right">Folio venta: BD</th>
                                <?php
                                   }else{
                                   ?>
                                <th class="text-right">Folio venta: <?php echo $folio_venta;?></th>
                                <?php
                                   }
                                   ?>
							                </tr>
							              </thead>
							              <tbody>
							                <tr>
							                  <td><input type="text" class="form-control" value="<?php echo $descripcion_articulo; ?>" name="descripcion_articulo" readonly></td>
							                  <td><input type="text" class="form-control" value="<?php echo $modelo_articulo; ?>" name="modelo_articulo" readonly></td>
                                <td>
                                <input type="text" class="form-control" name="cantidad_articulo" onChange="removeExtraSpaces(this); " onkeypress="isNumberKey(event);"></td>
                                <td><input type="text" value="<?php echo $precio_articulo; ?>" class="form-control" name="precio_articulo" readonly></td>
																<td><input type="text" class="form-control" value="<?php echo $importe_articulo; ?>" name="importe_articulo" readonly></td>

							                  <td class="text-right">
                                <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Eliminar" onclick="eliminarArticulo();"><i style="color: #E70505;" class="fa fa-trash-o"></i></button>
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
														<div class="pull-right"><input type="text" value="<?php echo $enganche; ?>" class="form-control" name="enganche_ventas" readonly></div>
													</div>
													<div class="clearfix">
														<div class="pull-left"> Bonificación enganche : </div>
														<div class="pull-right"><input type="text" value="<?php echo $bonificacion_enganche; ?>" class="form-control" name="bonificacion_enganche" readonly></div>
													</div>
													<div class="clearfix">
														<div class="pull-left"> Total : </div>
														<div class="pull-right"><input type="text" value="<?php echo $total; ?>" class="form-control" name="total" readonly></div>
													</div>
												</div>
										</div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th></th>
                          <th></th>
                          <th class="text-left">ABONOS MENSUALES</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>3 ABONOS DE</td>
                          <td><?php echo $abono; ?></td>
                          <td>TOTAL A PAGAR <?php echo $total_pagar; ?></td>
                          <td>SE AHORRA <?php echo $ahorro; ?></td>
                          <td>
                          <label class="radio-inline radio-styled">
                            <input type="radio" name="meses" value="3" checked><span></span>
                          </label>
                          </td>
                        </tr>
                        <tr>
                          <td>6 ABONOS DE</td>
                          <td><?php echo $abono; ?></td>
                          <td>TOTAL A PAGAR <?php echo $total_pagar; ?></td>
                          <td>SE AHORRA <?php echo $ahorro; ?></td>
                          <td>
                          <label class="radio-inline radio-styled">
                            <input type="radio" name="meses" value="6" ><span></span>
                          </label>
                          </td>
                        </tr>
                        <tr>
                          <td>9 ABONOS DE</td>
                          <td><?php echo $abono; ?></td>
                          <td>TOTAL A PAGAR <?php echo $total_pagar; ?></td>
                          <td>SE AHORRA <?php echo $ahorro; ?></td>
                          <td>
                          <label class="radio-inline radio-styled">
                            <input type="radio" name="meses" value="9"><span></span>
                          </label>
                          </td>
                        </tr>
                        <tr>
                          <td>12 ABONOS DE</td>
                          <td><?php echo $abono; ?></td>
                          <td>TOTAL A PAGAR <?php echo $total_pagar; ?></td>
                          <td>SE AHORRA <?php echo $ahorro; ?></td>
                          <td>
                          <label class="radio-inline radio-styled">
                            <input type="radio" name="meses" value="12"><span></span>
                          </label>
                          </td>
                        </tr>

                      </tbody>
                    </table>
									</div>

								</div>

							</div>

						</div>

		</div>
	</div>


	</section>
