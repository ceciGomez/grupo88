(function () {
	
	//Esto muestra en la ventana modal los datos.
	$("#guardaSeguimientoBr").on("click",function () {
		$("#seguimientobrinfoidbr label span").html($("#idbr").val());
		$("#seguimientobrinfofechar label span").html($("#fechaBr").val());
		$("#seguimientobrinfomedico label span").html($("#medicoBr").val());
		$("#seguimientobrinfoaltura label span").html($("#alturaBr").val());
		$("#seguimientobrinfopeso label span").html($("#pesoBr").val());
		$("#seguimientobrinfopercef label span").html($("#perCefBr").val());
		$("#seguimientobrinfoobs label span").html($("#obsBr").val());
		
	});

	$("#guardaSegbr").on("click", function() {
		console.log($("#formularioSeguimientoBr"));
		$("#formularioSeguimientoBr").submit();
	})

})()