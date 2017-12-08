<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Est-ce que tu peux conduire ?</title>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="theme/css/style.css" />
	</head>
	
	<body class="subpage">
		<?php include("header.php");?>
		<section id="One" class="wrapper style3">
			<div class="inner">
				<header class="align-center">
					<p>APPG</p>
					<h2>Test alcoolémie</h2>
				</header>
			</div>
		</section>
		
		<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>Sécurité routière</p>
								<h2>Peux-tu conduire ce soir ?</h2>
							</header>
							<div class="align-center">
							<!-- calcul du taux d'alcoolémie -->
							<?php 
								// coefficient suivant le genre
								if($_POST['genre'] == "masculin") {
									$coeff_diff = 0.7;
								} else if ($_POST['genre'] == "feminin") {
									$coeff_diff = 0.6;
								} else if ($_POST['genre'] == "autre") { 
									$coeff_diff = 0.65;
								}
								 
								// alcool total absorbe en grammes
								$alcool_tot = 200*0.05*$_POST['nbverres']; // n verres de biere de 25cl soit 200g a 5%
								 
								//poids en kg
								$poids = $_POST['poids'];
								 
								if (0<$poids) {
									$taux_alcoolemie = $alcool_tot / ($poids * $coeff_diff);
									if ($taux_alcoolemie < 0.5) {
										echo "C'est ok, tu peux conduire ! :D";
									} else {
										echo "C'est dommage, tu as trop bu pour conduire. Fais-toi ramener ! ^^";
									}
								} else {
									echo "Je pense que tu ne pèses pas vraiment $poids kilo ... <a href=\"formulaire.php\">Retente le test !</a>";
								}
							?>
							</div>
						</div>
					</div>
				</div>
			</section>
	</body>
</html>  