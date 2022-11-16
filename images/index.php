<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$path = array_pop($uriSegments);

$newstr = htmlentities(filter_var($path, FILTER_SANITIZE_STRING), ENT_QUOTES, 'UTF-8');

echo "ID=".$fullpath;
echo "<br>ID=".$paths;
echo "<br>ID=".$newstr;