<?php
require_once(getabspath("classes/cipherer.php"));




$tdataenviomail = array();	
	$tdataenviomail[".truncateText"] = true;
	$tdataenviomail[".NumberOfChars"] = 80; 
	$tdataenviomail[".ShortName"] = "enviomail";
	$tdataenviomail[".OwnerID"] = "Usuario";
	$tdataenviomail[".OriginalTable"] = "oc_conf_notif_avanz";

//	field labels
$fieldLabelsenviomail = array();
$fieldToolTipsenviomail = array();
$pageTitlesenviomail = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsenviomail["Spanish"] = array();
	$fieldToolTipsenviomail["Spanish"] = array();
	$pageTitlesenviomail["Spanish"] = array();
	$fieldLabelsenviomail["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsenviomail["Spanish"]["Tipo"] = "";
	$fieldLabelsenviomail["Spanish"]["Hora"] = "Hora";
	$fieldToolTipsenviomail["Spanish"]["Hora"] = "";
	$fieldLabelsenviomail["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipsenviomail["Spanish"]["Usuario"] = "";
	$fieldLabelsenviomail["Spanish"]["Activa"] = "Activa";
	$fieldToolTipsenviomail["Spanish"]["Activa"] = "";
	$fieldLabelsenviomail["Spanish"]["Mensaje"] = "Mensaje";
	$fieldToolTipsenviomail["Spanish"]["Mensaje"] = "";
	$fieldLabelsenviomail["Spanish"]["Correo"] = "Correo";
	$fieldToolTipsenviomail["Spanish"]["Correo"] = "";
	$fieldLabelsenviomail["Spanish"]["Id"] = "Id";
	$fieldToolTipsenviomail["Spanish"]["Id"] = "";
	if (count($fieldToolTipsenviomail["Spanish"]))
		$tdataenviomail[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsenviomail[""] = array();
	$fieldToolTipsenviomail[""] = array();
	$pageTitlesenviomail[""] = array();
	$fieldLabelsenviomail[""]["Tipo"] = "Tipo";
	$fieldToolTipsenviomail[""]["Tipo"] = "";
	$fieldLabelsenviomail[""]["Hora"] = "Hora";
	$fieldToolTipsenviomail[""]["Hora"] = "";
	$fieldLabelsenviomail[""]["Usuario"] = "Usuario";
	$fieldToolTipsenviomail[""]["Usuario"] = "";
	$fieldLabelsenviomail[""]["Activa"] = "Activa";
	$fieldToolTipsenviomail[""]["Activa"] = "";
	$fieldLabelsenviomail[""]["Mensaje"] = "Mensaje";
	$fieldToolTipsenviomail[""]["Mensaje"] = "";
	$fieldLabelsenviomail[""]["Correo"] = "Correo";
	$fieldToolTipsenviomail[""]["Correo"] = "";
	$fieldLabelsenviomail[""]["Id"] = "Id";
	$fieldToolTipsenviomail[""]["Id"] = "";
	if (count($fieldToolTipsenviomail[""]))
		$tdataenviomail[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsenviomail["English"] = array();
	$fieldToolTipsenviomail["English"] = array();
	$pageTitlesenviomail["English"] = array();
	if (count($fieldToolTipsenviomail["English"]))
		$tdataenviomail[".isUseToolTips"] = true;
}
	
	
	$tdataenviomail[".NCSearch"] = true;



$tdataenviomail[".shortTableName"] = "enviomail";
$tdataenviomail[".nSecOptions"] = 0;
$tdataenviomail[".recsPerRowList"] = 1;
$tdataenviomail[".mainTableOwnerID"] = "Usuario";
$tdataenviomail[".moveNext"] = 0;
$tdataenviomail[".nType"] = 1;

$tdataenviomail[".strOriginalTableName"] = "oc_conf_notif_avanz";




$tdataenviomail[".showAddInPopup"] = false;

$tdataenviomail[".showEditInPopup"] = false;

$tdataenviomail[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataenviomail[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataenviomail[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataenviomail[".listAjax"] = true;
else 
	$tdataenviomail[".listAjax"] = false;

	$tdataenviomail[".audit"] = true;

	$tdataenviomail[".locking"] = false;


$tdataenviomail[".list"] = true;






$tdataenviomail[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdataenviomail[".searchSaving"] = true;
//

$tdataenviomail[".showSearchPanel"] = true;
		$tdataenviomail[".flexibleSearch"] = true;		

if (isMobile())
	$tdataenviomail[".isUseAjaxSuggest"] = false;
else 
	$tdataenviomail[".isUseAjaxSuggest"] = true;

$tdataenviomail[".rowHighlite"] = true;


			
$tdataenviomail[".isUsebuttonHandlers"] = true;

$tdataenviomail[".addPageEvents"] = true;

// use timepicker for search panel
$tdataenviomail[".isUseTimeForSearch"] = true;





$tdataenviomail[".allSearchFields"] = array();
$tdataenviomail[".filterFields"] = array();
$tdataenviomail[".requiredSearchFields"] = array();

$tdataenviomail[".allSearchFields"][] = "Usuario";
	$tdataenviomail[".allSearchFields"][] = "Tipo";
	$tdataenviomail[".allSearchFields"][] = "Hora";
	$tdataenviomail[".allSearchFields"][] = "Correo";
	$tdataenviomail[".allSearchFields"][] = "Activa";
	

$tdataenviomail[".googleLikeFields"] = array();
$tdataenviomail[".googleLikeFields"][] = "Usuario";
$tdataenviomail[".googleLikeFields"][] = "Tipo";
$tdataenviomail[".googleLikeFields"][] = "Hora";
$tdataenviomail[".googleLikeFields"][] = "Activa";
$tdataenviomail[".googleLikeFields"][] = "Correo";


$tdataenviomail[".advSearchFields"] = array();
$tdataenviomail[".advSearchFields"][] = "Usuario";
$tdataenviomail[".advSearchFields"][] = "Tipo";
$tdataenviomail[".advSearchFields"][] = "Hora";
$tdataenviomail[".advSearchFields"][] = "Correo";
$tdataenviomail[".advSearchFields"][] = "Activa";

$tdataenviomail[".tableType"] = "list";

$tdataenviomail[".printerPageOrientation"] = 0;
$tdataenviomail[".nPrinterPageScale"] = 100;

$tdataenviomail[".nPrinterSplitRecords"] = 40;

$tdataenviomail[".nPrinterPDFSplitRecords"] = 40;





	

$tdataenviomail[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataenviomail[".pageSize"] = 20;

$tdataenviomail[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataenviomail[".strOrderBy"] = $tstrOrderBy;

$tdataenviomail[".orderindexes"] = array();

$tdataenviomail[".sqlHead"] = "SELECT Id, Usuario, Tipo, Hora, Activa, P.configvalue AS Correo, '' AS Mensaje";
$tdataenviomail[".sqlFrom"] = "FROM (  	SELECT	Id, Usuario, Tipo, Hora, Activa, 'settings' AS appid, 'email' AS configkey  	FROM oc_conf_notif_avanz  ) AS NA LEFT OUTER JOIN oc_preferences AS P ON NA.Usuario = P.userid AND NA.appid = P.appid AND NA.configkey = P.configkey";
$tdataenviomail[".sqlWhereExpr"] = "";
$tdataenviomail[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataenviomail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataenviomail[".arrGroupsPerPage"] = $arrGPP;

$tdataenviomail[".highlightSearchResults"] = true;

$tableKeysenviomail = array();
$tableKeysenviomail[] = "Id";
$tdataenviomail[".Keys"] = $tableKeysenviomail;

$tdataenviomail[".listFields"] = array();
$tdataenviomail[".listFields"][] = "Usuario";
$tdataenviomail[".listFields"][] = "Tipo";
$tdataenviomail[".listFields"][] = "Hora";
$tdataenviomail[".listFields"][] = "Correo";
$tdataenviomail[".listFields"][] = "Activa";
$tdataenviomail[".listFields"][] = "Mensaje";

$tdataenviomail[".hideMobileList"] = array();


$tdataenviomail[".viewFields"] = array();

$tdataenviomail[".addFields"] = array();

$tdataenviomail[".inlineAddFields"] = array();

$tdataenviomail[".editFields"] = array();

$tdataenviomail[".inlineEditFields"] = array();

$tdataenviomail[".exportFields"] = array();

$tdataenviomail[".importFields"] = array();

$tdataenviomail[".printFields"] = array();

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("enviomail","Id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataenviomail["Id"] = $fdata;
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("enviomail","Usuario"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Usuario"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Usuario";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=64";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
	// the end of search options settings	

	

	
	$tdataenviomail["Usuario"] = $fdata;
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("enviomail","Tipo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Tipo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Todos los DÍAS a las...";
	$edata["LookupValues"][] = "Todos los LUNES a las...";
	$edata["LookupValues"][] = "Todos los MARTES a las...";
	$edata["LookupValues"][] = "Todos los MIÉRCOLES a las...";
	$edata["LookupValues"][] = "Todos los JUEVES a las...";
	$edata["LookupValues"][] = "Todos los VIERNES a las...";
	$edata["LookupValues"][] = "Todos los SÁBADOS a las...";
	$edata["LookupValues"][] = "Todos los DOMINGOS a las...";

		
		$edata["SelectSize"] = 1;
		if( isMobile() )
		$edata["SelectSize"] = 5;
	
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Starts with";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataenviomail["Tipo"] = $fdata;
//	Hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Hora";
	$fdata["GoodName"] = "Hora";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("enviomail","Hora"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Hora"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hora";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 30,
									  "showSeconds" => 0);
	
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Starts with";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataenviomail["Hora"] = $fdata;
//	Activa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Activa";
	$fdata["GoodName"] = "Activa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("enviomail","Activa"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Activa"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Activa";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
	// the end of search options settings	

	

	
	$tdataenviomail["Activa"] = $fdata;
//	Correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Correo";
	$fdata["GoodName"] = "Correo";
	$fdata["ownerTable"] = "oc_preferences";
	$fdata["Label"] = GetFieldLabel("enviomail","Correo"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "configvalue"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P.configvalue";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "NOT Equals";
// the end of search options settings	

	

	
	$tdataenviomail["Correo"] = $fdata;
//	Mensaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Mensaje";
	$fdata["GoodName"] = "Mensaje";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("enviomail","Mensaje"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "mensaje"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataenviomail["Mensaje"] = $fdata;

	
$tables_data["enviomail"]=&$tdataenviomail;
$field_labels["enviomail"] = &$fieldLabelsenviomail;
$fieldToolTips["enviomail"] = &$fieldToolTipsenviomail;
$page_titles["enviomail"] = &$pageTitlesenviomail;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["enviomail"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["enviomail"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_enviomail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id, Usuario, Tipo, Hora, Activa, P.configvalue AS Correo, '' AS Mensaje";
$proto0["m_strFrom"] = "FROM (  	SELECT	Id, Usuario, Tipo, Hora, Activa, 'settings' AS appid, 'email' AS configkey  	FROM oc_conf_notif_avanz  ) AS NA LEFT OUTER JOIN oc_preferences AS P ON NA.Usuario = P.userid AND NA.appid = P.appid AND NA.configkey = P.configkey";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "NA",
	"m_srcTableName" => "enviomail"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "enviomail";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "NA",
	"m_srcTableName" => "enviomail"
));

$proto7["m_sql"] = "Usuario";
$proto7["m_srcTableName"] = "enviomail";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "NA",
	"m_srcTableName" => "enviomail"
));

$proto9["m_sql"] = "Tipo";
$proto9["m_srcTableName"] = "enviomail";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Hora",
	"m_strTable" => "NA",
	"m_srcTableName" => "enviomail"
));

$proto11["m_sql"] = "Hora";
$proto11["m_srcTableName"] = "enviomail";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "NA",
	"m_srcTableName" => "enviomail"
));

$proto13["m_sql"] = "Activa";
$proto13["m_srcTableName"] = "enviomail";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "configvalue",
	"m_strTable" => "P",
	"m_srcTableName" => "enviomail"
));

$proto15["m_sql"] = "P.configvalue";
$proto15["m_srcTableName"] = "enviomail";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Correo";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto17["m_sql"] = "''";
$proto17["m_srcTableName"] = "enviomail";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Mensaje";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strHead"] = "  	SELECT";
$proto20["m_strFieldList"] = "Id, Usuario, Tipo, Hora, Activa, 'settings' AS appid, 'email' AS configkey";
$proto20["m_strFrom"] = "FROM oc_conf_notif_avanz";
$proto20["m_strWhere"] = "";
$proto20["m_strOrderBy"] = "";
$proto20["m_strTail"] = "";
			$proto20["cipherer"] = null;
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto20["m_where"] = $obj;
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto20["m_having"] = $obj;
$proto20["m_fieldlist"] = array();
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "oc_conf_notif_avanz",
	"m_srcTableName" => "enviomail"
));

$proto25["m_sql"] = "Id";
$proto25["m_srcTableName"] = "enviomail";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto20["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "oc_conf_notif_avanz",
	"m_srcTableName" => "enviomail"
));

$proto27["m_sql"] = "Usuario";
$proto27["m_srcTableName"] = "enviomail";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto20["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "oc_conf_notif_avanz",
	"m_srcTableName" => "enviomail"
));

$proto29["m_sql"] = "Tipo";
$proto29["m_srcTableName"] = "enviomail";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto20["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Hora",
	"m_strTable" => "oc_conf_notif_avanz",
	"m_srcTableName" => "enviomail"
));

$proto31["m_sql"] = "Hora";
$proto31["m_srcTableName"] = "enviomail";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto20["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "oc_conf_notif_avanz",
	"m_srcTableName" => "enviomail"
));

