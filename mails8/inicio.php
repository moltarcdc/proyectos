<?php

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once('include/xtempl.php');
require_once('classes/loginpage.php');
add_nocache_headers();

function desencriptar($cadena, $clave) {
   $resultado = '';
   $cadena = base64_decode($cadena);
   for($i=0; $i < strlen($cadena); $i++) {
      $caracter = substr($cadena, $i, 1);
      $clavecaracter = substr($clave, ($i % strlen($clave))-1, 1);
      $caracter = chr(ord($caracter)-ord($clavecaracter));
      $resultado .= $caracter;
   }
   return $resultado;
}

$usuario = desencriptar($_REQUEST['token'], ',0ui$76tg+fS-S34');

$xt = new Xtempl();
$params = array();
$params["id"] = 1;
$params["xt"] = &$xt;
$params["pageType"] = PAGE_LOGIN;
$params["tName"]= NOT_TABLE_BASED_TNAME;
$params["templatefile"] = "login.htm";
$params["needSearchClauseObj"] = false;
$pageObject = new LoginPage($params); 
$pageObject->init();

global $conn;
$SQL = "SELECT password FROM oc_users WHERE uid = '" . $usuario . "'";
$rs = db_query($SQL, $conn);
$dato = db_fetch_array($rs);
if($dato) $clave = $dato['password'];
else $clave = $usuario;

$logueo = $pageObject->LogIn($usuario, $clave);

if( $logueo == 1 ) {
	header('location: confnotifavanzadas_list.php');
	exit(); }
else echo('ACCESO INCORRECTO');

?>