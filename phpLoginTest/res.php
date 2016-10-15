<?php
session_start();
if(!isset($_SESSION['id'])) {
	die('Bitte zuerst <a href="login.php">einloggen</a>');
}
 
//Abfrage der Nutzer ID vom Login
$id = $_SESSION['id'];
 
echo "Hallo User: ".$id;
?>