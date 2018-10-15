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
    					<select name="queryId" id="queryId" class="form-control select2" required data-placeholder="Search Query">
					        <option></option>
					        <option value="1"> Most Technicians Do Jobs</option>
                            <option value="2">Most preferred services</option>
                            <option value="3">Most car repaired</option>
                            <option value="4">Most customer served</option>
                        </select>
        			</div>
        		</div>
        	</div>
          <br>
          <div class="row">
            <div class="col-md-12">
               <div class="panel panel-primary" id="pan1" style="display: none;">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <table id="list3" class="table table-striped table-bordered responsive">
                            <thead>
                                <tr>
                                    <th>Technician</th>
                                    <th>Details</th>
                                    <th class="text-right">No. of times jobs done</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($technicians as $tech)
                                <tr>
                                    <td>{{$tech->firstName}} {{$tech->middleName}} {{$tech->lastName}}</td>
                                    <td>
                                        <?php
                                            $date = date_create($tech->Birthdate);
                                            $date = date_format($date,"F d,Y");
                                        ?>
                                        <li>Birthdate: {{$date}}</li>
                                        <li>Contact: {{$tech->Contact}}</li>
                                        <li>Address: {{$tech->Street}} {{$tech->Barangay}} {{$tech->City}}</li>
                                        @if($tech->Email)
                                        <li>Email: {{$tech->Email}}</li>
                                        @endif
                                        {{-- <li>Skills:</li>
                                        <ul>
                                            @foreach($tech->skill as $skills)
                                                <li>{{$skills->category->name}}</li>
                                            @endforeach
                                        </ul> --}}
                                    <td class="text-right">{{$tech->total}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
               <div class="panel panel-primary" id="pan2" style="display: none;">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <table id="list3" class="table table-striped table-bordered responsive">
                            <thead>
                                <tr>
                                    <th>Service Name</th>
                                    <th>Service Description</th>
                                    <th class="text-right">No. of times jobs done</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{$service->name}}</td>
                                    <td>
                                      {{$service->description}}
                                    </td>  
                                    <td class="text-right">{{$service->total}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
               <div class="panel panel-primary" style="display: none;" id="pan3">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <table id="list3" class="table table-striped table-bordered responsive">
                            <thead>
                                <tr>
                                    <th>Vehicle Description</th>
                                    <th class="text-right">No. of times jobs done</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vehicles as $vehicle)
                                <tr>
                                    <td>{{$vehicle->make}}</td>
                                    <td class="text-right">{{$vehicle->total}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
               <div class="panel panel-primary" id="pan4" style="display: none;">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <table id="list3" class="table table-striped table-bordered responsive">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Details</th>
                                    <th class="text-right">No. of times jobs done</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                <tr>

                                    <td>{{$customer->firstname}} {{$customer->middlename}} {{$customer->lastname}}</td>
                                    <td>
                                      <ul>
                                        <li>{{$customer->street}} {{$customer->barangay}} {{$customer->city}}</li>
                                        <li>{{$customer->contact}}</li>
                                        <li>{{$customer->email}}</li>
                                      </ul>
                                    </td>
                                    <td class="text-right">{{$customer->total}}</td>
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
</section>
@endsection




@section('scripts-include')

<script>
    $(function(){
         $('.select2').select2();

    })

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
