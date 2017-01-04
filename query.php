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