@extends('admin.layouts.app')



@section('title')
  {{"Check-Up"}}
@endsection




@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">Inspection Check-up Form</h3>
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
            <form method="post" action="{{ url("customers/$customer->id") }}" class="form-horizontal">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">
                @include('errors.alert')
                @include('admin.maintenance.customer.editForm')
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </div>
            </form>
          </div>
      </div>
    </div> 
	</div>
</section>

@endsection