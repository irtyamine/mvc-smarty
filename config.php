<?php
define("ENVIRONMENT", "development");
$base = explode('/', $_SERVER['PHP_SELF']);
define("BASE", "http://".$_SERVER['HTTP_HOST']."/".$base[1]."/");
global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'koperatife';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'toor';
} else {
	$config['dbname'] = '';
	$config['host'] = '';
	$config['dbuser'] = '';
	$config['dbpass'] = '';
}

//Configurando diretórios Smarty
define("SMARTY_DIR", "smarty/");
define("SMARTY_TEMPLATE_DIR", "views/templates");
define("SMARTY_TEMPLATE_C_DIR", "views/templates_c");
define("SMARTY_CONFIGS", "views/configs");
define("SMARTY_CACHE", "views/cache");

//Setando diretórios para funcionamento do Smarty
require_once SMARTY_DIR . 'Smarty.class.php';
global $smarty;
$smarty = new Smarty();
$smarty->setTemplateDir(SMARTY_TEMPLATE_DIR);
$smarty->setCompileDir(SMARTY_TEMPLATE_C_DIR);
$smarty->setConfigDir(SMARTY_CONFIGS);
$smarty->setCacheDir(SMARTY_CACHE);
$smarty->assign('BASE', BASE);
