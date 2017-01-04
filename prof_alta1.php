<div class="container-fluid" id="">
		<div class="page-head alert alert-info">
			<h2>Profesionales - Alta</h2>
		</div>
		<div class="main-app">
					<div class="block-flat">
						<form role="form" class="form-horizontal" name="frm" method="post">
							<div class="header">
								<h3>Datos del Prestador</h3>
							</div>
							<div class="col-md-3">
								<div class="page-aside" style="border-right: 0;">
									<div class="panel-body">
										<img src="Imagenes\ejempresta.png" widht="140px" class="img-responsive img-thumbnail" height="140px">
									</div>
									<div class="col-sm-offset-1 col-sm-11">										
										<button class="btn btn-info btn-sm" type="button">
											<i class="fa fa-camera-retro"></i> 
											Tomar Foto 
										</button>
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<div class="form-group">
									<div class="col-sm-6">
										<label>N° de Legajo</label>
										<input id="legajo" name="legajo" class="form-control" placeholder="Ingrese el N° de Legajo" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<label>Apellido/s</label>
										<input id="apellido" name="apellido" placeholder="Ingrese el Apellido/s" class="form-control" type="text">
									</div>
									<div class="col-sm-6">
										<label>Nombre/s</label>
										<input id="nombre" name="nombre" placeholder="Ingrese el Nombre/s" class="form-control" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<label>Documento</label>
										<select name="tipodoc" class="form-control">
											<option>DNI</option>
											<option>CI</option>
											<option>LC</option>											
										</select>
									</div>
									<div class="col-sm-6">
										<label>N° de Documento</label>
										<input id="nrodoc" name="nrodoc" class="form-control" placeholder="N° de Documento" type="numeric">
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-sm-6">
										<label>Datos Fiscales</label>
										<select name="clavef" class="form-control">
											<option>C.U.I.L</option>
											<option>C.U.I.T</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label>N° de Clave Fiscal</label>
										<input id="fiscal" name="nrofiscal" class="form-control" placeholder="N° de Clave Fiscal" type="text">
									</div>
								</div>
							</div>
							<div class="header">
								<h3>Matr&iacute;cula</h3>
							</div>	
							<div class="form-group">
								<div class="col-sm-3">
									<label>Nacional N&deg;</label>
									<input id="matnac" name="matnac" class="form-control" placeholder="Ingrese el N° de Matr&iacute;cula Nacional" type="text">
								</div>
								<div class="col-sm-3">
									<label>Provincial N&deg;</label>
									<input id="matpro" name="matpro" class="form-control" placeholder="Ingrese el N° de Matr&iacute;cula Provincial" type="text">
								</div>
								<div class="col-sm-6">
									<label>Provincia</label>
									<select name="" class="form-control">
										<option value="none">Seleccione una Provincia</option>
										<option value="C">Ciudad Autonoma de Buenos Aires </option>
										<option value="B">Buenos Aires </option>
										<option value="K">Catamarca</option>
										<option value="H">Chaco</option>
										<option value="U">Chubut</option>
										<option value="X">Cordoba</option>
										<option value="W">Corrientes</option>
										<option value="E">Entre R&iacute;os</option>
										<option value="P">Formosa</option>
										<option value="Y">Jujuy</option>
										<option value="L">La Pampa</option>
										<option value="F">La Rioja</option>
										<option value="M">Mendoza</option>
										<option value="N">Misiones</option>
										<option value="Q">Neuquen</option>
										<option value="R">R&iacute;o Negro</option>
										<option value="A">Salta</option>
										<option value="J">San Juan</option>
										<option value="D">San Luis</option>
										<option value="Z">Santa Cruz</option>
										<option value="S">Santa F&eacute;</option>
										<option value="G">Santiago del Estero</option>
										<option value="V">Tierra del Fuego</option>
										<option value="T">Tucum&aacute;n</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-6">
									<label>Profesi&oacute;n</label>
									<input id="profesion" name="profesion" class="form-control" placeholder="Ingrese la Profesi&oacute;n" type="text">
								</div>
								<div class="col-sm-6">
									<label>Especialidad</label>
									<input id="espec" name="espec" class="form-control" placeholder="Ingrese la Especialidad" type="text">
								</div>
							</div>
							<div class="header">
								<h3>Domicilio Particular</h3>
							</div>	
							<div class="form-group">
								<div class="col-sm-6">
									<label>Calle</label>
									<input id="calle" name="calle" class="form-control" placeholder="Ingrese la Calle" type="text">
								</div>
								<div class="col-sm-2">
									<label>N&uacute;mero</label>
									<input id="domnum" name="domnum" class="form-control" placeholder="Ingrese el N&deg;" type="text">
								</div>
								<div class="col-sm-2">
									<label>Piso</label>
									<input id="dompiso" name="dompiso" class="form-control" placeholder="Ingrese el Piso" type="text">
								</div>
								<div class="col-sm-2">
									<label>Departamento</label>
									<input id="domdpto" name="domdpto" class="form-control" placeholder="Ingrese el Dpto" type="text">
								</div>								
							</div>
							<div class="form-group">
								<div class="col-sm-2">
									<label>C&oacute;digo Postal</label>
									<input id="codpos" name="codpos" class="form-control" placeholder="Ingrese el C&oacute;d. Postal" type="text">
								</div>
								<div class="col-sm-5">
									<label>Localidad</label>
									<select name="" class="form-control">
										<option>Almagro</option>
										<option>Boedo</option>
									</select>
								</div>
								<div class="col-sm-5">
									<label>Provincia</label>
									<select name="" class="form-control">
										<option>Buenos Aires</option>
										<option>Ciudad Aut&oacute;noma de Buenos Aires</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-3">
									<label>Tel&eacute;fono Particular</label>
									<input id="tel" name="tel" class="form-control" placeholder="Ingrese el Tel&eacute;fono" type="text">
								</div>
								<div class="col-sm-3">
									<label>Tel&eacute;fono Celular</label>
									<input id="telcel" name="telcel" class="form-control" placeholder="Ingrese el Tel&eacute;fono Celular" type="text">
								</div>
								<div class="col-sm-6">
									<label>Email</label>
									<input id="email" name="email" class="form-control" placeholder="Ingrese el email" type="text">
								</div>
							</div>
							<div class="form-group"><div class="col-sm-12"></div></div>
							<div class="form-group"><div class="col-sm-12"></div></div>							
							<div class="form-group">
								<div class="col-sm-offset-8 col-sm-10">
									<a href="#" class="btn btn-default"> Cancelar <span class="glyphicon glyphicon-thumbs-down"></span></a>
									<a href="#" class="btn btn-success"> Grabar   <span class="glyphicon glyphicon-thumbs-up">   </span></a>
								</div>
							</div>
						</form>
					</div>
			</div>
	</div>
</div>