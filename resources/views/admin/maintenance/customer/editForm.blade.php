


<style>


.labely{
    margin-top: 20px;
}

.labely{
    margin-top: 20px;
}

#forms{
    margin-bottom: 20px;
}


</style>


<div class="row" id="info">

<div class="col-md-4">
    <label for="lastname" class="labely">Lastname</label>
        <input 
            class="form-control align-center" 
            placeholder="Lastname" 
            maxlength="50" 
            name="lastname" 
            type="text"
            id="lastname"
            value="{{ isset($customer->lastname) ? $customer->lastname : old('lastname') }}"
            >
</div>

<div class="col-md-4">
    <label for="firstname" class="labely">Firstname</label>
        <input 
            class="form-control align-center" 
            placeholder="Firstname" 
            maxlength="50" 
            name="firstname" 
            type="text"
            id="firstname"
            value="{{ isset($customer->firstname) ? $customer->firstname : old('firstname') }}"
            >
</div>

<div class="col-md-4">
    <label for="middlename" class="labely">Middlename</label>
        <input 
            class="form-control align-center" 
            placeholder="Middlename" 
            maxlength="50" 
            name="middlename" 
            type="text"
            id="middlename"
            value="{{ isset($customer->middlename) ? $customer->middlename : old('middlename') }}"
            >
    </div>
</div>


<div class="row" id="info">

<div class="col-md-4">
    <label for="barangay" class="labely">Barangay</label>
        <input 
            class="form-control align-center" 
            placeholder="Barangay" 
            maxlength="50" 
            required 
            name="barangay" 
            type="text"
            id="barangay"
            value="{{ isset($customer->barangay) ? $customer->barangay : old('barangay') }}"
            >
</div>

<div class="col-md-4">
    <label for="street" class="labely">Street</label>
        <input 
            class="form-control align-center" 
            placeholder="Street" 
            maxlength="50" 
            required 
            name="street" 
            type="text"
            id="street"
            value="{{ isset($customer->street) ? $customer->street : old('street') }}"
            >
</div>

<div class="col-md-4">
    <label for="city" class="labely">City</label>
    <div id="forms">
        <input 
            class="form-control align-center" 
            placeholder="City" 
            maxlength="50" 
            name="city" 
            type="text"
            id="city"
            value="{{ isset($customer->city) ? $customer->city : old('city') }}"
            >
    </div>
</div>
</div>

<div class="row" id="info">


<div class="col-md-6">
    <label for="contact">Contact Number</label>
       <input 
            class="form-control align-center" 
            placeholder="Contact Number" 
            maxlength="50" 
            name="contact" 
            type="text"
            id="contact"
            value="{{ isset($customer->contact) ? $customer->contact : old('contact') }}"
            >
</div>

<div class="col-md-6">
    <label for="email" class="labely" >Email Address</label>
        <input 
            class="form-control align-center" 
            placeholder="Email Address" 
            maxlength="50" 
            name="email" 
            type="text"
            id="email"
            value="{{ isset($customer->email) ? $customer->email : old('email') }}"
            >
</div>

</div>
