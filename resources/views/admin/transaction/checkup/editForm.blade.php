

<div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('firstName', 'First Name') !!}<span>*</span>
                {!! Form::input('text','customer[firstname]',null,[
                    'class' => 'form-control',
                    'name' => 'firstname',
                    'id' => 'firstName',
                    'placeholder'=>'First Name',
                    'maxlength'=>'45',
                    'required']) 
                !!}
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('middleName', 'Middle Name') !!}
                {!! Form::input('text','customer[middlename]',null,[
                    'class' => 'form-control',
                    'name' => 'middlename',
                    'id' => 'middlename',
                    'placeholder'=>'Middle Name',
                    'maxlength'=>'45']) 
                !!}
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('lastName', 'Last Name') !!}<span>*</span>
                {!! Form::input('text','customer[lastname]',null,[
                    'class' => 'form-control',
                    'name' => 'lastname',
                    'id' => 'lastName',
                    'placeholder'=>'Last Name',
                    'maxlength'=>'45',
                    'required']) 
                !!}
            </div>
        </div>
        <div class="row">
        
            <div class="form-group col-md-4">
                {!! Form::label('contact', 'Contact No.') !!}<span>*</span>
                {!! Form::input('text','customer[contact]',null,[
                    'class' => 'form-control',
                    'name' => 'contact',
                    'id' => 'contact',
                    'placeholder'=>'Contact',
                    'required']) 
                !!}
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('email', 'Email') !!}
                {!! Form::input('text','customer[email]',null,[
                    'class' => 'form-control',
                    'name' => 'email',
                    'id' => 'emails',
                    'maxlength'=>'45',
                    'placeholder'=>'Email']) 
                !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('street', 'No. & St./Bldg.') !!}
                {!! Form::textarea('customer[street]',null,[
                    'class' => 'form-control',
                    'name' => 'street',
                    'id' => 'street',
                    'placeholder'=>'No. & St./Bldg.',
                    'maxlength'=>'140',
                    'rows' => '1']) 
                !!}
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('brgy', 'Brgy./Subd.') !!}
                {!! Form::textarea('customer[barangay]',null,[
                    'class' => 'form-control',
                    'name' => 'barangay',
                    'id' => 'barangay',
                    'placeholder'=>'Brgy./Subd.',
                    'maxlength'=>'140',
                    'rows' => '1']) 
                !!}
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('city', 'City/Municipality') !!}<span>*</span>
                {!! Form::textarea('customer[city]',null,[
                    'class' => 'form-control',
                    'name' => 'city',
                    'id' => 'city',
                    'placeholder'=>'City/Municipality',
                    'maxlength'=>'140',
                    'rows' => '1',
                    'required']) 
                !!}
            </div>
        </div>
    </div>
</div>


<div class="row">

    <div class="col-md-6">
         <div class="form-group">
         <label for="model" class="labely">Technician(s) Assigned</label><span class="asterisks"><strong>*</strong></span>
            <select name="technician[]" class="select2 form-control" multiple="multiple" style="width: 100%;" required>

            @foreach($technicians as $technician)
                <option value="{{$technician->id}}">{{$technician->firstName}} {{$technician->middleName}} {{$technician->lastName}}</option>
            @endforeach

     
            </select>
        </div>
    </div>
    
    
    <div class="col-md-3">

        {!! Form::label('plate', 'Vehicle Plate') !!}<span>*</span>
        {!! Form::input('text','vehicle[plate_number]',null,[
            'class' => 'form-control',
            'name' => 'plate',
            'id' => 'plate',
            'placeholder'=>'Vehicle Plate',
            'required']) 
        !!}

    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="model" class="labely">Vehicle Model</label>
             <select name="modelId"  class="form-control select2" style="width: 100%;">
                
                 @foreach($autos as $model)
                <option value="{{$model->id}}">{{$model->make}} - {{$model->model}} </option>
                  @endforeach
                </select>
        </div>
    </div>
        
   
    
    <div class="col-md-12">
        <label for="service" class="labely">Service Search</label>
        <select name="service[]" class="form-control select2 service" multiple="multiple"  style="width: 100%;" required>
                  @foreach($services as $service)
                      <option value="{{$service->id}}"> {{$service->name}}</option>
                  @endforeach
              </select>
    </div>



