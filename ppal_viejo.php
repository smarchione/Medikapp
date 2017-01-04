<!DOCTYPE html>
<html lang="en">
		<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta name="description" content="">
				<meta name="author" content="">
				<link rel="shortcut icon" href="images/favicon.png">

				<title>.:: Medikapp ::.</title>
				<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
				<link rel='stylesheet'  type='text/css'  href='http://fonts.googleapis.com/css?family=Raleway:300,200,100'>
				<link rel="stylesheet" type="text/css" href="js/bootstrap/dist/css/bootstrap.css">
				<link rel="stylesheet" type="text/css" href="js/jquery.gritter/css/jquery.gritter.css" />
				<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="js/jquery.nanoscroller/nanoscroller.css" />
				<link rel="stylesheet" type="text/css" href="js/jquery.easypiechart/jquery.easy-pie-chart.css" />
				<link rel="stylesheet" type="text/css" href="js/bootstrap.switch/bootstrap-switch.css" />
				<link rel="stylesheet" type="text/css" href="js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
				<link rel="stylesheet" type="text/css" href="js/jquery.select2/select2.css" />
				<link rel="stylesheet" type="text/css" href="js/bootstrap.slider/css/slider.css" />
				<link rel="stylesheet" type="text/css" href="css/style.css" />
		</head>

		<body>
			<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="fa fa-gear"></span>
						</button>
						<a class="navbar-brand" href="#"><span>Medikapp</span></a>
					</div>
					<div class="navbar-collapse collapse">
						<!-- acá va el menú horizontal -->
						<ul class="nav navbar-nav"></ul>
						<!-- fin del menú horizontal -->
							<ul class="nav navbar-nav navbar-right user-nav">
								<li class="dropdown profile_menu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										acá ponemos el médico
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<li role="separator" class="divider"></li>	
										<li>
											<a href="ppal.php?opc=1">Salida del Sistema</a>
										</li>
									</ul>
								</li>
							</ul>
					</div>
				</div>
			</div>
			<div id="cl-wrapper">
				<?php include_once('menu_opciones.php'); ?>
				<div id="pcont" class="container-fluid">
						<div class="cl-mcont">
							<?php
								$opc = $_GET[opc];
								switch ($opc)
									{
										case 1:
										// acá coloco la opción de salida del sistema
											include_once('logout.php');
											break;
										case 2:
										// acá coloco el alta de los pacientes
											include_once('ficha_paciente_alta.php');
											break;
										case 3:
										// acá coloco la baja de los pacientes
											include_once('ficha_paciente_baja.php');
											break;
										case 4:
										// acá coloco las modificaciones de los pacientes
											include_once('ficha_paciente_modi.php');
											break;
											
										// acá coloco la opción de busqueda de calles								
										default:	// texto a colocar en el home.
											include_once('default.php');					
									}
							?>
						</div>
				</div>
			</div>


			<script src="js/jquery.js"></script>
			<script type="text/javascript" src="js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
			<script type="text/javascript" src="js/jquery.sparkline/jquery.sparkline.min.js"></script>
			<script type="text/javascript" src="js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
			<script type="text/javascript" src="js/behaviour/general.js"></script>
			<script type="text/javascript" src="js/jquery.ui/jquery-ui.js"></script>
			<script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
			<script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
			<script type="text/javascript" src="js/jquery.select2/select2.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.slider/js/bootstrap-slider.js"></script>
			<script type="text/javascript" src="js/jquery.gritter/js/jquery.gritter.js"></script>
	
			<script type="text/javascript">
				$(document).ready(function(){
				  //initialize the javascript
				  App.init();
				});
			</script>

			<script src="js/behaviour/voice-commands.js"></script>
			<script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="js/jquery.flot/jquery.flot.js"></script>
			<script type="text/javascript" src="js/jquery.flot/jquery.flot.pie.js"></script>
			<script type="text/javascript" src="js/jquery.flot/jquery.flot.resize.js"></script>
			<script type="text/javascript" src="js/jquery.flot/jquery.flot.labels.js"></script>

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
			
		</body>
</html>
