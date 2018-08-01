<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_rights = array();
	$tdataadmin_rights[".truncateText"] = true;
	$tdataadmin_rights[".NumberOfChars"] = 80;
	$tdataadmin_rights[".ShortName"] = "admin_rights";
	$tdataadmin_rights[".OwnerID"] = "";
	$tdataadmin_rights[".OriginalTable"] = "qcc_ugrights";

//	field labels
$fieldLabelsadmin_rights = array();
$fieldToolTipsadmin_rights = array();
$pageTitlesadmin_rights = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadmin_rights["Spanish"] = array();
	$fieldToolTipsadmin_rights["Spanish"] = array();
	$pageTitlesadmin_rights["Spanish"] = array();
	$fieldLabelsadmin_rights["Spanish"]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights["Spanish"]["TableName"] = "";
	$fieldLabelsadmin_rights["Spanish"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights["Spanish"]["GroupID"] = "";
	$fieldLabelsadmin_rights["Spanish"]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights["Spanish"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["Spanish"]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsadmin_rights["Chinese"] = array();
	$fieldToolTipsadmin_rights["Chinese"] = array();
	$pageTitlesadmin_rights["Chinese"] = array();
	$fieldLabelsadmin_rights["Chinese"]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights["Chinese"]["TableName"] = "";
	$fieldLabelsadmin_rights["Chinese"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights["Chinese"]["GroupID"] = "";
	$fieldLabelsadmin_rights["Chinese"]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights["Chinese"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["Chinese"]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese (Hong Kong S.A.R.)")
{
	$fieldLabelsadmin_rights["Chinese (Hong Kong S.A.R.)"] = array();
	$fieldToolTipsadmin_rights["Chinese (Hong Kong S.A.R.)"] = array();
	$pageTitlesadmin_rights["Chinese (Hong Kong S.A.R.)"] = array();
	$fieldLabelsadmin_rights["Chinese (Hong Kong S.A.R.)"]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights["Chinese (Hong Kong S.A.R.)"]["TableName"] = "";
	$fieldLabelsadmin_rights["Chinese (Hong Kong S.A.R.)"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights["Chinese (Hong Kong S.A.R.)"]["GroupID"] = "";
	$fieldLabelsadmin_rights["Chinese (Hong Kong S.A.R.)"]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights["Chinese (Hong Kong S.A.R.)"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["Chinese (Hong Kong S.A.R.)"]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese (Taiwan)")
{
	$fieldLabelsadmin_rights["Chinese (Taiwan)"] = array();
	$fieldToolTipsadmin_rights["Chinese (Taiwan)"] = array();
	$pageTitlesadmin_rights["Chinese (Taiwan)"] = array();
	$fieldLabelsadmin_rights["Chinese (Taiwan)"]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights["Chinese (Taiwan)"]["TableName"] = "";
	$fieldLabelsadmin_rights["Chinese (Taiwan)"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights["Chinese (Taiwan)"]["GroupID"] = "";
	$fieldLabelsadmin_rights["Chinese (Taiwan)"]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights["Chinese (Taiwan)"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["Chinese (Taiwan)"]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Czech")
{
	$fieldLabelsadmin_rights["Czech"] = array();
	$fieldToolTipsadmin_rights["Czech"] = array();
	$pageTitlesadmin_rights["Czech"] = array();
	$fieldLabelsadmin_rights["Czech"]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights["Czech"]["TableName"] = "";
	$fieldLabelsadmin_rights["Czech"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights["Czech"]["GroupID"] = "";
	$fieldLabelsadmin_rights["Czech"]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights["Czech"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["Czech"]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Danish")
{
	$fieldLabelsadmin_rights["Danish"] = array();
	$fieldToolTipsadmin_rights["Danish"] = array();
	$pageTitlesadmin_rights["Danish"] = array();
	$fieldLabelsadmin_rights["Danish"]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights["Danish"]["TableName"] = "";
	$fieldLabelsadmin_rights["Danish"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights["Danish"]["GroupID"] = "";
	$fieldLabelsadmin_rights["Danish"]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights["Danish"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["Danish"]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Dutch")
{
	$fieldLabelsadmin_rights["Dutch"] = array();
	$fieldToolTipsadmin_rights["Dutch"] = array();
	$pageTitlesadmin_rights["Dutch"] = array();
	$fieldLabelsadmin_rights["Dutch"]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights["Dutch"]["TableName"] = "";
	$fieldLabelsadmin_rights["Dutch"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights["Dutch"]["GroupID"] = "";
	$fieldLabelsadmin_rights["Dutch"]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights["Dutch"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["Dutch"]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_rights["English"] = array();
	$fieldToolTipsadmin_rights["English"] = array();
	$pageTitlesadmin_rights["English"] = array();
	$fieldLabelsadmin_rights["English"]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights["English"]["TableName"] = "";
	$fieldLabelsadmin_rights["English"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights["English"]["GroupID"] = "";
	$fieldLabelsadmin_rights["English"]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights["English"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["English"]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsadmin_rights["French"] = array();
	$fieldToolTipsadmin_rights["French"] = array();
	$pageTitlesadmin_rights["French"] = array();
	$fieldLabelsadmin_rights["French"]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights["French"]["TableName"] = "";
	$fieldLabelsadmin_rights["French"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights["French"]["GroupID"] = "";
	$fieldLabelsadmin_rights["French"]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights["French"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["French"]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsadmin_rights["German"] = array();
	$fieldToolTipsadmin_rights["German"] = array();
	$pageTitlesadmin_rights["German"] = array();
	$fieldLabelsadmin_rights["German"]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights["German"]["TableName"] = "";
	$fieldLabelsadmin_rights["German"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights["German"]["GroupID"] = "";
	$fieldLabelsadmin_rights["German"]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights["German"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["German"]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Hebrew")
{
	$fieldLabelsadmin_rights["Hebrew"] = array();
	$fieldToolTipsadmin_rights["Hebrew"] = array();
	$pageTitlesadmin_rights["Hebrew"] = array();
	$fieldLabelsadmin_rights["Hebrew"]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights["Hebrew"]["TableName"] = "";
	$fieldLabelsadmin_rights["Hebrew"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights["Hebrew"]["GroupID"] = "";
	$fieldLabelsadmin_rights["Hebrew"]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights["Hebrew"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["Hebrew"]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_rights[""] = array();
	$fieldToolTipsadmin_rights[""] = array();
	$pageTitlesadmin_rights[""] = array();
	$fieldLabelsadmin_rights[""]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights[""]["TableName"] = "";
	$fieldLabelsadmin_rights[""]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights[""]["GroupID"] = "";
	$fieldLabelsadmin_rights[""]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights[""]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights[""]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}


	$tdataadmin_rights[".NCSearch"] = true;



$tdataadmin_rights[".shortTableName"] = "admin_rights";
$tdataadmin_rights[".nSecOptions"] = 0;
$tdataadmin_rights[".recsPerRowPrint"] = 1;
$tdataadmin_rights[".mainTableOwnerID"] = "";
$tdataadmin_rights[".moveNext"] = 1;
$tdataadmin_rights[".entityType"] = 1;

$tdataadmin_rights[".strOriginalTableName"] = "qcc_ugrights";

	



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



$tdataadmin_rights[".geocodingEnabled"] = false;





$tdataadmin_rights[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataadmin_rights[".pageSize"] = 20;

$tdataadmin_rights[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_rights[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_rights[".orderindexes"] = array();

$tdataadmin_rights[".sqlHead"] = "SELECT TableName,  	GroupID,  	AccessMask";
$tdataadmin_rights[".sqlFrom"] = "FROM qcc_ugrights";
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

$tdataadmin_rights[".masterListFields"] = array();
$tdataadmin_rights[".masterListFields"][] = "TableName";
$tdataadmin_rights[".masterListFields"][] = "GroupID";
$tdataadmin_rights[".masterListFields"][] = "AccessMask";

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
	$fdata["ownerTable"] = "qcc_ugrights";
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
	$fdata["ownerTable"] = "qcc_ugrights";
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
	$fdata["ownerTable"] = "qcc_ugrights";
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
$proto0["m_strFieldList"] = "TableName,  	GroupID,  	AccessMask";
$proto0["m_strFrom"] = "FROM qcc_ugrights";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
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

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "TableName",
	"m_strTable" => "qcc_ugrights",
	"m_srcTableName" => "admin_rights"
));

$proto6["m_sql"] = "TableName";
$proto6["m_srcTableName"] = "admin_rights";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "qcc_ugrights",
	"m_srcTableName" => "admin_rights"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "admin_rights";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccessMask",
	"m_strTable" => "qcc_ugrights",
	"m_srcTableName" => "admin_rights"
));

$proto10["m_sql"] = "AccessMask";
$proto10["m_srcTableName"] = "admin_rights";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "qcc_ugrights";
$proto13["m_srcTableName"] = "admin_rights";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "TableName";
$proto13["m_columns"][] = "GroupID";
$proto13["m_columns"][] = "AccessMask";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "qcc_ugrights";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "admin_rights";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="admin_rights";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_rights = createSqlQuery_admin_rights();


	
		;

			

$tdataadmin_rights[".sqlquery"] = $queryData_admin_rights;

$tableEvents["admin_rights"] = new eventsBase;
$tdataadmin_rights[".hasEvents"] = false;

?>