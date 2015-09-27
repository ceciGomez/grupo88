(function () {
	//console.log($("#donanteinfonombre label"));
	/**
	* $("#guardaDonante").on("click",function () {$("#donanteinfonombre label").html($("#nombre").val());});
	* Asocio el evento al id.
	*/
	//Esto muestra en la ventana modal los datos.
	$("#guardaDonante").on("click",function () {
		$("#donanteinfonro span").html($("#nro").val());
		$("#donanteinfonombre span").html($("#nombre").val());
		$("#donanteinfodni span").html($("#dni").val());
		$("#donanteinfoapellido span").html($("#apellido").val());
		$("#donanteinfoocupacion span").html($("#ocupacion").val());
		$("#donanteinfotipo span").html($("#tipo").val());
		$("#donanteinfoemail span").html($("#email").val());
	});

	$("#guardarTodo").on("click", function() {
		console.log($("#formularioDonante"));
		$("#formularioDonante").submit();
	})
})()