@extends('admin.layouts.app')


@section('title')
  {{"Queries"}}
@endsection


@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">Queries</h3>
	  </div><!-- /.container-fluid -->
	</section>
@endsection


@section('content-body')
<section class="content-header">
  <div class="container-fluid">
    <div class="box box-primary col-sm-12 mt-3">
      <div class="box-block pt-3">
      	<div class="box-header"></div><hr>
        <div class="box-body">
        	<div class="row">
        		<div class="col-md-12">
        			<label for="query" ><h5><strong>Query Search</strong></h5></label>
        			<div class="input-group">
    					<span class="input-group-addon"><i class="fa fa-search"></i></span>
    					<select name="category" class="form-control select2" required data-placeholder="Search Query">
					        <option></option>
					        <option value=""></option>
					    </select>
        			</div>
        		</div>
        	</div>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection




@section('scripts-include')

<script>
    $(function(){
         $('.select2').select2();

    })
</script>

@endsection
