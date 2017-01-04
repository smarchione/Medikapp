<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="images/favicon.png">
		<title>.:: MEDIKAPP ::. Sistema Para Médicos y Pacientes</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>
		<link href="js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="fonts/font-awesome-4/css/font-awesome.min.css">
		<link href="css/style.css" rel="stylesheet" />		

		<script type="text/javascript" src="js/jquery.js"></script>
		<!--
		<script type="text/javascript">

			$(document).ready(function() {
				setTimeout(function() {
					$(".contenido").fadeOut(1500);
				},3000);
			});	
				
				
		</script>
		-->
		
	</head>

	<body class="texture">
		<div id="cl-wrapper" class="login-container">
			<div class="middle-login">
				<div class="block-flat">
					<div class="header">							
						<h3 class="text-center">
							<img class="logo-img" src="images/emprogest.png" style="width:200px" alt="logo"/>
						</h3>
					</div>
					<div>
						<form action="" method="post" class="form-horizontal" style="margin-bottom: 0px !important;" > 
							<div class="content">
								<h4 class="title">Acceso al Sistema</h4>
									<div class="form-group">
										<div class="col-sm-12">
											<select name="tipo_login" id="tipo_login" class="form-control">
												<option value="1">Soy M&eacute;dico</option>
												<option value="2">Soy Paciente</option>
											</select>
										</div>
									</div>	
									
									<div class="form-group">
										<div class="col-sm-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input  name="legajo" type="text" id="legajo" placeholder="Número de legajo" class="form-control">
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-key"></i></span>
												<input name="password" type="password" placeholder="Ingrese su Clave de acceso" class="form-control">
											</div>
										</div>
									</div>
									<?php
										if($login_f=="SI")
										{
									?>	

											<div class="alert alert-danger alert-white rounded">
													<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
													<div class="icon">
														<i class="fa fa-times-circle"></i>
													</div>
													<strong>Error!</strong>
															<?php
																echo 'Su usuario &oacute; contrase&ntilde;a es incorrecto.'; 
															?>
											</div>

									<?php
										}
									?>												
							</div>
							<div class="spacer spacer-bottom text-center">
								<button class="btn btn-success" type="submit" name="login" value="login">Ingresar al Sistema	</button>
								<a href="regclte.php"><button class="btn btn-danger"  type="button">		 Registrarse 				</button></a>
							</div>
						</form>
						<?
							} 
						else 
							{
						?>		
								<div class="alert alert-success alert-white rounded">
									<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
									<div class="icon">
										<i class="fa fa-check"></i>
									</div>
									<strong>Success!</strong>
									Usuario y Contrase&ntilde;a Correctos.
									<a href="logout.php"><button class="btn btn-danger btn-rad" type="button">Desconectarse</button></a>		
								</div>
						<?
							}
						?>						
					</div>
				</div>
			</div> 		
		</div>
		<script src="js/jquery.js"></script>
		<script type="text/javascript" src="js/behaviour/general.js"></script>
		<script src="js/behaviour/voice-commands.js"></script>
		<script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.flot/jquery.flot.js"></script>
		<script type="text/javascript" src="js/jquery.flot/jquery.flot.pie.js"></script>
		<script type="text/javascript" src="js/jquery.flot/jquery.flot.resize.js"></script>
		<script type="text/javascript" src="js/jquery.flot/jquery.flot.labels.js"></script>
		
		<script type="text/javascript">
			jQuery(function($) {
				function checkSelect() {
					var selected = $('#tipo_login option:selected').val();
					if (selected == 1) {
						$('#legajo').attr('placeholder', 'Número de cliente');
						$('#btnRegistro').attr('href', 'regclte.php?id=1');
					} else {
						$('#legajo').attr('placeholder', 'Número de legajo');
						$('#btnRegistro').attr('href', 'regclte.php?id=2');
					}
				}
				
				$('#tipo_login').change(function() {
					checkSelect();
				});
				
				checkSelect();	
			});
		</script>

	</body>
</html>