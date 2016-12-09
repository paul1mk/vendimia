function Mayusculas(field) {
    field.value = field.value.toUpperCase()
}

function noSpaces(e){
    if(e.charCode == 32){
        e.preventDefault();
    }
}

function removeExtraSpaces(input){
    input.value = input.value.replace(/ +(?= )/g,'');
}

function soloLetras(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " abcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
        if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
    }
    if(letras.indexOf(tecla)==-1 && !tecla_especial){
        return false;
    }
}

function refresh(){
   setTimeout(function(){
   window.location.reload(1);
}, 400);
	console.log("reset");
}

function isNumberKey(evt){
    if (!(evt.charCode >= 46 && evt.charCode <= 57)  && !evt.charCode == 0) {
        evt.preventDefault();
    }
}

function NumberKey(evt){
    if (!(evt.charCode >= 48 && evt.charCode <= 57)  && !evt.charCode == 0) {
        evt.preventDefault();
    }
}

function logout(){
	location.href="../logout.php";
}

function cliente(){
	location.href="?opc=6";
}

function ventas(){
	location.href="?opc=8";
}
function cambiar_contrasena(){
	var c_actual=$('#c_actual').val();
	var contrasena=$('#password1').val();
	var c_cambiar=$('#password2').val();
	if($.trim($('#c_actual').val()).length &&$.trim($('#password1').val()).length&&$.trim($('#password2').val()).length){
	if(c_cambiar.toString()==contrasena.toString()){
			$.ajax({
				type:"POST",
				url:"Funciones/funcion_cambiar_password.php",
				data:{
					c_actual:c_actual,
					contrasena_nueva:contrasena,
					c_cambiar:c_cambiar
				}
				}).done(function(data){
				if(data==1){
					toastr.options.progressBar = true;
					toastr.options.positionClass = 'toast-top-right';
					toastr.success('Contraseña Cambiada con exito');
					setTimeout('document.location.href="menu_admin.php?opc=1"',5000);
				}else{
					console.log("error");
					toastr.options.progressBar = true;
					toastr.options.positionClass = 'toast-top-right';
					toastr.error('La contraseña actual no coincide');
				}
			   });
    		}else{
    			console.log(c_cambiar.toString()+" "+contrasena.toString());
    			toastr.options.progressBar = true;
    			toastr.options.positionClass = 'toast-top-right';
    			toastr.error('Las contraseñas no coinciden');
    		}
    	  }else{
      		toastr.options.progressBar = true;
      		toastr.options.positionClass = 'toast-top-right';
      		toastr.warning('Campos vacios');
    	  }
}

function guardarDatosCuenta(){
    var nombre = $("input[name=nombre]").val();
    var apellido_paterno = $("input[name=apellido_paterno]").val();
    var apellido_materno = $("input[name=apellido_materno]").val();
    var correo = $("input[name=correo]").val();

    if($.trim(nombre).length && $.trim(apellido_paterno).length && $.trim(apellido_materno).length && $.trim(correo).length){
            $.ajax({
                method: "POST",
                url: "Funciones/funcion_editar_datos_admin.php",
                data: {
                    nombre: nombre,
                    apellido_paterno: apellido_paterno,
                    apellido_materno: apellido_materno,
                    correo: correo
                }
            }).done(function (data){

                if(data == -1){
	                    toastr.options.progressBar = true;
						          toastr.options.positionClass = 'toast-top-right';
						          toastr.error('<strong>Error inesperado!</strong> Por favor intente mas tarde ');
                }else{
                      toastr.options.progressBar = true;
          						toastr.options.positionClass = 'toast-top-right';
          						toastr.success('<strong>Exito!</strong> Sus datos han sido actualizados.');
                      setTimeout('location.reload(true)',4000);
                }
                });
                }else{
                      toastr.options.progressBar = true;
                  		toastr.options.positionClass = 'toast-top-right';
            			    toastr.warning('<strong>Advertencia!</strong> Complete los campos requeridos, apellido materno es opcional.');
                }
}


function checkForm(){
  var contrasena = $("input[name=contrasena]").val();
  var contrasena2 = $("input[name=contrasena2]").val();
  var email = $("input[name=email]").val();
  var email2 = $("input[name=email2]").val();

  if(email != email2) {
           toastr.options.progressBar = true;
           toastr.options.positionClass = 'toast-top-right';
           toastr.warning('<strong>Advertencia!</strong> Los email no coinciden, verifique de nuevo.');
           return false;

   }

  if(contrasena != contrasena2) {
            toastr.options.progressBar = true;
            toastr.options.positionClass = 'toast-top-right';
            toastr.warning('<strong>Advertencia!</strong> La contraseña no coinciden, verifique de nuevo.');
            return false;
   }
   return true;
}

