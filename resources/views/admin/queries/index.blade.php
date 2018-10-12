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
							<option value=""></option>
                                <option value="1">Most Repaired Vehicle</option>
                                <option value="2">Most availed services</option>
                                <option value="3">Most Preferred technician</option>
					    </select>
        			</div>
        		</div>
        	</div>


               <div class="panel panel-primary hidden pan3">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <table id="list4" class="table table-striped table-bordered responsive">
                            <thead>
                                <tr>
                                    <th>Vehicle</th>
                                    <th class="text-right">No. of times repaired</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>
                                        <li>Plate: KIM001</li>
                                        <li>Transmission: Automatic
                                        <li>Model:TOYOTA VIOS 2018</li>
                                        
                                    </td>
																				<td class="text-right">3</td>
                                </tr>
                                
                            </tbody>
                        </table>
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
