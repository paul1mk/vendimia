<?php
   /*Conexion al servidor y a la base de datos*/
   require("BD/conexion.php");
?>

<section class="style-default-bright">
   <div class="section-body">
      <div class="row">
        <br><br>
        <div class="col-lg-12">
          <div class="table-responsive">
            <table class="table table-hover" style="border:1px solid #BFBFBF;">
              <thead>
                <tr>
                  <th>Folio Venta</th>
                  <th>Clave Cliente</th>
                  <th>Nombre</th>
                  <th>Total</th>
                  <th>Fecha</th>
                  <th class="text-right" onclick="ventas();" style="cursor: pointer;"><i style="color: green;" class="fa fa-user-plus"></i> Nuevo venta</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $sql = "SELECT * FROM ventas";
                    $result = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)!=0){
                    while($row = mysqli_fetch_array($result)) {
                      $nombre_cliente2=$row["nombre_cliente"];
                      $paterno_cliente2=$row["paterno_cliente"];
                      $materno_cliente2=$row["materno_cliente"];
                      $descripcion_articulo2=$row["descripcion_articulo"];
                      $modelo_articulo2=$row["modelo_articulo"];
                      $cantidad_articulo2=$row["cantidad_articulo"];
                      $precio_articulo2=$row["precio_articulo"];
                      $importe_articulo2=$row["importe_articulo"];
                      $enganche_ventas2=$row["enganche_ventas"];
                      $bonificacion_enganche2=$row["bonificacion_enganche"];
                      $total2=$row["total"];
                      $num_cliente2=$row["num_cliente"];
                      $folio_venta=$row["folio_venta"];
                      $id_venta2=$row["id_venta"];
                      $precio_contado=$row["precio_contado"];
                      $total_pagar=$row["total_pagar"];
                      $abono=$row["abono"];
                      $ahorro=$row["ahorro"];
                      $meses=$row["meses"];
                      $fecha=$row["fecha"];
                ?>
                <tr>
                  <?php
                     if(!empty($folio_venta)){
                     ?>
                  <td>
                     <?php echo $folio_venta; ?>
                  </td>
                  <?php
                     }else{
                     ?>
                  <td>
                     <?php echo ""; ?>
                  </td>
                  <?php
                     }
                     ?>
                     <?php
                        if(!empty($num_cliente2)){
                        ?>
                     <td>
                        <?php echo $num_cliente2; ?>
                     </td>
                     <?php
                        }else{
                        ?>
                     <td>
                        <?php echo ""; ?>
                     </td>
                     <?php
                        }
                        ?>

                        <?php
                           if(!empty($nombre_cliente2)){
                           ?>
                        <td>
                           <?php echo $nombre_cliente2?> <?php echo $paterno_cliente2; ?> <?php echo $materno_cliente2; ?>
                        </td>
                        <?php
                           }else{
                           ?>
                        <td>
                           <?php echo ""; ?>
                        </td>
                        <?php
                           }
                           ?>
                           <?php
                              if(!empty($total_pagar)){
                              ?>
                           <td>
                              <?php echo $total_pagar; ?>
                           </td>
                           <?php
                              }else{
                              ?>
                           <td>
                              <?php echo ""; ?>
                           </td>
                           <?php
                              }
                              ?>
                              <?php
                                 if(!empty($fecha)){
                                 ?>
                              <td>
                                 <?php echo $fecha; ?>
                              </td>
                              <?php
                                 }else{
                                 ?>
                              <td>
                                 <?php echo ""; ?>
                              </td>
                              <?php
                                 }
                                 ?>

                  <td class="text-right">

                  </td>
                </tr>
                <?php
                   }
                   }
                   ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
   </div>
</section>
