(function () {
	//console.log($("#centroinfonombre label"));
	/**
	
	* Asocio el evento al id.
	*/
	//Esto muestra en la ventana modal los datos.
	$("#guardaCentro").on("click",function () {
		$("#centroinfonombre label span").html($("#nombre").val());
		$("#centroinfodireccion label span").html($("#direccion").val());
		$("#centroinfotelefono label span").html($("#telefono").val());
		
	});

	$("#guardarTodo").on("click", function() {
		console.log($("#formularioCentros"));
		$("#formularioCentros").submit();
	})

	
})()