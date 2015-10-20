(function () {
	//console.log($("#donanteinfonombre label"));
	/**
	* $("#guardaDonante").on("click",function () {$("#donanteinfonombre label").html($("#nombre").val());});
	* Asocio el evento al id.
	*/
	$("#guardaConsentimiento").on("click",function () {
		$("#consentimientoinfodesde span").html($("#desde").val());
		$("#consentimientoinfohasta  span").html($("#hasta").val());
		$("#consentimientoinfodia  span").html($("#diaVisita").val());
		$("#consentimientoinfocalle  span").html($("#calle").val());
		$("#consentimientoinfoaltura  span").html($("#numero").val());
		$("#consentimientoinfobarrio  span").html($("#barrio").val());
		$("#consentimientoinfopiso  span").html($("#piso").val());
		$("#consentimientoinfodpto  span").html($("#dpto").val());
		$("#consentimientoinfomz  span").html($("#mz").val());
		$("#consentimientoinfopc  span").html($("#pc").val());
		$("#consentimientoinfozona  span").html($("#zona").val());
		$("#consentimientoinfopedido  span").html($("#pedidoSerologia").val());
		$("#consentimientoinfopermite  span").html($("#permiteFoto").val());
	});

	$("#guardarTodo").on("click", function() {
		console.log($("#formularioConsentimiento"));
		$("#formularioConsentimiento").submit();
	})
})()