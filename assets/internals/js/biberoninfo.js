	
$("#guardaResultados").on("click", function() {
		console.log($("#guardaResultados"));
		$("#formularioCultivoBiberon").attr("action", urlbase+"index.php/cfrascos/guardarAnalisis")
		$("#formularioCultivoBiberon").submit();
	})	
