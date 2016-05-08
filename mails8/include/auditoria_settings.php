<?php
require_once(getabspath("classes/cipherer.php"));




$tdataauditoria = array();	
	$tdataauditoria[".truncateText"] = true;
	$tdataauditoria[".NumberOfChars"] = 80; 
	$tdataauditoria[".ShortName"] = "auditoria";
	$tdataauditoria[".OwnerID"] = "";
	$tdataauditoria[".OriginalTable"] = "oc_audit";

//	field labels
$fieldLabelsauditoria = array();
$fieldToolTipsauditoria = array();
$pageTitlesauditoria = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsauditoria["Spanish"] = array();
	$fieldToolTipsauditoria["Spanish"] = array();
	$pageTitlesauditoria["Spanish"] = array();
	$fieldLabelsauditoria["Spanish"]["id"] = "Id";
	$fieldToolTipsauditoria["Spanish"]["id"] = "";
	$fieldLabelsauditoria["Spanish"]["datetime"] = "Momento";
	$fieldToolTipsauditoria["Spanish"]["datetime"] = "";
	$fieldLabelsauditoria["Spanish"]["ip"] = "Ip";
	$fieldToolTipsauditoria["Spanish"]["ip"] = "";
	$fieldLabelsauditoria["Spanish"]["user"] = "Usuario";
	$fieldToolTipsauditoria["Spanish"]["user"] = "";
	$fieldLabelsauditoria["Spanish"]["table"] = "Tabla";
	$fieldToolTipsauditoria["Spanish"]["table"] = "";
	$fieldLabelsauditoria["Spanish"]["action"] = "Acción";
	$fieldToolTipsauditoria["Spanish"]["action"] = "";
	$fieldLabelsauditoria["Spanish"]["description"] = "Descripción";
	$fieldToolTipsauditoria["Spanish"]["description"] = "";
	if (count($fieldToolTipsauditoria["Spanish"]))
		$tdataauditoria[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsauditoria[""] = array();
	$fieldToolTipsauditoria[""] = array();
	$pageTitlesauditoria[""] = array();
	$fieldLabelsauditoria[""]["id"] = "Id";
	$fieldToolTipsauditoria[""]["id"] = "";
	$fieldLabelsauditoria[""]["datetime"] = "Datetime";
	$fieldToolTipsauditoria[""]["datetime"] = "";
	$fieldLabelsauditoria[""]["ip"] = "Ip";
	$fieldToolTipsauditoria[""]["ip"] = "";
	$fieldLabelsauditoria[""]["user"] = "User";
	$fieldToolTipsauditoria[""]["user"] = "";
	$fieldLabelsauditoria[""]["table"] = "Table";
	$fieldToolTipsauditoria[""]["table"] = "";
	$fieldLabelsauditoria[""]["action"] = "Action";
	$fieldToolTipsauditoria[""]["action"] = "";
	$fieldLabelsauditoria[""]["description"] = "Description";
	$fieldToolTipsauditoria[""]["description"] = "";
	if (count($fieldToolTipsauditoria[""]))
		$tdataauditoria[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsauditoria["English"] = array();
	$fieldToolTipsauditoria["English"] = array();
	$pageTitlesauditoria["English"] = array();
	if (count($fieldToolTipsauditoria["English"]))
		$tdataauditoria[".isUseToolTips"] = true;
}
	
	
	$tdataauditoria[".NCSearch"] = true;



$tdataauditoria[".shortTableName"] = "auditoria";
$tdataauditoria[".nSecOptions"] = 0;
$tdataauditoria[".recsPerRowList"] = 1;
$tdataauditoria[".mainTableOwnerID"] = "";
$tdataauditoria[".moveNext"] = 0;
$tdataauditoria[".nType"] = 0;

$tdataauditoria[".strOriginalTableName"] = "oc_audit";




$tdataauditoria[".showAddInPopup"] = false;

$tdataauditoria[".showEditInPopup"] = false;

$tdataauditoria[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataauditoria[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataauditoria[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataauditoria[".listAjax"] = true;
else 
	$tdataauditoria[".listAjax"] = false;

	$tdataauditoria[".audit"] = false;

	$tdataauditoria[".locking"] = false;


$tdataauditoria[".list"] = true;

$tdataauditoria[".view"] = true;


$tdataauditoria[".exportTo"] = true;

$tdataauditoria[".printFriendly"] = true;


$tdataauditoria[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdataauditoria[".searchSaving"] = true;
//

$tdataauditoria[".showSearchPanel"] = true;
		$tdataauditoria[".flexibleSearch"] = true;		

if (isMobile())
	$tdataauditoria[".isUseAjaxSuggest"] = false;
else 
	$tdataauditoria[".isUseAjaxSuggest"] = true;

$tdataauditoria[".rowHighlite"] = true;


	
$tdataauditoria[".addPageEvents"] = false;

// use timepicker for search panel
$tdataauditoria[".isUseTimeForSearch"] = false;





$tdataauditoria[".allSearchFields"] = array();
$tdataauditoria[".filterFields"] = array();
$tdataauditoria[".requiredSearchFields"] = array();

$tdataauditoria[".allSearchFields"][] = "id";
	$tdataauditoria[".allSearchFields"][] = "datetime";
	$tdataauditoria[".allSearchFields"][] = "ip";
	$tdataauditoria[".allSearchFields"][] = "user";
	$tdataauditoria[".allSearchFields"][] = "table";
	$tdataauditoria[".allSearchFields"][] = "action";
	$tdataauditoria[".allSearchFields"][] = "description";
	

$tdataauditoria[".googleLikeFields"] = array();
$tdataauditoria[".googleLikeFields"][] = "id";
$tdataauditoria[".googleLikeFields"][] = "datetime";
$tdataauditoria[".googleLikeFields"][] = "ip";
$tdataauditoria[".googleLikeFields"][] = "user";
$tdataauditoria[".googleLikeFields"][] = "table";
$tdataauditoria[".googleLikeFields"][] = "action";
$tdataauditoria[".googleLikeFields"][] = "description";


$tdataauditoria[".advSearchFields"] = array();
$tdataauditoria[".advSearchFields"][] = "id";
$tdataauditoria[".advSearchFields"][] = "datetime";
$tdataauditoria[".advSearchFields"][] = "ip";
$tdataauditoria[".advSearchFields"][] = "user";
$tdataauditoria[".advSearchFields"][] = "table";
$tdataauditoria[".advSearchFields"][] = "action";
$tdataauditoria[".advSearchFields"][] = "description";

$tdataauditoria[".tableType"] = "list";

$tdataauditoria[".printerPageOrientation"] = 0;
$tdataauditoria[".nPrinterPageScale"] = 100;

$tdataauditoria[".nPrinterSplitRecords"] = 40;

$tdataauditoria[".nPrinterPDFSplitRecords"] = 40;





	

$tdataauditoria[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataauditoria[".pageSize"] = 20;

$tdataauditoria[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataauditoria[".strOrderBy"] = $tstrOrderBy;

$tdataauditoria[".orderindexes"] = array();
$tdataauditoria[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataauditoria[".sqlHead"] = "SELECT id,  `datetime`,  ip,  `user`,  `table`,  `action`,  description";
$tdataauditoria[".sqlFrom"] = "FROM oc_audit";
$tdataauditoria[".sqlWhereExpr"] = "";
$tdataauditoria[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataauditoria[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataauditoria[".arrGroupsPerPage"] = $arrGPP;

$tdataauditoria[".highlightSearchResults"] = true;

$tableKeysauditoria = array();
$tableKeysauditoria[] = "id";
$tdataauditoria[".Keys"] = $tableKeysauditoria;

$tdataauditoria[".listFields"] = array();
$tdataauditoria[".listFields"][] = "id";
$tdataauditoria[".listFields"][] = "datetime";
$tdataauditoria[".listFields"][] = "ip";
$tdataauditoria[".listFields"][] = "user";
$tdataauditoria[".listFields"][] = "table";
$tdataauditoria[".listFields"][] = "action";
$tdataauditoria[".listFields"][] = "description";

$tdataauditoria[".hideMobileList"] = array();


$tdataauditoria[".viewFields"] = array();
$tdataauditoria[".viewFields"][] = "id";
$tdataauditoria[".viewFields"][] = "datetime";
$tdataauditoria[".viewFields"][] = "ip";
$tdataauditoria[".viewFields"][] = "user";
$tdataauditoria[".viewFields"][] = "table";
$tdataauditoria[".viewFields"][] = "action";
$tdataauditoria[".viewFields"][] = "description";

$tdataauditoria[".addFields"] = array();

$tdataauditoria[".inlineAddFields"] = array();

$tdataauditoria[".editFields"] = array();

$tdataauditoria[".inlineEditFields"] = array();

$tdataauditoria[".exportFields"] = array();
$tdataauditoria[".exportFields"][] = "id";
$tdataauditoria[".exportFields"][] = "datetime";
$tdataauditoria[".exportFields"][] = "ip";
$tdataauditoria[".exportFields"][] = "user";
$tdataauditoria[".exportFields"][] = "table";
$tdataauditoria[".exportFields"][] = "action";
$tdataauditoria[".exportFields"][] = "description";

$tdataauditoria[".importFields"] = array();

$tdataauditoria[".printFields"] = array();
$tdataauditoria[".printFields"][] = "id";
$tdataauditoria[".printFields"][] = "datetime";
$tdataauditoria[".printFields"][] = "ip";
$tdataauditoria[".printFields"][] = "user";
$tdataauditoria[".printFields"][] = "table";
$tdataauditoria[".printFields"][] = "action";
$tdataauditoria[".printFields"][] = "description";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "oc_audit";
	$fdata["Label"] = GetFieldLabel("oc_audit","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";
	
		
		
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

	

	
	$tdataauditoria["id"] = $fdata;
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "oc_audit";
	$fdata["Label"] = GetFieldLabel("oc_audit","datetime"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "datetime"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
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

	

	
	$tdataauditoria["datetime"] = $fdata;
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "oc_audit";
	$fdata["Label"] = GetFieldLabel("oc_audit","ip"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ip"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";
	
		
		
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

	

	
	$tdataauditoria["ip"] = $fdata;
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "oc_audit";
	$fdata["Label"] = GetFieldLabel("oc_audit","user"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "user"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";
	
		
		
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

	

	
	$tdataauditoria["user"] = $fdata;
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "oc_audit";
	$fdata["Label"] = GetFieldLabel("oc_audit","table"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "table"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`table`";
	
		
		
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

	

	
	$tdataauditoria["table"] = $fdata;
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "oc_audit";
	$fdata["Label"] = GetFieldLabel("oc_audit","action"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "action"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`action`";
	
		
		
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
			$edata["EditParams"].= " maxlength=250";
	
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

	

	
	$tdataauditoria["action"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "oc_audit";
	$fdata["Label"] = GetFieldLabel("oc_audit","description"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "description"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";
	
		
		
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

	

	
	$tdataauditoria["description"] = $fdata;

	
$tables_data["oc_audit"]=&$tdataauditoria;
$field_labels["oc_audit"] = &$fieldLabelsauditoria;
$fieldToolTips["oc_audit"] = &$fieldToolTipsauditoria;
$page_titles["oc_audit"] = &$pageTitlesauditoria;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["oc_audit"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["oc_audit"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_auditoria()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  `datetime`,  ip,  `user`,  `table`,  `action`,  description";
$proto0["m_strFrom"] = "FROM oc_audit";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
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
	"m_strName" => "id",
	"m_strTable" => "oc_audit",
	"m_srcTableName" => "oc_audit"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "oc_audit";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "oc_audit",
	"m_srcTableName" => "oc_audit"
));

$proto7["m_sql"] = "`datetime`";
$proto7["m_srcTableName"] = "oc_audit";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "oc_audit",
	"m_srcTableName" => "oc_audit"
));

$proto9["m_sql"] = "ip";
$proto9["m_srcTableName"] = "oc_audit";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "oc_audit",
	"m_srcTableName" => "oc_audit"
));

$proto11["m_sql"] = "`user`";
$proto11["m_srcTableName"] = "oc_audit";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "oc_audit",
	"m_srcTableName" => "oc_audit"
));

$proto13["m_sql"] = "`table`";
$proto13["m_srcTableName"] = "oc_audit";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "oc_audit",
	"m_srcTableName" => "oc_audit"
));

$proto15["m_sql"] = "`action`";
$proto15["m_srcTableName"] = "oc_audit";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "oc_audit",
	"m_srcTableName" => "oc_audit"
));

$proto17["m_sql"] = "description";
$proto17["m_srcTableName"] = "oc_audit";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "oc_audit";
$proto20["m_srcTableName"] = "oc_audit";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "datetime";
$proto20["m_columns"][] = "ip";
$proto20["m_columns"][] = "user";
$proto20["m_columns"][] = "table";
$proto20["m_columns"][] = "action";
$proto20["m_columns"][] = "description";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "oc_audit";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "oc_audit";
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

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "oc_audit",
	"m_srcTableName" => "oc_audit"
));

$proto23["m_column"]=$obj;
$proto23["m_bAsc"] = 0;
$proto23["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto23);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="oc_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_auditoria = createSqlQuery_auditoria();


	
							
	
$tdataauditoria[".sqlquery"] = $queryData_auditoria;

$tableEvents["oc_audit"] = new eventsBase;
$tdataauditoria[".hasEvents"] = false;

?>