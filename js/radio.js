function getInfo(){
	var request=new XMLHttpRequest();
	request.open("GET", "https://www.radioking.com/widgets/currenttrack.php?radio=116593&format=json", false)
	request.send();

	document.getElementById("music-info").style.display="block";
	var info = JSON.parse(request.responseText);

	document.getElementById("title").innerHTML=info.title;
	document.getElementById("artist").innerHTML=artist;
	document.getElementById("cover").src=info.cover;
}
