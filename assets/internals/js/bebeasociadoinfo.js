(function () {
	//console.log($("#donanteinfonombre label"));
	/**
	* $("#guardaDonante").on("click",function () {$("#donanteinfonombre label").html($("#nombre").val());});
	* Asocio el evento al id.
	*/
	//Esto muestra en la ventana modal los datos.
	$("#guardarBebea").on("click",function () {
		//$("#bebeasocinfonro label span").html($("#nroba").val());
		$("#bebeasocinfonombre label span").html($("#nombreba").val());
		$("#bebeasocinfoapellido label span").html($("#apellidoba").val());
		$("#bebeasocinfodni label span").html($("#dniba").val());
		$("#bebeasocinfofecha label span").html($("#fnacba").val());
		$("#bebeasocinfolugar label span").html($("#lugarbebea").val());
		$("#bebeasocinfoedad label span").html($("#edadgestba").val());
		//$("#bebeasocinfonrocons label").html($("#nrocons").val());
	});
	/* Esto lleva a la alta del bebe en el controlador de bebe asociado
	cbebe.
	*/
	$("#guardaBebea").on("click", function() {
		console.log($("#formularioBebeasociado"));
		$("#formularioBebeasociado").attr("action", urlbase+"index.php/cbebe/altaBebeasociado")
		$("#formularioBebeasociado").submit();
	})
	$("#guardaBebeacons").on("click", function() {
		console.log($("#formularioBebeasociadocons"));
		$("#formularioBebeasociadocons").attr("action", urlbase+"index.php/cbebe/altaBebeasociado")
		$("#formularioBebeasociadocons").submit();
	})
	/* Esto borra la donante previamente cargada si se descarta el bebe
	es una condicion del analisis.
	*/
    $("#descartaBebea").on("click", function() {
		$("#formularioBebeasociado").attr("action", urlbase+"index.php/cdonante/borrarDonante")
		$("#formularioBebeasociado").submit();
	})

	$("#descartaBebeacons").on("click", function() {
		$("#formularioBebeasociado").attr("action", urlbase+"index.php/consentimiento/buscar")
		$("#formularioBebeasociado").submit();
	})

})()
