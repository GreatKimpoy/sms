
<style>

    .asterisks{
         color: red;
         font-size: 20px;
    }

    .labely{
        margin-top: 20px;
        padding-left: 10px;
    }

    .label{
        margin-top: 25px;
        padding-left: 10px;
    }

    #forms{
        margin-bottom: 20px;
        margin-left: 10px;
    }

    #form{
        padding-left: 10px;

    }

    #margins{
        margin-bottom: 20px;
    }

</style>    




<div class="row">

    <div class="col-md-6">
        <label for="brand" class="labely">Make</label><span class="asterisks"><strong>*</strong></span>
             <input 
                class="form-control align-center" 
                placeholder="Make" 
                maxlength="50" 
                required 
                name="make" 
                type="text"
                id="make"
                value="{{ isset($category->make) ? $category->make : old('make') }}">
    </div>

     <div class="col-md-6">
        <label for="model" class="labely">Model</label><span class="asterisks"><strong>*</strong></span>
             <input 
                class="form-control align-center" 
                placeholder="Model & Year" 
                maxlength="50" 
                required 
                name="model" 
                type="text"
                id="model"
                value="{{ isset($category->model) ? $category->model : old('model') }}">
    </div>
</div>


<div class="row">

    <div class="col-md-6">
        <label for="size" class="labely">Size Classification <span class="asterisks">*</span> </label>
        <select class="form-control select2" name= "size" style="width: 100%;" data-placeholder="Select Size Classification" value="{{ isset($category->size) ? $category->size : old('size') }}">
            <option></option>
            <option value="Truck">Truck</option>
            <option value="Sedan">Sedan</option>
        </select>

    </div><br>

    <div class="col-md-6">
          <label for="trans">Transmission Type</label><span class="asterisks">*</span><br>
             <div class="col-md-12">
                <select class="form-control select2" name="Transmission" style="width: 100%;" data-placeholder="Select Transmission Type">
                    <option></option>
                    <option value="Automatic">Automatic</option>
                    <option value="Manual"> Manual</option>
                    <option value="AT & MT">Automatic Manual </option>
                </select>
             </div>
    </div>
</div>
<br>





