@extends('layouts.app')

@section('title','Dashboard')

@push('css')

@endpush

@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Flot Charts
            <small>preview sample</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Charts</a></li>
            <li class="active">Flot</li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!-- Bar chart -->
              <div class="box box-primary">
                    <div class="box-header with-border">
                      <i class="fa fa-bar-chart-o"></i>
        
                      <h3 class="box-title">Bar Chart</h3>
        
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="box-body">
                      <div id="bar-chart" style="height: 300px;"></div>
                    </div>
                    <!-- /.box-body-->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
        </section>
  </div>
          <!-- /.row --><!-- /.content -->
@endsection

@push('scripts')

@endpush