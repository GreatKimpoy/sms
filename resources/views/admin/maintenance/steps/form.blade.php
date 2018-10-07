 

<style>
    .asterisks{
        color: red;
        font-size: 20px;
    }
    .labely{
        margin-top: 10px;
    }
    #form{
        margin-bottom: 20px;
    }
</style>



<div class="row">

	<div class="col-md-6">
		<label for="serviceName">Service Name <span class="asterisks"><strong>*</strong></span></label>
		<select name="category" class="form-control select2" required>
            <option></option>
        </select>
	</div>	

	<div class="col-md-6">
		<label for="stepsSequence">Sequence </label><span class="asterisks"><strong>*</strong></span>
		 <input
                class="form-control align-center" 
                placeholder="Step Sequence"
                maxlength="100" 
                name="sequence"
                cols="50"
                id="sequence"
                value="">
	</div>


</div> <br>

<div class="row">
	
	<div class="col-md-12">
		<label for="stepsDescription">Description</label><span class="asterisks"><strong>*</strong></span>
		 <textarea 
                class="form-control align-center" 
                placeholder="Description"
                maxlength="100" 
                name="description"
                cols="50"
                id="description"
                rows="10">{{ isset($service->description) ? $service->description : old('description') }}</textarea>
	</div>

</div><br>




@section('scripts-include')

<script>
    $(function(){
         $('.select2').select2();

    })
</script>

@endsection