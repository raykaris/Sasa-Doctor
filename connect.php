<?php
// Database connection
$loginDbHost = "localhost";
$loginDbUser = "root"; 
$loginDbPass = ""; 
$loginDbName = "login";

$loginConn = new mysqli($loginDbHost, $loginDbUser, $loginDbPass, $loginDbName);
if ($loginConn->connect_error) {
    die("Connection failed: " . $loginConn->connect_error);
}
 ?>