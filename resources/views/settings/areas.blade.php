@extends('includes.master')
@section('title', 'Trading Areas')
@section('content')
  <div class="page">
    <!-- .page-inner -->
    <div class="page-inner">
      <!-- .page-title-bar -->
      <header class="page-title-bar">
        <!-- title -->
        <h1 class="page-title"> Trading Areas </h1>
      </header><!-- /.page-title-bar -->
      <!-- .page-section -->
      <div class="page-section">
        <!-- .card -->
        <div class="card card-fluid">
            <!-- .card-body -->
            <div class="card-body">

              <div class="row">
                <div class="col-md-1">
                  &nbsp;
                </div>
                  <div class="col-md-10">
                  <form method="post" action="{{route('settings.areas.add')}}">
                    {{ csrf_field() }}
                      <div class="row">
                        <div class="col-md-5">
                          <span class="label_span">Area Name *</span>
                            <input type="text" class="form-control form-control-sm" name="area" required>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-3 right_side inline-btn">
                          <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                        </div>
                      </div>
                  </form>
                  </div>
                <div class="col-md-1">
                  &nbsp;
                </div>
              </div>

        </div><!-- /.card-body -->
      </div>

        <div class="card card-fluid">
          <!-- .card-body -->
          <div class="card-body">
            <!-- .table -->
            <div class="table-responsive">
              <table class="table dt-responsive nowrap w-100">
                <thead>
                  <tr>
                    <th> #</th>
                    <th style="width:50%;"> Area Name </th>
                    <th> Created By </th>
                    <th> Created at </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($areas as $key => $val)
                    <tr>
                      <td>{{++$key}}</td>
                      <td>{{$val->area}}</td>
                      <td>{{@$val->user->username}}</td>
                      <td>{{date('d-M-Y h:i A', strtotime($val->created_at))}}</td>
                      <td class="align-middle">
                        <a href="#" class="btn btn-sm btn-icon btn-danger"  data-toggle="tooltip" data-placement="top" data-original-title="Remove" title="Add Qoute">
                          <i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div><!-- /.table -->
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div><!-- /.page-section -->
    </div><!-- /.page-inner -->
  </div>
@endsection
@section('addScript')
  <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
  <script type="text/javascript">
    var autoPopulateNo = "\\92"
    $("#phone").inputmask({
      "mask": autoPopulateNo + "9999999999",
      clearMaskOnLostFocus: false,
    });
  </script>
@endsection