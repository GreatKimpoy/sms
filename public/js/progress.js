



$(function(){


	$("table.table-striped").on("click", "#check", function(event){

		var progressCount = 0, stepCount=0 , progressPercent = 0, temp;

		var id = $(this).data('stepid');

		$('table.table-striped tr td input').each(function(){

			var check= $(this).data('stepid');
			check = parseInt(check);
			if((this.id) == "check" && check <= id )
				$(this).prop("checked", "checked")  ;
			else
				$(this).prop("checked", false);
			stepCount++;

		});

		progressCount= id;
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
		$('#updateStep').val(id);	
		$('#currentStep').text("Step"+" "+ progressCount +" "+ "of" +" "+stepCount);

		if(progressCount == stepCount){
			$('#status').html($('<i/>',{style:'color:green',class:'fa fa-check'})).append(' Completed');
		}
		else{
			$('#status').html($('<i/>',{style:'color:red',class:'fa fa-circle'})).append(' In-Progress');
		}


	});
});





