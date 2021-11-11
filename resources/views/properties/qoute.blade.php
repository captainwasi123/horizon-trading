@extends('includes.master')
@section('title', 'Property Qoutations')
@section('content')
  <div class="page">
    <!-- .page-inner -->
    <div class="page-inner">
      <!-- .page-title-bar -->
      <header class="page-title-bar">
        <!-- title -->
        <h1 class="page-title"> Property Qoutations </h1>
      </header><!-- /.page-title-bar -->
      <!-- .page-section -->
      <div class="page-section">
        <!-- .card -->
        <div class="card card-fluid">
          <!-- .card-body -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <h5 class="qoutation-heading">Property Information</h5>
                <div class="table-responsive">
                  <table class="table qoutation-table">
                    <tr>
                      <td>
                        <label>Area</label><br>
                        {{@$data->area->area}}
                      </td>
                      <td>
                        <label>Plot No.</label><br>
                        {{$data->plot_no}}
                      </td>
                      <td>
                        <label>Plot Size</label><br>
                        {{$data->plot_size}}
                      </td>
                      <td>
                        <label>Precent</label><br>
                        {{$data->precent}}
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label>Owner Name</label><br>
                        {{@$data->owner_name}}
                      </td>
                      <td>
                        <label>Owner Demand</label><br>
                        {{number_format($data->owner_demand)}}/-
                      </td>
                      <td>
                        <label>Phone</label><br>
                        {{$data->phone}}
                      </td>
                      <td>
                        <label>Source</label><br>
                        {{@$data->source->source}}
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="col-md-12">
                <form method="post" action="{{route('properties.qoutation.add')}}">
                  @csrf
                  <input type="hidden" name="pid" value="{{base64_encode($data->id)}}">
                  <div class="row">
                    <div class="col-md-12 m-b-10">
                      <h5 class="qoutation-heading">Add Qoutation</h5>
                    </div>
                    <div class="col-md-5">
                      <span>Phone</span>
                      <select class="form-control" name="phone" required>
                        <option value="">Select</option>
                        @foreach($phones as $val)
                          <option value="{{$val->id}}">{{$val->label}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-5">
                      <span>Qoutation</span>
                      <input type="number" class="form-control" name="qoutation" required>
                    </div>
                    <div class="col-md-2">
                      <br>
                      <button type="submit" class="btn btn-success qoutation-btn">Save</button>
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
            <!-- .table -->
            <table class="table dt-responsive nowrap w-100">
              <thead>
                <tr>
                  <th> #</th>
                  <th> Phone </th>
                  <th> Qoutation </th>
                  <th> Created By </th>
                  <th> Created at </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                @foreach($data->qoutation as $key => $val)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{@$val->phone->label}}</td>
                    <td><strong>{{number_format($val->qoutation)}}</strong>/-</td>
                    <td>{{@$val->user->username}}</td>
                    <td>{{date('d-M-Y h:i A', strtotime($val->created_at))}}</td>
                    <td>
                      <a href="javascript::void(0)" data-href="{{route('properties.qoutation.delete', base64_encode($val->id))}}" class="btn btn-sm btn-danger deleteQoutation" title="Remove">
                        <i class="far fa-trash-alt"></i> Remove
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table><!-- /.table -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div><!-- /.page-section -->
    </div><!-- /.page-inner -->
  </div>
@endsection
@section('addScript')
  <script type="text/javascript">
    $(document).ready(function(){
      'use strict'

      $(document).on('click', '.deleteQoutation', function(){
        var href = $(this).data('href');
        if(confirm('Are you sure?')){
          window.location.href = href;
        }
      });
    });
  </script>
@endsection