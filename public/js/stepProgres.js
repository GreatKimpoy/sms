	

$(document).ready(function(){


	$('#btnSubmit').on("click", function(){

		var id = $('#updateStep').val();

		var formData = $('#check').serialize();

		console.log(formData);

	});

});