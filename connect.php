<?php
// Database connection
$loginDbHost = "localhost";
$loginDbUser = "root"; 
$loginDbPass = ""; 
$loginDbName = "sasa-login";

$loginConn = new mysqli($loginDbHost, $loginDbUser, $loginDbPass, $loginDbName);
if ($loginConn->connect_error) {
    die("Connection failed: " . $loginConn->connect_error);
}
 ?>