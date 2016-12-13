$(document).ready(function(){
	$("#eliminar").click(function(){
		var cod = $("#id").val();
		$.post("index.php/welcome/eliminar",{id:cod},function(data){

			console.log(data);


		})




	})








})