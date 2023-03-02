var catID
var InterpretID
var SongID

function async_getCat() {
	$.ajax({
		url: 'include/cat.php',
		data: {'Interpret': InterpretID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output").innerHTML=data
		}
	});
}
function selectInterpret(event) {
	InterpretID=event.value
	async_getCat(event.value)
}


function async_getSongs() {
	$.ajax({
		url: 'include/Songtitel.php',
		data: {'Interpret': InterpretID,'Kategorien': catID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output2").innerHTML=data
		}
	});
}
function selectCat(event) {
	catID=event.value
	async_getSongs(event.value)
}


function async_getPlayer() {
	$.ajax({
		url: 'include/Player.php',
		data: {'Interpret': InterpretID,'Kategorien': catID,'Songs': SongID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("player").innerHTML=data
		}
	});
}
function selectSong(event) {
	SongID=event.value
	async_getPlayer(event.value)
}