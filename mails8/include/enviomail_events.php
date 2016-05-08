<?php 
class eventclass_enviomail  extends eventsBase
{ 
	function eventclass_enviomail()
	{
	// fill list of events
		$this->events["BeforeShowList"]=true;




		$this->events["BeforeMoveNextList"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		
$_SESSION['enviar'] = 'noenviar';

if($_REQUEST['token']=='enviar') $_SESSION['enviar'] = 'enviar'; 

if($_SESSION['enviar']!='enviar') {
	header('location: http://www.neoempresa.com');
	exit();
}

$xt->assign('guestloginbutton', false);

;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		
// MOMENTO ACTUAL ----------------------------------------------
$ahora = strtotime(now());
$horas = date('G', $ahora);
$minutos = date('i', $ahora);
$dia = date('W', $ahora);
if($minutos>=0 && $minutos<=15) $minutos = '00';
if($minutos>15 && $minutos<=45) $minutos = '30';
if($minutos>45 && $minutos<=59) { 
	$minutos = '00';
	$horas = ($horas==23 ? '00' : $horas + 1);
	$dia = ($dia==6 ? '0' : $dia + 1);
};
$horaactual = $horas . ':' . $minutos;
// -------------------------------------------------------------------------

// HORA CONFIGURADA -------------------------------------------
$horaconf = strtotime($data['Hora']);
$horaconf = date('H:i', $horaconf);
// -------------------------------------------------------------------------

// DÍA CONFIGURADO --------------------------------------------
switch($data['Tipo']) {
	case 'Todos los DÍAS a las...' : $diaconf = '-1'; break;
	case 'Todos los DOMINGOS a las...' : $diaconf = '00'; break;
	case 'Todos los LUNES a las...' : $diaconf = '01'; break;
	case 'Todos los MARTES a las...' : $diaconf = '02'; break;
	case 'Todos los MIÉRCOLES a las...' : $diaconf = '03'; break;
	case 'Todos los JUEVES a las...' : $diaconf = '04'; break;
	case 'Todos los VIERNES a las...' : $diaconf = '05'; break;
	case 'Todos los SÁBADOS a las...' : $diaconf = '06'; break;
}
// -------------------------------------------------------------------------

if($horaactual == $horaconf && ($diaconf == '-1' || $dia == $diaconf)) { // Verifico si corresponde enviar mail en base al día y la hora
	if($data['Activa']==1) { // Verifico si corresponde enviar mail en base a si la configuración está activa
			if($data['Correo']!='') { // Verifico si corresponde enviar mail en base a si tiene configurado el correo
				$record['Mensaje_value'] = enviarcorreo($diaconf); }
			else $record['Mensaje_value'] = '<span style="color:red;">Correo no configurado</span>'; }
	else $record['Mensaje_value'] = '<span style="color:yellow;">Configuración desactivada</span>'; }
else $record['Mensaje_value'] = '<span style="color:red;">Momento no coincidente</span>';

function enviarcorreo($diaconf) {
	global $conn;
	$SQL = "SELECT O.summary, O.startdate, O.enddate FROM oc_clndr_objects O, oc_clndr_calendars C WHERE O.calendarid = C.id AND C.userid = '" . $data['Usuario'] . "' "; // Para todos los objetos de calendario del Usuario...
	if($diaconf == '-1') $SQL .= 'AND ( DATE(O.startdate) = CURDATE() OR DATE(O.enddate) = CURDATE() OR (O.startdate IS NULL AND O.enddate IS NULL) )';  // Si la Configuración es para TODOS LOS DÍAS, verifico si hay algo para enviar en el día 
	else $SQL .= 'AND ( DATE(O.startdate) BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 6 DAY) OR DATE(O.enddate) BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 6 DAY) OR (O.startdate IS NULL AND O.enddate IS NULL) )'; // Si la Configuración es para UN DÍA A LA SEMANA, verifico si hay algo para enviar en la semana
	$rs = db_query($SQL, $conn);
	$contenidocorreo = '';
	while($dato = db_fetch_array($rs)) { // Si hay eventos a informar, armo correo y envío
		$contenidocorreo .= 'Evento: ' . $dato['summary'] . '. Inicio: ' . $dato['startdate'] . '. Fin: ' . $dato['enddate'] . '.<BR><BR>';
	}
	if($contenidocorreo == '') $retorno = '<span style="color:blue;">Sin eventos a informar</span>'; // No hay eventos a informar
	else { // Hay eventos, envío correo
		$a = $data['Correo'];
		$de = "alertas@neoempresa.com";
		$asunto = "Recordatorio de NEOCLOUD";
		$adjuntos = array();
		$contenidocorreo = 'ÉSTE ES UN CORREO AUTOMÁTICO DE NEOCLOUD<BR><BR><B><U>LISTADO DE EVENTOS<U>:<B><BR><BR>' . $contenidocorreo . '<BR><BR>NEOCLOUD, un producto de NEOEMPRESA.';
		$respuesta = runner_mail(array('to' => $a, 'subject' => $asunto, 'body' => $contenidocorreo, 'from' => $de, 'attachments' => $adjuntos, 'host' => 'mail.neoempresa.com', 'port' => 25, 'username' => 'alertas', 'password' => 'Alertas1'));
		if(!$respuesta["mailed"]) $retorno = '<span style="color:red;">Error enviando correo: ' . $respuesta["message"] . '</span>';
		else $retorno = '<span style="color:green;">Correo enviado</span>';
	}
	return $retorno;
	unset($SQL, $rs, $dato, $contenidocorreo);
}

unset($ahora, $horas, $minutos, $dia, $diaconf, $horaactual, $horaconf, $retorno);

;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
