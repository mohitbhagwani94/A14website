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
$id = $_GET['sid'];

//$_SESSION['ID'] = $id;
//echo $_SESSION['ID'];
$name = $_GET['sname'];
$email = $_GET['semail'];
echo "<script>console.log(" . $id . ");console.log(" . $id . ")</script>";
$birthday = $_GET['sbday'];
$query = mysql_query("SELECT * FROM Regdetails WHERE id='" . $id . "'");
$numrows = mysql_num_rows($query);
if ($numrows == 0) {
	$query = "INSERT INTO Regdetails (Id, Name, Email, DOB) VALUES('" . $id . "','" . $name . "','" . $email . "','" . $birthday . "')";
} else
	echo "You are already registered.";

// Escape User Input to help prevent SQL Injection
$id = mysql_real_escape_string($id);
$name = mysql_real_escape_string($name);
$email = mysql_real_escape_string($email);
$birthday = mysql_real_escape_string($birthday);
//Execute query
$qry_result = mysql_query($query) or die(mysql_error());
?>