<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_rights = array();	
	$tdataadmin_rights[".truncateText"] = true;
	$tdataadmin_rights[".NumberOfChars"] = 80; 
	$tdataadmin_rights[".ShortName"] = "admin_rights";
	$tdataadmin_rights[".OwnerID"] = "";
	$tdataadmin_rights[".OriginalTable"] = "oc_ugrights";

//	field labels
$fieldLabelsadmin_rights = array();
$fieldToolTipsadmin_rights = array();
$pageTitlesadmin_rights = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadmin_rights["Spanish"] = array();
	$fieldToolTipsadmin_rights["Spanish"] = array();
	$pageTitlesadmin_rights["Spanish"] = array();
	$fieldLabelsadmin_rights["Spanish"]["TableName"] = "Tabla";
	$fieldToolTipsadmin_rights["Spanish"]["TableName"] = "";
	$fieldLabelsadmin_rights["Spanish"]["GroupID"] = "Grupo";
	$fieldToolTipsadmin_rights["Spanish"]["GroupID"] = "";
	$fieldLabelsadmin_rights["Spanish"]["AccessMask"] = "Máscara";
	$fieldToolTipsadmin_rights["Spanish"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["Spanish"]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_rights[""] = array();
	$fieldToolTipsadmin_rights[""] = array();
	$pageTitlesadmin_rights[""] = array();
	if (count($fieldToolTipsadmin_rights[""]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_rights["English"] = array();
	$fieldToolTipsadmin_rights["English"] = array();
	$pageTitlesadmin_rights["English"] = array();
	if (count($fieldToolTipsadmin_rights["English"]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}
	
	
	$tdataadmin_rights[".NCSearch"] = true;



$tdataadmin_rights[".shortTableName"] = "admin_rights";
$tdataadmin_rights[".nSecOptions"] = 0;
$tdataadmin_rights[".recsPerRowList"] = 1;
$tdataadmin_rights[".mainTableOwnerID"] = "";
$tdataadmin_rights[".moveNext"] = 1;
$tdataadmin_rights[".nType"] = 1;

$tdataadmin_rights[".strOriginalTableName"] = "oc_ugrights";




$tdataadmin_rights[".showAddInPopup"] = false;

$tdataadmin_rights[".showEditInPopup"] = false;

$tdataadmin_rights[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_rights[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_rights[".fieldsForRegister"] = array();

$tdataadmin_rights[".listAjax"] = false;

	$tdataadmin_rights[".audit"] = true;

	$tdataadmin_rights[".locking"] = false;








$tdataadmin_rights[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataadmin_rights[".searchSaving"] = false;
//

$tdataadmin_rights[".showSearchPanel"] = true;
		$tdataadmin_rights[".flexibleSearch"] = true;		

if (isMobile())
	$tdataadmin_rights[".isUseAjaxSuggest"] = false;
else 
	$tdataadmin_rights[".isUseAjaxSuggest"] = true;

$tdataadmin_rights[".rowHighlite"] = true;


	
$tdataadmin_rights[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_rights[".isUseTimeForSearch"] = false;





$tdataadmin_rights[".allSearchFields"] = array();
$tdataadmin_rights[".filterFields"] = array();
$tdataadmin_rights[".requiredSearchFields"] = array();



$tdataadmin_rights[".googleLikeFields"] = array();
$tdataadmin_rights[".googleLikeFields"][] = "TableName";
$tdataadmin_rights[".googleLikeFields"][] = "GroupID";
$tdataadmin_rights[".googleLikeFields"][] = "AccessMask";


$tdataadmin_rights[".advSearchFields"] = array();
$tdataadmin_rights[".advSearchFields"][] = "TableName";
$tdataadmin_rights[".advSearchFields"][] = "GroupID";
$tdataadmin_rights[".advSearchFields"][] = "AccessMask";

$tdataadmin_rights[".tableType"] = "list";

$tdataadmin_rights[".printerPageOrientation"] = 0;
$tdataadmin_rights[".nPrinterPageScale"] = 100;

$tdataadmin_rights[".nPrinterSplitRecords"] = 40;

$tdataadmin_rights[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataadmin_rights[".pageSize"] = 20;

$tdataadmin_rights[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_rights[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_rights[".orderindexes"] = array();

$tdataadmin_rights[".sqlHead"] = "SELECT TableName,   GroupID,   AccessMask";
$tdataadmin_rights[".sqlFrom"] = "FROM oc_ugrights";
$tdataadmin_rights[".sqlWhereExpr"] = "";
$tdataadmin_rights[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_rights[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_rights[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_rights[".highlightSearchResults"] = true;

$tableKeysadmin_rights = array();
$tableKeysadmin_rights[] = "TableName";
$tableKeysadmin_rights[] = "GroupID";
$tdataadmin_rights[".Keys"] = $tableKeysadmin_rights;

$tdataadmin_rights[".listFields"] = array();
$tdataadmin_rights[".listFields"][] = "TableName";
$tdataadmin_rights[".listFields"][] = "GroupID";
$tdataadmin_rights[".listFields"][] = "AccessMask";

$tdataadmin_rights[".hideMobileList"] = array();


$tdataadmin_rights[".viewFields"] = array();
$tdataadmin_rights[".viewFields"][] = "TableName";
$tdataadmin_rights[".viewFields"][] = "GroupID";
$tdataadmin_rights[".viewFields"][] = "AccessMask";

$tdataadmin_rights[".addFields"] = array();
$tdataadmin_rights[".addFields"][] = "TableName";
$tdataadmin_rights[".addFields"][] = "GroupID";
$tdataadmin_rights[".addFields"][] = "AccessMask";

$tdataadmin_rights[".inlineAddFields"] = array();
$tdataadmin_rights[".inlineAddFields"][] = "TableName";
$tdataadmin_rights[".inlineAddFields"][] = "GroupID";
$tdataadmin_rights[".inlineAddFields"][] = "AccessMask";

$tdataadmin_rights[".editFields"] = array();
$tdataadmin_rights[".editFields"][] = "TableName";
$tdataadmin_rights[".editFields"][] = "GroupID";
$tdataadmin_rights[".editFields"][] = "AccessMask";

$tdataadmin_rights[".inlineEditFields"] = array();
$tdataadmin_rights[".inlineEditFields"][] = "TableName";
$tdataadmin_rights[".inlineEditFields"][] = "GroupID";
$tdataadmin_rights[".inlineEditFields"][] = "AccessMask";

$tdataadmin_rights[".exportFields"] = array();
$tdataadmin_rights[".exportFields"][] = "TableName";
$tdataadmin_rights[".exportFields"][] = "GroupID";
$tdataadmin_rights[".exportFields"][] = "AccessMask";

$tdataadmin_rights[".importFields"] = array();
$tdataadmin_rights[".importFields"][] = "TableName";
$tdataadmin_rights[".importFields"][] = "GroupID";
$tdataadmin_rights[".importFields"][] = "AccessMask";

$tdataadmin_rights[".printFields"] = array();
$tdataadmin_rights[".printFields"][] = "TableName";
$tdataadmin_rights[".printFields"][] = "GroupID";
$tdataadmin_rights[".printFields"][] = "AccessMask";

//	TableName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TableName";
	$fdata["GoodName"] = "TableName";
	$fdata["ownerTable"] = "oc_ugrights";
	$fdata["Label"] = GetFieldLabel("admin_rights","TableName"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TableName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TableName";
	
		
		
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
			$edata["EditParams"].= " maxlength=300";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataadmin_rights["TableName"] = $fdata;
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "oc_ugrights";
	$fdata["Label"] = GetFieldLabel("admin_rights","GroupID"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "GroupID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupID";
	
		
		
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
	
	
	
	

	

	
	$tdataadmin_rights["GroupID"] = $fdata;
//	AccessMask
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccessMask";
	$fdata["GoodName"] = "AccessMask";
	$fdata["ownerTable"] = "oc_ugrights";
	$fdata["Label"] = GetFieldLabel("admin_rights","AccessMask"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "AccessMask"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccessMask";
	
		
		
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
			$edata["EditParams"].= " maxlength=10";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataadmin_rights["AccessMask"] = $fdata;

	
$tables_data["admin_rights"]=&$tdataadmin_rights;
$field_labels["admin_rights"] = &$fieldLabelsadmin_rights;
$fieldToolTips["admin_rights"] = &$fieldToolTipsadmin_rights;
$page_titles["admin_rights"] = &$pageTitlesadmin_rights;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_rights"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["admin_rights"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_rights()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TableName,   GroupID,   AccessMask";
$proto0["m_strFrom"] = "FROM oc_ugrights";
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
	"m_strName" => "TableName",
	"m_strTable" => "oc_ugrights",
	"m_srcTableName" => "admin_rights"
));

$proto5["m_sql"] = "TableName";
$proto5["m_srcTableName"] = "admin_rights";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "oc_ugrights",
	"m_srcTableName" => "admin_rights"
));

$proto7["m_sql"] = "GroupID";
$proto7["m_srcTableName"] = "admin_rights";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "AccessMask",
	"m_strTable" => "oc_ugrights",
	"m_srcTableName" => "admin_rights"
));

$proto9["m_sql"] = "AccessMask";
$proto9["m_srcTableName"] = "admin_rights";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "oc_ugrights";
$proto12["m_srcTableName"] = "admin_rights";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "TableName";
$proto12["m_columns"][] = "GroupID";
$proto12["m_columns"][] = "AccessMask";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "oc_ugrights";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "admin_rights";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="admin_rights";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_rights = createSqlQuery_admin_rights();


	
			
	
$tdataadmin_rights[".sqlquery"] = $queryData_admin_rights;

$tableEvents["admin_rights"] = new eventsBase;
$tdataadmin_rights[".hasEvents"] = false;

?>