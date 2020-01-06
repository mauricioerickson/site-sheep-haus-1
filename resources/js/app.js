require("./bootstrap");

import "./components/scripts";

$(function(){
	$('.botao-formulario-padrao').click(function(){
		let dataString = 'nome='+ name + '$tipo=' + type;
		$.ajax({
			Type:"PUT",
			url:"/property/{id}",
			data: dataString,
			sucess: function(){
				console.log("sucesso");
			}
		});
		return false;
	});
});
