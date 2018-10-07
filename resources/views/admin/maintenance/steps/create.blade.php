@extends('admin.layouts.app')

@section('title')
  {{"Services"}}
@endsection


@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">Service Steps</h3>
	  </div><!-- /.container-fluid -->
	</section>
@endsection



@section('content-body')
<section class="content-header">
  <div class="container-fluid">
    <form method="post" action="{{ url('steps') }}" class="form-horizontal">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @include('errors.alert')
        @include('admin.maintenance.steps.form')
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">SAVE</button>
        </div>
    </form>
  </div>
</section>
@endsection





