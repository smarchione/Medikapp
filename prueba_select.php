<?php
	include_once('conexion_medica.php');

	$consulta="SELECT idpais, nombrepais FROM paises ORDER BY nombrepais asc";
	$result=mysql_query($consulta);
?>
<HTML>
	<body>
		<label>Nacido/a en</label>
		<select name="pais" class="form-control" >
				<option value=""></option>
				<?php
					while($fila=mysql_fetch_array($result))
						{
				?>
				<option value="<?php echo $fila['idpais']?>"><?php echo $fila['nombrepais']?></option>
				<?php
						}
				?>
		</select>
	</body>
</html>