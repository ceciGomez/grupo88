$("#ingresaFrascos").on("click",function () {
		$("#frascosinfonroHR label span").html($("#nroHR").val());
		$("#frascosinfofextraccion label span").html($("#fextraccion").val());
		$("#frascosinfovol label span").html($("#vol").val());
		});

$("#guardarYcontinuar").on("click", function() {
		console.log($("#ingresaFrascos"));
		$("#ingresaFrascos").attr("action", urlbase+"index.php/cfrascos/guardarFrasco")
		$("#ingresaFrascos").submit();
	})
$("#guardarYterminar").on("click", function() {
		console.log($("#ingresaFrascos"));
		$("#ingresaFrascos").attr("action", urlbase+"index.php/cfrascos/guardarFrasco")
		$("#ingresaFrascos").submit();
	})
$("#formularioAnalisis").on("click",function () {
		$("#frascosinfoacidez label span").html($("#acidez").val());
		$("#frascosinfohematocritos label span").html($("#hematocritos").val());
		});
	
$("#guardaResultados").on("click", function() {
		console.log($("#guardaResultados"));
		$("#formularioAnalisis").attr("action", urlbase+"index.php/cfrascos/guardarResultados")
		$("#formularioAnalisis").submit();
	})	
