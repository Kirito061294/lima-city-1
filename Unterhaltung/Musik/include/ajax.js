function async_getCat(InterpretID) {
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
	async_getCat(event.value)
}


function async_getSongs(catID,InterpretID) {
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
    console.log(event.value);
	async_getSongs(event.value)
}


function async_getPlayer(catID,InterpretID,SongID) {
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
    console.log(event.value);
	async_getPlayer(event.value)
}