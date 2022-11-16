<?php
$dbhost = 'localhost';
//$dbuser = 'platicop_webusr';
$dbuser = 'root';
$dbpass = '';
//$dbname = 'platicop_platim4udb';
$dbname = 'root';

//$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
mysqli_set_charset($conn, 'UTF8');
//mysql_select_db($dbname);
$dbh = new PDO('mysql:host=localhost;dbname=root', $dbuser, $dbpass);
$dbu = new PDO('mysql:host=localhost;dbname=root', $dbuser, $dbpass);
//Setting Session Timezone
mysqli_query($conn, "SET time_zone = '+08:00';") or trigger_error(mysql_error()); 
?>