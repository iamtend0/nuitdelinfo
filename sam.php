 <?php
session_start();
$_SESSION['nb'];
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
		<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>APPG</p>
						<h2>Qui sera le prochain à ne pas boire?</h2>
					</header>
				</div>
			</section>
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>Sécurité routière</p>
								<h2>Combien êtes-vous ce soir ?</h2>
							</header>
							<form method="post" action="noms.php">
								<div class="align-center">
									<p>Combien êtes vous à sortir ?</p>
									<input type="number" name="howmuch"></br></br>
									<input type="submit" value="Valider" />
								<div class="align-center">
							</form>
						</div>
					</div>
				</div>
			</section>			
			
		
	<footer></footer>
</body>
</html> 
