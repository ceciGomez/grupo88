(function () {
	//console.log($("#donanteinfonombre label"));
	/**
	* $("#guardaDonante").on("click",function () {$("#donanteinfonombre label").html($("#nombre").val());});
	* Asocio el evento al id.
	*/
	//Esto muestra en la ventana modal los datos.
	$("#guardaSerologia").on("click",function () {
		$("#Iconsentimientonro span").html($("#nro").val());
		$("#Iconsentimientonombre span").html($("#nombre").val());
		$("#Iconsentimientoapellido span").html($("#apellido").val());
		
	});

	$("#guardarTodo").on("click", function() {
		console.log($("#formularioSerologia"));
		$("#formularioSerologia").submit();
	})

	//click en cualquier lugar refresh registrar serologia que se ponga en blanco todo
})()