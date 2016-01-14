(function () {
	
	//Esto muestra en la ventana modal los datos.
	$("#guardaSeguimientoBr").on("click",function () {
		$("#seguimientobrinfoidbr label span").html($("#idbr").val());
		$("#seguimientobrinfofechar label span").html($("#fsegbr").val());
		$("#seguimientobrinfomedico label span").html($("#medico").val());
		$("#seguimientobrinfoaltura label span").html($("#altura").val());
		$("#seguimientobrinfopeso label span").html($("#peso").val());
		$("#seguimientobrinfopercef label span").html($("#perimCef").val());
		$("#seguimientobrinfoobs label span").html($("#obsbr").val());
		
	});

	$("#guardaSegbr").on("click", function() {
		console.log($("#formularioSeguimientoBr"));
		$("#formularioSeguimientoBr").submit();
	})

})()