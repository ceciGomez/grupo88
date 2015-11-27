$("#ingresaFrascos").on("click",function () {
		$("#consentimientoinfonroHR label span").html($("#nroHR").val());
		$("#consentimientoinfofextraccion label span").html($("#fextraccion").val());
		$("#consentimientoinfovol label span").html($("#vol").val());
		});

$("#guardarYcontinuar").on("click", function() {
		console.log($("#ingresaFrascos"));
		$("#ingresaFrascos").attr("action", urlbase+"index.php/cfrascos/guardarFrasco")
		$("#ingresaFrascos").submit();
	})
	
	$("#guardarYterminar").on("click", function() {
		$("#ingresaFrascos").attr("action", urlbase+"index.php/cfrascos/guardarFrascos")
		$("#ingresaFrascos").submit();
	})
