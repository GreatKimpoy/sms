$(document).ready(function(){

    $(document).on('change', '#customer', function(event){


      var customerId = $('#customer option:selected').val();

      var parent = $(this).parent();

      //console.log(customerId);

      $.ajax({

        type:"GET",
        url: '{!!URL('findCustomer')!!}'
        data:{ 'id': customerId }, 
        dataType: 'json',
        success:function(data){


          $('#lastname').val(data.lastname);
          $('#firstname').val(data.firstname);
          $('#middlename').val(data.middlename);
          $('#barangay').val(data.barangay);
          $('#street').val(data.street);
          $('#city').val(data.city);
          $('#email').val(data.email);
          $('#contact').val(data.contact);

        },
        error:function(data){
          alert("MAMA MO ERROR");
        }

      });


      
    });
});
