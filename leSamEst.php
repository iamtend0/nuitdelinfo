<?php
	session_start(); // On démarre la session AVANT toute chose
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
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
						<h2>Qui sera le prochain à ne pas boire?</h2>
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
								<h2>Le grand gagnant d'une nuit sans alcool est:</h2>
							</header>
									<?php $_nbPers =$_SESSION['nb'] ?>
									<?php $RANDOM = rand ( 1 , $_nbPers );
										$SAM= 'firstname'.$RANDOM;
										echo("Sam : ".$_POST[$SAM]);
									?>
						</div>
					</div>
				</div>
			</section>
			<?php include("footer.php");?>
</body>
</html> 
