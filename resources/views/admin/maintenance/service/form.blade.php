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
    <div class="col-lg-12">
        <label for="name">Name</label><span class="asterisks"><strong>*</strong></span>
            <input 
                class="form-control align-center" 
                placeholder="Name" 
                maxlength="50" 
                required 
                name="name" 
                type="text"
                id="name"
                value="{{ isset($service->name) ? $service->name : old('name') }}">
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
            <label for="description" class="labely">Description</label><span>*</span>
            <textarea 
                class="form-control align-center" 
                placeholder="Description"
                maxlength="100" 
                name="description"
                cols="50"
                id="description"
                rows="10">{{ isset($service->description) ? $service->description : old('description') }}</textarea>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
            <label for="description" class="labely">Standard time</label><span>*</span>
            <input
                class="form-control align-center" 
                placeholder="Standard Time"
                maxlength="100" 
                name="standard_time"
                cols="50"
                id="standard_time"
                value="{{ isset($service->standard_time) ? $service->standard_time : old('standard_time') }}">
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
            <label for="category">Category</label><span class="asterisks"><strong>*</strong></span>
            <select name="category" class="form-control select2" required>
            @foreach($categories as $category)
                <option
                    value="{{ $category->id }}"
                    {{ ( old('category') == $category->id || ( isset( $service->category_id ) && $category->id == $service->category_id ) ) ? 'selected' : "" }}>{{ $category->name }}</option>
            @endforeach
            </select>
    </div>
</div>

<br>


@section('scripts-include')

<script>
    $(function(){
         $('.select2').select2();

    })
</script>

@endsection