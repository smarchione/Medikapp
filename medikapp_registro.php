<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/favicon.png">

	<title>Medikapp</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="js/bootstrap/dist/css/bootstrap_registro.css">
	<link rel="stylesheet" href="fonts/font-awesome-4/css/font-awesome.min.css">
	<link rel="stylesheet" href="login/css/style_registro.css" />	


	<script> 
		function comprobarClave(){ 
			clave1 = document.registro.clave1.value 
			clave2 = document.registro.clave2.value 

			if (clave1 == clave2) 
				$('#claveOk').modal()
			else 
				$('#claveNoOk').modal()
		} 
	</script> 

</head>

<body>

<div id="cl-wrapper" class="login-container">
	<div class="middle-login ">
		<div class="block-flat">
			<div class="header ">							
				<h3 class="text-center">
					<!-- <img class="logo-img" src="images/logo.png" alt="logo"/>-->
					Medikapp </h3>
			</div>
			<div>
				<form name="registro" style="margin-bottom: 0px !important;" class="form-horizontal" action="">
					<div class="content">
						<h4 class="title">Registraci&oacute;n de Usuarios</h4>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" placeholder="Ingrese el DNI" id="dni" class="form-control">
									</div>
								</div>
								<!-- acá ponemos el apellido de la persona -->
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" placeholder="Ingrese su Apellido" id="apellido" class="form-control">
									</div>
								</div>
								<!-- fin del apellido de la persona -->
								<!-- acá ponemos el nombre de la persona -->
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" placeholder="Ingrese su Nombre" id="nombre" class="form-control">
									</div>
								</div>
								<!-- fin del nombre de la persona -->	
								<!-- coloca la clave y reingresa -->		
								<div class="col-sm-6">
									<input type="password" name="clave1" class="form-control" required="" placeholder="Ingrese Password">
								</div>
								<div class="col-sm-6">
									<input type="password" name="clave2" class="form-control" required="" placeholder="Reingrese Password">
								</div>
								<!-- fin de la colocacion de clave -->
					</div>	
					<div class="form-group">
								<div class="col-sm-12">
									<input id="id_mail" name="mail" type="text" class="form-control" placeholder="Ingrese un Mail" 
									onKeyUp="javascript:validateMail('id_mail')" >
								</div>								
							</div>
					</div>

					<div class="foot">
						<a href="medikapp_login.php" class="btn btn-default">Cancelar <span class="glyphicon glyphicon-thumbs-down"></span></a>
						<input type="button" class="btn btn-success"  value=" Registrarse " onClick="comprobarClave()"> 
					</div>
				</form>
			</div>
		</div>
		<div class="text-center out-links"><a href="#">&copy; 2016 UCA - Proyecto Integrador I</a></div>
	</div> 
	
</div>

	<!-- modal de pwd OK -->
	<div id="claveOk" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		<div id="claveOk" class="modal-dialog modal-sm" role="document">
			<div class="content">
				<div class="alert alert-success alert-white rounded">
					<button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
					<div class="icon">
						<i class="fa fa-check"></i>
					</div>
					<strong></strong>Usted se ha registrado en forma exitosa !!!
				</div>
			</div>
		</div>
	</div>
	<!-- fin del modal OK -->
	
	<!-- comienza el modal NO OK -->
	<div id="claveNoOk" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		<div id="claveNoOk" class="modal-dialog modal-sm" role="document">
			<div class="alert alert-danger alert-white rounded">
				<button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
				<div class="icon">
					<i class="fa fa-times-circle"></i>
				</div>
				<strong>Error !!!</strong> Verifique la clave.
			</div>
		</div>
	</div>
	<!-- fin del modal NO OK -->
	
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/behaviour/general.js"></script>
	<script src="js/behaviour/voice-commands.js"></script>
	<script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.flot/jquery.flot.js"></script>
	<script type="text/javascript" src="js/jquery.flot/jquery.flot.pie.js"></script>
	<script type="text/javascript" src="js/jquery.flot/jquery.flot.resize.js"></script>
	<script type="text/javascript" src="js/jquery.flot/jquery.flot.labels.js"></script>

	<script type="text/javascript" src="js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="js/jquery.sparkline/jquery.sparkline.min.js"></script>
	<script type="text/javascript" src="js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
	
	<script type="text/javascript" src="js/jquery.nestable/jquery.nestable.js"></script>
	<script type="text/javascript" src="js/bootstrap.switch/bootstrap-switch.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/jquery.select2/select2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.slider/js/bootstrap-slider.js"></script>
	<script type="text/javascript" src="js/jquery.gritter/js/jquery.gritter.js"></script>	
	
	
	
	<!-- validación del mail -->
	<script type="text/javascript">
		function validateMail(id_mail)
			{
				object=document.getElementById(id_mail);
				valueForm=object.value;
				var patron=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
				if(valueForm.search(patron)==0)
				{
					object.style.color="#000";
					return;
				}
				object.style.color="#f00";
			}
	</script>	
	<!-- fin de la validación del mail -->


<body>
</html>
