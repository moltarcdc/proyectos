<?php
$strTableName="oc_conf_notif_avanz";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="oc_conf_notif_avanz";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("oc_conf_notif_avanz");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["oc_conf_notif_avanz"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>