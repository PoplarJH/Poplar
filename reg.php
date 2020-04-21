<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=poplar', 'root', '');
?>
<!DOCTYPE html> 
<html> 
<head>
   <title>Poplar</title>
        <meta charset="utf-8">
        <meta content="Wie Tinder - Nur anders und besser!">

		<link href="./pic_css/css.css" rel="stylesheet" type="text/css" media="all">
</head> 
<body>
 
 <ul class="topnav" id="myTopnav">
  <li><a href="./login.php">Login</a></li>  <li><a href="./reg.php">Registrieren</a></li>
  
  
</ul>
    <div id="toplogo">
        <a href="login.php"><img class="logo" src="./pic_css/poplarlogo.png" alt="Poplar" width="400"></a>
    </div>
 
    <div class="content" align="center">
<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
	$error = false;
	$benutzername = $_POST['benutzername'];
	$password = sha1($_POST['password'] . 42);
	$password2 =sha1( $_POST['password2'] . 42);
  
	
	if(strlen($password) == 0) {
		echo 'Bitte ein Passwort angeben<br>';
		$error = true;
	}
	if($password != $password2) {
		echo 'Die Passwörter müssen übereinstimmen<br>';
		$error = true;
	}
	
	//Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
	if(!$error) { 
		$statement = $pdo->prepare("SELECT * FROM benutzer WHERE benutzername = :benutzername");
		$result = $statement->execute(array('benutzername' => $benutzername));
		$user = $statement->fetch();
		
		if($user !== false) {
			echo 'Dieser Benutzername ist bereits vergeben<br>';
			$error = true;
		}	
	}
	
	//Keine Fehler, wir können den Nutzer registrieren
	if(!$error) {	
		
		$statement = $pdo->prepare("INSERT INTO benutzer (benutzername, password) VALUES (:benutzername, :password)");
		$result = $statement->execute(array('benutzername' => $benutzername, 'password' => $password));
		
		if($result) {		
			echo 'Du wurdest erfolgreich registriert. <a href="login.php">Zum Login</a>';
			$showFormular = false;
		} else {
			echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
		}
	} 
}
 
if($showFormular) {
?>
 
<form action="?register=1" method="post">
Username:<br>
<input type="text" size="40" maxlength="250" name="benutzername"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="password"><br>
 
Passwort wiederholen:<br>
<input type="password" size="40" maxlength="250" name="password2"><br><br>
 
<input type="submit" value="Abschicken">
</form>
 
<?php
} //Ende von if($showFormular)
?>
  </div>
  
    <div id="footer" class="container">
        
    </div>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>