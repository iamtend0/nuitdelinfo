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
		<h1>Qui sera le prochain ?</h1>
		<p> 
			<form method="post" action="leSamEst.php">
			<?php $_nbPers=$_POST['howmuch'];?>
			<?php $_SESSION['nb']=$_nbPers;?>
			<?php if($_POST['howmuch']==1){echo "Je suis desole mais tu ne vas pas pouvoir boire ce soir !";}?>
			<?php if($_POST['howmuch']==2){echo "Je suis desole mais seulement l'un d'entre vous pourra boire ce soir !";}?>
			<?php if($_POST['howmuch']>2) {echo "Je suis desole mais seulement ".($_POST['howmuch']-1)." d'entre vous pourront boire ce soir !";}?>
			<?php if($_nbPers>1)
			{
				for ($x = 0; $x != $_nbPers; $x++) 
				{
    				echo "<input type=\"text\" name=\"firstname".$x."\">";
				}
				echo "<input type=\"submit\" value=\"Valider\" />"; 
			}	
			?>
			</form>
		</p>
	<footer></footer>
</body>
</html> 
