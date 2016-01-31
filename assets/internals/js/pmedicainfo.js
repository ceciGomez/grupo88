(function () {
	$("#altaPmedica").on("click", function() {
		console.log($("#formPmedica"));
		$("#formPmedica").submit();
	})

	$("#altaPmedicaVistaVerTPM").on("click", function() {
		console.log($("#formAgregarPmedicasVTPM"));
		$("#formAgregarPmedicasVTPM").submit();
	})

	$("#editarPmedica").on("click", function() {
		console.log($("#formEditarPmedica"));
		$("#formEditarPmedica").submit();
	})
})()

