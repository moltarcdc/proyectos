<?php
require_once(getabspath("classes/cipherer.php"));




$tdataconfnotifavanzadas = array();	
	$tdataconfnotifavanzadas[".truncateText"] = true;
	$tdataconfnotifavanzadas[".NumberOfChars"] = 80; 
	$tdataconfnotifavanzadas[".ShortName"] = "confnotifavanzadas";
	$tdataconfnotifavanzadas[".OwnerID"] = "Usuario";
	$tdataconfnotifavanzadas[".OriginalTable"] = "oc_conf_notif_avanz";

//	field labels
$fieldLabelsconfnotifavanzadas = array();
$fieldToolTipsconfnotifavanzadas = array();
$pageTitlesconfnotifavanzadas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconfnotifavanzadas["Spanish"] = array();
	$fieldToolTipsconfnotifavanzadas["Spanish"] = array();
	$pageTitlesconfnotifavanzadas["Spanish"] = array();
	$fieldLabelsconfnotifavanzadas["Spanish"]["Id"] = "Id";
	$fieldToolTipsconfnotifavanzadas["Spanish"]["Id"] = "";
	$fieldLabelsconfnotifavanzadas["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipsconfnotifavanzadas["Spanish"]["Tipo"] = "";
	$fieldLabelsconfnotifavanzadas["Spanish"]["Hora"] = "Hora";
	$fieldToolTipsconfnotifavanzadas["Spanish"]["Hora"] = "";
	$fieldLabelsconfnotifavanzadas["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipsconfnotifavanzadas["Spanish"]["Usuario"] = "";
	$fieldLabelsconfnotifavanzadas["Spanish"]["Activa"] = "Activa";
	$fieldToolTipsconfnotifavanzadas["Spanish"]["Activa"] = "";
	$pageTitlesconfnotifavanzadas["Spanish"]["edit"] = "Configuración de Notificaciones Avanzadas, Editar registro";
	$pageTitlesconfnotifavanzadas["Spanish"]["view"] = "Configuración de Notificaciones Avanzadas, Ver registro";
	if (count($fieldToolTipsconfnotifavanzadas["Spanish"]))
		$tdataconfnotifavanzadas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsconfnotifavanzadas[""] = array();
	$fieldToolTipsconfnotifavanzadas[""] = array();
	$pageTitlesconfnotifavanzadas[""] = array();
	$fieldLabelsconfnotifavanzadas[""]["Id"] = "Id";
	$fieldToolTipsconfnotifavanzadas[""]["Id"] = "";
	$fieldLabelsconfnotifavanzadas[""]["Tipo"] = "Tipo";
	$fieldToolTipsconfnotifavanzadas[""]["Tipo"] = "";
	$fieldLabelsconfnotifavanzadas[""]["Hora"] = "Hora";
	$fieldToolTipsconfnotifavanzadas[""]["Hora"] = "";
	$fieldLabelsconfnotifavanzadas[""]["Usuario"] = "Usuario";
	$fieldToolTipsconfnotifavanzadas[""]["Usuario"] = "";
	$fieldLabelsconfnotifavanzadas[""]["Activa"] = "Activa";
	$fieldToolTipsconfnotifavanzadas[""]["Activa"] = "";
	if (count($fieldToolTipsconfnotifavanzadas[""]))
		$tdataconfnotifavanzadas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconfnotifavanzadas["English"] = array();
	$fieldToolTipsconfnotifavanzadas["English"] = array();
	$pageTitlesconfnotifavanzadas["English"] = array();
	if (count($fieldToolTipsconfnotifavanzadas["English"]))
		$tdataconfnotifavanzadas[".isUseToolTips"] = true;
}
	
	
	$tdataconfnotifavanzadas[".NCSearch"] = true;



$tdataconfnotifavanzadas[".shortTableName"] = "confnotifavanzadas";
$tdataconfnotifavanzadas[".nSecOptions"] = 1;
$tdataconfnotifavanzadas[".recsPerRowList"] = 1;
$tdataconfnotifavanzadas[".mainTableOwnerID"] = "Usuario";
$tdataconfnotifavanzadas[".moveNext"] = 0;
$tdataconfnotifavanzadas[".nType"] = 0;

$tdataconfnotifavanzadas[".strOriginalTableName"] = "oc_conf_notif_avanz";




$tdataconfnotifavanzadas[".showAddInPopup"] = true;

$tdataconfnotifavanzadas[".showEditInPopup"] = true;

$tdataconfnotifavanzadas[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdataconfnotifavanzadas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataconfnotifavanzadas[".fieldsForRegister"] = array();

$tdataconfnotifavanzadas[".listAjax"] = false;

	$tdataconfnotifavanzadas[".audit"] = true;

	$tdataconfnotifavanzadas[".locking"] = false;

$tdataconfnotifavanzadas[".edit"] = true;

$tdataconfnotifavanzadas[".list"] = true;

$tdataconfnotifavanzadas[".view"] = true;





$tdataconfnotifavanzadas[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataconfnotifavanzadas[".searchSaving"] = false;
//

if (isMobile()){
}
else 
	$tdataconfnotifavanzadas[".showSearchPanel"] = false;

if (isMobile())
	$tdataconfnotifavanzadas[".isUseAjaxSuggest"] = false;
else 
	$tdataconfnotifavanzadas[".isUseAjaxSuggest"] = true;

$tdataconfnotifavanzadas[".rowHighlite"] = true;


	
$tdataconfnotifavanzadas[".addPageEvents"] = true;

// use timepicker for search panel
$tdataconfnotifavanzadas[".isUseTimeForSearch"] = true;





$tdataconfnotifavanzadas[".allSearchFields"] = array();
$tdataconfnotifavanzadas[".filterFields"] = array();
$tdataconfnotifavanzadas[".requiredSearchFields"] = array();



$tdataconfnotifavanzadas[".googleLikeFields"] = array();
$tdataconfnotifavanzadas[".googleLikeFields"][] = "Activa";



$tdataconfnotifavanzadas[".tableType"] = "list";

$tdataconfnotifavanzadas[".printerPageOrientation"] = 0;
$tdataconfnotifavanzadas[".nPrinterPageScale"] = 100;

$tdataconfnotifavanzadas[".nPrinterSplitRecords"] = 40;

$tdataconfnotifavanzadas[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataconfnotifavanzadas[".pageSize"] = 20;

$tdataconfnotifavanzadas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataconfnotifavanzadas[".strOrderBy"] = $tstrOrderBy;

$tdataconfnotifavanzadas[".orderindexes"] = array();

$tdataconfnotifavanzadas[".sqlHead"] = "SELECT Id,   Tipo,   Hora,   Usuario,   Activa";
$tdataconfnotifavanzadas[".sqlFrom"] = "FROM oc_conf_notif_avanz";
$tdataconfnotifavanzadas[".sqlWhereExpr"] = "";
$tdataconfnotifavanzadas[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconfnotifavanzadas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconfnotifavanzadas[".arrGroupsPerPage"] = $arrGPP;

$tdataconfnotifavanzadas[".highlightSearchResults"] = true;

$tableKeysconfnotifavanzadas = array();
$tableKeysconfnotifavanzadas[] = "Id";
$tdataconfnotifavanzadas[".Keys"] = $tableKeysconfnotifavanzadas;

$tdataconfnotifavanzadas[".listFields"] = array();
$tdataconfnotifavanzadas[".listFields"][] = "Tipo";
$tdataconfnotifavanzadas[".listFields"][] = "Hora";
$tdataconfnotifavanzadas[".listFields"][] = "Activa";

$tdataconfnotifavanzadas[".hideMobileList"] = array();


$tdataconfnotifavanzadas[".viewFields"] = array();
$tdataconfnotifavanzadas[".viewFields"][] = "Tipo";
$tdataconfnotifavanzadas[".viewFields"][] = "Hora";
$tdataconfnotifavanzadas[".viewFields"][] = "Activa";

$tdataconfnotifavanzadas[".addFields"] = array();
$tdataconfnotifavanzadas[".addFields"][] = "Tipo";
$tdataconfnotifavanzadas[".addFields"][] = "Hora";
$tdataconfnotifavanzadas[".addFields"][] = "Activa";

$tdataconfnotifavanzadas[".inlineAddFields"] = array();

$tdataconfnotifavanzadas[".editFields"] = array();
$tdataconfnotifavanzadas[".editFields"][] = "Tipo";
$tdataconfnotifavanzadas[".editFields"][] = "Hora";
$tdataconfnotifavanzadas[".editFields"][] = "Activa";

$tdataconfnotifavanzadas[".inlineEditFields"] = array();

$tdataconfnotifavanzadas[".exportFields"] = array();

$tdataconfnotifavanzadas[".importFields"] = array();

$tdataconfnotifavanzadas[".printFields"] = array();

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "oc_conf_notif_avanz";
	$fdata["Label"] = GetFieldLabel("oc_conf_notif_avanz","Id"); 
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
	
	
	
	

	

	
	$tdataconfnotifavanzadas["Id"] = $fdata;
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "oc_conf_notif_avanz";
	$fdata["Label"] = GetFieldLabel("oc_conf_notif_avanz","Tipo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
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
	
	
	
	

	

	
	$tdataconfnotifavanzadas["Tipo"] = $fdata;
//	Hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Hora";
	$fdata["GoodName"] = "Hora";
	$fdata["ownerTable"] = "oc_conf_notif_avanz";
	$fdata["Label"] = GetFieldLabel("oc_conf_notif_avanz","Hora"); 
	$fdata["FieldType"] = 134;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
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
	
	
	
	

	

	
	$tdataconfnotifavanzadas["Hora"] = $fdata;
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "oc_conf_notif_avanz";
	$fdata["Label"] = GetFieldLabel("oc_conf_notif_avanz","Usuario"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Usuario"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Usuario";
	
		
		
				
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
	
	
	
	

	

	
	$tdataconfnotifavanzadas["Usuario"] = $fdata;
//	Activa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Activa";
	$fdata["GoodName"] = "Activa";
	$fdata["ownerTable"] = "oc_conf_notif_avanz";
	$fdata["Label"] = GetFieldLabel("oc_conf_notif_avanz","Activa"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
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
	
	
	
	

	

	
	$tdataconfnotifavanzadas["Activa"] = $fdata;

	
$tables_data["oc_conf_notif_avanz"]=&$tdataconfnotifavanzadas;
$field_labels["oc_conf_notif_avanz"] = &$fieldLabelsconfnotifavanzadas;
$fieldToolTips["oc_conf_notif_avanz"] = &$fieldToolTipsconfnotifavanzadas;
$page_titles["oc_conf_notif_avanz"] = &$pageTitlesconfnotifavanzadas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["oc_conf_notif_avanz"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["oc_conf_notif_avanz"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_confnotifavanzadas()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "Id,   Tipo,   Hora,   Usuario,   Activa";
$proto3["m_strFrom"] = "FROM oc_conf_notif_avanz";
$proto3["m_strWhere"] = "";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
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
	"m_strName" => "Id",
	"m_strTable" => "oc_conf_notif_avanz",
	"m_srcTableName" => "oc_conf_notif_avanz"
));

$proto8["m_sql"] = "Id";
$proto8["m_srcTableName"] = "oc_conf_notif_avanz";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "oc_conf_notif_avanz",
	"m_srcTableName" => "oc_conf_notif_avanz"
));

$proto10["m_sql"] = "Tipo";
$proto10["m_srcTableName"] = "oc_conf_notif_avanz";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Hora",
	"m_strTable" => "oc_conf_notif_avanz",
	"m_srcTableName" => "oc_conf_notif_avanz"
));

$proto12["m_sql"] = "Hora";
$proto12["m_srcTableName"] = "oc_conf_notif_avanz";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "oc_conf_notif_avanz",
	"m_srcTableName" => "oc_conf_notif_avanz"
));

$proto14["m_sql"] = "Usuario";
$proto14["m_srcTableName"] = "oc_conf_notif_avanz";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Activa",
	"m_strTable" => "oc_conf_notif_avanz",
	"m_srcTableName" => "oc_conf_notif_avanz"
));

$proto16["m_sql"] = "Activa";
$proto16["m_srcTableName"] = "oc_conf_notif_avanz";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "oc_conf_notif_avanz";
$proto19["m_srcTableName"] = "oc_conf_notif_avanz";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Id";
$proto19["m_columns"][] = "Tipo";
$proto19["m_columns"][] = "Hora";
$proto19["m_columns"][] = "Usuario";
$proto19["m_columns"][] = "Activa";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "oc_conf_notif_avanz";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "oc_conf_notif_avanz";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="oc_conf_notif_avanz";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_confnotifavanzadas = createSqlQuery_confnotifavanzadas();


	
					
	
$tdataconfnotifavanzadas[".sqlquery"] = $queryData_confnotifavanzadas;

include_once(getabspath("include/confnotifavanzadas_events.php"));
$tableEvents["oc_conf_notif_avanz"] = new eventclass_confnotifavanzadas;
$tdataconfnotifavanzadas[".hasEvents"] = true;

?>