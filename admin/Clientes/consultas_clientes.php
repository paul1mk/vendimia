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
                  <th>Clave cliente</th>
                  <th>Nombre</th>
                  <th>A. Paterno</th>
                  <th>A. Materno</th>
                  <th>RFC</th>
                  <th class="text-right" onclick="cliente();" style="cursor: pointer;"><i style="color: green;" class="fa fa-user-plus"></i> Nuevo cliente</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $sql = "SELECT id_cliente, nombre, apellido_paterno, apellido_materno, rfc, num_cliente FROM clientes";
                    $result = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)!=0){
                    while($row = mysqli_fetch_array($result)) {
                    $id_cliente=$row["id_cliente"];
                    $nombre=$row["nombre"];
                    $apellido_paterno=$row["apellido_paterno"];
                    $apellido_materno=$row["apellido_materno"];
                    $rfc=$row["rfc"];
                    $num_cliente=$row["num_cliente"];
                ?>
                <tr>
                  <?php
                     if(!empty($num_cliente)){
                     ?>
                  <td>
                     <?php echo $num_cliente; ?>
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
                        if(!empty($nombre)){
                        ?>
                     <td>
                        <?php echo $nombre; ?>
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
                           if(!empty($apellido_paterno)){
                           ?>
                        <td>
                           <?php echo $apellido_paterno; ?>
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
                              if(!empty($apellido_materno)){
                              ?>
                           <td>
                              <?php echo $apellido_materno; ?>
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
                                 if(!empty($rfc)){
                                 ?>
                              <td>
                                 <?php echo $rfc; ?>
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
