<div class="row">

    <div class="col-md-6">
        <label for="model" class="labely">Technician(s) Assigned</label><span class="asterisks"><strong>*</strong></span>
            <select name="technician[]" class="form-control select2" multiple="multiple" style="width: 100%;">

            @foreach($technicians as $technician)
                <option value="{{$technician->id}}">{{$technician->firstname}} {{$technician->middlename}} {{$technician->lastname}}</option>
            @endforeach

     
            </select>
    </div>
    
    <div class="col-md-3">
        <label for="plate" class="labely">Vehicle Plate Number</label>
            <input type="text" name="plate" class="form-control" placeholder="Plate Number" id="plate">
    </div>

    <div class="col-md-3">
        <label for="model" class="labely">Vehicle Model</label>
            <select name="modelId"  class="form-control select2" style="width: 100%;">
                
                 @foreach($autos as $model)
                    <option value="{{$model->id}}">{{$model->make}} - {{$model->model}} </option>
                 @endforeach
                </select>
       
            </select>
    </div>

</div>

<div class="row">
    
    <div class="col-md-12">
        <label for="service" class="labely">Service Search</label>
        <select name="service[]" class="form-control select2 service" multiple="multiple" style="width: 100%;">
                  @foreach($services as $service)
                      <option value="{{$service->id}}">{{$service->name}} </option>
                  @endforeach
              </select>
    </div>

</div>

@include('admin.transaction.checkup.box')



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


    @if(old('item_id'))
            @foreach(old('item_id') as $key=>$item)
                <script>
                    form = JSON.stringify({!! old('form.'.$key) !!});
                    popForm({{old('type_id.'.$key)}},"{{old('typeName.'.$key)}}",{{old('item_id.'.$key)}},"{{old('itemName.'.$key)}}",form)
                </script>
            @endforeach
    @else
            @foreach($items as $item)
                <script>
                    form = JSON.stringify({!! $item->form !!});
                    popForm({{$item->type_id}},"{{$item->type->type}}",{{$item->id}},"{{$item->name}}",form)
                </script>
            @endforeach
    @endif



@endsection
