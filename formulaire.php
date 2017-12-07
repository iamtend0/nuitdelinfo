<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Est-ce que tu peux conduire ?</title>
	</head>
	
	<body>
		<h1>Est-ce que tu peux conduire ?</h1>
		
		<!-- Formulaire -->
		<form>
			<!-- Menu déroulant : genre -->
			Ton genre :
			 <select name="Genre">
				<option value="masculin">Masculin</option>
				<option value="feminin">Féminin</option>
				<option value="autre">Autre</option>
			</select> 
			<br /> <br />
			
			<!-- Slider : de 0 à X verres //-->
			 Tu as bu :
			<input type="range" value="0" list="graduations" min="0" max="20" />
			<datalist id="graduations">
				<option value="0" label="0 verre" />
				<option value="1" />
				<option value="2" />
				<option value="3" />
				<option value="4" />
				<option value="5" label="5 verres" />
				<option value="6" />
				<option value="7" />
				<option value="8" />
				<option value="9" />
				<option value="10" label="10 verres"/>
			</datalist>
		</form>
	</body>
</html>