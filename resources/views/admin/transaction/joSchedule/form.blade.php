



</style>

<section class="content-header">

	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-12">
				
				<label for="customer"> Customer Name <span class="asterisks"><strong>*</strong></span></label>
				
         
				<select name="customer" id="customer"  class="form-control select2" style="width: 100%;">
		    
				@foreach($inspects as $inspect)
					<option></option>
                    <option value="{{$inspect->customer->id}}" data-inspectId = "{{$inspect->id}}">{{$inspect->customer->firstname}} {{$inspect->customer->middlename}} {{$inspect->customer->lastname}} --- INS000{{$inspect->id}}</option>
                @endforeach

		        </select>
			</div>

      

		</div>
		 <br>

		@include('admin.layouts.customers')<br>
    <div class="row">
  
        <div class="col-md-12">
            <label for="service" class="labely">Service Search</label>
            <select name="service[]" class="form-control select2 service" multiple="multiple" style="width: 100%;">
                <option value=""></option>
                 @foreach($services as $service)
                      <option value="{{$service->id}}">{{$service->name}} </option>
                  @endforeach
            </select>
        </div>


    </div>
		

		<br>

    <div class="row">
  
        <div class="col-md-6">
            <label for="start_date" class="labely">Start Date</label>
            <input type="date" name="start" id="start" class="form-control" value="<?php echo date('Y-m-j'); ?>" required>
        </div>
        
      <br>
      <div class="col-md-6">
        <label for="startTime"> Start Time <span class="asterisks"><strong>*</strong></span></label>
        <input type="time" name="start_time" class="form-control">

      </div>
       
    </div>

    <br>

  </div>
</section>


	
@section('scripts-include')

    <!-- DataTables -->
  <script src="{{asset ('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset ('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>
  

  $(function(){
         $('.select2').select2();

    })


$(function () {
      $('#job').DataTable()
     
    });

</script>


<script>
	
	$(document).ready(function(){

    $(document).on('change', '#customer', function(event){


      var customer_id = $('#customer option:selected').val();


      var parent = $(this).parent();

      console.log(customer_id);

      var op = "";

      var ops = "";

      var inspect = $(this).data('inspectId');

      console.log(inspect);

      //console.log(customerId);

      $.ajax({

        type:"GET",
        url: '{!!URL('findCustomer')!!}',
        data:{ 'customer_id': customer_id}, 
        dataType: 'json',
        success:function(data){

          
          for(var i=0;i<=1;i++){
            $('#lastname').val(data[i].lastname);
            $('#firstname').val(data[i].firstname);
            $('#middlename').val(data[i].middlename);
            $('#barangay').val(data[i].barangay);
            $('#street').val(data[i].street);
            $('#city').val(data[i].city);
            $('#email').val(data[i].email);
            $('#contact').val(data[i].contact);
            $('#plate').val(data[i].plate_number);
            $('#model').val(data[i].brand).val(data[i].model);
            ops+= '<option selected value ="'+data[i].id+'">'+ data[i].firstName +" "+data[i].middleName+ " " +data[i].lastName+'</option>';
          
            console.log(data[i]);

                  

            }
            for(var i=0;i<1;i++){
              op+= '<option selected value ="'+data[i].service_id+'">' +data[i].name+'</option>'; 
            }

            $('.service').append(op).prop('disabled', false);
            $('.technician').append(ops).prop('disabled', false);



        },
        error:function(data){
          alert("MAMA MO ERROR");
        }

      });


      
    });
});


</script>



<script>
  
  $(document).ready(function(){

    $(document).on('change', '#services', function(){

       var service_id = $('#services option:selected').val();

       console.log(service_id);


       $.ajax({

                type: 'GET',
                url: '{!!URL('servicePar')!!}',
                data: {'service_id': service_id},
                dataType: 'json',
                success:function(data){
                    alert("success");
                    console.log(data);
                },
                error:function(data){
                  alert("ERROR!!!");
                }
       });
    });
  });




</script>




@endsection