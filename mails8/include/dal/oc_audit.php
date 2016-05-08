<?php
$dalTableoc_audit = array();
$dalTableoc_audit["id"] = array("type"=>3,"varname"=>"id");
$dalTableoc_audit["datetime"] = array("type"=>135,"varname"=>"datetime");
$dalTableoc_audit["ip"] = array("type"=>200,"varname"=>"ip");
$dalTableoc_audit["user"] = array("type"=>200,"varname"=>"user");
$dalTableoc_audit["table"] = array("type"=>200,"varname"=>"table");
$dalTableoc_audit["action"] = array("type"=>200,"varname"=>"action");
$dalTableoc_audit["description"] = array("type"=>201,"varname"=>"description");
	$dalTableoc_audit["id"]["key"]=true;
$dal_info["oc_audit"]=&$dalTableoc_audit;

?>