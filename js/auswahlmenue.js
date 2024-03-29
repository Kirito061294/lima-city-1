var catID
var InterpretID
var SongID
var gemeindeID
var serienID
var predigtID
var buchID
var kapitelID

function KapitelAufrufen() {
	$.ajax({
		url: 'BB/ausgabe.php',
		data: {'Tabelle_BasisBibel_Buch': buchID,'Tabelle_BasisBibel_Kapitel': kapitelID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("ausgabe").innerHTML=data
		}
	});
}
function selectKapitel(event) {
	kapitelID=event.value
	KapitelAufrufen(event.value)
}
function KapitelAuflisten() {
	$.ajax({
		url: 'BB/kapitel.php',
		data: {'Tabelle_BasisBibel_Buch': buchID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output").innerHTML=data
		}
	});
}
function selectBuch(event) {
	buchID=event.value
	KapitelAuflisten(event.value)
}
//
//#############################################
//
function SerienAuflisten() {
	$.ajax({
		url: 'Predigten/serien.php',
		data: {'Tabelle_Gemeinde': gemeindeID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output").innerHTML=data
		}
	});
}
function selectGemeinde(event) {
	gemeindeID=event.value
	SerienAuflisten(event.value)
}
function PredigtenAuflisten() {
	$.ajax({
		url: 'Predigten/predigt.php',
		data: {'Tabelle_Gemeinde': gemeindeID,'Tabelle_Serien': serienID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output2").innerHTML=data
		}
	});
}
function selectSerie(event) {
	serienID=event.value
	PredigtenAuflisten(event.value)
}
function PredigtenAufrufen() {
	$.ajax({
		url: 'Predigten/player.php',
		data: {'Tabelle_Gemeinde': gemeindeID,'Tabelle_Serien': serienID,'Tabelle_Predigten': predigtID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("ausgabe").innerHTML=data
		}
	});
}
function selectPredigt(event) {
	predigtID=event.value
	PredigtenAufrufen(event.value)
}
//
//#############################################
//
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
			document.getElementById("ausgabe").innerHTML=data
		}
	});
}
function selectSong(event) {
	SongID=event.value
	async_getPlayer(event.value)
}