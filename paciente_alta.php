<?php 
	session_start();
	
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

<div class="container-fluid" id="">
		<div class="page-head">
			<h4>Altas de Datos</h4>
		</div>
		<div class="main-app">
					<div class="block-flat">
						<form role="form" class="form-horizontal" name="frm" method="post">
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
									<label>Obra Social</label>
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
									<label>Prestadora</label>
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
									<input type="text" class="form-control" placeholder="Entre una direcci&oacute;n de mail v&aacute;lida">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<a href="ppal.php" class="btn btn-default"> Cancelar <span class="glyphicon glyphicon-thumbs-down"></span></a>
									<a href="#"           class="btn btn-success"> Grabar  <span class="glyphicon glyphicon-thumbs-up"></span></a>
							</div>
						</form>      
				</div>
			</div>
	</div>
</div>