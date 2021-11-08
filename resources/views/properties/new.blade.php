@extends('includes.master')
@section('title', 'Add New Property')
@section('content')
  <div class="page">
    <!-- .page-inner -->
    <div class="page-inner">
      <!-- .page-title-bar -->
      <header class="page-title-bar">
        <h1 class="page-title"> Add New Property </h1>
      </header><!-- /.page-title-bar -->
      <!-- .page-section -->
      <div class="page-section">
        <!-- .card-deck-xl -->
        <div class="card-deck-xl">
          <!-- .card -->
          <div class="card card-fluid">
            <!-- .card-body -->
            <div class="card-body">

                  <div class="row">
                    <div class="col-md-1">
                      &nbsp;
                    </div>
                      <div class="col-md-10">
                      <form method="post">
                        {{ csrf_field() }}
                          <div class="row">
                            <div class="col-md-9">
                              <span class="label_span">Owner Name *</span>
                                <input type="text" class="form-control form-control-sm" name="name" required>
                            </div>
                            <div class="col-md-3">
                              <span class="label_span">Owner Demand *</span>
                                <input type="number" class="form-control form-control-sm" name="demand" required>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-md-4">
                              <span class="label_span">Phone *</span>
                                <input type="text" placeholder="" id="phone" class="form-control form-control-sm" name="phone" required>
                            </div>
                            <div class="col-md-4">
                              <span class="label_span">Other Phone</span>
                                <input type="text" class="form-control form-control-sm" name="other_phone">
                            </div>
                            <div class="col-md-4">
                              <span class="label_span">Status *</span>
                              <select class="form-control form-control-sm" name="status" required>
                                <option>Available</option>
                                <option>Sold</option>
                              </select>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-md-3">
                              <span class="label_span">Source *</span>
                              <select class="form-control form-control-sm" name="source" required>
                                <option value="" selected disabled>Select</option>
                                @foreach($source as $key => $val)
                                  <option value="{{$val->id}}">{{$val->source}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="col-md-9">
                              <span class="label_span">Source Link</span>
                                <input type="url" class="form-control form-control-sm" name="source_link">
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-md-3">
                              <span class="label_span">Area*</span>
                              <select class="form-control form-control-sm" name="area_id" required>
                                @foreach($areas as $key => $val)
                                  <option value="{{$val->id}}">{{$val->area}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="col-md-3">
                              <span class="label_span">Plot#*</span>
                                <input type="text" class="form-control form-control-sm" name="plot_no" required>
                            </div>
                            <div class="col-md-3">
                              <span class="label_span">Plot Size*</span>
                                <input type="text" class="form-control form-control-sm" name="plot_size" required>
                            </div>
                            <div class="col-md-3">
                              <span class="label_span">Precent*</span>
                                <input type="text" class="form-control form-control-sm" name="precent" required>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-md-12">
                              <span class="label_span">Address</span>
                                <textarea placeholder="" name="address" class="form-control" rows="3"></textarea>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-md-12">
                              <span class="label_span">Remarks *</span>
                                <textarea placeholder="" name="remarks" class="form-control" rows="4" required></textarea>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-md-4 right_side">
                              <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                              <a href="javascript:history.back()" class="btn btn-default">&nbsp;&nbsp;&nbsp;&nbsp;Cancel&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            </div>
                          </div>
                      </form>
                      </div>
                    <div class="col-md-1">
                      &nbsp;
                    </div>
                  </div>

            </div><!-- /.card-body -->
          </div><!-- /.card -->
          <!-- .card -->
        </div>

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