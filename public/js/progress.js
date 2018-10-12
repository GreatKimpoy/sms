



$(document).ready(function(){


	$("table.table-striped").on("click", "#check", function(event){

		var progressCount = 0, stepCount=0 , progressPercent = 0, temp;

		var id = $(this).data('stepid');
		var serviceId = $(this).data('serviceid');

		console.log(serviceId);

		$('table.table-striped tr td input').each(function(){

			var check= $(this).data('stepid');
			var serviceid = $(this).data('serviceid');
			check = parseInt(check);
			if((this.id) == "check" && check <= id && serviceid <= serviceId )
				$(this).prop("checked", "checked");
			else
				$(this).prop("checked", false);
			stepCount++;

		});


		progressCount= $(":checkbox:checked").length;
		progressPercent = (progressCount / stepCount )*100;
		temp = progressPercent.toFixed(2) + "%";
		if (progressPercent < 100){
			$('#stepProgress').removeClass('progress-bar').addClass('progress-bar progress-bar-success');
		}
		else if (progressPercent == 100){
			$('#stepProgress').removeClass('progress-bar progress-bar-success').addClass('progress-bar progress-bar-info');
		}

		progressPercent = parseFloat(progressPercent).toFixed(2);
		$('#stepProgress').css('width', temp);
		$('#stepProgress').text(progressPercent + "%");
		$('#updateStep').val(progressCount);	
	});
});





