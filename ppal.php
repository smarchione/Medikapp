<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="images/favicon.png">
		<title></title>
		<link rel='stylesheet'  type='text/css'  href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800'>
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
		<link rel="stylesheet" type="text/css" href="js/jquery.niftymodals/css/component.css" />
		<link rel="stylesheet" type="text/css" href="js/jquery.datatables/bootstrap-adapter/css/datatables.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css"/>		
	</head>
	<body>
		<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-gear"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right user-nav">
						<li class="dropdown profile_menu">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<span>DNI - APELLIDO Y NOMBRE</span>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="fa fa-key"></i><span> Cambio de Clave</span></a></li>
								<li class="divider"></li>
								<li><a href="medikapp_login.php"><i class="fa  fa-sign-out"></i><span> Salida del Sistema</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="cl-wrapper">
			<?php include_once('menu1000.php');?>
		</div>
		<div class="container-fluid" id="pcont">
			<div class="cl-mcont">	
				<?php 
					$opc = $_GET[opc];
					switch ($opc)
						{

							case 2:
								// acá coloco la salida del sistema.
								include_once('logout.php');
								break;
							
							case 3:
							// acá coloco la opción de cambio de clave
								include_once('paciente_alta.php');
								break;
								
							case 4:
							// acá coloco la opción de cambio de clave
								include_once('paciente_baja.php');
								break;

							case 5:
							// acá coloco la opción de cambio de clave
								include_once('paciente_modificar.php');
								break;
								
								
							default:	// texto a colocar en el home.
								include_once('default.php');					
						}
				?>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
		<script type="text/javascript" src="js/jquery.sparkline/jquery.sparkline.min.js"></script>
		<script type="text/javascript" src="js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
		<script type="text/javascript" src="js/jquery.ui/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
		<script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="js/jquery.select2/select2.min.js" ></script>
		<script type="text/javascript" src="js/bootstrap.slider/js/bootstrap-slider.js"></script>
		<script type="text/javascript" src="js/jquery.gritter/js/jquery.gritter.js"></script>
		<script type="text/javascript" src="js/behaviour/general.js"></script>
		<script type="text/javascript" src="js/jquery.niftymodals/js/jquery.modalEffects.js"></script>
		<script type="text/javascript" src="js/jquery.datatables/jquery.datatables.min.js"></script>
		<script type="text/javascript" src="js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
			  App.init();
			});
		</script>
		
		<script type="text/javascript" src="js/behaviour/voice-commands.js"></script>
		<script type="text/javascript" src="js/bootstrap/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.flot/jquery.flot.js"></script>
		<script type="text/javascript" src="js/jquery.flot/jquery.flot.pie.js"></script>
		<script type="text/javascript" src="js/jquery.flot/jquery.flot.resize.js"></script>
		<script type="text/javascript" src="js/jquery.flot/jquery.flot.labels.js"></script>
	</body>
</html>