function guardarArticulos(){
    var descripcion = $("input[name=descripcion]").val();
    var modelo = $("input[name=modelo]").val();
    var precio = $("input[name=precio]").val();
    var existencia = $("input[name=existencia]").val();

    if($.trim(descripcion).length && $.trim(modelo).length && $.trim(precio).length && $.trim(existencia).length){
            $.ajax({
                method: "POST",
                url: "Funciones/funcion_articulos.php",
                data: {
                    descripcion: descripcion,
                    modelo: modelo,
                    precio: precio,
                    existencia: existencia
                }
            }).done(function (data){

                if(data == -1){
	                    toastr.options.progressBar = true;
						          toastr.options.positionClass = 'toast-top-right';
						          toastr.error('<strong>Articulo!</strong> ya registrado. Por favor inserte otro ');
                }else{
                      toastr.options.progressBar = true;
          						toastr.options.positionClass = 'toast-top-right';
          						toastr.success('<strong>Bien Hecho!</strong> El Articulo ha sido registrado correctamente.');
                      setTimeout('location.reload(true)',4000);
                }
                });
                }else{
                      toastr.options.progressBar = true;
                  		toastr.options.positionClass = 'toast-top-right';
            			    toastr.warning('<strong>No es posible continuar!</strong> Complete los campos requeridos, modelo es opcional.');
                }
}

function eliminarArticulo(){
      var id_articulo = $("#id_articulo").val();

    if(($.trim(id_articulo).length)){

            $.ajax({
                method: "POST",
                url: "Funciones/funcion_eliminar_articulos.php",
                data: {
					id_articulo: id_articulo
                }
            }).done(function (data){
                switch (data){
                    case "-1":
                        toastr.options.progressBar = true;
                        toastr.options.positionClass = 'toast-top-right';
                        toastr.error('<strong>Error inesperado!</strong> Por favor intente mas tarde.');
                    break;
                    default:
                        toastr.options.progressBar = true;
                        toastr.options.positionClass = 'toast-top-right';
                        toastr.success('<strong>Exito!</strong> articulo eliminado');
                        setTimeout('location.reload(true)',4000);
                    break;
                }
            });
    }
}

function editarArticulos(){
    var descripcion = $("input[name=descripcion]").val();
    var modelo = $("input[name=modelo]").val();
    var precio = $("input[name=precio]").val();
    var existencia = $("input[name=existencia]").val();
    var id_articulo = $("#id_articulo").val();
    if($.trim(descripcion).length && $.trim(modelo).length && $.trim(precio).length && $.trim(existencia).length){
            $.ajax({
                method: "POST",
                url: "Funciones/funcion_editar_articulos.php",
                data: {
                    descripcion: descripcion,
                    modelo: modelo,
                    precio: precio,
                    existencia: existencia,
                    id_articulo: id_articulo
                }
            }).done(function (data){

                if(data == -1){
	                    toastr.options.progressBar = true;
						          toastr.options.positionClass = 'toast-top-right';
						          toastr.error('<strong>Error!</strong> BD ');
                }else{
                      toastr.options.progressBar = true;
          						toastr.options.positionClass = 'toast-top-right';
          						toastr.success('<strong>Bien Hecho!</strong> El Articulo ha sido registrado correctamente.');
                      setTimeout('location.reload(true)',4000);
                }
                });
                }else{
                      toastr.options.progressBar = true;
                  		toastr.options.positionClass = 'toast-top-right';
            			    toastr.warning('<strong>No es posible continuar!</strong> Complete los campos requeridos, modelo es opcional.');
                }
}

function guardarConfiguracion(){
    var financiamiento = $("input[name=financiamiento]").val();
    var enganche = $("input[name=enganche]").val();
    var plazo = $("input[name=plazo]").val();

    if($.trim(financiamiento).length && $.trim(enganche).length && $.trim(plazo).length){
            $.ajax({
                method: "POST",
                url: "Funciones/funcion_guardar_config.php",
                data: {
                    financiamiento: financiamiento,
                    enganche: enganche,
                    plazo: plazo
                }
            }).done(function (data){

                if(data == -1){
	                    toastr.options.progressBar = true;
						          toastr.options.positionClass = 'toast-top-right';
						          toastr.error('<strong>Error inesperado!</strong> Por favor intente mas tarde ');
                }else{
                      toastr.options.progressBar = true;
          						toastr.options.positionClass = 'toast-top-right';
          						toastr.success('<strong>Bien Hecho!</strong> La configuración ha sido registrada.');
                      setTimeout('location.reload(true)',4000);
                }
                });
                }else{
                      toastr.options.progressBar = true;
                  		toastr.options.positionClass = 'toast-top-right';
            			    toastr.warning('<strong>Advertencia!</strong> Todos los campos son requeridos..');
                }
}

