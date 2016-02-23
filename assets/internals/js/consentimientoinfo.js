(function () {
	//console.log($("#donanteinfonombre label"));
	/**
	* $("#guardaDonante").on("click",function () {$("#donanteinfonombre label").html($("#nombre").val());});
	* Asocio el evento al id.
	*/
	$("#guardaConsentimiento").on("click",function () {
		$("#consentimientoinfofdesde label span").html($("#fdesde").val());
		$("#consentimientoinfocalle label span").html($("#calle").val());
		$("#consentimientoinfoaltura label span").html($("#numero").val());
		$("#consentimientoinfobarrio label span").html($("#barrio").val());
		$("#consentimientoinfopiso label span").html($("#piso").val());
		$("#consentimientoinfodpto label span").html($("#dpto").val());
		$("#consentimientoinfomz label span").html($("#mz").val());
		$("#consentimientoinfopc label span").html($("#pc").val());
		$("#consentimientoinfoobs label span").html($("#observacion").val());
		$("#consentimientoinfozona label span").html($("[name=zona]").val());
		$("#consentimientoinfodia label span").html($("#diaVisita").val());
		$("#consentimientoinfopermite label span").html($("[name=permiteFoto]").val());
		$("#consentimientoinfopedido label span").html($("[name=pedidoSerologia]").val());
		$("#consentimientoinfofrasco label span").html($("[name=frascos]").val());
		$("#consentimientoinfomedio label span").html($("[name=medio]").val());
	});
	$("#guardarTodo").on("click", function() {
		console.log($("#formularioConsentimiento"));
		$("#formularioConsentimiento").attr("action", urlbase+"index.php/consentimiento/altaConsentimiento");
		$("#formularioConsentimiento").submit();
	})
	
	$("#cancelaTodo").on("click", function() {
		$("#formularioConsentimiento").attr("action", urlbase+"index.php/consentimiento/cancelaIngreso");
		$("#formularioConsentimiento").submit();
	})

	


})()