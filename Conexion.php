<?php

$host = "localhost";
$user = "root";
$db = "isw";

$con = mysql_connect($host, $user) or die("problemas al conectar");
mysql_select_db($db, $con) or die("problemas al conectar");
?>