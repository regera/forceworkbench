<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//	TO CONFIGURE THE WORKBENCH FOR ALL YOUR USERS, ADJUST THE "DEFAULT" VALUES FOR THE KEYS BELOW.
//
//	IF YOU WOULD LIKE TO ALLOW YOUR USERS TO OVERRIDE THE DEFAUTS SET THE "OVERRIDEABLE" VALUE TO true.
//	THIS WILL CAUSE THE KEY TO APPEAR ON THE 'SETTINGS' PAGE AND WILL BE CUSTOMIZABLE ON A USER-BY-USER
//	BASIS. THIS IS ACCOMPLISHED BY SETTING COOKIES IN THE USER'S BROWSER AND THE USER'S SETTINGS WILL
//	RETURN TO THE DEFAULTS SET BELOW IF THE COOKIES ARE CLEARED. THE "LABEL" AND "DESCRIPTION" VALUES CONTROL
//	HOW THE SETTING IS DISPLAYED ON THE 'SETTINGS' PAGE.
//
//	DO NOT ALTER THE KEY NAME, "DATATYPE", "MAXVALUE", OR "MINVALUE" VALUES. THESE MUST REMAIN AS IS FOR THE
//	FOR WORKBENCH TO FUNCTION PROPERLY.
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config["header_General"] = array(
	"label" => "General Options",
	"display" => true,
	"isHeader" => true
);

	$config["abcOrder"] = array(
		"label" => "Alphabetize Field Names",
		"description" => "Alphabetizes field names for across application. Otherwise, field names are displayed in the order returned by Salesforce.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["mruHeader_updateMru"] = array(
		"label" => "Update Recent Items on Sidebar",
		"description" => "Indicates whether to update the list of most recently used (MRU) items on the Salesforce sidebar. For queries, the MRU is only updated when returning one record.",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["invalidateSessionOnLogout"] = array(
		"label" => "Invalidate Session on Logout",
		"description" => "Invalidates the current API session when logging out of the Workbench. This option is only available when logging in with API version 13.0 and higher; otherwise it is ignored.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["debug"] = array(
		"label" => "Debug Mode",
		"description" => "Enables debugging mode for showing supervariables and SOAP messages.",
		"default" => false,
		"overrideable" => false,
		"dataType" => "boolean"
	);
	
	$config["callOptions_defaultNamespace"] = array(
		"label" => "Default Namespace",
		"description" => " A string that identifies a developer namespace prefix",
		"default" => null,
		"overrideable" => true,
		"dataType" => "string"
	);
	
	$config["callOptions_client"] = array(
		"label" => "Client Id",
		"description" => "Specify a Client Id for a partner with special API functionality.",
		"default" => null,
		"overrideable" => true,
		"dataType" => "string"
	);


$config["header_DataManagement"] = array(
	"label" => "Data Management Options",
	"display" => true,
	"isHeader" => true
);


	$config["showReferenceBy"] = array(
		"label" => "Enable Smart Lookup",
		"description" => "Show the Smart Lookup column for insert, update, and upsert operations for mapping with foreign keys via relationships.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["fieldsToNull"] = array(
		"label" => "Insert Null Values",
		"description" => "Forces null values to be commited to the database when inserting, updating, or upserting records; otherwise null values will be overridden by the existing values in the database",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["emailHeader_triggerAutoResponseEmail"] = array(
		"label" => "Trigger Auto-Response Emails",
		"description" => "Send Auto-Response e-mails when inserting Leads and Cases",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["emailHeader_triggertriggerUserEmail"] = array(
		"label" => "Trigger User Emails",
		"description" => "Send e-mails to users when resetting a password, creating a new user, adding comments to a case, or creating or modifying a task",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["emailHeader_triggerOtherEmail"] = array(
		"label" => "Trigger Other Emails",
		"description" => "Send other e-mails for insert, update, and upsert of records",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);


	$config["assignmentRuleHeader_useDefaultRule"] = array(
		"label" => "Use Default Assignment Rule",
		"description" => "Apply default Assignment Rule to apply to insert, update, and upsert operations. May not be used in conjuction with Assignment Rule Id option.",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["assignmentRuleHeader_assignmentRuleId"] = array(
		"label" => "Assignment Rule Id",
		"description" => "Specify an Assignment Rule Id to apply to insert, update, and upsert operations. May not be used if Use Default Assignment Rule option is checked.",
		"default" => null,
		"overrideable" => true,
		"dataType" => "string"
	);

	$config["UserTerritoryDeleteHeader_transferToUserId"] = array(
		"label" => "Territory Delete Transfer User",
		"description" => "The ID of the user to whom open opportunities will be assigned when an opportunity's owner is removed from a territory",
		"default" => null,
		"overrideable" => true,
		"dataType" => "string"
	);
	
$config["header_queryOptions"] = array(
	"label" => "Query Options",
	"display" => true,
	"isHeader" => true
);

	$config["autoJumpToQueryResults"] = array(
		"label" => "Automatically Jump to Query Results",
		"description" => "When displaying query results in the browser, automatically jump to the top of the query results.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["autoRunQueryMore"] = array(
		"label" => "Automatically Retrieve More Query Results",
		"description" => "Automatically retrieve all query results with queryMore() API call for browser view; otherwise, 'More...' button is show when additional results are available. If a large query is run with this setting enabled, the operation may be subject to unexpected timeouts. CSV exports automatically retrieve all results.",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["queryOptions_batchSize"] = array(
		"label" => "Preferred Query Batch Size",
		"description" => "Requested query batch size. This is not a guranteed value and depends on the data set being returned.",
		"default" => 500,
		"overrideable" => true,
		"dataType" => "int",
		"minValue" => 200,
		"maxValue" => 2000
	);
	
$config["header_searchOptions"] = array(
	"label" => "Search Options",
	"display" => true,
	"isHeader" => true
);

	$config["autoJumpToSearchResults"] = array(
		"label" => "Automatically Jump to Search Results",
		"description" => "When displaying search results in the browser, automatically jump to the top of the search results.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
$config["header_Performance"] = array(
	"label" => "Performance Options",
	"display" => true,
	"isHeader" => true
);

	$config["cacheGetUserInfo"] = array(
		"label" => "Cache User Info",
		"description" => "Caches the results from the getUserInfo() API call. Improves performance of the Workbench in that user info does not need to be retrieved more than once, but not recommended if active session should be checked on each page load.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["cacheDescribeGlobal"] = array(
		"label" => "Cache Object Names",
		"description" => "Caches the results from the describeGlobal() API call. Improves performance of the Workbench in that object names do not need to be retrieved more than once. Recommened unless actively making changes to metadata of your Salesforce organization.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["cacheDescribeSObject"] = array(
		"label" => "Cache Object Descriptions",
		"description" => "Caches the results from the describeSobject() API calls. Improves performance of the Workbench in that the object descriptions and field names do not need to be retrieved more than once. Recommened unless actively making changes to metadata of your Salesforce organization.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["enableGzip"] = array(
		"label" => "Enable Compression",
		"description" => "Enables GZIP compression to improve performance of API call response time. Recommended to leave enabled unless SOAP capturing is necessary.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["batchSize"] = array(
		"label" => "Record Batch Size",
		"description" => "Number of records that are batched together in one API call. Recommended to leave at 200.",
		"default" => 200,
		"overrideable" => true,
		"dataType" => "int",
		"minValue" => 1,
		"maxValue" => 200
	);
	
	$config["maxFileSize"] = array(
		"label" => "Maxiumum File Size (bytes)",
		"description" => "Maximum file size for upload in bytes.",
		"default" => 512000,
		"overrideable" => false,
		"dataType" => "int"
	);

	$config["maxFileLengthRows"] = array(
		"label" => "Maxiumum File Length (rows)",
		"description" => "Maximum file size for upload in number of CSV rows.",
		"default" => 2000,
		"overrideable" => false,
		"dataType" => "int"
	);

$config["header_proxyOptions"] = array(
	"label" => "Proxy Options",
	"display" => true,
	"isHeader" => true
);

	$config["proxyEnabled"] = array(
		"label" => "Connect with Proxy",
		"description" => "Check this box to use the proxy information below to connect to Salesforce.",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["proxyHost"] = array(
		"label" => "Proxy Host",
		"description" => "Proxy Host",
		"default" => null,
		"overrideable" => true,
		"dataType" => "string"
	);
	
	
	$config["proxyPort"] = array(
		"label" => "Proxy Port Number",
		"description" => "Proxy Port Number",
		"default" => null,
		"overrideable" => true,
		"dataType" => "int",
		"minValue" => 0,
		"maxValue" => 65536
	);
	
	
	$config["proxyUsername"] = array(
		"label" => "Proxy Username",
		"description" => "Proxy Username",
		"default" => null,
		"overrideable" => true,
		"dataType" => "string"
	);
	
	
	$config["proxyPassword"] = array(
		"label" => "Proxy Password",
		"description" => "Proxy Password",
		"default" => null,
		"overrideable" => true,
		"dataType" => "password"
	);
	

?>
