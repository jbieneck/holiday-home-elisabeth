<?php

// show all errors
error_reporting(E_ALL ^ E_DEPRECATED);

require_once "../vendor/autoload.php";

//require_once "../includes/Utility.php";
//
//$utility = new Utility();
//
//// define where the sdk_config.ini resides
//$utility->doDefine('CONFIG_PATH', __DIR__);
//
//// the location (host+path) of the page
//$utility->doDefine(
//    'LOCATION', (empty($_SERVER['HTTPS']) ? 'http://' : 'https://')
//                . $_SERVER['SERVER_NAME']
//                . (($_SERVER['SERVER_PORT'] == 80) ? "" : (":" . $_SERVER['SERVER_PORT']))
//                . str_replace("?" . $_SERVER['QUERY_STRING'], '', $_SERVER['REQUEST_URI'])
//);
//
//$utility->doDefine('CONFIG', $utility->getConfig());

// TODO: use mustache templating engine
//// the composer autoloader (needed for the REST SDK + Mustache_Engine)
//require_once(__DIR__ . '/vendor/autoload.php');

// variables, may be overridden by an included action/page/script
$title    = "Ferienhaus Elisabeth";
$layout   = 'master';

// enable output buffering
ob_start();

// retrieve the contents from the output buffer
$body = ob_get_clean();

// finally render the page
include("master.php");
