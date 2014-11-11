<?php
session_start();
//$dbhost = "mysql15.000webhost.com";
$dbhost = "localhost";
$dbuser = "itdatace_admin";
$dbpass = "sjc2005";
$dbname = "itdatace_content";
//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass) or die("error");
//mysql_connect('localhost', 'itdatace_admin', 'sjc2005',) or die("error");
//Select Database
mysql_select_db($dbname) or die(mysql_error());

// Retrieve data from Query String
$interest = $_GET['str'];

$query = "UPDATE Regdetails SET Interest='" . $interest . "' where Id=1842125802";

// Escape User Input to help prevent SQL Injection
$interest = mysql_real_escape_string($interest);
//Execute query
$qry_result = mysql_query($query) or die(mysql_error());
?>