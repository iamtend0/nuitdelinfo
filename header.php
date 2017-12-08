<header id="main">
	<nav>
		<a href="index.php">APPG</a>
		<a href="sam.php" >Sam</a>
		<a href="vnios" >Une page introuvable?</a>
		<a href="formulaire.php" >Est-ce que tu peux conduire</a>
		<div class="animation start-home"></div>
	</nav>
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
