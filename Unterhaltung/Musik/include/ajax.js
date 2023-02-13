function async_getSongs(InterpretID) {
	$.ajax({
		url: 'include/Songtitel.php',
		data: {'Interpret': InterpretID},
		type: 'POST',
		success: function (data)  {
			document.getElementById("output").innerText=data
		}
	});
}
function selectInterpret(event) {
    console.log(event.value);
	async_getSongs(event.value)
}