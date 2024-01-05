var Lesen_01_ID
var Lesen_02_ID
var Lesen_03_ID

//
//#############################################
//
function async_Lesen_01() {
	$.ajax({
		url: 'Lesen/Variants.php',
		data: {'Tabelle_Lesen_01': Lesen_01_ID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output").innerHTML=data
		}
	});
}
function Lesen_01(event) {
	Lesen_01_ID=event.value
	async_Lesen_01(event.value)
}
//
//############################################
//
function async_Lesen_02() {
	$.ajax({
		url: 'Lesen/Chapters.php',
		data: {'Tabelle_Lesen_01': Lesen_01_ID,'Tabelle_Lesen_02': Lesen_02_ID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output2").innerHTML=data
		}
	});
}
function Lesen_02(event) {
	Lesen_02_ID=event.value
	async_Lesen_02(event.value)
}
//
//############################################
//
function async_Lesen_03() {
	$.ajax({
		url: 'Lesen/Ausgabe.php',
		data: {'Tabelle_Lesen_01': Lesen_01_ID,'Tabelle_Lesen_02': Lesen_02_ID,'Tabelle_Lesen_03': Lesen_03_ID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("ausgabe").innerHTML=data
		}
	});
}
function Lesen_03(event) {
	Lesen_03_ID=event.value
	async_Lesen_03(event.value)
}