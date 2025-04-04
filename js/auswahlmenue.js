var gemeindeID
var serienID
var predigtID
var buchID
var kapitelID
var Spiele_01_ID
var Spiele_02_ID
var Spiele_03_ID
var Musik_01_ID_Neu
var Musik_02_ID_Neu
var Musik_03_ID_Neu
var Lesen_01_ID
var Lesen_02_ID
var Lesen_03_ID
var OS_01_ID
var OS_02_ID
var OS_03_ID

function async_OS_01() {
	$.ajax({
		url: 'OS/Spalte2.php',
		data: {'Tabelle_OS_01': OS_01_ID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output").innerHTML=data
		}
	});
	console.log("Punkt 1");
}
function OS_01(event) {
	OS_01_ID=event.value
	async_OS_01(event.value)
}
function async_OS_02() {
	$.ajax({
		url: 'OS/Spalte3.php',
		data: {'Tabelle_OS_01': OS_01_ID,'Tabelle_OS_02': OS_02_ID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output2").innerHTML=data
		}
	});
	console.log("Punkt 2");
}
function OS_02(event) {
	OS_02_ID=event.value
	async_OS_02(event.value)
}
function async_OS_03() {
	$.ajax({
		url: 'OS/Ausgabe.php',
		data: {'Tabelle_OS_01': OS_01_ID,'Tabelle_OS_02': OS_02_ID,'Tabelle_OS_03': OS_03_ID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("ausgabe").innerHTML=data
		}
	});
	console.log("Punkt 3");
}
function OS_03(event) {
	OS_03_ID=event.value
	async_OS_03(event.value)
}
//
//#############################################
//
function async_Bibel_01() {
	$.ajax({
		url: 'Bibel/BB/kapitel.php',
		data: {'Tabelle_BasisBibel_Buch': buchID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output").innerHTML=data
		}
	});
	console.log("Punkt 1");
}
function Bibel_01(event) {
	buchID=event.value
	async_Bibel_01(event.value)
}
function async_Bibel_02() {
	$.ajax({
		url: 'Bibel/BB/ausgabe.php',
		data: {'Tabelle_BasisBibel_Buch': buchID,'Tabelle_BasisBibel_Kapitel': kapitelID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("ausgabe").innerHTML=data
		}
	});
	console.log("Punkt 2");
}
function Bibel_02(event) {
	kapitelID=event.value
	async_Bibel_02(event.value)
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
	console.log("Punkt 1");
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
	console.log("Punkt 2");
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
	console.log("Punkt 3");
}
function selectPredigt(event) {
	predigtID=event.value
	PredigtenAufrufen(event.value)
}
//
//#############################################
//
function async_Spiele_01() {
	$.ajax({
		url: 'Unterhaltung/Spiele/Spalte2.php',
		data: {'Tabelle_Spiele_01': Spiele_01_ID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output").innerHTML=data
		}
	});
	console.log("Punkt 1");
}
function Spiele_01(event) {
	Spiele_01_ID=event.value
	async_Spiele_01(event.value)
}
function async_Spiele_02() {
	$.ajax({
		url: 'Unterhaltung/Spiele/Spalte3.php',
		data: {'Tabelle_Spiele_01': Spiele_01_ID,'Tabelle_Spiele_02': Spiele_02_ID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output2").innerHTML=data
		}
	});
	console.log("Punkt 2");
}
function Spiele_02(event) {
	Spiele_02_ID=event.value
	async_Spiele_02(event.value)
}
function async_Spiele_03() {
	$.ajax({
		url: 'Unterhaltung/Spiele/Ausgabe.php',
		data: {'Tabelle_Spiele_01': Spiele_01_ID,'Tabelle_Spiele_02': Spiele_02_ID,'Tabelle_Spiele_03': Spiele_03_ID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("ausgabe").innerHTML=data
		}
	});
	console.log("Punkt 3");
}
function Spiele_03(event) {
	Spiele_03_ID=event.value
	async_Spiele_03(event.value)
}
//
//#############################################
//
function async_Musik_01() {
	$.ajax({
		url: 'Unterhaltung/Musik/Spalte2.php',
		data: {'Tabelle_Musik_01_Neu': Musik_01_ID_Neu},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output").innerHTML=data
		}
	});
	console.log("Punkt 1");
}
function Musik_01(event) {
	Musik_01_ID_Neu=event.value
	async_Musik_01(event.value)
}
function async_Musik_02() {
	$.ajax({
		url: 'Unterhaltung/Musik/Spalte3.php',
		data: {'Tabelle_Musik_01_Neu': Musik_01_ID_Neu,'Tabelle_Musik_02_Neu': Musik_02_ID_Neu},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output2").innerHTML=data
		}
	});
	console.log("Punkt 2");
}
function Musik_02(event) {
	Musik_02_ID_Neu=event.value
	async_Musik_02(event.value)
}
function async_Musik_03() {
	$.ajax({
		url: 'Unterhaltung/Musik/Ausgabe.php',
		data: {'Tabelle_Musik_01_Neu': Musik_01_ID_Neu,'Tabelle_Musik_02_Neu': Musik_02_ID_Neu,'Tabelle_Musik_03_Neu': Musik_03_ID_Neu},
		type: 'POST',
		success: function (data)  {
			document.getElementById("ausgabe").innerHTML=data
		}
	});
	console.log("Punkt 3");
}
function Musik_03(event) {
	Musik_03_ID_Neu=event.value
	async_Musik_03(event.value)
}
//
//#############################################
//
function async_Lesen_01() {
	$.ajax({
		url: 'Unterhaltung/Lesen/Variants.php',
		data: {'Tabelle_Lesen_01': Lesen_01_ID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output").innerHTML=data
		}
	});
	console.log("Punkt 1");
}
function Lesen_01(event) {
	Lesen_01_ID=event.value
	async_Lesen_01(event.value)
}
function async_Lesen_02() {
	$.ajax({
		url: 'Unterhaltung/Lesen/Chapters.php',
		data: {'Tabelle_Lesen_01': Lesen_01_ID,'Tabelle_Lesen_02': Lesen_02_ID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output2").innerHTML=data
		}
	});
	console.log("Punkt 2");
}
function Lesen_02(event) {
	Lesen_02_ID=event.value
	async_Lesen_02(event.value)
}
function async_Lesen_03() {
	$.ajax({
		url: 'Unterhaltung/Lesen/Ausgabe.php',
		data: {'Tabelle_Lesen_01': Lesen_01_ID,'Tabelle_Lesen_02': Lesen_02_ID,'Tabelle_Lesen_03': Lesen_03_ID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("ausgabe").innerHTML=data
		}
	});
	console.log("Punkt 3");
}
function Lesen_03(event) {
	Lesen_03_ID=event.value
	async_Lesen_03(event.value)
}