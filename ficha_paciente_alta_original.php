<?php
	include_once('conexion_medica.php');

	//consulta para llenar el combo se paises
	$consulta="SELECT idpais, nombrepais FROM paises ORDER BY nombrepais asc";
	$result=mysql_query($consulta);	

	//consulta para llenar el combo de grupos sanguineos
	$gruposangre="SELECT idgrupo, gruposanguineo FROM gruposanguineos ORDER BY gruposanguineo asc";
	$resultado_sangre=mysql_query($gruposangre);

	//consulta para llenar el combo que indica el sexo	
	$tiposexo ="SELECT idsexo,tiposexo FROM sexos ORDER BY tiposexo asc";
	$resultado_sexo=mysql_query($tiposexo);
	
	//consulta para llenar el combo que indica las obras sociales y prepagas.
	$tipo_osp = "SELECT codosp,nomosp FROM obrasociales order by nomosp asc";
	$resultado_osp=mysql_query($tipo_osp);
	
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="images/favicon.png">

		<title>.:: SINTMED ::. Sistema Integral Médico</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" type="text/css" href="js/jquery.select2/select2.css" />
		<link rel="stylesheet" type="text/css" href="js/bootstrap.slider/css/slider.css" />
		<link href="js/fuelux/css/fuelux.css" rel="stylesheet">
		<link href="js/fuelux/css/fuelux-responsive.min.css" rel="stylesheet">
		<link rel="stylesheet" href="fonts/font-awesome-4/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/pygments.css">
		<link rel="stylesheet" type="text/css" href="js/jquery.nanoscroller/nanoscroller.css" />
		<link rel="stylesheet" type="text/css" href="js/bootstrap.switch/bootstrap-switch.css" />

		<!-- Custom styles for this template -->
		<link href="css/style.css" rel="stylesheet" />
		<link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.css"/>

		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	</head>

<body>
<div id="cl-wrapper">
  <div class="container-fluid" id="">
    <div class="cl-mcont">		
    <div class="row wizard-row">
      <div class="col-md-12 fuelux">
        <div class="block-wizard">
          <div id="wizard1" class="wizard wizard-ux">
            <ul class="steps">
              <li data-target="#step1" class="active">Alta de Paciente<span class="chevron"></span></li>
            </ul>
          </div>
          <div class="step-content">
            <form role="form" class="form-horizontal" action="#" data-parsley-namespace="data-parsley-validate novalidate"> 	
			<div class="step-pane active" id="step1">
				<div class="form-group">
					<div class="col-sm-3">
						<label>N&deg; de Documento</label>
						<input id="paciente_documento" type="text" name="documento" class="form-control" placeholder="N&deg; de Documento">
					</div>
					<div class="col-sm-4">
						<label>Apellido/s del Paciente</label>
						<input id="paciente_apellido" type="text" name="apellido" class="form-control" placeholder="Ingrese el Apellido del Paciente">
					</div>
					<div class="col-sm-5">
						<label>Nombre/s del Paciente</label>
						<input id="paciente_nombre" type="text" name="nombre" class="form-control" placeholder="Ingrese el Nombre del Paciente">
					</div>					
                </div>	
				<div class="form-group">
					<div class="col-sm-4">
						<label>Domicilio del Paciente</label>
						<input id="paciente_domicilio" type="text" name="domicilio" class="form-control" placeholder="Ingrese la Calle...">
					</div>
					<div class="col-sm-1">
						<label>N&uacute;mero</label>
						<input id="paciente_numero" type="text" name="numero" class="form-control" placeholder="N&deg;">
					</div>	
					<div class="col-sm-1">
						<label>Torre</label>
						<input id="paciente_torre" type="text" name="torre" class="form-control" placeholder="Torre">
					</div>		
					<div class="col-sm-1">
						<label>Piso</label>
						<input id="paciente_piso" type="text" name="piso" class="form-control" placeholder="Piso">
					</div>						
					<div class="col-sm-1">
						<label>Dpto</label>
						<input id="paciente_depto" type="text" name="depto" class="form-control" placeholder="Dpto">
					</div>
					<div class="col-sm-2">
						<label>C&oacute;digo Postal</label>
						<input id="paciente_postal" type="text" name="postal" class="form-control" placeholder="C&oacute;digo Postal">
					</div>
					<div class="col-sm-2">
						<label>Localidad</label>
						<input id="paciente_localidad" type="text" name="localidad" class="form-control" placeholder="Localidad">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-3">
						<label>Fecha de Nacimiento</label>
			            <input id='datepicker' type='text' class="form-control" name="fechanacimiento"  placeholder="Fecha de Nacimiento ( mm / dd / yyyy )"/>
					</div>	
					<div class="col-sm-1">
						<label>Edad</label>
						<input id="edad" type="text" name="edad" class="form-control awesomplete" placeholder="Edad"/>
					</div>
					<div class="col-sm-3">		
						<label>Sexo</label>
						<select name="sexo" class="form-control" >
							<option value="">Elija el tipo de Sexo</option>
							<?php
								while($fila=mysql_fetch_array($resultado_sexo))
									{ 
							?>
							<option value="<?php echo $fila['idsexo']?>"><?php echo $fila['tiposexo']?>
							</option>
							<?php
									}
							?>
						</select>
					</div>	
					<div class="col-sm-2">
						<label>Grupo Sanguineo</label>
						<select name="sangre" class="form-control" >
							<option value="">Elija el Grupo Sanguineo</option>
							<?php
								while($fila=mysql_fetch_array($resultado_sangre))
									{
							?>
							<option value="<?php echo $fila['idgrupo']?>"><?php echo $fila['gruposanguineo']?>
							</option>
							<?php
									}
							?>
						</select>
					</div>	
					<div class="col-sm-2">
						<label>Nacido/a en</label>
						<select name="pais" class="form-control" >
							<option value="">Elija el Pa&iacute;s</option>
							<?php				
								while($fila=mysql_fetch_array($result))
									{
							?>
							<option value="<?php echo $fila['idpais']?>"><?php echo $fila['nombrepais']?>
							</option>
							<?php
									}
							?>
						</select>
					</div>

				</div>	
				<div class="form-group">
					<div class="col-sm-2">
						<label>Indique la Obra Social</label>
						<select name="pais" class="form-control" >
							<option value="">Elija la Obra Social</option>
							<?php				
								while($fila=mysql_fetch_array($resultado_osp))
									{
							?>
							<option value="<?php echo $fila['codosp']?>"><?php echo $fila['nomosp']?>
							</option>
							<?php
									}
							?>
						</select>		
					</div>
					<div class="col-sm-3">
						<label>Tipo de Plan</label>
						<input id="plan" type="text" name="plan" class="form-control" placeholder="Plan...">
					</div>	
					<div class="col-sm-3">
						<label>N&deg; de Credencial</label>
						<input id="credencial" type="text" name="credencial" class="form-control" placeholder="N&deg; de credencial...">
					</div>
					<div class="col-sm-4">
						<label>Tel&eacute;fono Particular</label>
						<input id="tel_part" type="text" name="tel_part" class="form-control" placeholder="Ingrese el Tel&eacute;fono Particular del Paciente">
					</div>
			
                </div>	
                <div class="form-group">
					<div class="col-sm-2">
						<label>Indique la Prestadora</label>
						<select class="form-control">
								<option>Claro</option>
								<option>Movistar</option>
								<option>Nextel</option>
								<option>Personal</option>
						</select>						
					</div>					
					<div class="col-sm-3">
						<label>Tel&eacute;fono Celular</label>
						<input type="text" name="tel_cel" class="form-control" placeholder="Ingrese el Tel&eacute;fono Celular del Paciente">
					</div>	
					<div class="col-sm-6">
						<label>E-Mail</label>
						<input class="form-control parsley-validated"  parsley-type="email" placeholder="Entre una direcci&oacute;n de mail v&aacute;lida" type="email">
					</div>
				</div>
                <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button class="btn btn-default">Cancelar</button>
						<button data-wizard="#wizard1" class="btn btn-success wizard-next"><i class="fa fa-check"></i> Finalizar</button>			
					</div>
                </div>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
	</div>
