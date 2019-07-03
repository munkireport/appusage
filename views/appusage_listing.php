<?php 

$this->view('listings/default',
[
  "i18n_title" => 'appusage.appusagereport',
  "not_null_column" => "app_name",
  "js_link" => "module/appusage/js/format_appusage",
  "table" => [
    [
      "column" => "machine.computer_name",
      "i18n_header" => "listing.computername",
      "formatter" => "clientDetail",
    ],
    [
      "column" => "reportdata.serial_number",
      "i18n_header" => "serial",
    ],
    [
      "column" => "appusage.event",
	  "i18n_header" => "appusage.event",
	  "formatter" => "appNlocalizeEventameToLink",	  
    ],
    [
      "column" => "appusage.app_name",
	  "i18n_header" => "appusage.appname",
	  "formatter" => "appNameToLink",
    ],
    [
      "column" => "appusage.last_time_epoch",
	  "i18n_header" => "appusage.lastevent",
	  "formatter" => "timestampToMoment",
    ],
	[
		"column" => "appusage.number_times",
		"i18n_header" => "appusage.count",
	],
	[
		"column" => "appusage.app_version",
		"i18n_header" => "version",
	],
	[
		"column" => "appusage.app_path",
		"i18n_header" => "path",
	],
	[
		"column" => "appusage.bundle_id",
		"i18n_header" => "bundle_id",
	],
  ]
]);
