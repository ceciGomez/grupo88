(function () {
	//console.log($("#donanteinfonombre label"));
	/**
	* $("#guardaDonante").on("click",function () {$("#donanteinfonombre label").html($("#nombre").val());});
	* Asocio el evento al id.
	*/
	$("#guardaConsentimiento").on("click",function () {
		$("#donanteinfonro label").html($("#nro").val());
		$("#donanteinfonombre label").html($("#nombre").val());
		$("#donanteinfodni label").html($("#dni").val());
		$("#donanteinfoapellido label").html($("#apellido").val());
		$("#donanteinfoocupacion label").html($("#ocupacion").val());
		$("#donanteinfotipo label").html($("#tipo").val());
		$("#donanteinfoemail label").html($("#email").val());
	});

	$("#guardarTodo").on("click", function() {
		console.log($("#formularioConsentimiento"));
		$("#formularioConsentimiento").submit();
	})
	$("#guardarTodo2").on("click", function() {
		console.log($("#formularioConsentimiento2"));
		$("#formularioConsentimiento2").submit();
	})
})()