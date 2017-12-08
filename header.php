<header id="footer">
	<div class="container">
		<ul class="icons">
			<li><a href="index.php" class="copyright"><span class="label">Accueil</span></a></li>
			<li><a href="sam.php" class="copyright"><span class="label">Sam, celui qui ne boit pas</span></a></li>
			<li><a href="formulaire.php" class="copyright"><span class="label">Pouvez vous conduire ?</span></a></li>
			<li><a href="equipe.php" class="copyright"><span class="label">L'équipe</span></a></li>
		</ul>
	</div>
</header>
<div id="radio">
	<span id="bar">
		<audio>
			<source id="radioSource" type="audio/mpeg" src="http://listen.radioking.com/radio/116593/stream/155905">
			Your browser does not support this audio format
		</audio>
		<input type="button" onclick="getInfo()" />
		<div id="musicInfo" >
			<ul>
				<img src="" alt="Cover" id="cover"/>
				<li id="title"></li>
				<li id="artist"></li>
			</ul>
		</div>
	</span>
</div>
<script src="js/radio.js" type="text/javascript"></script>
