@extends('admin.layouts.app')

@section('title')
  {{"Models"}}
@endsection


@section('styles-include')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

@stop

@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">Vehicle Models</h3>
	  </div><!-- /.container-fluid -->
	</section>
@endsection


@section('content-body')
    <section class="content-header">
      <div class="container-fluid">
        <div class="box box-primary col-sm-12 mt-3">
          <div class="box-block pt-3">
            <div class="box-body">
              <a type="button" id="new" href="{{ url('model/create') }}"  class="btn btn-success btn-sm pull-right">
                <i class="fa fa-plus"></i> <strong> NEW RECORD </strong>  
              </a>
            </div>
            @include('notification.alert')
            <table id="vehicle-categories-table" class="table table-bordered table-hover">
              <thead>
                <tr> 
                    <th>Make</th>
                    <th>Model</th>
                    <th>Actions</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </section>
@endsection


@section('scripts-include')

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    var table = $('#vehicle-categories-table').DataTable( {
        select: {
          style: 'single'
        },
        language: {
            searchPlaceholder: "Search..."
        },
        columnDefs:[
        { targets: 'no-sort', orderable: false },
        ],
        "dom": "<'row'<'col-sm-3'l><'col-sm-6'<'toolbar'>><'col-sm-3'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
      "processing": true,
      serverSide: true,
      ajax: "{{ url('model') }}",
      columns: [
          { data: "make" },
          { data: "model" },
          { data: function(callback){
            return `
              <a href="{{ url("part") }}` + '/' + callback.id + `/create" class="btn btn-warning"><i class="fa fa-edit"></i><strong>add Parts</strong></a>
             
              
            `
          } },
      ],
    } );


    $('#vehicle-categories-table').on('click', '.btn-remove', function(){
        id = $(this).data('id');
        var $this = $(this);
        var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Loading...';
        if ($(this).html() !== loadingText) {
          $this.data('original-text', $(this).html());
          $this.html(loadingText);
        }

        swal({
          title: "Are you sure?",
          text: "This vehicle category will be removed?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: 'delete',
              url: '{{ url("model") }}' + "/" + id,
              data: {
                'id': id
              },
              dataType: 'json',
              success: function(response){
                swal('Operation Successful','vehicle category removed','success')
              },
              error: function(){
                swal('Operation Unsuccessful','Error occurred while deleting a record','error')
              },
              complete: function(){
                $this.html($this.data('original-text'));
                table.ajax.reload();
              }
            });
          } else {
            $this.html($this.data('original-text'));
            swal("Cancelled", "Operation Cancelled", "error");
          }
        });
      });

  });
</script>
@endsection
