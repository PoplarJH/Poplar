
<!DOCTYPE html> 
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
$pdo = new PDO('mysql:host=localhost;dbname=poplar', 'root', '');
  
$statement = $pdo->prepare("SELECT * FROM frage");
$statement->execute(array('Max')); 
$max = $statement->rowCount();
echo "Derzeitige Fragenanzahl: $max </br>";
$id = $_COOKIE["bid"];
$fid1 = rand(1,$max);
$fid2 = rand(1,$max);
$fid3 = rand(1,$max);
$fid4 = rand(1,$max);
$fid5 = rand(1,$max);

if (isset($_GET['fragen'])) {
	$a1 = $_POST['a1'];
	$a2 = $_POST['a2'];
	$a3 = $_POST['a3'];
	$a4 = $_POST['a4'];
	$a5 = $_POST['a5'];
	
	
	$s1 = $pdo->prepare("INSERT INTO antwort (FID, BID, antwort) VALUES (:FID, :BID, :a )");
	$r1 = $s1->execute(array('FID' => $fid1, 'BID' => $id, 'a' => $a1));
		
	$s2 = $pdo->prepare("INSERT INTO antwort (FID, BID, antwort) VALUES (:FID, :BID, :a )");
	$r2 = $s2->execute(array('FID' => $fid2, 'BID' => $id, 'a' => $a2));	
		
	$s3 = $pdo->prepare("INSERT INTO antwort (FID, BID, antwort) VALUES (:FID, :BID, :a )");
	$r3 = $s3->execute(array('FID' => $fid3, 'BID' => $id, 'a' => $a3));	
		
	$s4 = $pdo->prepare("INSERT INTO antwort (FID, BID, antwort) VALUES (:FID, :BID, :a )");
	$r4 = $s4->execute(array('FID' => $fid4, 'BID' => $id, 'a' => $a4));	
		
	$s5 = $pdo->prepare("INSERT INTO antwort (FID, BID, antwort) VALUES (:FID, :BID, :a )");
	$r5 = $s5->execute(array('FID' => $fid5, 'BID' => $id, 'a' => $a5));
	$result = true;

		
		if($result) {		
			echo 'Fragen angekommen <a href="chat.php">Zum Chat</a>';
			$showFormular = false;
		} else {
			echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
		}
	} 
 
settype($max, "integer");


?>
<form action="?fragen=1" method="post">
<?php
$f1 = $pdo->prepare("SELECT * FROM frage WHERE FID = :FID");
$f1->execute(array(':FID' => $fid1));   
while($row = $f1->fetch()) {
   echo $row['Frage']."<br />";
}?>

<input type="text" size="40" maxlength="250" name="a1"><br><br>
<?php
$f2 = $pdo->prepare("SELECT * FROM frage WHERE FID = :FID");
$f2->execute(array(':FID' => $fid2));   
while($row = $f2->fetch()) {
   echo $row['Frage']."<br />";
}?>

<input type="text" size="40" maxlength="250" name="a2"><br><br>
<?php
$f3 = $pdo->prepare("SELECT * FROM frage WHERE FID = :FID");
$f3->execute(array(':FID' => $fid3));   
while($row = $f3->fetch()) {
   echo $row['Frage']."<br />";
}
?>

<input type="text" size="40" maxlength="250" name="a3"><br><br>
<?php
$f4 = $pdo->prepare("SELECT * FROM frage WHERE FID = :FID");
$f4->execute(array(':FID' => $fid4));   
while($row = $f4->fetch()) {
   echo $row['Frage']."<br />";
}?>
<input type="text" size="40" maxlength="250" name="a4"><br><br>
<?php
$f5 = $pdo->prepare("SELECT * FROM frage WHERE FID = :FID");
$f5->execute(array(':FID' => $fid5));   
while($row = $f5->fetch()) {
   echo $row['Frage']."<br />";
}
?>
<input type="text" size="40" maxlength="250" name="a5"><br><br>

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