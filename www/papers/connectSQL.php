<?php
//CONNECT TO DATABASE. CHANGE HERE IF THE DATABASE HAS MOVED.
$mysqli = new mysqli("webdb.srv.cs.cmu.edu","bioroboticsuser","gaVec5S7");
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$mysqli->select_db("biorobotics");

//CREATE ARRAYS OF OPTIONS FOR DROPDOWN MENUS

$topics = $mysqli->query("SELECT DISTINCT Topic FROM Papers ORDER BY Topic")  or trigger_error(mysql_error()); 

if ($mysqli->errno) {
	printf("%s\n", $mysqli->error);
	exit();
}

$kinds = $mysqli->query("SELECT DISTINCT Kind FROM Papers ORDER BY Kind")  or trigger_error(mysql_error());

if ($mysqli->errno) {
	printf("%s\n", $mysqli->error);
	exit();
}
?>