</div>
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.select2/select2.min.js"></script>
	<script type="text/javascript" src="js/jquery.parsley/parsley.js"></script>
	<script type="text/javascript" src="js/bootstrap.slider/js/bootstrap-slider.js"></script>
	<script type="text/javascript" src="js/fuelux/loader.min.js"></script>	
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
	<script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
	<script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/behaviour/general.js"></script>
	<script type="text/javascript" src="js/jquery.ui/jquery-ui.js"></script>
	<script type="text/javascript">
		$("#credit_slider").slider().on("slide",function(e){
		  $("#credits").html("$" + e.value);
		});
		$("#rate_slider").slider().on("slide",function(e){
		  $("#rate").html(e.value + "%");
		});
	</script>
  
	<script type="text/javascript">
		$(document).ready(function(){
		  App.init();
		  App.wizard();
		});
	</script>
	
	<!-- declaro la fecha de nacimiento -->
	<script type="text/javascript">
		jQuery('#datepicker').datepicker(
			{
				format: 'mm/dd/yyyy',
				startDate: '-3d',
				onSelect: calcularEdad
			});
	<!-- fin de la declaracion de la fecha de nacimiento -->
	<!-- cálculo la edad de forma automática -->
		function calcularEdad(textoFecha, datePicker) 
			{
				var 	fecha 		= new Date(textoFecha),
						ageDifMs 	= Date.now() - fecha.getTime(),
						ageDate 	= new Date(ageDifMs), // miliseconds from epoch
						edad 		= Math.abs(ageDate.getUTCFullYear() - 1970)
						$('#edad').val(edad)
			}
	</script>
	<!-- fin del cálculo de la edad de forma automática -->
	
	<!-- comienzo del autocompletar -->
	<script>
	  $( function() {
		var availableTags = [
			"Femenino",
			"Masculino",
			"Androginx",
			"Andrógino",
			"Andrógina",
			"Trans",
			"Trans masculino",
			"Trans femenino",
			"Varón trans",
			"Hombre trans",
			"Mujer trans",
			"Transexual",
			"Travesti",
			"Transgénero",
			"Transgénero femenina",
			"Transgénero masculino",
			"Queer",
			"Intersex",
			"Intersexual",
			"Ninguno",
			"Neutro",
			"Pansexual varón",
			"Pansexual mujer",
			"Mujer",
			"Hombre",
			"Varón",
			"Lesbiana",
			"Gay",
			"Asexual mujer",
			"Asexual varón",
			"Mujer bisexual",
			"Varón bisexual",
			"Poliamorosx",
			"Poliamorosa",
			"Poliamoroso",
			"Mujer heterosexual",
			"Varón heterosexual",
			"Mujer homosexual",
			"Varón homosexual",
			"Puto",
			"Torta",
			"Trava",
			"Mujer heteroflexible",
			"Varón heteroflexible",
			"Lesboflexible",
			"Cysexual masculino",
			"Cysexual masculina",
			"Cysexual femenina",
			"Cysexual femenino",
			"Cysexual mujer",
			"Cysexual varón"
				];
				$( "#tags" ).autocomplete({
				  source: availableTags
				});
			  } );
	</script>
	<!-- fin del autocompletar -->
	
	
</body>
</html>
