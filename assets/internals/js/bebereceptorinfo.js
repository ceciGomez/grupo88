(function () {
	//console.log($("#donanteinfonombre label"));
	/**
	* $("#guardaDonante").on("click",function () {$("#donanteinfonombre label").html($("#nombre").val());});
	* Asocio el evento al id.
	*/
	//Esto muestra en la ventana modal los datos.
	$("#guardarBr").on("click",function () {
		$("#bebereceptorinfonombre label span").html($("#nombrebr").val());
		$("#bebereceptorinfoapellido label span").html($("#apellidobr").val());
		$("#bebereceptorinfodni label span").html($("#dnibr").val());
		$("#bebereceptorinfofecha label span").html($("#fnacbr").val());
		$("#bebereceptorinfolugar label span").html($("#lugarbr").val());
		$("#bebereceptorinfonombrem label span").html($("#nombreMbr").val());
		$("#bebereceptorinfonombrep label span").html($("#nombrePbr").val());
		$("#bebereceptorinfodirec label span").html($("#direcbr").val());
		$("#bebereceptorinfoedad label span").html($("#edadGestbr").val());
		//$("#bebeasocinfonrocons label").html($("#nrocons").val());
	});

	$("#guardaBr").on("click", function() {
		console.log($("#formularioBebereceptor"));
		$("#formularioBebereceptor").submit();
	})
})()