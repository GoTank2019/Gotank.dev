@extends('layouts.app')

@section('title','Dashboard')

@push('css')

@endpush('')

@section('content')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                    Dashboard
                  </h1>
                </section>
            
                <!-- Main content -->
                <section class="content">
                  <!-- Info boxes -->
                  <div class="row">
                    <!-- /.col -->
            
                    <!-- fix for small devices only -->
                    <div class="clearfix visible-sm-block"></div>
            
                    <div class="col-md-4-offset-6 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
            
                        <div class="info-box-content">
                          <span class="info-box-text"><b>Pesan</span>
                          <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4-offset-6 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
            
                        <div class="info-box-content">
                          <span class="info-box-text"><b>New Driver</span>
                          <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->        
@endsection('')

@push('scripts')

@endpush('')