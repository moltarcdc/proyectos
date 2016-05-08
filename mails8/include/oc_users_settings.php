<?php
require_once(getabspath("classes/cipherer.php"));




$tdataoc_users = array();	
	$tdataoc_users[".truncateText"] = true;
	$tdataoc_users[".NumberOfChars"] = 80; 
	$tdataoc_users[".ShortName"] = "oc_users";
	$tdataoc_users[".OwnerID"] = "";
	$tdataoc_users[".OriginalTable"] = "oc_users";

//	field labels
$fieldLabelsoc_users = array();
$fieldToolTipsoc_users = array();
$pageTitlesoc_users = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsoc_users["Spanish"] = array();
	$fieldToolTipsoc_users["Spanish"] = array();
	$pageTitlesoc_users["Spanish"] = array();
	$fieldLabelsoc_users["Spanish"]["uid"] = "Id";
	$fieldToolTipsoc_users["Spanish"]["uid"] = "";
	$fieldLabelsoc_users["Spanish"]["displayname"] = "Nombre";
	$fieldToolTipsoc_users["Spanish"]["displayname"] = "";
	$fieldLabelsoc_users["Spanish"]["password"] = "Clave";
	$fieldToolTipsoc_users["Spanish"]["password"] = "";
	if (count($fieldToolTipsoc_users["Spanish"]))
		$tdataoc_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsoc_users[""] = array();
	$fieldToolTipsoc_users[""] = array();
	$pageTitlesoc_users[""] = array();
	if (count($fieldToolTipsoc_users[""]))
		$tdataoc_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoc_users["English"] = array();
	$fieldToolTipsoc_users["English"] = array();
	$pageTitlesoc_users["English"] = array();
	if (count($fieldToolTipsoc_users["English"]))
		$tdataoc_users[".isUseToolTips"] = true;
}
	
	
	$tdataoc_users[".NCSearch"] = true;



$tdataoc_users[".shortTableName"] = "oc_users";
$tdataoc_users[".nSecOptions"] = 0;
$tdataoc_users[".recsPerRowList"] = 1;
$tdataoc_users[".mainTableOwnerID"] = "";
$tdataoc_users[".moveNext"] = 1;
$tdataoc_users[".nType"] = 0;

$tdataoc_users[".strOriginalTableName"] = "oc_users";




$tdataoc_users[".showAddInPopup"] = false;

$tdataoc_users[".showEditInPopup"] = false;

$tdataoc_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataoc_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataoc_users[".fieldsForRegister"] = array();

$tdataoc_users[".listAjax"] = false;

	$tdataoc_users[".audit"] = true;

	$tdataoc_users[".locking"] = false;








$tdataoc_users[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataoc_users[".searchSaving"] = false;
//

$tdataoc_users[".showSearchPanel"] = true;
		$tdataoc_users[".flexibleSearch"] = true;		

if (isMobile())
	$tdataoc_users[".isUseAjaxSuggest"] = false;
else 
	$tdataoc_users[".isUseAjaxSuggest"] = true;

$tdataoc_users[".rowHighlite"] = true;


	
$tdataoc_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoc_users[".isUseTimeForSearch"] = false;





$tdataoc_users[".allSearchFields"] = array();
$tdataoc_users[".filterFields"] = array();
$tdataoc_users[".requiredSearchFields"] = array();



$tdataoc_users[".googleLikeFields"] = array();
$tdataoc_users[".googleLikeFields"][] = "uid";
$tdataoc_users[".googleLikeFields"][] = "displayname";
$tdataoc_users[".googleLikeFields"][] = "password";


$tdataoc_users[".advSearchFields"] = array();
$tdataoc_users[".advSearchFields"][] = "uid";
$tdataoc_users[".advSearchFields"][] = "displayname";
$tdataoc_users[".advSearchFields"][] = "password";

$tdataoc_users[".tableType"] = "list";

$tdataoc_users[".printerPageOrientation"] = 0;
$tdataoc_users[".nPrinterPageScale"] = 100;

$tdataoc_users[".nPrinterSplitRecords"] = 40;

$tdataoc_users[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataoc_users[".pageSize"] = 20;

$tdataoc_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataoc_users[".strOrderBy"] = $tstrOrderBy;

$tdataoc_users[".orderindexes"] = array();

$tdataoc_users[".sqlHead"] = "SELECT `uid`,   displayname,   password";
$tdataoc_users[".sqlFrom"] = "FROM oc_users";
$tdataoc_users[".sqlWhereExpr"] = "";
$tdataoc_users[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoc_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoc_users[".arrGroupsPerPage"] = $arrGPP;

$tdataoc_users[".highlightSearchResults"] = true;

$tableKeysoc_users = array();
$tableKeysoc_users[] = "uid";
$tdataoc_users[".Keys"] = $tableKeysoc_users;

$tdataoc_users[".listFields"] = array();

$tdataoc_users[".hideMobileList"] = array();


$tdataoc_users[".viewFields"] = array();

$tdataoc_users[".addFields"] = array();

$tdataoc_users[".inlineAddFields"] = array();

$tdataoc_users[".editFields"] = array();

$tdataoc_users[".inlineEditFields"] = array();

$tdataoc_users[".exportFields"] = array();

$tdataoc_users[".importFields"] = array();

$tdataoc_users[".printFields"] = array();

//	uid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "uid";
	$fdata["GoodName"] = "uid";
	$fdata["ownerTable"] = "oc_users";
	$fdata["Label"] = GetFieldLabel("oc_users","uid"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "uid"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`uid`";
	
		
		
				
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
	
	
	
	

	

	
	$tdataoc_users["uid"] = $fdata;
//	displayname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "displayname";
	$fdata["GoodName"] = "displayname";
	$fdata["ownerTable"] = "oc_users";
	$fdata["Label"] = GetFieldLabel("oc_users","displayname"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "displayname"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "displayname";
	
		
		
				
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
	
	
	
	

	

	
	$tdataoc_users["displayname"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "oc_users";
	$fdata["Label"] = GetFieldLabel("oc_users","password"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "password"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Password");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
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
	
	
	
	

	

	
	$tdataoc_users["password"] = $fdata;

	
$tables_data["oc_users"]=&$tdataoc_users;
$field_labels["oc_users"] = &$fieldLabelsoc_users;
$fieldToolTips["oc_users"] = &$fieldToolTipsoc_users;
$page_titles["oc_users"] = &$pageTitlesoc_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["oc_users"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["oc_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_oc_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`uid`,   displayname,   password";
$proto0["m_strFrom"] = "FROM oc_users";
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
	"m_strName" => "uid",
	"m_strTable" => "oc_users",
	"m_srcTableName" => "oc_users"
));

$proto5["m_sql"] = "`uid`";
$proto5["m_srcTableName"] = "oc_users";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "displayname",
	"m_strTable" => "oc_users",
	"m_srcTableName" => "oc_users"
));

$proto7["m_sql"] = "displayname";
$proto7["m_srcTableName"] = "oc_users";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "oc_users",
	"m_srcTableName" => "oc_users"
));

$proto9["m_sql"] = "password";
$proto9["m_srcTableName"] = "oc_users";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "oc_users";
$proto12["m_srcTableName"] = "oc_users";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "uid";
$proto12["m_columns"][] = "displayname";
$proto12["m_columns"][] = "password";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "oc_users";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "oc_users";
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
$proto0["m_srcTableName"]="oc_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_oc_users = createSqlQuery_oc_users();


	
			
	
$tdataoc_users[".sqlquery"] = $queryData_oc_users;

$tableEvents["oc_users"] = new eventsBase;
$tdataoc_users[".hasEvents"] = false;

?>