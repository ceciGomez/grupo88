(function () {
	$("#login-button").click(function(event){
			 event.preventDefault();
		 
		 $('form').fadeOut(500);
		 $('.wrapper').addClass('form-success');
	});

	 $("#bregistrarUs").on("click", function() {
			console.log($("#formRegistrarUsuario"));
			$("#formRegistrarUsuario").submit();
		});
})()