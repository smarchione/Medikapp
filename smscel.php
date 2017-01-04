<?php

	numorigen="emprogest@hotmail.com.ar";
	nomemp="movistarg";
	numdestino="1140232451";

	$varnumorigen = $_POST['numorigen']; // e-mail del remitente tomado desdel el form.
	$varnomemp = $_POST['nomemp']; // empresa de telefonía (destino) - idem.
	$varnumdestino = $_POST['numdestino']; // numero de celular (destino) - idem.

	// procesamos el select del formulario html, con switch desde php.

	switch($varnomemp)
	{
	case "personal": // personal
	$empresa = "@personal-net.com.ar"; // "case" valor "personal" - lo asigno a $empresa.
	break;
	case "ctid": // cti digital
	$empresa = "@infotext.cti.com.ar";
	break;
	case "ctig": // cti gsm
	$empresa = "@sms.ctimovil.com.ar";
	break;
	case "movistaru": // movistar ex-unifon
	$empresa = "@e-mocion.net.ar";
	break;
	case "movistarm": // movistar ex movicom
	$empresa = "@movimensaje.com.ar";
	break;
	case "movistarg": // movistar genérico
	$empresa = "@sms.movistar.net.ar";
	break;
	case "nextel":
	$empresa = "@nextel.net.ar";
	break;
	case "skytel":
	$empresa = "@skytel.com.ar";
	break;
	case "conectel":
	$empresa = "@conectel.com.ar";
	break;
	default:
	echo "empresa incorrecta - seleccione nuevamente";
	break;
	}
	$titulo = "sms web"; // titulo que aparecerá en el sms del destinatario
	$headers = "From: " . $_POST['nombre'];
	$headers .= "<" . $varnumorigen . ">\\r\\n"; // e-mail del remitente (esto es 100% obligatorio)
	$headers .= "Reply-To: " . $varnumorigen; // esta campo no es obligatorio, pero queda bien :)
	$mensaje = $_POST['mensaje']; // esta variable contiene el mensaje que enviamos, captado desde el formulario
	$destino = $varnumdestino.$empresa; // concateno el numero de celular con la empresa

	mail($destino,$titulo,$mensaje,$headers); // enviamos el mail/sms !

	echo "sms enviado!";

?>