(function () {
	//console.log($("#donanteinfonombre label"));
	/**
	* $("#guardaDonante").on("click",function () {$("#donanteinfonombre label").html($("#nombre").val());});
	* Asocio el evento al id.
	*/
	//Esto muestra en la ventana modal los datos.
	$("#guardaDonante").on("click",function () {
		$("#donanteinfonro label").html($("#nro").val());
		$("#donanteinfonombre label").html($("#nombre").val());
		$("#donanteinfodni label").html($("#dni").val());
		$("#donanteinfoapellido label").html($("#apellido").val());
		$("#donanteinfoocupacion label").html($("#ocupacion").val());
		$("#donanteinfotipo label").html($("#tipo").val());
		$("#donanteinfoemail label").html($("#email").val());
	});

	$("#guardarTodo").on("click", function() {
		console.log($("#formularioDonante"));
		$("#formularioDonante").submit();
	})
})()