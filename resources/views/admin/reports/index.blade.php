@extends('admin.layouts.app')


@section('title')
  {{"Report"}}
@endsection

@section('styles-include')
 <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@stop

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
    <div class="box box-primary box-solid col-sm-12 mt-3">
      <div class="box-block pt-3">
      	<div class="box-header">
         <h4 class="box-title"> Reports as of now <b id="dateLabel">{{$dateEnd}}</b> </h4> 
        </div>
          <div class="box-body dataTable_wrapper">
           {!! Form::open(['url' => 'report','id' => 'reportForm','target' => '_blank']) !!}
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          {!! Form::label('Report', 'Report Search') !!}
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-search"></i></span>
                              <select id="reportId" name="reportId" class="form-control">
                                  <option value="0"></option>
                                  <option value="1">Job Order Report</option>
                                  <option value="2">Most Served Customers</option>
                                  <option value="3">Top Services</option>
                                  <option value="4">Technician Who finished most services</option>
                              </select>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                        <label>Date Range:</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            {!! Form::input('text','date',$dateString,[
                                    'class' => 'form-control',
                                    'id'=>'daterange',
                                    'placeholder'=>'Date',
                                    'required'])
                                !!}
                          </div>
                      </div>
                  </div>
                    <div class="col-md-2">
                        {!! Form::label('action', 'Action') !!}
                        <button type="submit" class="btn btn-primary btn-md" id="generatePdf"><i class="glyphicon glyphicon-file"></i> Generate PDF</button>
                    </div>
                </div>
                {!! Form::close() !!}
                <div class="panel panel-primary pan1 hide"  >
                    <div class="panel-heading"><h3 class="panel-title">Job Order Report</h3></div>
                    <div class="panel-body">
                        <table id="jobsTable" class="table table-striped table-bordered responsive">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Customer</th>
                                    <th>Vehicle</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($job as $jobs)
                              <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$jobs->customer}}</td>
                                <td>
                                  {{$jobs->plate}}<br>
                                  {{$jobs->make}} {{$jobs->model}} - {{$jobs->transmission}}
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
</section>
@endsection




@section('scripts-include')

  <!-- DataTables -->
  <script src="{{asset ('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset ('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script>

  $('#daterange').daterangepicker(
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
        $('#daterange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

  $(document).on('change','#reportId',function(){
      reportId = $(this).val();
      $('.panel').addClass('hide');
      $('.pan'+reportId).removeClass('hide');
      if(reportId=="1"){
          jList.ajax.reload();
      }else if(reportId=="2"){
          sList.ajax.reload();
      }else if(reportId=="3"){
          iList.ajax.reload();
      }else if(reportId=="4"){
          serviceList.ajax.reload();
      }
  });
  $(document).on('change','#daterange',function(){
      $('#dateLabel').text($(this).val());
      reportId = $('#reportId').val();
      if(reportId=="1"){
          jList.ajax.reload();
      }else if(reportId=="2"){
          sList.ajax.reload();
      }else if(reportId=="3"){
          iList.ajax.reload();
      }else if(reportId=="4"){
          serviceList.ajax.reload();
      }
  });


       
  $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
      });
  
  var jList = $('#jobsTable').DataTable({
          'responsive': true,
           "ajax" : {
            "url": 'report/filter',
            "type": 'POST',
             "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
            "data": function ( d ) {
                    return {reportId: "1",date: $('#daterange').val()};
                    { _token: "{{csrf_token()}}"}
                },
            dataSrc: '',   
        },
        "columns": [
            { "data": "id", },
            { "data": "customer"},
            { "data": "car"},
        ],
    });




  </script>


<script>

    $(function(){
         $('.select2').select2();

         //Date range picker
    });

</script>



@endsection
  