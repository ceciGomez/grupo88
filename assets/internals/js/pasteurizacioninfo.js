(function () {
	$("#verFrascos").on("click", function() {
		//if ( $("#example1").find("input[type=checkbox]:checked").length === 3) {
		//	$("#agregarFrascos").submit();
		//} else {
		//	alert("son 35 pe");
		//}
		console.log($("#agregarFrascos"));
		$("#agregarFrascos").submit();
	})
	$("#botonConfirmaFrascos").on("click", function() {
		console.log($("#confirmaFrascos"));
		$("#confirmaFrascos").submit();
	})
	$("#botonRegPasteu").on("click", function() {
		console.log($("#regPasteurizacion"));
		$("#regPasteurizacion").submit();
	})
	$("#botonCrearBiberon").on("click", function() {
		console.log($("#formCrearBiberon"));
		$("#formCrearBiberon").submit();
	})
	$("#botonguardaEditar").on("click", function() {
		console.log($("#formEditarPasteurizacion"));
		$("#formEditarPasteurizacion").submit();
	})
	$("#botonCancelaPast").on("click", function() {
		console.log($("#formCancela"));
		$("#formCancela").submit();
	})


})()