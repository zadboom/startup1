<?
session_start();
date_default_timezone_set("Asia/Tehran");
require_once('config.php');
global $config;
require_once('local-'.$config['lang'].'.php');
require_once('common.php');

require_once('db.php');
?>