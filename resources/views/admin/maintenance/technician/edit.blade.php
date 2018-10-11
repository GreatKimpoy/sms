@extends('admin.layouts.app')

@section('title')
  {{"Technicians"}}
@endsection



@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">Technician Form</h3>
	  </div><!-- /.container-fluid -->
	</section>
@endsection


@section('content-body')
<section class="content-header">
  <div class="container-fluid">
    <div class="box col-sm-12 mt-3">
      <div class="box-block pt-3">
        <div class="box-header"><h4><strong>Technician Form</strong></h4></div>
          <div class="box-body">
            <form method="post" action="{{ url("technician/$technician->id") }}" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                @include('errors.alert')
                @include('admin.maintenance.technician.form')
                <input type="hidden" name="type" value="technician" />
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection
