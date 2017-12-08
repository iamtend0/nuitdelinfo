<?php

session_start(); // On démarre la session AVANT toute chose

?>
 <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Qui sera Sam ?</title>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
<body class="subpage">
	<?php include("header.php");?>
	
	<!-- One -->
	<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>APPG</p>
						<h2>Qui sera le prochain a ne pas boire?</h2>
					</header>
				</div>
			</section>

				<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>Sécurité routière</p>
								<h2><form method="post" action="leSamEst.php">
									<?php $_nbPers=$_POST['howmuch'];?>
									<?php $_SESSION['nb']=$_nbPers;?>
									<?php if($_POST['howmuch']<=1){echo "Je suis désolé mais tu ne vas pas pouvoir boire ce soir !";}?>
									<?php if($_POST['howmuch']==2){echo "Je suis désolé mais seulement l'un d'entre vous pourra boire ce soir !";}?>
									<?php if($_POST['howmuch']>2) {echo "Je suis désolé mais seulement ".($_POST['howmuch']-1)." d'entre vous pourront boire ce soir !";}?>
									</h2>
							</header>
							<div class="align-center">
							
							<?php if($_nbPers>1)
							{
								echo ("Veuillez rentrer les prénoms des différents participants:"); 
								echo ("</br>");
								echo ("</br>");
								for ($x = 0; $x != $_nbPers; $x++) 
								{
									echo "Prénom:<input type=\"text\" name=\"firstname".$x."\"required=\"required\"></br></br>";
								}
								echo "<input type=\"submit\" value=\"Valider\" />"; 
							}	
							?>
							</div>
							</form>
						</div>
					</div>
				</div>
			</section>

		<?php include("footer.php");?>
</body>
</html> 
