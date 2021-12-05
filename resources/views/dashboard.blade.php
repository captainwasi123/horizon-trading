@extends('includes.master')
@section('title', 'Dashboard')
@section('content')

    <div class="page">
      <!-- .page-inner -->
      <div class="page-inner">
        <!-- .page-title-bar -->
        <header class="page-title-bar">
          <div class="d-flex flex-column flex-md-row">
            <p class="lead">
              <span class="font-weight-bold">Data Analytics Dashboard</span> 
              <br>
              <span class="d-block text-muted">About <a href="">HORIZON PROPERTIES</a> onboarding trading data.</span>
            </p>
          </div>
        </header><!-- /.page-title-bar -->

        <div class="page-section">
          <!-- .card -->
          <div class="card card-fluid">
            <!-- .card-body -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <form id="filterForm" action="{{route('filter')}}">
                    @csrf
                    <div class="row">
                      <div class="col-md-12 m-b-10">
                        <h5 class="qoutation-heading">Inquiry Screen</h5>
                      </div>
                      <div class="col-md-2">
                        <span>Phone</span>
                        <select class="form-control" name="phone" onchange="formfilter()">
                          <option value="">Select</option>
                          @foreach($phones as $val)
                            <option value="{{$val->id}}">{{$val->label}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-md-3">
                        <span>Area</span>
                        <select class="form-control" name="areas" onchange="formfilter()">
                          @foreach($areas as $val)
                            <option value="{{$val->id}}">{{$val->area}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-md-3">
                        <span>Precent/Sector</span>
                        <input type="text" class="form-control" name="precent" onkeyup="formfilter()">
                      </div>
                      <div class="col-md-2">
                        <span>Plot Size</span>
                        <input type="text" class="form-control" name="plot_size" onkeyup="formfilter()">
                      </div>
                      <div class="col-md-2">
                        <span>Plot#</span>
                        <input type="text" class="form-control" name="plot_no" onkeyup="formfilter()">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- .card -->
          <div class="card card-fluid">
            <!-- .card-body -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12 m-b-10">
                        <h5 class="qoutation-heading">Result:</h5>
                      </div>
                      <div class="col-md-12">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Owner</th>
                                <th>Owner Demand</th>
                                <th>Area</th>
                                <th>Precent</th>
                                <th>Plot#</th>
                                <th>Plot Size</th>
                                <th>Phone</th>
                                <th>Qoutation</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody id="result">
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div><!-- /.page-section -->
      </div><!-- /.page-inner -->
    </div>
@endsection
@section('addScript')
  <script type="text/javascript">



    function formfilter(){
      var form = $('#filterForm');
      var url = form.attr('action');
      $('#result').html("<tr><td colspan='9'><img src='{{URL::to('/assets/images/loader.gif')}}' ></td></tr>");
      $.ajax({
             type: "POST",
             url: url,
             data: form.serialize(), // serializes the form's elements.
             success: function(data)
             {
                $('#result').html(data);
             }
           });
    }
  </script>
@endsection