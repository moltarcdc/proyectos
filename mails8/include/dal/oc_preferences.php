<?php
$dalTableoc_preferences = array();
$dalTableoc_preferences["userid"] = array("type"=>200,"varname"=>"userid");
$dalTableoc_preferences["appid"] = array("type"=>200,"varname"=>"appid");
$dalTableoc_preferences["configkey"] = array("type"=>200,"varname"=>"configkey");
$dalTableoc_preferences["configvalue"] = array("type"=>201,"varname"=>"configvalue");
	$dalTableoc_preferences["userid"]["key"]=true;
	$dalTableoc_preferences["appid"]["key"]=true;
	$dalTableoc_preferences["configkey"]["key"]=true;
$dal_info["oc_preferences"]=&$dalTableoc_preferences;

?>