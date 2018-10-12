$(document).ready(function(){

      $('#ajaxSubmit').click(function(e){
        var service_id = $(this).data('id');
        var sequence = $('#updateStep').val();
        var jobId = $('#jobNumber').val();

        e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });


        console.log(jobId, service_id,sequence);

        jQuery.ajax({
            url: "{{ url('/sequence/post') }}",
            method: 'post',
            data: {
                    _token : $('meta[name="csrf-token"]').attr('content'), 
                     service_id: service_id,
                     job_id: jQuery('#jobNumber').val(),
                     sequence: sequence,
                     contentType: "application/json; charset=utf-8",
            },
            success: function(result){
               alert('success');  
            }});


    });
});