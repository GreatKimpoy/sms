

$(function(){

	$("#btnStart").click(function(){

		var d = new Date();
		var month = d.getMonth()+1;
		var day = d.getDate();

		var output = d.getFullYear() + '/' +
		    ((''+month).length<2 ? '0' : '') + month + '/' +
		    ((''+day).length<2 ? '0' : '') + day;


	  	$(this).find('i').remove();
	  	if($(this).text().trim()== 'START'){
	  		$(this).removeClass('btn-success').addClass('btn-danger').html($('<i/>',{class:'fa fa-stop'})).append(' STOP');
	  		$('#start').text(output);

	  	}
	  	else{
	  		$(this).removeClass('btn-danger').addClass('btn-success').html($('<i/>',{class:'fa fa-play'})).append(' START');
	  		$('#end').text(output);
	  	}
	});

});