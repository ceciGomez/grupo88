(function () {
	$("#buscarPmedica").on("click", function() {
		console.log($("#formBuscarPmedicas"));
		$("#formBuscarPmedicas").submit();
	})
	
	$("#agregarPmedicas").on("click", function() {
		console.log($("#formAgregarPmedicas"));
		$("#formAgregarPmedicas").submit();
	})

	$("#confirmarFracc").on("click", function() {
		console.log($("#formConfirmarFrac"));
		$("#formConfirmarFrac").submit();
	})
	
	$("#guardarConsumo").on("click", function() {
		console.log($("#formularioConsumobr"));
		$("#formularioConsumobr").submit();
	})

	$("#editarFracc").on("click", function() {
		console.log($("#formEditarFracc"));
		$("#formEditarFracc").submit();
	})
})()