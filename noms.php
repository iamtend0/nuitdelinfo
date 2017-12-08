<?php

session_start(); // On démarre la session AVANT toute chose

?>
 <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Qui sera Sam ?</title>
	</head>
<body>
	<header></header>
		<h1>Qui sera le prochain a ne pas boire?</h1>
		<p> 
			<form method="post" action="leSamEst.php">
			<?php $_nbPers=$_POST['howmuch'];?>
			<?php $_SESSION['nb']=$_nbPers;?>
			<?php if($_POST['howmuch']==1){echo "Je suis désolé mais tu ne vas pas pouvoir boire ce soir !";}?>
			<?php if($_POST['howmuch']==2){echo "Je suis désolé mais seulement l'un d'entre vous pourra boire ce soir !";}?>
			<?php if($_POST['howmuch']>2) {echo "Je suis désolé mais seulement ".($_POST['howmuch']-1)." d'entre vous pourront boire ce soir !";}?>
			</br>
			</br>
			Veuillez rentrer les prénoms des différents participants: 
			</br>
			</br>
			<?php if($_nbPers>1)
			{
				for ($x = 0; $x != $_nbPers; $x++) 
				{
    				echo "Prénom:<input type=\"text\" name=\"firstname".$x."\"required=\"required\"></br></br>";
				}
				echo "<input type=\"submit\" value=\"Valider\" />"; 
			}	
			?>
			</form>
		</p>
	<footer></footer>
</body>
</html> 
