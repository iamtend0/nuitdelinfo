<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Est-ce que tu peux conduire ?</title>
		<link rel="stylesheet" href="assets/css/main.css" />
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
								<!-- Formulaire -->
								<form method="post" action="calculform.php" oninput="afficheverres.value=parseInt(nbverres.value)">
								Tu es :
								<!-- Menu déroulant : genre -->
								<select name="genre" required>
									<option value="masculin">un homme</option>
									<option value="feminin">une femme</option>
									<option value="autre">autre</option>
								</select> 
								<br /><br />
			
								Tu as bu : 0
								<!-- Slider : de 0 à 10 verres -->
								<input id="nbverres" name="nbverres" type="range" value="0" list="graduations" min="0" max="10" required />
								<output name="afficheverres" for="nbverres"></output> verres
			
			
								<!-- graduations non supportées par Firefox -->
								<datalist id="graduations">
									<option value="0" />
									<option value="1" />
									<option value="2" />
									<option value="3" />
									<option value="4" />
									<option value="5" />
									<option value="6" />
									<option value="7" />
									<option value="8" />
									<option value="9" />
									<option value="10" />
								</datalist>
								<br /><br />
								
								Tu pèses :
								<!-- Champ de texte : poids en kg -->
								<input name="poids" type="number" value="ton poids en kg" required /> kg
								<br /><br />
								
								<!-- Bouton d'envoi du formulaire -->
								 <input type="submit" value="Check !" />
							</form>
							</div>
						</div>
					</div>
				</div>
			</section>
	</body>
</html>