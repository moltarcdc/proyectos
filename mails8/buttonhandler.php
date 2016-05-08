<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");
	
$params = (array)my_json_decode(postvalue('params'));
$buttId = $params['buttId'];

// proccess table events
if($buttId=='Rehacer')
{
	require_once("include/enviomail_variables.php");
	$cipherer = new RunnerCipherer("enviomail");
	buttonHandler_Rehacer($params);
}

// proccess non table events


// create table and non table handlers
function buttonHandler_Rehacer($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
?>
