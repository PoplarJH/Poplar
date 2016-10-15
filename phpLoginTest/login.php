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
		setcookie("bid",$user['BID'],0); 

		die('Login erfolgreich. Weiter zu <a href="Fragen.php">internen Bereich</a>');
	} else {
		$errorMessage = "Benutzername oder Passwort war ungültig<br>";
	}
	
}
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
  <li><a href="./login.php">Login</a></li> <li><a href="./reg.php">Registrieren</a></li>
  
  
</ul>
    <div id="toplogo">
        <a href="login.php"><img class="logo" src="./pic_css/poplarlogo.png" alt="Poplar" width="400"></a>
    </div>
 
    <div class="content" align="center">
      
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