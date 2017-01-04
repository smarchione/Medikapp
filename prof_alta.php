<div class="container-fluid" id="">
		<div class="page-head alert alert-info">
			<h2>Profesionales - Alta</h2>
		</div>
		<div class="main-app">
					<div class="block-flat">
						<form role="form" class="form-horizontal" name="frm" method="post">

							<div class="header">
								<h4>Datos del Prestador</h4>
							</div>
							<div class="form-group">
									<label class="control-label col-xs-1">&nbsp;</label>							
									<div class="col-xs-3">
										<div class="panel panel-info">
											<div class="panel-heading">
												<h3 class="panel-title">Fotograf&iacute;a del Prestador</h3>
											</div>
											<div class="panel-body">
												<img src="Imagenes\ejempresta.png" widht="140px" height="140px" class="img-responsive img-thumbnail" />
											</div>
										</div>

									</div>
									<label class="control-label col-xs-1">
										<button class="btn btn-info btn-sm" type="button">
											<i class="fa fa-camera-retro"></i>  Tomar Foto
										</button>									
									</label>
									<label class="control-label col-xs-2">N&deg; de Legajo</label>
									<div class="col-xs-5">
										<input type="text" placeholder="Ingrese el N&deg; de Legajo" class="form-control">
									</div>							
							</div>
							<div class="form-group">
							
									<label class="control-label col-xs-1">Apellido/s</label>
									<div class="col-xs-5">
										<input type="text" placeholder="Ingrese el Apellido/s" class="form-control">
									</div>
									<label class="control-label col-xs-1">Nombre/s</label>									
									<div class="col-xs-5">
										<input type="text" placeholder="Ingrese el Nombre/s" class="form-control">
									</div>
							</div>

							 <div class="form-group">
								 <label class="control-label col-xs-1">Documento </label>
								 <div class="col-xs-3">
									<label class="radio-inline"> <input type="radio" checked="" name="documento" id="dni" class="icheck"> DNI </label>
									<label class="radio-inline"> <input type="radio" name="documento" id="ci" class="icheck"> CI </label> 
									<label class="radio-inline"> <input type="radio" name="documento" id="lc" class="icheck"> LC </label> 
								</div>
								<label class="control-label col-xs-1">N&uacute;mero</label>
								<div class="col-xs-3">
									<input type="text" placeholder="Ingrese el N&deg; de Documento" class="form-control">
								</div>										
							</div>

							<div class="form-group">
									<label class="control-label col-xs-1"></label>
									<div class="col-xs-3">
										<label class="radio-inline"> <input type="radio" checked="" name="fiscal" id="cuit" class="icheck"> CUIT </label> 
										<label class="radio-inline"> <input type="radio" name="fiscal" id="cuil" class="icheck"> CUIL </label> 
									</div>
									<label class="control-label col-xs-1">N&uacute;mero</label>									
									<div class="col-xs-3">
										<input type="text" placeholder="Ingrese el N&deg; de Documento" class="form-control">
									</div>
							</div>

							<div class="header">
								<h4>Matr&iacute;cula</h4>
							</div>
								<div class="form-group">
									<label class="col-xs-2">Nacional N&deg;</label>
									<div class="col-xs-2">
										<input type="text" placeholder="N&deg; de Matr&iacute;cula" class="form-control">
									</div>										

									<label class="col-xs-2">Provincial N&deg;</label>
									<div class="col-xs-2">
										<input type="text" placeholder="N&deg; de Matr&iacute;cula" class="form-control">
									</div>	

									<label class="col-xs-2">Provincia</label>
									<div class="col-xs-2">
										<input type="text" placeholder="Ingrese Provincia" class="form-control">
									</div>								
								</div>

							<div class="form-group">
									<label class="col-xs-2">Profesi&oacute;n</label>
									<div class="col-xs-4">
										<input type="text" placeholder="Ingrese la Profesi&oacute;n" class="form-control">
									</div>										

									<label class="col-xs-2">Especialidad</label>
									<div class="col-xs-4">
										<input type="text" placeholder="Ingrese la Especialidad" class="form-control">
									</div>	
							</div>
							<div class="header">
								<h4>Domicilio Part&iacute;cular</h4>
							</div>
							<div class="form-group">
								<div class="col-sm-6">
									<label>Calle</label>
									<input id="calle" type="text" name="calle" class="form-control" placeholder="Ingrese la Calle...">
								</div>
								<div class="col-sm-2">
									<label>N&uacute;mero</label>
									<input id="numero" type="text" name="numero" class="form-control" placeholder="Ingrese el N&uacute;mero...">
								</div>
								<div class="col-sm-2">
									<label>Piso</label>
									<input id="piso" type="text" name="piso" class="form-control" placeholder="Ingrese el Piso...">
								</div>
								<div class="col-sm-2">
									<label>Dpto</label>
									<input id="dpto" type="text" name="dpto" class="form-control" placeholder="Ingrese el Dpto...">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-2">
									<label>C&oacute;digo Postal</label>
									<input id="postal" type="text" name="postal" class="form-control" placeholder="Ingrese C&oacute;digo Postal...">
								</div>
								<div class="col-sm-5">
									<label>Localidad</label>
									<input id="localidad" type="text" name="localidad" class="form-control" placeholder="Ingrese la Localidad...">
								</div>
								<div class="col-sm-5">
									<label>Provincia</label>
									<input id="prov" type="text" name="prov" class="form-control" placeholder="Ingrese la Provincia...">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-2">
									<label>Tel&eacute;fono</label>
									<input id="tel" type="text" name="tel" class="form-control" placeholder="Ingrese el Tel&eacute;fono...">
								</div>
								<div class="col-sm-5">
									<label>FAX</label>
									<input id="fax" type="text" name="fax" class="form-control" placeholder="Ingrese el FAX...">
								</div>
								<div class="col-sm-5">
									<label>Email</label>
									<input id="email" type="text" name="email" class="form-control" placeholder="Ingrese el Email...">
								</div>							
							</div>


							<div class="form-group">&nbsp;&nbsp;</div>
							<div class="form-group">
								<div class="col-sm-3">
									<a href="ppal_admin.php" class="btn btn-default"> Cancelar <span class="glyphicon glyphicon-thumbs-down"></span></a>
								</div>
								<div class="col-sm-3">&nbsp;</div>
								<div class="col-sm-3">&nbsp;</div>
								<div class="col-sm-3">
									<a href="#" class="btn btn-success"> Grabar  <span class="glyphicon glyphicon-thumbs-up"></span></a>
								</div>
							</div>
						</form>      
					</div>
			</div>
	</div>
</div>