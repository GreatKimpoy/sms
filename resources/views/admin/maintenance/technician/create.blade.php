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
    <div class="box col-sm-12 box-primary" id="box">
      <div class="box-block pt-3" id="box">
        <div class="box-header" id="box"><strong><h4> Customer Information Form </h4></strong>
        </div>
          <div class="box-body" id="box">
            <form method="post" action="{{ url('technician') }}" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="type" value="technician" />
                @include('errors.alert')
                @include('admin.maintenance.technician.form')
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


@section('scripts-include')

<script>
  
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
            reader.onload = function (e) {
                $('#tech-pic')
                .attr('src', e.target.result)
                .width(180);
            };
        reader.readAsDataURL(input.files[0]);
    }
}

</script>

@endsection