@extends('admin.layouts.app')

@section('title')
  {{"Job Order Form"}}
@endsection

@section('styles-include')
   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection



@section('content-header')
  <section class="content-header">
    <div class="container-fluid">
        <h3 class="float-left">Job Order </h3>
    </div><!-- /.container-fluid -->
  </section>
@endsection


@section('content-body')
<section class="content-header">
  <div class="container-fluid">
    <div class="box box-primary col-sm-12 mt-3">
      <div class="box-block pt-3">
        <div class="box-header "><strong> <h4> Job Order Progress </h4> <hr> </strong></div>
          <div class="box-body">
            <form method="post" action="{{ url('schedule') }}" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @include('errors.alert')
                @include('admin.transaction.joSchedule.form')
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

    <!-- DataTables -->
  <script src="{{asset ('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset ('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script type="{{asset('js/parts.js')}}"></script>

<script>
  

  $(function(){
         $('.select2').select2();

    })

    $(function () {
      $('#parts').DataTable({
        'paging'      : false,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : false,
        'autoWidth'   : false
      })
  })


</script>


<script>
  
    function setInputDate(_id){
        var _dat = document.querySelector(_id);
        var hoy = new Date(),
            d = hoy.getDate(),
            m = hoy.getMonth()+1, 
            y = hoy.getFullYear(),
            data;

        if(d < 10){
            d = "0"+d;
        };
        if(m < 10){
            m = "0"+m;
        };

        data = y+"-"+m+"-"+d;
        console.log(data);
        _dat.value = data;
    };

    setInputDate("#dateDefault");
    setInputDate("#dateDefaults");


</script>



<script>
  
  $(document).on('change', '#service', function(){
    $('#service option[value="'+this.value+'"]').attr('disabled',false);

    $.ajax({
      type: "GET",
      url: "/service/part/"+this.value,
      dataType: "JSON",
      success:function(data){

        console.log('wewew');

      }

    });


  });

</script>



@endsection



