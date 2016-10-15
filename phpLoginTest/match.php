<?php
// abfrage rand nutzer
// BID -->  5 Fragen anzeigen --> Button: yes no --> if no: no change redo --> if yes: save accept BID1 BID2--> 
// Gab es bereits Anzeige? if yes: redo


$pdo = new PDO('mysql:host=localhost;dbname=poplar', 'root', '');
  
$statement = $pdo->prepare("SELECT * FROM benutzer");
$statement->execute(array('Max')); 
$max = $statement->rowCount();

$id = $_COOKIE["bid"];
start:
$RU1 = rand(1,$max);
if ($RU1 == $id){goto start;} 


   
   //Form has been submitted
if(isset($_POST['will'])) {

    //Radio button has been set to "true"
    if(isset($_POST['will']) && $_POST['will'] == 'true') $_POST['will'] = TRUE;

    //Radio button has been set to "false" or a value was not selected
    else $_POST['will'] = FALSE;
if ( $_POST['will'] = TRUE){
	$statement = $pdo->prepare("INSERT INTO anfragen (BID1, BID2) VALUES (:BID, :BID2)");
		$result = $statement->execute(array('BID' => $id, 'BID2' => $RU1));}
}
?>
<html> 
<head>
   <title>Poplar</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	$statement2 = $pdo->prepare("SELECT * FROM antwort WHERE BID='".$RU1."'");
$statement2->execute(array('Max')); 
$maxF = $statement2->rowCount();
echo "Derzeitige Useranzahl: $max </br>";


$sql = "SELECT * FROM antwort INNER JOIN frage
ON frage.FID = antwort.FID WHERE BID='".$RU1."'  LIMIT 5";
foreach ($pdo->query($sql) as $row) {
   echo $row['Frage']."<br />";
   echo $row['antwort']."<br />";
  }
   echo "Möchtest du?";
   ?>
<form action="?will=1" method="post">

<input type="submit" value="Nein">

<input type="submit" value="Ja">
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