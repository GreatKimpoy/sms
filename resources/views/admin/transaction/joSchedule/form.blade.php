
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
                    <option value="{{$inspect->customer->id}}">{{$inspect->customer->firstname}} {{$inspect->customer->middlename}} {{$inspect->customer->lastname}}</option>
                @endforeach
		   	
		        </select>
			</div>


		</div>
		 <br>

		 <div class="row">
		 	<div class="col-md-3">
		 		<label for="start"> Start Date <span class="asterisks"><strong>*</strong></span></label>
		 		<input type="date" name="start_date" class="form-control" id="dateDefault">

		 	</div>
		 	<div class="col-md-3">
		 		<label for="startTime"> Start Time <span class="asterisks"><strong>*</strong></span></label>
		 		<input type="time" name="start_time" class="form-control">

		 	</div>
		 	<div class="col-md-3">
		 		<label for="end"> End Date <span class="asterisks"><strong>*</strong></span></label>
		 		<input type="date" name="end_date" class="form-control" id="dateDefaults">

		 	</div>
		 	<div class="col-md-3">
		 		<label for="endTime"> End Time <span class="asterisks"><strong>*</strong></span></label>
		 		<input type="time" name="end_time" class="form-control">

		 	</div>
		 </div>

		<br>

		<div class="row">
			<div class="col-md-6">
		        <label for="model" class="labely">Technician(s) Assigned <span class="asterisks"><strong>*</strong></span> </label>
		            <select name="technician[]" id="tech" class="form-control select2" multiple="multiple" style="width: 100%;">
								@foreach($technicians as $technician)
                    <option value="{{$technician->id}}">{{$technician->firstname}} {{$technician->middlename}} {{$technician->lastname}}</option>
                @endforeach
		       
		     
		            </select>
		    </div>



			<div class="col-md-6">
				
				<label for="service"> Services Offered: <span class="asterisks"><strong>*</strong></span> </label>

						<select name="service[]" id="service" class="form-control select2" multiple="multiple" style="width: 100%;">
						@foreach($services as $service)
												
												<option value="{{$service->id}}">{{$service->name}} </option>
							@endforeach
					
								</select>
			</div>
    
		</div>
		

		<br>

	




</section>

	
