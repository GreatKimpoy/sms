
<style>
    .asterisks{
        color: red;
        font-size: 20px;
    }
</style>



   <div class="row">
       <div class="col-md-12">
            <label for="name">Name</label><span class="asterisks"><strong>*</strong></span>
            <input 
                class="form-control align-center" 
                placeholder="Name" 
                maxlength="50" 
                required 
                name="name" 
                type="text"
                id="name"
                value="{{ isset($category->name) ? $category->name : old('name') }}"><br>
       </div>
       <div class="col-md-12">
               <label for="description">Description</label><span class="asterisks"></span>
                <textarea 
                    class="form-control align-center" 
                    placeholder="Description"
                    maxlength="100" 
                    name="description"
                    cols="50"
                    id="description"
                    rows="10">{{ isset($category->description) ? $category->description : old('description') }}</textarea><br>
       </div>
   </div>