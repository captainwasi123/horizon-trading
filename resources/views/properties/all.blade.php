@extends('includes.master')
@section('title', 'All Properties')
@section('content')
  <div class="page">
    <!-- .page-inner -->
    <div class="page-inner">
      <!-- .page-title-bar -->
      <header class="page-title-bar">
        <!-- title -->
        <h1 class="page-title"> All Properties </h1>
      </header><!-- /.page-title-bar -->
      <!-- .page-section -->
      <div class="page-section">
        <!-- .card -->
        <div class="card card-fluid">
          <!-- .card-body -->
          <div class="card-body">
            <!-- .table -->
            <table id="dt-responsive" class="table dt-responsive nowrap w-100">
              <thead>
                <tr>
                  <th> #</th>
                  <th> Area </th>
                  <th> Plot# </th>
                  <th> Size </th>
                  <th> Precent </th>
                  <th> Owner </th>
                  <th> Owner Demand </th>
                  <th> Phone </th>
                  <th> Source </th>
                  <th> Status </th>
                  <th> Created By </th>
                  <th> Created at </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                @foreach($properties as $key => $val)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{@$val->area->area}}</td>
                    <td>{{$val->plot_no}}</td>
                    <td>{{$val->plot_size}}</td>
                    <td>{{$val->precent}}</td>
                    <td>{{$val->owner_name}}</td>
                    <td><strong>{{number_format($val->owner_demand)}}</strong>/-</td>
                    <td>{{$val->phone}}</td>
                    <td>{{@$val->source->source}}</td>
                    <td><label class="badge badge-info"> {{$val->status}} </label></td>
                    <td>{{@$val->user->username}}</td>
                    <td>{{date('d-M-Y h:i A', strtotime($val->created_at))}}</td>
                    <td class="align-middle text-right">
                      <a href="#" class="btn btn-sm btn-icon btn-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Add Qoute" title="Add Qoute">
                        <i class="oi oi-tags"></i> <span class="sr-only">Add Qoute</span>
                      </a> 

                      <a href="#" class="btn btn-sm btn-icon btn-danger"  data-toggle="tooltip" data-placement="top" data-original-title="Remove" title="Add Qoute">
                        <i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th> #</th>
                  <th> Area </th>
                  <th> Plot# </th>
                  <th> Size </th>
                  <th> Precent </th>
                  <th> Owner </th>
                  <th> Owner Demand </th>
                  <th> Phone </th>
                  <th> Source </th>
                  <th> Status </th>
                  <th> Created By </th>
                  <th> Created at </th>
                  <th> Action </th>
                </tr>
              </tfoot>
            </table><!-- /.table -->
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div><!-- /.page-section -->
    </div><!-- /.page-inner -->
  </div>
@endsection
@section('addStyle')
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
@endsection
@section('addScript')
  <script src="{{URL::to('/')}}/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="{{URL::to('/')}}/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{URL::to('/')}}/assets/vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      'use strict'

      $('#dt-responsive').DataTable({
        responsive: true,
        dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>\n        <'table-responsive'tr>\n        <'row align-items-center'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 d-flex justify-content-end'p>>",
        
      });
    });
  </script>  
@endsection