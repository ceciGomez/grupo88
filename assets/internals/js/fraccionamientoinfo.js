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
})()