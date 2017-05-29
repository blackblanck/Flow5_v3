<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head><?php
const HOSTNAME  = 'pires.dk.mysql:3306'; // server
const MYSQLUSER = 'pires_dk'; // database user
const MYSQLPASS = 'QdkK3g8S'; // database password
const MYSQLDB   = 'pires_dk'; // database name
// Create database connection object
$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
// fail on error
if ($con->connect_error){
	die('Error: '.$con->connect_error.' ('.$con->connect_errno.')');
}
// set charset utf8 to match coallation in db
$con->set_charset('utf8');