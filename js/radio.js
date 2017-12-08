function getInfo(){
	var request=new XMLHttpRequest();
	request.open("GET", "https://www.radioking.com/widgets/currenttrack.php?radio=116593&format=json", false)
	request.send();

	var info = JSON.parse(request.responseText);

	document.getElementById("title").innerHTML=info.title;
	document.getElementById("artist").innerHTML=artist;
	document.getElementById("album").innerHTML=info.album;
	document.getElementById("cover").src=info.cover;
	
/*	source.setAttribute("attribute.data-info-album-art",info.cover);
	source.setAttribute("data-info-album-title",info.album);
	source.setAttribute("data-info-artist",info.artist);
	source.setAttribute("data-info-title",info.title);


	console.log("Artiste: " + info.artist);
	console.log("Titre: " + info.title);
	console.log("Album: " + info.album);
	console.log("Cover: " + info.cover);
	console.log("buy link: " + info.buy_link);
	console.log("start: " + info.started_at);
	console.log("end: " + info.end_at);
	console.log("duration: " + info.duration);
/**/	


}
