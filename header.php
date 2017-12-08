<header id="header">
	<div class="logo"><a href="index.php">APPG</a></   div>
	<a href="#menu">Menu</a>
</header>
<div id="radio">
	<audio controls>
		<source id="radioSource" type="audio/mpeg" src="http://listen.radioking.com/radio/116593/stream/155905">
		Your browser does not support this audio format
	</audio>
	<input type="button" onclick="getInfo()" />
	<div id="music-info" >
		<ul>
			<img src="" alt="Cover" id="cover"/>
			<li id="title"></li>
			<li id="artist"></li>
			<li id="album"></li>
		</ul>
	</div>
</div>
<nav id="menu">
	<ul class="links">
		<li><a>Sam</a></li>
		<li><a>Une page introuvable?</a></li>
		<li><a>Jeu limites de vitesses</a></li>
		<li><a>Est-ce que tu peux conduire</a></li>
	</ul>
</nav>
<script src="js/radio.js" type="text/javascript"></script>
