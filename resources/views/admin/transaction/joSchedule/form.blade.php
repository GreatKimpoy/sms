
<style>
	
.asterisks{
	color: red;
}

</style>

<section class="conten-header">

	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-12">
				
				<label for="customer"> Customer Name <span class="asterisks"><strong>*</strong></span></label>
				
         
				<select name="customer" id="customer"  class="form-control select2" style="width: 100%;">
		    
				@foreach($inspects as $inspect)
					<option></option>
                    <option value="{{$inspect->customer->id}}" data-inspectId = "{{$inspect->id}}">{{$inspect->customer->firstname}} {{$inspect->customer->middlename}} {{$inspect->customer->lastname}}</option>
                @endforeach

		        </select>
			</div>

      

		</div>
		 <br>

		@include('admin.layouts.customers')
		

		<br>

	




</section>

	
@section('scripts-include')

<script>
  

  $(function(){
         $('.select2').select2();

    })

</script>


<script>
	
	$(document).ready(function(){

    $(document).on('change', '#customer', function(event){


      var customerId = $('#customer option:selected').val();


      var parent = $(this).parent();

      var op = "";

      var ops = "";



      //console.log(customerId);

      $.ajax({

        type:"GET",
        url: '{!!URL('findCustomer')!!}',
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
          $('#plate').val(data.plate_number);
          $('#model').val(data.brand).val(data.model);


          op+= '<option selected disabled value ="'+data.service_id+'">' +data.name+'</option>';
          $('.services').append(op).prop('disabled', false);
        
          ops+= '<option selected disabled value ="'+data.technian_id+'">' +data.firstname+'</option>';
          $('.technician').append(ops).prop('disabled', false);


          console.log(data);


        },
        error:function(data){
          alert("MAMA MO ERROR");
        }

      });


      
    });
});


</script>

@endsection