<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css" crossorigin="anonymous">

    <script type="text/javascript">
		function valideKey(evt){
			
			// code is the decimal ASCII representation of the pressed key.
			var code = (evt.which) ? evt.which : evt.keyCode;
			
			if(code==8) { // backspace.
			  return true;
			} else if(code>=48 && code<=57) { // is a number.
			  return true;
			} else{ // other keys.
			  return false;
			}
		}

		</script>
<script>
  function soloLetras(e) {
    var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
      especiales = [8, 37, 39, 46],
      tecla_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      return false;
    }
  }
</script>

</head>
<body>
    <div class="card text-center">
        Bienvenido
    </div>
<div class="row pt-5 justify-content-center">
<!-- Inicio del formulario -->
    <form action="" id="form" class="form-horizontal">
        <div class="card-header">
            <input type="text" name="tipo_operacion" value="guardar" hidden="true">
            <div>
                <h5>FORMULARIO PARA EL REGISTRO DE CLIENTES</h5>                
            </div>
                <div class="form-group">
                    <select name="tipo_doc" id="tipo_doc" class="form-control">
                        <option value="">Seleccione el tipo de documento de identidad</option>
                        <option value="CC">Cedula de ciudadania</option>
                        <option value="TI">Tarjeta de Identidad</option>
                        <option value="CE">Cedula de extranjeria</option>
                        <option value="RC">Registro Civil</option>
                        <option value="NIT">Nit</option>                      
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="documento" id="documento" class="form-control" placeholder="Digite su numero de identidad"  onkeypress="return valideKey(event);" maxlength="20">
                </div>
                <div class="form-group"> 
                    <input type="date" name="fecha" id="fecha" class="form-control"     required max=<?php $hoy=date("Y-m-d"); echo $hoy;?> />  
                </div>
                <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Digite sus Nombres"  required size="30" minlength="4" maxlength="30" onkeypress="return soloLetras(event)" >
                </div>
                <div class="form-group">
                    <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Digite sus Apellidos"  required size="30" minlength="4" maxlength="30"  onkeypress="return soloLetras(event)">
                </div>
                <div class="form-group">
                    <select name="sexo" id="sexo"  class="form-control"  required>
                        <option value="">Elija es sexo</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>

                <input style="opacity:1;" type="checkbox" data-required="1" name="terminos" required ><a style="color:black;padding-left:20px;">Aceptar los <a style="color:blue;" href="https://www.timeinc.net/subs/privacy/termsofservice/pptos.html"  target="_blank">Términos y Condiciones</a>



                <div class="form-group">
                    <button type="submit" class="btn-info btn-block">Aceptar</button>
                </div>
               
        </div> 
        <div>
                    <a  class="nav-link" href="index.php"><--Inicio</a>
                </div>      
    </form>
  <!-- Fin del formulario -->
</div>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>  
    <script src="js/funciones.js"></script> 
</body>
</html>