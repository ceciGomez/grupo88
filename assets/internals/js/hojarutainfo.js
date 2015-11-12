(function () {
	//console.log($("#donanteinfonombre label"));
	/**
	* $("#guardaDonante").on("click",function () {$("#donanteinfonombre label").html($("#nombre").val());});
	* Asocio el evento al id.
	*/
	//Esto muestra en la ventana modal los datos.
	/*$("#guardaDonante").on("click",function () {
		$("#donanteinfonro span").html($("#nro").val());
		$("#donanteinfonombre span").html($("#nombre").val());
		$("#donanteinfodni span").html($("#dni").val());
		$("#donanteinfoapellido span").html($("#apellido").val());
		$("#donanteinfoocupacion span").html($("#ocupacion").val());
		$("#donanteinfoestudios span").html($("[name=estudios]").val());
		$("#donanteinfotipo span").html($("[name=tipo]").val());
		$("#donanteinfoestadocivil span").html($("[name=estadoCivil]").val());
		$("#donanteinfoemail span").html($("#email").val());
	});
	*/
	$("#buscarConsxfiltro").on("click", function() {
		console.log($("#buscarConsxfiltro_form"));
		$("#buscarConsxfiltro_form").submit();
	})

	$("#generarHR").on("click", function() {
		console.log($("#formularioHR"));
		$("#formularioHR").submit();
	})

	$("#agregarConsentimientos").on("click", function() {
		console.log($("#formAgregarCons"));
		$("#formAgregarCons").submit();
	})

	$("#quitarCons").on("click", function() {
		console.log($("#formularioHR3"));
		$("#formularioHR3").submit();
	})
	
})()