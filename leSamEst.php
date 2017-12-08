<?php

session_start(); // On démarre la session AVANT toute chose

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Qui sera Sam ?</title>
	</head>
<body>
	<header></header>
		<?php $_nbPers =$_SESSION['nb'] ?>
		<h1>Le grand gagnant du'une nuit sans alcool est:</h1>
		<?php $RANDOM = rand ( 0 , $_nbPers );
			$SAM= 'firstname'.$RANDOM;
			echo("Sam : ".$_POST[$SAM]);
		?>
	<footer></footer>
</body>
</html> 
