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
session_start();
if(!isset($_SESSION['id'])) {
	die('Bitte zuerst <a href="login.php">einloggen</a>');
}
 
//Abfrage der Nutzer ID vom Login
$id = $_COOKIE["bid"];
 
echo "Hallo User: ".$id;
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