</div>


@include('admin.transaction.checkup.box')
<div class="row">
    <div class="col-md-12">
         <div class="form-group">
            {!! Form::submit('Update', ['class'=>'btn btn-primary btn-block']) !!}
        </div>
    </div>
</div>



@section('scripts-include')


<script src="{{ URL::asset('plugins/formbuilder/form-builder.min.js') }}"></script>
<script src="{{ URL::asset('plugins/formbuilder/form-render.min.js') }}"></script>


<script src="{{ URL::asset('js/inspect.js') }}"></script>
<script src="{{ URL::asset('js/inspection.js') }}"></script>


<script>
    

$(document).on('focus','#plate',function(){
    $(this).popover({
        trigger: 'manual',
        content: function(){
            var content = '<button type="button" id="po" class="btn btn-primary btn-block">ABC 123</button><button type="button" id="ps" class="btn btn-primary btn-block">ABC 45</button><button type="button" id="pn" class="btn btn-primary btn-block">ABC 1234</button><button type="button" id="pnn" class="btn btn-primary btn-block">AB 1234</button><button type="button" id="pvip" class="btn btn-primary btn-block">VIP</button><button type="button" id="ph" class="btn btn-primary btn-block">For Registration</button>';
            return content;
        },
        html: true,
        placement: function(){
            var placement = 'top';
            return placement;
        },
        template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
        title: function(){
            var title = 'Choose a format:';
            return title;
        }
    });
    $(this).popover('show');
});
$(document).on('focusout','#plate',function(){
    $(this).popover('hide');
});
$(document).on('click','#po',function(){
    $('#plate').val('');
    $('#plate').inputmask("AAA 999");
});
$(document).on('click','#pn',function(){
    $('#plate').val('');
    $('#plate').inputmask("AAA 9999");
});
$(document).on('click','#ps',function(){
    $('#plate').val('');
    $('#plate').inputmask("AAA 99");
});
$(document).on('click','#pnn',function(){
    $('#plate').val('');
    $('#plate').inputmask("AA 9999");
});
$(document).on('click','#pvip',function(){
    $('#plate').val('');
    $('#plate').inputmask("99");
});
$(document).on('click','#ph',function(){
    $('#plate').val('');
    $('#plate').inputmask();
    $('#plate').val("For Registration");
});


</script>


<script>

    $(document).on('focus','#contact',function(){
    $(this).popover({
        trigger: 'manual',
        content: function(){
            var content = '<button type="button" id="cp" class="btn btn-primary btn-block">Mobile No.</button><button type="button" id="tp" class="btn btn-primary btn-block">Telephone No.</button>';
            return content;
        },
        html: true,
        placement: function(){
            var placement = 'top';
            return placement;
        },
        template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
        title: function(){
            var title = 'Choose a format:';
            return title;
        }
    });
    $(this).popover('show');
});
$(document).on('focusout','#contact',function(){
    $(this).popover('hide');
});
$(document).on('click','#cp',function(){
    $('#contact').val('');
    $('#contact').inputmask("+63 999 9999 999");
});

$(document).on('click','#tp',function(){
    $('#contact').val('');
    $('#contact').inputmask("(02) 999 9999");
});
$(document).on('click','#tpl',function(){
    $('#contact').val('');
    $('#contact').inputmask("(02) 999 9999 loc. 9999");
});



    $(function(){
         $('.select2').select2();

    })


</script>


   

     @foreach($inspect->inspection as $detail)
        <script>
            form = JSON.stringify({!! $detail->remarks !!});
            popForm({{$detail->item->type_id}},"{{$detail->item->type->type}}",{{$detail->item_id}},"{{$detail->item->name}}",form)
        </script>
    @endforeach

@stop