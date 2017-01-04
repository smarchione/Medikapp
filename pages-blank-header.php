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
						<ul class="nav navbar-nav"><!-- acá va el menú horizontal --></ul>
							<ul class="nav navbar-nav navbar-right user-nav">
								<li class="dropdown profile_menu">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										Jorge Galati 
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<!--
										<li><a href="#">My Account</a></li>
										<li><a href="#">Profile</a></li>
										<li><a href="#">Messages</a></li>
										<li class="divider"></li>
										-->
										<li role="separator" class="divider"></li>	
										<li>
											<a href="#">Salida del Sistema</a>
										</li>
									</ul>
								</li>
							</ul>
						</ul>
					</div>
				</div>
			</div>

			<div id="cl-wrapper">
				<div class="cl-sidebar">
					<div class="cl-toggle">
						<i class="fa fa-bars"></i>
					</div>
					<div class="cl-navblock">
						<div class="menu-space">
							<div class="content">
								<div class="side-user">
									<div class="info"></div>
								</div>
								<ul class="cl-vnavigation">
									<!--
									<div class="info">Men&uacute;</div>
									-->
									<li>
										<a href="#"><i class="fa fa-group"></i><span>Usuarios</span></a>
										<ul class="sub-menu">
										  <li><a href="#">Altas</a></li>
										  <li><a href="#">Bajas</a></li>
										  <li><a href="#">Modificaciones</a></li>
										</ul>
									</li>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid" id="pcont">
						<!--
							<div class="page-head">
							<h2>hola</h2>
						</div>		
						-->
						<div class="cl-mcont">
							acá vienen las diferentes pantallas
						</div>
				</div> 
			</div>

			<script src="js/jquery.js"></script>
			<script type="text/javascript" src="js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
			<script type="text/javascript" src="js/jquery.sparkline/jquery.sparkline.min.js"></script>
			<script type="text/javascript" src="js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
			<script type="text/javascript" src="js/behaviour/general.js"></script>
			<script src="js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
			<script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
			<script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
			<script src="js/jquery.select2/select2.min.js" type="text/javascript"></script>
			<script src="js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
			<script type="text/javascript" src="js/jquery.gritter/js/jquery.gritter.js"></script>
		   
			<script type="text/javascript">
				$(document).ready(function(){
				  //initialize the javascript
				  App.init();
				});
			</script>

			<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="js/behaviour/voice-commands.js"></script>
			<script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="js/jquery.flot/jquery.flot.js"></script>
			<script type="text/javascript" src="js/jquery.flot/jquery.flot.pie.js"></script>
			<script type="text/javascript" src="js/jquery.flot/jquery.flot.resize.js"></script>
			<script type="text/javascript" src="js/jquery.flot/jquery.flot.labels.js"></script>
		</body>
</html>
