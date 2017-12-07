<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Est-ce que tu peux conduire ?</title>
	</head>
	
	<body>
		<h1>Est-ce que tu peux conduire ?</h1>
		
		<!-- Formulaire -->
		<form method="post" action="formulaire.php">
			Tu es :
			<!-- Menu déroulant : genre -->
			<select name="genre">
				<option value="masculin">un homme</option>
				<option value="feminin">une femme</option>
				<option value="autre">autre</option>
			</select> 
			<br /><br />
			
			 Tu as bu : 0
			<!-- Slider : de 0 à 10+ verres -->
			<input name="nbverres" type="range" value="0" list="graduations" min="0" max="10" />
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
			</datalist> 10+ verres
			<br /><br />
			
			Tu pèses :
			<!-- Champ de texte : poids en kg -->
			<input name="poids" type="text" value="ton poids en kg" min="0" max="200" />
			<br /><br />
			
			<!-- Bouton d'envoi du formulaire -->
			<input type="submit" value ="Alors ?" />
		</form>
	</body>
</html>