@extends('admin.layouts.app')


@section('styles-include')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">


  <style>
    .parts-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .parts-modal .modal {
      background: transparent !important;
    }
  </style>

@endsection

@section('content-header')
  <section class="content-header">
    <div class="container-fluid">
        <h3 class="float-left">Vehicle Information</h3>
    </div><!-- /.container-fluid -->
  </section>
@endsection


@section('content-body')
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-primary">

          <!-- /.box-body -->

           <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Vehicle Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-car-alt margin-r-5"></i> Make</strong>

              <p class="text-muted">
                {{$category->make}}
              </p>

              <hr>

              <strong><i class="fa fa-car-alt margin-r-5"></i>Model</strong>

              <p class="text-muted">
              {{$category->model}}
              </p>
              
              <hr>

              <strong><i class="fa fa-car-alt margin-r-5"></i> Transmission </strong>

              <p class="text-muted">
              {{$category->transmission_type}}
              </p>

              <hr>

              <strong><i class="fa fa-car-alt margin-r-5"></i> Size Classification </strong>

              <p class="text-muted">
              {{$category->size}}  
              </p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
      </div>

      <div class="col-md-9">


          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Parts</h3>

              <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#modal-default">
                 <i class="fa fa-plus"></i> <strong>Add New Parts</strong>
              </button>
              
           
              <div class="modal fade" id="modal-default">
              {{ Form::open(array('url'=>'model/save','class'=>'form-horizontal', 'method'=> 'POST')) }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Add Parts</h4>
                    </div>
                    <div class="modal-body">

                      <div class="row">

                        <div class="col-md-6">
                          <label for="partNumber">Part Number</label>
                          <input type="text" 
                          name="number"
                          class="form-control"
                          value="">
                        </div>

                         <div class="col-md-6">
                          <label for="Description">Description</label>
                          <input type="text" 
                          name="description"
                          class="form-control"
                          value="">
                        </div> 

                        <div class="col-md-6" hidden="">
                          <label for="Description">Model</label>
                          <input type="text" 
                          name="model"
                          class="form-control"
                          value="{{$category->id}}">
                        </div> 

                      </div>


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Submit</button>
                      {{!! form::close() !!}}
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->

            </div>
            <div class="box-body">
              <table id="parts" class="table table-bordered table-striped table-hovered">
                <thead>
                  <tr>
                        <th>ID</th>
                        <th>Part Number</th>
                        <th>Description</th>    
                  </tr>
                </thead>
                <tbody>
                @foreach($category->parts as $part)
                    <tr>
                        <td>{{$part->id}}</td>
                        <td>
                          {{$part->number}}
                        </td>
                        <td>
                            {{$part->description}}
                        </td>
                    </tr>
                @endforeach
             
                </tbody>

                <tfoot>
                  <tr>
                        <th>ID</th>
                        <th>Part Number</th>
                        <th>Description</th>   
                  </tr>
                  </tfoot>
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
    $(function () {
      $('#parts').DataTable()
   
    })
  </script>

@endsection