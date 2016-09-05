<?php
define('ROOT',dirname(__FILE__).'/');
define('IDEAL',dirname(__FILE__).'/ideal/');
define('APP',dirname(__FILE__).'/application/');
include IDEAL.'framework.php';
app::gi()->start();
//var_dump($_SERVER['SERVER_NAME']);
//var_dump($_SERVER['DOCUMENT_ROOT']);
//var_dump($_SERVER['REMOTE_ADDR']);