function guardarClientes(){
    var nombre = $("input[name=nombre]").val();
    var apellido_paterno = $("input[name=apellido_paterno]").val();
    var apellido_materno = $("input[name=apellido_materno]").val();
    var rfc = $("input[name=rfc]").val();

    if($.trim(nombre).length && $.trim(apellido_paterno).length && $.trim(apellido_materno).length && $.trim(rfc).length){
            $.ajax({
                method: "POST",
                url: "Funciones/funcion_guardar_cliente.php",
                data: {
                    nombre: nombre,
                    apellido_paterno: apellido_paterno,
                    apellido_materno: apellido_materno,
                    rfc: rfc
                }
            }).done(function (data){

                if(data == -1){
	                    toastr.options.progressBar = true;
						          toastr.options.positionClass = 'toast-top-right';
						          toastr.error('<strong>Error inesperado!</strong> Por favor intente mas tarde ');
                }else{
                      toastr.options.progressBar = true;
          						toastr.options.positionClass = 'toast-top-right';
          						toastr.success('<strong>Bien Hecho!</strong> El cliente ha sido registrado correctamente.');
                      setTimeout('location.reload(true)',4000);
                }
                });
                }else{
                      toastr.options.progressBar = true;
                  		toastr.options.positionClass = 'toast-top-right';
            			    toastr.warning('<strong>No es posible continuar!</strong> Complete los campos requeridos.');
                }
}

function calcularVenta(){

  var nombre_cliente = $("input[name=nombre_cliente]").val();
  var paterno_cliente = $("input[name=paterno_cliente]").val();
  var materno_cliente = $("input[name=materno_cliente]").val();
  var descripcion_articulo = $("input[name=descripcion_articulo]").val();
  var modelo_articulo = $("input[name=modelo_articulo]").val();
  var cantidad_articulo = $("input[name=cantidad_articulo]").val();
  var precio_articulo = $("input[name=precio_articulo]").val();
  var importe_articulo = $("input[name=importe_articulo]").val();
  var enganche_ventas = $("input[name=enganche_ventas]").val();
  var bonificacion_enganche = $("input[name=bonificacion_enganche]").val();
  var total = $("input[name=total]").val();
  var num_cliente = $("input[name=num_cliente]").val();
  var folio_venta = $("input[name=folio_venta]").val();
  var meses = $("input[name=meses]").val();
  var precio_contado = $("input[name=precio_contado]").val();
  var total_pagar = $("input[name=total_pagar]").val();
  var abono = $("input[name=abono]").val();
  var ahorro = $("input[name=ahorro]").val();

    if($.trim(nombre_cliente).length && $.trim(paterno_cliente).length &&
    $.trim(materno_cliente).length && $.trim(descripcion_articulo).length &&
    $.trim(modelo_articulo).length && $.trim(cantidad_articulo).length &&
    $.trim(precio_articulo).length && $.trim(importe_articulo).length &&
    $.trim(enganche_ventas).length && $.trim(bonificacion_enganche).length &&
    $.trim(total).length && $.trim(num_cliente).length && $.trim(folio_venta).length && $.trim(meses).length
    && $.trim(precio_contado).length && $.trim(total_pagar).length && $.trim(abono).length && $.trim(ahorro).length){
            $.ajax({
                method: "POST",
                url: "Funciones/funcion_ventas.php",
                data: {
                  nombre_cliente: nombre_cliente,
                  paterno_cliente: paterno_cliente,
                  materno_cliente: materno_cliente,
                  descripcion_articulo: descripcion_articulo,
                  modelo_articulo: modelo_articulo,
                  cantidad_articulo: cantidad_articulo,
                  precio_articulo: precio_articulo,
                  importe_articulo: importe_articulo,
                  enganche_ventas: enganche_ventas,
                  bonificacion_enganche: bonificacion_enganche,
                  total: total,
                  num_cliente: num_cliente,
                  folio_venta: folio_venta,
                  meses: meses,
                  precio_contado: precio_contado,
                  total_pagar: total_pagar,
                  abono: abono,
                  ahorro: ahorro
                }
            }).done(function (data){

                if(data == -1){
                  toastr.options.progressBar = true;
                  toastr.options.positionClass = 'toast-top-right';
                  toastr.error('<strong>Error!</strong> BD ');
                }else{
                  toastr.options.progressBar = true;
                  toastr.options.positionClass = 'toast-top-right';
                  toastr.success('<strong>Bien Hecho!</strong> La venta ha sido registrada correctamente1.');
                  setTimeout('location.reload(true)',4000);
                }
                });
                }else{
                      toastr.options.progressBar = true;
                  		toastr.options.positionClass = 'toast-top-right';
            			    toastr.warning('<strong>No es posible continuar!</strong> Cantidad vacia.');
                }
}
