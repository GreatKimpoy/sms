 

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
        <div class="box box-primary">
            <div class="box-block">
                <div class="box-header"><strong><h4> Service Steps Form </h4><hr> </strong></div>
                  <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="serviceName">Service Name <span class="asterisks"><strong>*</strong></span></label>
                            <select name="category" class="form-control select2" required>
                                <option></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="box box-primary mt-3">
            <div class="box-block pt-3">
                <div class="box-header"></div>
                  <div id="steps" class="box-body">
                    <div class="row">
                        <div class="col-md-12">
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
                    </div>
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
                    </div>
                </div>
                <div class="box-footer">
                    <div class="col-md-12">
                        <div class="box-footer">
                          <button id="addItem" type="button" class="btn btn-md btn-primary pull-right" data-toggle="tooltip" data-placement="top" title="Add">
                             <i class="fa fa-plus"></i>
                          </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><br>

	



@section('scripts-include')

<script>
    $(function(){
         $('.select2').select2();

    })
</script>

<script>
    $(document).on("click", "#addItem", function (){
    var value = $("#steps").clone().prepend(
        '<button id="removeItem" type="button" class="btn btn-flat btn-danger btn-xs pull-right" data-toggle="tooltip" data-placement="top" title="Remove">' +
        '<i class="fa fa-trash"></i>' +
        '</button>'
    ).appendTo('#steps');
    $(value).find("input").val("");
    $(value).find("textarea").text("");
});

    $(document).on("click", "#removeItem", function (){
    context = $(this).parent();
    $(context).remove();
});


</script>

@endsection