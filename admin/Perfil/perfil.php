<div class="section-body">
   <div class="card">
      <div class="card-head style-primary">
         <h1 style="color: #FFFFFF;" align="center">Perfil</h1>
      </div>
      <div class="card-tiles">
         <div class="hbox-md col-md-12">
            <div class="hbox-column col-md-9">
               <div class="row">
                  <div class="col-sm-7 col-md-8 col-lg-12">
                     <div class="margin-bottom-xxl" align="center">
                        <center><img class="img-circle size-3" src="../img/1.jpg" alt="perfil" /></center>
                        <h1 class="text-light no-margin"><?php echo $_SESSION["nombre"]; ?></h1>
                        <h5>Administrador</h5>
                     </div>
                     <ul class="nav nav-tabs" data-toggle="tabs">
                        <li class="active"><a href="#editar">Editar datos</a></li>
                     </ul>
                     <div class="card-body tab-content">
                        <div class="tab-pane active form" id="editar">
                           <div class="form-group floating-label">
                              <input type="text" class="form-control" name="nombre" onChange="removeExtraSpaces(this); " onkeypress="return soloLetras(event)" value="<?php echo $_SESSION["nombre"]; ?>" required>
                              <label>Nombre</label>
                           </div>
                           <div class="form-group floating-label">
                              <input type="text" class="form-control" name="apellido_paterno" onChange="removeExtraSpaces(this); " onkeypress="return soloLetras(event)" value="<?php echo $_SESSION["apellido_paterno"]; ?>" required>
                              <label>Apellido Paterno</label>
                           </div>
                           <div class="form-group floating-label">
                              <input type="text" class="form-control" name="apellido_materno" onChange="removeExtraSpaces(this); " onkeypress="return soloLetras(event)" value="<?php echo $_SESSION["apellido_materno"]; ?>" required>
                              <label>Apellido Materno</label>
                           </div>
                           <div class="form-group floating-label">
                              <input type="email" class="form-control" name="correo" onkeypress="noSpaces(event);" title="Email no valido" value="<?php echo $_SESSION["correo"]; ?>" required>
                              <label>Email</label>
                           </div>
                           <div class="card-actionbar">
                              <center><button class="btn btn-flat btn-primary ink-reaction" onclick="guardarDatosCuenta();">Editar</button></center>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="hbox-column col-md-3 style-default-light">
               <div class="row">
                  <div class="col-xs-12">
                     <h4>Datos personales</h4>
                     <dl class="dl-horizontal dl-icon">
                        <dt><span class="fa fa-fw md-person fa-lg opacity-30"></span></dt>
                        <dd>
                           <span>Nombre (s)</span><br/>
                           <span class="text-medium"><?php echo $_SESSION["nombre"]; ?></span>
                        </dd>
                        <dt></dt>
                        <dd>
                           <span>Apellido Paterno</span><br/>
                           <span class="text-medium"><?php echo $_SESSION["apellido_paterno"]; ?></span>
                        </dd>
                        <dt></dt>
                        <dd>
                           <span>Apellido Materno</span><br/>
                           <span class="text-medium"><?php echo $_SESSION["apellido_materno"]; ?></span>
                        </dd>
                        <dt><span class="fa fa-fw md-markunread fa-lg opacity-30"></span></dt>
                        <dd>
                           <span>Email</span><br/>
                           <span class="text-medium"><?php echo $_SESSION["correo"]; ?></span>
                        </dd>
                        <dt><span class="fa fa-fw md md-edit fa-lg opacity-30"></span></dt>
                        <dd>
                           <span class="text-primary" data-toggle="modal" data-target="#formModal" style="cursor: pointer;">Cambiar contraseña</span><br/>
                        </dd>
                     </dl>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Modal cambiar contraseña -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content" style="border:1px solid #2196f3;">
         <div class="modal-header" style="background-color: #2196f3;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="formModalLabel" align="center" style="color: white;">¡Restablecer contraseña!</h4>
         </div>
         <form class="form-horizontal" role="form">
            <div class="modal-body">
               <div class="form-group">
                  <div class="col-sm-3">
                     <label for="email1">Contraseña actual</label>
                  </div>
                  <div class="col-sm-9">
                     <input type="text" maxlength="8" id="c_actual" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-sm-3">
                     <label for="password1">Nueva contraseña</label>
                  </div>
                  <div class="col-sm-9">
                     <input type="password" maxlength="8" id="password1" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-sm-3">
                     <label for="password1">Confirmar nueva contraseña</label>
                  </div>
                  <div class="col-sm-9">
                     <input type="password" maxlength="8" id="password2" class="form-control">
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
               <button type="button" class="btn btn-danger" onclick="cambiar_contrasena();">Guardar</button>
            </div>
         </form>
      </div>
   </div>
</div>
