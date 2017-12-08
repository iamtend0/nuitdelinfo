<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Est-ce que tu peux conduire ?</title>
	</head>
	
	<body>
		<h1>Est-ce que tu peux conduire ?</h1>
		
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
	</body>
</html>