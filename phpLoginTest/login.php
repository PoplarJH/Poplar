<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=poplar', 'root', '');
 
if(isset($_GET['login'])) {
	$benutzername = $_POST['benutzername'];
	$password	= $_POST['password'];
	
	$statement = $pdo->prepare("SELECT * FROM benutzer WHERE benutzername = :benutzername");
	$result = $statement->execute(array('benutzername' => $benutzername));
	$user = $statement->fetch();
	
	$check = $pdo->prepare("SELECT * FROM benutzer WHERE password = :password");
	$res = $check->execute(array('password' => $password));
	$pass = $check->fetch();
		
	//Überprüfung des Passworts
	if ($user !== false && $pass !== false ) {
		$_SESSION['id'] = $user['BID'];
		die('Login erfolgreich. Weiter zu <a href="res.php">internen Bereich</a>');
	} else {
		$errorMessage = "Benutzername oder Passwort war ungültig<br>";
	}
	
}
?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Login</title>	
</head> 
<body>
 
<?php 
if(isset($errorMessage)) {
	echo $errorMessage;
}
?>
 
<form action="?login=1" method="post">
Benutzername:<br>
<input type="text" size="40" maxlength="250" name="benutzername"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="password"><br>
 
<input type="submit" value="Abschicken">
</form> 
</body>
</html>