$proto33["m_sql"] = "Activa";
$proto33["m_srcTableName"] = "enviomail";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto20["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'settings'"
));

$proto35["m_sql"] = "'settings'";
$proto35["m_srcTableName"] = "enviomail";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "appid";
$obj = new SQLFieldListItem($proto35);

$proto20["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'email'"
));

$proto37["m_sql"] = "'email'";
$proto37["m_srcTableName"] = "enviomail";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "configkey";
$obj = new SQLFieldListItem($proto37);

$proto20["m_fieldlist"][]=$obj;
$proto20["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "oc_conf_notif_avanz";
$proto40["m_srcTableName"] = "enviomail";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "Id";
$proto40["m_columns"][] = "Tipo";
$proto40["m_columns"][] = "Hora";
$proto40["m_columns"][] = "Usuario";
$proto40["m_columns"][] = "Activa";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "oc_conf_notif_avanz";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "enviomail";
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto20["m_fromlist"][]=$obj;
$proto20["m_groupby"] = array();
$proto20["m_orderby"] = array();
$proto20["m_srcTableName"]="enviomail";		
$obj = new SQLQuery($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "(  	SELECT	Id, Usuario, Tipo, Hora, Activa, 'settings' AS appid, 'email' AS configkey  	FROM oc_conf_notif_avanz  ) AS NA";
$proto19["m_alias"] = "NA";
$proto19["m_srcTableName"] = "enviomail";
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_LEFTJOIN";
			$proto46=array();
$proto46["m_strName"] = "oc_preferences";
$proto46["m_srcTableName"] = "enviomail";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "userid";
$proto46["m_columns"][] = "appid";
$proto46["m_columns"][] = "configkey";
$proto46["m_columns"][] = "configvalue";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "LEFT OUTER JOIN oc_preferences AS P ON NA.Usuario = P.userid AND NA.appid = P.appid AND NA.configkey = P.configkey";
$proto45["m_alias"] = "P";
$proto45["m_srcTableName"] = "enviomail";
$proto47=array();
$proto47["m_sql"] = "NA.Usuario = P.userid AND NA.appid = P.appid AND NA.configkey = P.configkey";
$proto47["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "NA.Usuario = P.userid AND NA.appid = P.appid AND NA.configkey = P.configkey"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
						$proto49=array();
$proto49["m_sql"] = "NA.Usuario = P.userid";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "NA",
	"m_srcTableName" => "enviomail"
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "= P.userid";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

			$proto47["m_contained"][]=$obj;
						$proto51=array();
$proto51["m_sql"] = "NA.appid = P.appid";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "appid",
	"m_strTable" => "NA",
	"m_srcTableName" => "enviomail"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= P.appid";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

			$proto47["m_contained"][]=$obj;
						$proto53=array();
$proto53["m_sql"] = "NA.configkey = P.configkey";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "configkey",
	"m_strTable" => "NA",
	"m_srcTableName" => "enviomail"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "= P.configkey";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

			$proto47["m_contained"][]=$obj;
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="enviomail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_enviomail = createSqlQuery_enviomail();


	
							
	
$tdataenviomail[".sqlquery"] = $queryData_enviomail;

include_once(getabspath("include/enviomail_events.php"));
$tableEvents["enviomail"] = new eventclass_enviomail;
$tdataenviomail[".hasEvents"] = true;

?>