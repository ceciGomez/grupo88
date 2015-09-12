$(document).ready(function() {
	/*$("#login.btn").on(function(event) {
		$("#formulario-login").find('input')[0];
		$("#formulario-login").find('input')[1];
	});*/
	$("#login").click(function(event) {
		if($("#userid").val()==="secretaria@cabletv.com" && $("#password").val()==="123456"){
			console.log("secretaria");
			window.location.href="secretaria/index.html";
		}else if($("#userid").val()==="tecnicos@cabletv.com" && $("#password").val()==="123456"){
			console.log("tecnicos");
			$("#formulario-login").submit();
		}else if ($("#userid").val()==="supervisor@cabletv.com" && $("#password").val()==="123456"){
			console.log("supervisor");
			$("#formulario-login").submit();
		}
	});
});