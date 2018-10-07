

<style>
    .asterisks{
        color: red;
    }
    .labely{
        margin-top: 10px;
    }
    #forms{
        margin-bottom: 20px;
    }

    #tech-pic{
        margin-top: 10px;
        margin-left: 450px;
    }

    .form{
        margin-left: 400px;
        margin-top:  
    }

</style>


<div class="row">
    <div class="col-md-4">
        <label for="lastname">Lastname</label><span class="asterisks"><strong>*</strong></span>
            <input 
                class="form-control align-center" 
                placeholder="Lastname" 
                maxlength="50" 
                required 
                name="lastname" 
                type="text"
                id="lastname"
                value="{{ isset($technician->lastname) ? $technician->lastname : old('lastname') }}">
    </div>

    <div class="col-md-4">
        <label for="firstname">Firstname</label><span class="asterisks"><strong>*</strong></span>
            <input 
                class="form-control align-center" 
                placeholder="Firstname" 
                maxlength="50" 
                required 
                name="firstname" 
                type="text"
                id="firstname"
                value="{{ isset($technician->firstname) ? $technician->firstname : old('firstname') }}">

    </div>

    <div class="col-md-4">
        <label for="firstname">Middlename</label><span class="asterisks"><strong>*</strong></span>
             <input 
                class="form-control align-center" 
                placeholder="Middlename" 
                maxlength="50" 
                required 
                name="middlename" 
                type="text"
                id="middlename"
                value="{{ isset($technician->middlename) ? $technician->middlename : old('middlename') }}">
    </div>
</div>


<div class="row">
    <div class="col-md-4">
       <label for="street" class="labely">Street</label><span class="asterisks"><strong>*</strong></span>
              <input 
                class="form-control align-center" 
                placeholder="Street" 
                maxlength="50" 
                required 
                name="street" 
                type="text"
                id="street"
                value="{{ isset($technician->barangay) ? $technician->barangay : old('barangay') }}">

    </div>

    <div class="col-md-4">
        <label for="street" class="labely">Barangay</label><span class="asterisks"><strong>*</strong></span>
              <input 
                class="form-control align-center" 
                placeholder="Barangay" 
                maxlength="50" 
                required 
                name="barangay" 
                 type="text"
                id="barangay"
                value="{{ isset($technician->barangay) ? $technician->barangay : old('barangay') }}">
    </div>

    <div class="col-md-4">
        <label for="city" class="labely">City</label><span class="asterisks"><strong>*</strong></span>
              <input 
                class="form-control align-center" 
                placeholder="City" 
                maxlength="50" 
                required 
                name="city" 
                type="text"
                id="city"
                value="{{ isset($technician->city) ? $technician->city : old('city') }}">
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <label for="birthdate" class="labely">Birthdate</label><span class="asterisks"><strong>*</strong></span>
            <input 
                class="form-control align-center" 
                placeholder="Birthdate" 
                maxlength="50" 
                required 
                name="birthdate" 
                type="date"
                id="birthdate"
                value="{{ isset($technician->birthdate) ? $technician->birthdate : old('birthdate') }}">
    </div>

    <div class="col-md-4">
        <label for="contact" class="labely">Contact Number</label><span class="asterisks"><strong>*</strong></span>
            <input 
                class="form-control align-center" 
                placeholder="Contact Number" 
                maxlength="50" 
                required 
                name="contact" 
                type="text"
                id="contact"
                value="{{ isset($technician->contact) ? $technician->contact : old('contact') }}">
    </div>

    <div class="col-md-4">
        <label for="email" class="labely">Email Address</label><span class="asterisks"><strong>*</strong></span>
            <input 
                class="form-control align-center" 
                placeholder="Email Address" 
                maxlength="50" 
                required 
                name="email" 
                type="email"
                id="emails"
                value="{{ isset($technician->email) ? $technician->email : old('email') }}">
    </div>
</div>

<div class="row">
    
      <div class="col-md-4">
            <div class="row">
                <center><img class="img-responsive" id="tech-pic" src="{{asset ('dist/img/avatar.png')}}" style="max-width:150px; background-size: contain" /></center>
                <center class="form">
                            
                            {!! Form::file('image',[
                                'class' => 'form-control',
                                'name' => 'image',
                                'class' => 'btn btn-success btn-sm',
                                'onchange' => 'readURL(this)']) 
                            !!}
                </center>
            </div>
        </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="specializations" class="labely">Specialization</label><span class="asterisks"><strong>*</strong></span>
            <select 
                name="specializations[]" 
                class="form-control select2"
                id="form" 
                multiple= "multiple"
                data-placeholder="Select Specialization">
            </select>
        </div>
    </div>
</div>





@section('scripts-include')

<script>
    $(function(){
         $('.select2').select2();

    })
</script>

@endsection
