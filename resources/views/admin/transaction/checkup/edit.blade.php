@extends('admin.layouts.app')



@section('title')
  {{"Check-Up"}}
@endsection




@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">inspection Check-up Form</h3>
	  </div><!-- /.container-fluid -->
	</section>
@endsection

@section('content-body')

<section class="content-header">
	<div class="container-fluid">
	<div class="box col-sm-12 box-primary" id="box">
      <div class="box-block pt-3" id="box">
        <div class="box-header" id="box"><strong><h4> Customer Information Form </h4></strong>
        </div>
          <div class="box-body" id="box">
          
                {!! Form::model($inspect , ['method' => 'patch', 'action' => ['Transaction\InspectionCheckupController@update',$inspect->id]]) !!}
      				    @include('errors.alert')
                  @include('admin.transaction.checkup.editForm')
                  
      			    {!! Form::close() !!}

        
          </div>
      </div>
    </div> 
	</div>
</section>


@endsection
