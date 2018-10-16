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
        			<label for="report" ><h5><strong>Report Search</strong></h5></label>
          			<div class="input-group">
        					<span class="input-group-addon"><i class="fa fa-search"></i></span>
        					<select name="reportId" id="reportId" class="form-control select2" required data-placeholder="Search Report">
        			        <option></option>
        			        <option value="1">Job Order This Month</option>
                      <option value="2">Inspection Report This Month</option>
        			    </select>
          			</div>
        		</div>
            <div class="col-md-4">
              <label for="dateRange" ><h5><strong>Date range</strong></h5></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar-alt"></i></span>
                  <input type="text" class="form-control pull-right" id="reservation" placeholder="Date" required>
                </div>
            </div>
        	</div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-primary" id="pan1" style="display">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <table id="jobsTable" class="table table-striped table-bordered responsive">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Customer</th>
                                    <th class="text-right">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($customers as $customer)
                                <tr>
                                  <td>{{$customer->id}}</td>
                                  <td>
                                    <ul>
                                      <li>
                                        {{$customer->firstname}} {{$customer->middlename}} {{$customer->lastname}}
                                      </li>
                                      <li>{{$customer->street}} {{$customer->barangay}} {{$customer->city}}</li>
                                      <li>
                                        {{$customer->email}}
                                      </li>
                                      <li>
                                        {{$customer->contact}}
                                      </li>
                                    </ul>
                                  </td>
                                  <td>
                                    DONE
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
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

<script>
  var select = this.value;
  $('#queryId').change(function() {          

            if($(this).val() == "1"){
              $('#pan1').show();
            }
            else
            {
              $('#pan1').hide();
            }
            if($(this).val() == "2"){
              $('#pan2').show();
            }
            else
            {
              $('#pan2').hide();
            }
            if($(this).val() == "3"){
              $('#pan3').show();
            }
            else
            {
              $('#pan3').hide();
            }
            if($(this).val() == "4"){
              $('#pan4').show();
            }
            else
            {
              $('#pan4').hide();
            }
        });
</script>


@endsection
  