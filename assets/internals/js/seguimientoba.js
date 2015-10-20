(function () {
	
	//Esto muestra en la ventana modal los datos.
	$("#guardaSeguimientoBa").on("click",function () {
		$("#seguimientobainfoidba label span").html($("#idba").val());
		$("#seguimientobainfofecha label span").html($("#fsegba").val());
		$("#seguimientobainfomedico label span").html($("#medico").val());
		$("#seguimientobainfoaltura label span").html($("#altura").val());
		$("#seguimientobainfopeso label span").html($("#peso").val());
		$("#seguimientobainfopercef label span").html($("#perimCef").val());
		$("#seguimientobainfoobs label span").html($("#obsba").val());
		
	});

	$("#guardaSegba").on("click", function() {
		console.log($("#formularioSeguimientoBa"));
		$("#formularioSeguimientoBa").submit();
	})

})()