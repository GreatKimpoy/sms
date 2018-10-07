@section('styles-include')


        <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/formbuilder/form-builder.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/formbuilder/form-render.min.css') }}">

<style>
	.asterisks{
		color: red;
	}
</style>

@endsection





<div class="row">
    
    <div class="col-md-5">
        {!! Form::model($type , ['method' => 'patch', 'action' => ['Maintenance\InspectionController@update',$type->id],'id'=>'submit']) !!}
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Inspection Form</h3>
            </div>
            <div id="items" class="box-body">
                <div class="form-group">
                    {!! Form::label('type', 'Inspection Type') !!}<span>*</span>
                    {!! Form::input('text','type',null,[
                        'class' => 'form-control',
                        'placeholder'=>'Name',
                        'maxlength'=>'50',
                        'required'])
                    !!}
                </div>
                @foreach($type->item as $item)
                    <div id="item" class="form-group">
                        @if($loop->index!=0)
                            <button id="removeItem" type="button" class="btn btn-flat btn-danger btn-xs pull-right" data-toggle="tooltip" data-placement="top" title="Remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        @endif
                        <button id="pushItem" type="button" class="btn btn-flat btn-warning btn-xs pull-right" data-toggle="tooltip" data-placement="top" title="Create form">
                            <i class="fa fa-caret-right"></i>
                        </button>
                        <input type="hidden" class="hidden" value="{{$item->id}}">
                        {!! Form::label('item', 'Inspection Items') !!}<span>*</span>
                        <textarea class="hidden" name="inspectionForm[]" id="inspectionForm" required style="display:none; ">{{$item->form}}</textarea>
                        {!! Form::input('text',null,$item->name,[
                            'class' => 'form-control ',
                            'id' => 'inspectionItem',
                            'name'=>'item[]',
                            'placeholder'=>'Inspection Item',
                            'maxlength'=>'50',
                            'required']) 
                        !!}
                    </div>
                @endforeach
            </div>
            <div class="box-footer">
                <button type="button" id="save" class="btn btn-primary">Save</button>
                <button id="addItemUpdate" type="button" class="btn btn-md btn-primary pull-right" data-toggle="tooltip" data-placement="top" title="Add">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div id="formbox" class="box">
                <div id="header" class="box-header with-border">
                    <h3 class="box-title" id="itemComponent">Item Components</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div id="body" class="box-body"></div>
            </div>
    </div>
    {!! Form::close() !!}

</div>



@section('scripts-include')

<script src="{{ URL::asset('plugins/formbuilder/form-builder.min.js') }}"></script>
<script src="{{ URL::asset('plugins/formbuilder/form-render.min.js') }}"></script>


<script src="{{ URL::asset('js/inspection.js') }}"></script>

@endsection