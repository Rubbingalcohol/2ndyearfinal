<?php 


if(!isset($_SESSION)) {
	session_start();
}

$host = "localhost";
$user = "root";
$pass = "";
$db = "event_planning";

try {
	$conn = new mysqli($host, $user, $pass, $db);
} catch (Exception $ex) {
	die("CONNECTION FAILED: " . $ex->getMessage());
}
?>
