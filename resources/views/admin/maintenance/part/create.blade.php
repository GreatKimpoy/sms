@extends('admin.layouts.app')

@section('title')
  {{"Services"}}
@endsection



@section('content-header')
  <section class="content-header">
    <div class="container-fluid">
        <h3 class="float-left">Part Create</h3>
    </div><!-- /.container-fluid -->
  </section>
@endsection



@section('content-body')
<section class="content-header">
  <div class="container-fluid">
    <div class="box box-primary col-sm-12 mt-3">
      <div class="box-block pt-3">
        <div class="box-header"><strong><h4> Add Parts </h4><hr> </strong></div>
          <div class="box-body">
            <form method="post" action="{{ url('part') }}" class="form-horizontal">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 @include('errors.alert')
                @include('admin.maintenance.part.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">SAVE</button>
                </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection