(function () {
	//console.log($("#centroinfonombre label"));
	/**
	
	* Asocio el evento al id.
	*/
	//Esto muestra en la ventana modal los datos.
	$("#guardaCentro").on("click",function () {
		$("#centroinfonombre span").html($("#nombre").val());
		$("#centroinfodireccion span").html($("#direccion").val());
		$("#centroinfotelefono span").html($("#telefono").val());
		$("#centroinfolocalidad span").html($("#Localidad").val());
	});

	$("#guardarTodo").on("click", function() {
		console.log($("#formularioCentros"));
		$("#formularioCentros").submit();
	})

	
})()