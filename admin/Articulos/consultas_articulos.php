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
                  <th>Clave articulo</th>
                  <th>Descripcion</th>
                  <th>Modelo</th>
                  <th>Precio</th>
                  <th>Existencia</th>
                  <th class="text-right">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $sql = "SELECT id_articulo, descripcion, modelo, precio, existencia FROM articulos";
                    $result = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)!=0){
                    while($row = mysqli_fetch_array($result)) {
                    $id_articulo=$row["id_articulo"];
                    $descripcion=$row["descripcion"];
                    $modelo=$row["modelo"];
                    $precio=$row["precio"];
                    $existencia=$row["existencia"];
                ?>
                <tr>
                  <?php
                     if(!empty($id_articulo)){
                     ?>
                  <td>
                     <?php echo $id_articulo; ?>
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
                        if(!empty($descripcion)){
                        ?>
                     <td>
                        <?php echo $descripcion; ?>
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
                           if(!empty($modelo)){
                           ?>
                        <td>
                           <?php echo $modelo; ?>
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
                              if(!empty($precio)){
                              ?>
                           <td>
                              <?php echo $precio; ?>
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
                                 if(!empty($existencia)){
                                 ?>
                              <td>
                                 <?php echo $existencia; ?>
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
                    <input type="hidden" id="id_articulo" name="id_articulo" value="<?php echo $id_articulo; ?>">
                    <a href="menu_admin.php?opc=4&fReQ=<?php echo $id_articulo; ?>"><button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Editar"><i style="color: #2196f3;" class="fa fa-pencil"></i></button></a>
                    <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Eliminar" onclick="eliminarArticulo();"><i style="color: #E70505;" class="fa fa-trash-o"></i></button>
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
