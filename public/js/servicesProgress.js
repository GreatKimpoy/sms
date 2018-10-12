  $(document).ready(function(){

    var jobId = $('#jobNumber').val();
        var d = new Date();
        var time = d.getHours() + ":" + d.getMinutes();
        var month = d.getMonth()+1;
        var day = d.getDate();
        var output = d.getFullYear() + '/' +
            ((''+month).length<2 ? '0' : '') + month + '/' +
            ((''+day).length<2 ? '0' : '') + day;

    $('#btnStart').click(function(e){


		var validate = confirm("Are you sure to start this job?");
    		if (validate==true){
    				confirm("The Job has been started");
                    $(this).prop("disabled",true);
                    $('table.table-bordered tr td button').each(function(){
                        $(this).prop("disabled",false);    

                    });
                    $('#startTime').val(time).text(time);
                    var jobId = $('#jobNumber').val();
                    var startEnabled = parseInt("1");
                    e.preventDefault();
                    $.ajaxSetup({
                                  headers: {
                                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                  }
                              });
                        jQuery.ajax({
                                        url: "{{ url('/start/post') }}",    
                                        method: 'post',
                                        data: {
                                                _token : $('meta[name="csrf-token"]').attr('content'), 
                                                 job_id: jQuery('#jobNumber').val(),
                                                 startEnabled: startEnabled,
                                                 contentType: "application/json; charset=utf-8",
                                        },
                                        success: function(result){
                                           alert('success');  
                            }});
    		}
    		else{
    			$(this).prop("disabled",false);
    		}    	
     
    })

    $('#btnStop').click(function(){
    	var validate = confirm("Are you sure to finish this job?");
    		if (validate==true){
    				$(this).prop("disabled",true);
    		}
    		else{
    			$(this).prop("disabled",false);
    		}
	});

});



