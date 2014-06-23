<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => '127.0.0.1',
	"username" => 'root',
	"password" => '',
	"database" => 'ss_capesideport',
	"path" => '',
);

// Set the site locale
i18n::set_locale('en_US');


ini_set("log_errors", "On");
ini_set("error_log", "php.log");

//SS_Log::add_writer(new SS_LogFileWriter('ss.log'), SS_Log::WARN, '<=');