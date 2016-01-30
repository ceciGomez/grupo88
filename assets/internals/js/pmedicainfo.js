(function () {
	$("#altaPmedica").on("click", function() {
		console.log($("#formPmedica"));
		$("#formPmedica").submit();
	})

	$("#altaPmedicaVistaVerTPM").on("click", function() {
		console.log($("#formAgregarPmedicasVTPM"));
		$("#formAgregarPmedicasVTPM").submit();
	})
})()

