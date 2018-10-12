@extends('admin.layouts.app')


@section('title')
  {{"Queries"}}
@endsection

@section('styles-includes')



@endsection

@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">Reports</h3>
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
        		<div class="col-md-6">
        			<label for="query" ><h5><strong>Report Search</strong></h5></label>
          			<div class="input-group">
        					<span class="input-group-addon"><i class="fa fa-search"></i></span>
        					<select name="category" class="form-control select2" required data-placeholder="Search report">
        			        <option></option>
                      <option value="1">Inspection Report</option>
        			        <option value="2">Job Order Report</option>
                      <option value="3">Analysis Of Actual time VS. BaseLine Time</option>
        			    </select>
          			</div>
        		</div>
            <div class="col-md-4">
              <label for="query" ><h5><strong>Date range</strong></h5></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar-alt"></i></span>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
            </div>
        	</div>

        </div>
      </div>
    </div>
  </div>

   <div class="panel panel-primary ">
                    <div class="panel-heading"> INSPECTION REPORT</div>
                    <div class="panel-body">

                        <table id="list4" class="table table-striped table-bordered responsive">
                            <thead>
                                <tr>
                                    <th>Inspections</th>
                                    <th class="text-right">No. of times Inspections</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>
                                        <li>Customer: Eliakim Urian</li>
                                        <li>Vehicle: VIOS 2018</li>
                                        <li>Plate Number: KIM200</li>
                                        
                                    </td>
																				<td class="text-right">5</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
</section>
@endsection




@section('scripts-include')


<script>

    $(function(){
         $('.select2').select2();

         //Date range picker
    });

</script>


<script>
  
  $(function(){

      $('#reservation').daterangepicker();
      $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

  });

</script>

@endsection
