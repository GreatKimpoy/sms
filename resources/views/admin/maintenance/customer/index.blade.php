@extends('admin.layouts.app')

@section('title')
  {{"Customer"}}
@endsection



@section('styles-include')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

@stop

@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">Customer</h3>
	  </div><!-- /.container-fluid -->
	</section>
@endsection


@section('content-body')
<section class="content-header">
  <div class="container-fluid">
    <div class="box box-primary col-sm-12 mt-3">
      <div class="box-block pt-3">
        <div class="box-body">
         
         </div>
        
        <table id="customersTable" class="table table-bordered table-hover">
          <thead>
            <tr> 
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Email</th>
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
    var table = $('#customersTable').DataTable( {
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
      ajax: "{{ url('customer') }}",
      columns: [
          { data: "id" },
          { data: "full_name" },
          { data: "full_address" },
          { data: "contact" },
          { data: "email" },
          { data: function(callback){
            return `
              <a href="{{ url("customer") }}` + '/' + callback.id + `/edit"  class="btn btn-warning"><i class="fa fa-edit"></i><strong>Edit</strong></a>
            `
          } },
      ],
    } );


    $('#customersTable').on('click', '.btn-remove', function(){
        id = $(this).data('id');
        var $this = $(this);
        var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Loading...';
        if ($(this).html() !== loadingText) {
          $this.data('original-text', $(this).html());
          $this.html(loadingText);
        }

        swal({
          title: "Are you sure?",
          text: "This customer will be removed?",
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
              url: '{{ url("customer") }}' + "/" + id,
              data: {
                'id': id
              },
              dataType: 'json',
              success: function(response){
                swal('Operation Successful','Customer removed','success')
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