<?php
require_once(getabspath("classes/cipherer.php"));




$tdataobjetosdecalendario = array();	
	$tdataobjetosdecalendario[".truncateText"] = true;
	$tdataobjetosdecalendario[".NumberOfChars"] = 80; 
	$tdataobjetosdecalendario[".ShortName"] = "objetosdecalendario";
	$tdataobjetosdecalendario[".OwnerID"] = "userid";
	$tdataobjetosdecalendario[".OriginalTable"] = "oc_clndr_objects";

//	field labels
$fieldLabelsobjetosdecalendario = array();
$fieldToolTipsobjetosdecalendario = array();
$pageTitlesobjetosdecalendario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsobjetosdecalendario["Spanish"] = array();
	$fieldToolTipsobjetosdecalendario["Spanish"] = array();
	$pageTitlesobjetosdecalendario["Spanish"] = array();
	$fieldLabelsobjetosdecalendario["Spanish"]["id"] = "Id";
	$fieldToolTipsobjetosdecalendario["Spanish"]["id"] = "";
	$fieldLabelsobjetosdecalendario["Spanish"]["calendarid"] = "Calendario";
	$fieldToolTipsobjetosdecalendario["Spanish"]["calendarid"] = "";
	$fieldLabelsobjetosdecalendario["Spanish"]["objecttype"] = "Tipo";
	$fieldToolTipsobjetosdecalendario["Spanish"]["objecttype"] = "";
	$fieldLabelsobjetosdecalendario["Spanish"]["startdate"] = "Inicio";
	$fieldToolTipsobjetosdecalendario["Spanish"]["startdate"] = "";
	$fieldLabelsobjetosdecalendario["Spanish"]["enddate"] = "Fin";
	$fieldToolTipsobjetosdecalendario["Spanish"]["enddate"] = "";
	$fieldLabelsobjetosdecalendario["Spanish"]["repeating"] = "Repetición";
	$fieldToolTipsobjetosdecalendario["Spanish"]["repeating"] = "";
	$fieldLabelsobjetosdecalendario["Spanish"]["summary"] = "Resumen";
	$fieldToolTipsobjetosdecalendario["Spanish"]["summary"] = "";
	$fieldLabelsobjetosdecalendario["Spanish"]["calendardata"] = "Dato";
	$fieldToolTipsobjetosdecalendario["Spanish"]["calendardata"] = "";
	$fieldLabelsobjetosdecalendario["Spanish"]["uri"] = "Uri";
	$fieldToolTipsobjetosdecalendario["Spanish"]["uri"] = "";
	$fieldLabelsobjetosdecalendario["Spanish"]["lastmodified"] = "Última modificación";
	$fieldToolTipsobjetosdecalendario["Spanish"]["lastmodified"] = "";
	$fieldLabelsobjetosdecalendario["Spanish"]["userid"] = "Usuario";
	$fieldToolTipsobjetosdecalendario["Spanish"]["userid"] = "";
	$fieldLabelsobjetosdecalendario["Spanish"]["calendarcolor"] = "Color";
	$fieldToolTipsobjetosdecalendario["Spanish"]["calendarcolor"] = "";
	$fieldLabelsobjetosdecalendario["Spanish"]["timezone"] = "Zona horaria";
	$fieldToolTipsobjetosdecalendario["Spanish"]["timezone"] = "";
	$pageTitlesobjetosdecalendario["Spanish"]["view"] = "Objetos de Calendario, Ver registro";
	if (count($fieldToolTipsobjetosdecalendario["Spanish"]))
		$tdataobjetosdecalendario[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsobjetosdecalendario[""] = array();
	$fieldToolTipsobjetosdecalendario[""] = array();
	$pageTitlesobjetosdecalendario[""] = array();
	$fieldLabelsobjetosdecalendario[""]["id"] = "Id";
	$fieldToolTipsobjetosdecalendario[""]["id"] = "";
	$fieldLabelsobjetosdecalendario[""]["userid"] = "Userid";
	$fieldToolTipsobjetosdecalendario[""]["userid"] = "";
	$fieldLabelsobjetosdecalendario[""]["calendarcolor"] = "Calendarcolor";
	$fieldToolTipsobjetosdecalendario[""]["calendarcolor"] = "";
	$fieldLabelsobjetosdecalendario[""]["timezone"] = "Timezone";
	$fieldToolTipsobjetosdecalendario[""]["timezone"] = "";
	if (count($fieldToolTipsobjetosdecalendario[""]))
		$tdataobjetosdecalendario[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsobjetosdecalendario["English"] = array();
	$fieldToolTipsobjetosdecalendario["English"] = array();
	$pageTitlesobjetosdecalendario["English"] = array();
	if (count($fieldToolTipsobjetosdecalendario["English"]))
		$tdataobjetosdecalendario[".isUseToolTips"] = true;
}
	
	
	$tdataobjetosdecalendario[".NCSearch"] = true;



$tdataobjetosdecalendario[".shortTableName"] = "objetosdecalendario";
$tdataobjetosdecalendario[".nSecOptions"] = 1;
$tdataobjetosdecalendario[".recsPerRowList"] = 1;
$tdataobjetosdecalendario[".mainTableOwnerID"] = "userid";
$tdataobjetosdecalendario[".moveNext"] = 0;
$tdataobjetosdecalendario[".nType"] = 0;

$tdataobjetosdecalendario[".strOriginalTableName"] = "oc_clndr_objects";




$tdataobjetosdecalendario[".showAddInPopup"] = true;

$tdataobjetosdecalendario[".showEditInPopup"] = true;

$tdataobjetosdecalendario[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
					
;
$popupPagesLayoutNames["add"] = "add";
			;
$popupPagesLayoutNames["edit"] = "add";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdataobjetosdecalendario[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataobjetosdecalendario[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataobjetosdecalendario[".listAjax"] = true;
else 
	$tdataobjetosdecalendario[".listAjax"] = false;

	$tdataobjetosdecalendario[".audit"] = true;

	$tdataobjetosdecalendario[".locking"] = false;


$tdataobjetosdecalendario[".list"] = true;

$tdataobjetosdecalendario[".view"] = true;


$tdataobjetosdecalendario[".exportTo"] = true;



$tdataobjetosdecalendario[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdataobjetosdecalendario[".searchSaving"] = true;
//

$tdataobjetosdecalendario[".showSearchPanel"] = true;
		$tdataobjetosdecalendario[".flexibleSearch"] = true;		

if (isMobile())
	$tdataobjetosdecalendario[".isUseAjaxSuggest"] = false;
else 
	$tdataobjetosdecalendario[".isUseAjaxSuggest"] = true;

$tdataobjetosdecalendario[".rowHighlite"] = true;


	
$tdataobjetosdecalendario[".addPageEvents"] = true;

// use timepicker for search panel
$tdataobjetosdecalendario[".isUseTimeForSearch"] = false;





$tdataobjetosdecalendario[".allSearchFields"] = array();
$tdataobjetosdecalendario[".filterFields"] = array();
$tdataobjetosdecalendario[".requiredSearchFields"] = array();

$tdataobjetosdecalendario[".allSearchFields"][] = "calendarid";
	$tdataobjetosdecalendario[".allSearchFields"][] = "startdate";
	$tdataobjetosdecalendario[".allSearchFields"][] = "enddate";
	$tdataobjetosdecalendario[".allSearchFields"][] = "summary";
	

$tdataobjetosdecalendario[".googleLikeFields"] = array();
$tdataobjetosdecalendario[".googleLikeFields"][] = "calendarid";
$tdataobjetosdecalendario[".googleLikeFields"][] = "objecttype";
$tdataobjetosdecalendario[".googleLikeFields"][] = "startdate";
$tdataobjetosdecalendario[".googleLikeFields"][] = "enddate";
$tdataobjetosdecalendario[".googleLikeFields"][] = "repeating";
$tdataobjetosdecalendario[".googleLikeFields"][] = "summary";
$tdataobjetosdecalendario[".googleLikeFields"][] = "calendardata";
$tdataobjetosdecalendario[".googleLikeFields"][] = "uri";
$tdataobjetosdecalendario[".googleLikeFields"][] = "lastmodified";


$tdataobjetosdecalendario[".advSearchFields"] = array();
$tdataobjetosdecalendario[".advSearchFields"][] = "calendarid";
$tdataobjetosdecalendario[".advSearchFields"][] = "startdate";
$tdataobjetosdecalendario[".advSearchFields"][] = "enddate";
$tdataobjetosdecalendario[".advSearchFields"][] = "summary";

$tdataobjetosdecalendario[".tableType"] = "list";

$tdataobjetosdecalendario[".printerPageOrientation"] = 0;
$tdataobjetosdecalendario[".nPrinterPageScale"] = 100;

$tdataobjetosdecalendario[".nPrinterSplitRecords"] = 40;

$tdataobjetosdecalendario[".nPrinterPDFSplitRecords"] = 40;





	

$tdataobjetosdecalendario[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataobjetosdecalendario[".pageSize"] = 20;

$tdataobjetosdecalendario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataobjetosdecalendario[".strOrderBy"] = $tstrOrderBy;

$tdataobjetosdecalendario[".orderindexes"] = array();

$tdataobjetosdecalendario[".sqlHead"] = "SELECT oc_clndr_objects.id,  oc_clndr_objects.calendarid,  oc_clndr_objects.objecttype,  oc_clndr_objects.startdate,  oc_clndr_objects.enddate,  oc_clndr_objects.repeating,  oc_clndr_objects.summary,  oc_clndr_objects.calendardata,  oc_clndr_objects.uri,  oc_clndr_objects.lastmodified,  oc_clndr_calendars.userid,  oc_clndr_calendars.calendarcolor,  oc_clndr_calendars.timezone";
$tdataobjetosdecalendario[".sqlFrom"] = "FROM oc_clndr_objects  INNER JOIN oc_clndr_calendars ON oc_clndr_objects.calendarid = oc_clndr_calendars.id";
$tdataobjetosdecalendario[".sqlWhereExpr"] = "(oc_clndr_calendars.active = 1)";
$tdataobjetosdecalendario[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataobjetosdecalendario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataobjetosdecalendario[".arrGroupsPerPage"] = $arrGPP;

$tdataobjetosdecalendario[".highlightSearchResults"] = true;

$tableKeysobjetosdecalendario = array();
$tableKeysobjetosdecalendario[] = "id";
$tdataobjetosdecalendario[".Keys"] = $tableKeysobjetosdecalendario;

$tdataobjetosdecalendario[".listFields"] = array();
$tdataobjetosdecalendario[".listFields"][] = "calendarid";
$tdataobjetosdecalendario[".listFields"][] = "startdate";
$tdataobjetosdecalendario[".listFields"][] = "enddate";
$tdataobjetosdecalendario[".listFields"][] = "summary";

$tdataobjetosdecalendario[".hideMobileList"] = array();


$tdataobjetosdecalendario[".viewFields"] = array();
$tdataobjetosdecalendario[".viewFields"][] = "calendarid";
$tdataobjetosdecalendario[".viewFields"][] = "startdate";
$tdataobjetosdecalendario[".viewFields"][] = "enddate";
$tdataobjetosdecalendario[".viewFields"][] = "summary";

$tdataobjetosdecalendario[".addFields"] = array();

$tdataobjetosdecalendario[".inlineAddFields"] = array();

$tdataobjetosdecalendario[".editFields"] = array();

$tdataobjetosdecalendario[".inlineEditFields"] = array();

$tdataobjetosdecalendario[".exportFields"] = array();
$tdataobjetosdecalendario[".exportFields"][] = "calendarid";
$tdataobjetosdecalendario[".exportFields"][] = "startdate";
$tdataobjetosdecalendario[".exportFields"][] = "enddate";
$tdataobjetosdecalendario[".exportFields"][] = "summary";

$tdataobjetosdecalendario[".importFields"] = array();

$tdataobjetosdecalendario[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "oc_clndr_objects";
	$fdata["Label"] = GetFieldLabel("oc_clndr_objects","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oc_clndr_objects.id";
	
		
		
				
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
	
	
	
	

	

	
	$tdataobjetosdecalendario["id"] = $fdata;
//	calendarid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "calendarid";
	$fdata["GoodName"] = "calendarid";
	$fdata["ownerTable"] = "oc_clndr_objects";
	$fdata["Label"] = GetFieldLabel("oc_clndr_objects","calendarid"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "calendarid"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oc_clndr_objects.calendarid";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "oc_clndr_calendars";
	$edata["LookupConnId"] = "l8000494_neocloud_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "displayname";
	
		
	$edata["LookupOrderBy"] = "displayname";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataobjetosdecalendario["calendarid"] = $fdata;
//	objecttype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "objecttype";
	$fdata["GoodName"] = "objecttype";
	$fdata["ownerTable"] = "oc_clndr_objects";
	$fdata["Label"] = GetFieldLabel("oc_clndr_objects","objecttype"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "objecttype"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oc_clndr_objects.objecttype";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=40";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataobjetosdecalendario["objecttype"] = $fdata;
//	startdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "startdate";
	$fdata["GoodName"] = "startdate";
	$fdata["ownerTable"] = "oc_clndr_objects";
	$fdata["Label"] = GetFieldLabel("oc_clndr_objects","startdate"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "startdate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oc_clndr_objects.startdate";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 2; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataobjetosdecalendario["startdate"] = $fdata;
//	enddate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "enddate";
	$fdata["GoodName"] = "enddate";
	$fdata["ownerTable"] = "oc_clndr_objects";
	$fdata["Label"] = GetFieldLabel("oc_clndr_objects","enddate"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "enddate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oc_clndr_objects.enddate";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 2; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings	

	

	
	$tdataobjetosdecalendario["enddate"] = $fdata;
//	repeating
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "repeating";
	$fdata["GoodName"] = "repeating";
	$fdata["ownerTable"] = "oc_clndr_objects";
	$fdata["Label"] = GetFieldLabel("oc_clndr_objects","repeating"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "repeating"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oc_clndr_objects.repeating";
	
		
		
				
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataobjetosdecalendario["repeating"] = $fdata;
//	summary
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "summary";
	$fdata["GoodName"] = "summary";
	$fdata["ownerTable"] = "oc_clndr_objects";
	$fdata["Label"] = GetFieldLabel("oc_clndr_objects","summary"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "summary"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oc_clndr_objects.summary";
	
		
		
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
			$edata["EditParams"].= " maxlength=255";
	
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

	

	
	$tdataobjetosdecalendario["summary"] = $fdata;
//	calendardata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "calendardata";
	$fdata["GoodName"] = "calendardata";
	$fdata["ownerTable"] = "oc_clndr_objects";
	$fdata["Label"] = GetFieldLabel("oc_clndr_objects","calendardata"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "calendardata"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oc_clndr_objects.calendardata";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataobjetosdecalendario["calendardata"] = $fdata;
//	uri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "uri";
	$fdata["GoodName"] = "uri";
	$fdata["ownerTable"] = "oc_clndr_objects";
	$fdata["Label"] = GetFieldLabel("oc_clndr_objects","uri"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "uri"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oc_clndr_objects.uri";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataobjetosdecalendario["uri"] = $fdata;
//	lastmodified
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "lastmodified";
	$fdata["GoodName"] = "lastmodified";
	$fdata["ownerTable"] = "oc_clndr_objects";
	$fdata["Label"] = GetFieldLabel("oc_clndr_objects","lastmodified"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "lastmodified"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oc_clndr_objects.lastmodified";
	
		
		
				
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataobjetosdecalendario["lastmodified"] = $fdata;
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "oc_clndr_calendars";
	$fdata["Label"] = GetFieldLabel("oc_clndr_objects","userid"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "userid"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oc_clndr_calendars.userid";
	
		
		
				
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
	
	
	
	

	

	
	$tdataobjetosdecalendario["userid"] = $fdata;
//	calendarcolor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "calendarcolor";
	$fdata["GoodName"] = "calendarcolor";
	$fdata["ownerTable"] = "oc_clndr_calendars";
	$fdata["Label"] = GetFieldLabel("oc_clndr_objects","calendarcolor"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "calendarcolor"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oc_clndr_calendars.calendarcolor";
	
		
		
				
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
	
	
	
	

	

	
	$tdataobjetosdecalendario["calendarcolor"] = $fdata;
//	timezone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "timezone";
	$fdata["GoodName"] = "timezone";
	$fdata["ownerTable"] = "oc_clndr_calendars";
	$fdata["Label"] = GetFieldLabel("oc_clndr_objects","timezone"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "timezone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oc_clndr_calendars.timezone";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Database Image");
	
		
		
						$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Database image");
	
			
	
	


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
	
	
	
	

	

	
	$tdataobjetosdecalendario["timezone"] = $fdata;

	
$tables_data["oc_clndr_objects"]=&$tdataobjetosdecalendario;
$field_labels["oc_clndr_objects"] = &$fieldLabelsobjetosdecalendario;
$fieldToolTips["oc_clndr_objects"] = &$fieldToolTipsobjetosdecalendario;
$page_titles["oc_clndr_objects"] = &$pageTitlesobjetosdecalendario;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["oc_clndr_objects"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["oc_clndr_objects"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_objetosdecalendario()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "oc_clndr_objects.id,  oc_clndr_objects.calendarid,  oc_clndr_objects.objecttype,  oc_clndr_objects.startdate,  oc_clndr_objects.enddate,  oc_clndr_objects.repeating,  oc_clndr_objects.summary,  oc_clndr_objects.calendardata,  oc_clndr_objects.uri,  oc_clndr_objects.lastmodified,  oc_clndr_calendars.userid,  oc_clndr_calendars.calendarcolor,  oc_clndr_calendars.timezone";
$proto3["m_strFrom"] = "FROM oc_clndr_objects  INNER JOIN oc_clndr_calendars ON oc_clndr_objects.calendarid = oc_clndr_calendars.id";
$proto3["m_strWhere"] = "(oc_clndr_calendars.active = 1)";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "oc_clndr_calendars.active = 1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "oc_clndr_calendars",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto3["m_where"] = $obj;
$proto6=array();
$proto6["m_sql"] = "";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

$proto3["m_having"] = $obj;
$proto3["m_fieldlist"] = array();
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "oc_clndr_objects",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto8["m_sql"] = "oc_clndr_objects.id";
$proto8["m_srcTableName"] = "oc_clndr_objects";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "calendarid",
	"m_strTable" => "oc_clndr_objects",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto10["m_sql"] = "oc_clndr_objects.calendarid";
$proto10["m_srcTableName"] = "oc_clndr_objects";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "objecttype",
	"m_strTable" => "oc_clndr_objects",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto12["m_sql"] = "oc_clndr_objects.objecttype";
$proto12["m_srcTableName"] = "oc_clndr_objects";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "startdate",
	"m_strTable" => "oc_clndr_objects",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto14["m_sql"] = "oc_clndr_objects.startdate";
$proto14["m_srcTableName"] = "oc_clndr_objects";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "enddate",
	"m_strTable" => "oc_clndr_objects",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto16["m_sql"] = "oc_clndr_objects.enddate";
$proto16["m_srcTableName"] = "oc_clndr_objects";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "repeating",
	"m_strTable" => "oc_clndr_objects",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto18["m_sql"] = "oc_clndr_objects.repeating";
$proto18["m_srcTableName"] = "oc_clndr_objects";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "summary",
	"m_strTable" => "oc_clndr_objects",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto20["m_sql"] = "oc_clndr_objects.summary";
$proto20["m_srcTableName"] = "oc_clndr_objects";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "calendardata",
	"m_strTable" => "oc_clndr_objects",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto22["m_sql"] = "oc_clndr_objects.calendardata";
$proto22["m_srcTableName"] = "oc_clndr_objects";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "uri",
	"m_strTable" => "oc_clndr_objects",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto24["m_sql"] = "oc_clndr_objects.uri";
$proto24["m_srcTableName"] = "oc_clndr_objects";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto3["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "lastmodified",
	"m_strTable" => "oc_clndr_objects",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto26["m_sql"] = "oc_clndr_objects.lastmodified";
$proto26["m_srcTableName"] = "oc_clndr_objects";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto3["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "oc_clndr_calendars",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto28["m_sql"] = "oc_clndr_calendars.userid";
$proto28["m_srcTableName"] = "oc_clndr_objects";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto3["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "calendarcolor",
	"m_strTable" => "oc_clndr_calendars",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto30["m_sql"] = "oc_clndr_calendars.calendarcolor";
$proto30["m_srcTableName"] = "oc_clndr_objects";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto3["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "timezone",
	"m_strTable" => "oc_clndr_calendars",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto32["m_sql"] = "oc_clndr_calendars.timezone";
$proto32["m_srcTableName"] = "oc_clndr_objects";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "oc_clndr_objects";
$proto35["m_srcTableName"] = "oc_clndr_objects";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "calendarid";
$proto35["m_columns"][] = "objecttype";
$proto35["m_columns"][] = "startdate";
$proto35["m_columns"][] = "enddate";
$proto35["m_columns"][] = "repeating";
$proto35["m_columns"][] = "summary";
$proto35["m_columns"][] = "calendardata";
$proto35["m_columns"][] = "uri";
$proto35["m_columns"][] = "lastmodified";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "oc_clndr_objects";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "oc_clndr_objects";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto3["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_INNERJOIN";
			$proto39=array();
$proto39["m_strName"] = "oc_clndr_calendars";
$proto39["m_srcTableName"] = "oc_clndr_objects";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "userid";
$proto39["m_columns"][] = "displayname";
$proto39["m_columns"][] = "uri";
$proto39["m_columns"][] = "active";
$proto39["m_columns"][] = "ctag";
$proto39["m_columns"][] = "calendarorder";
$proto39["m_columns"][] = "calendarcolor";
$proto39["m_columns"][] = "timezone";
$proto39["m_columns"][] = "components";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "INNER JOIN oc_clndr_calendars ON oc_clndr_objects.calendarid = oc_clndr_calendars.id";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "oc_clndr_objects";
$proto40=array();
$proto40["m_sql"] = "oc_clndr_objects.calendarid = oc_clndr_calendars.id";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "calendarid",
	"m_strTable" => "oc_clndr_objects",
	"m_srcTableName" => "oc_clndr_objects"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= oc_clndr_calendars.id";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="oc_clndr_objects";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_objetosdecalendario = createSqlQuery_objetosdecalendario();


	
													
	
$tdataobjetosdecalendario[".sqlquery"] = $queryData_objetosdecalendario;

include_once(getabspath("include/objetosdecalendario_events.php"));
$tableEvents["oc_clndr_objects"] = new eventclass_objetosdecalendario;
$tdataobjetosdecalendario[".hasEvents"] = true;

?>