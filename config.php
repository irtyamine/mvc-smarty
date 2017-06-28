<?php
define("ENVIRONMENT", "development");
$base = explode('/', $_SERVER['PHP_SELF']);
define("BASE", "http://".$_SERVER['HTTP_HOST']."/".$base[1]."/");
global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = '';
	$config['host'] = '';
	$config['dbuser'] = '';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = '';
	$config['host'] = '';
	$config['dbuser'] = '';
	$config['dbpass'] = '';
}