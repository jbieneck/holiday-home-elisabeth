<?php

// show all errors
error_reporting(E_ALL ^ E_DEPRECATED);

require_once "../vendor/autoload.php";

require_once "../src/VacationApartment.php";


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
