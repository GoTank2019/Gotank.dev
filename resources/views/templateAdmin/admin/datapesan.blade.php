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
          Data Tables
          <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Data tables</li>
        </ol>
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">       
            <div class="box">
              <div class="box-header">
                <a href="_ptambah" class="btn btn-success fa fa-plus-square-o"> Tambah </a>
                <a href="" class="btn btn-success fa fa-print"> Print </a>                
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Tri Tholabul</td>
                    <td>Tarub</td>
                    <td>08567838398</td>
                    <td>tholabulkocak@gmail.com</td>
                    <td>mamamam</td>
                    <td>
                        <a href="_pedit" class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Edit"><span class="fa fa-edit"></span></a>
                        <a href="#" class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fa fa-trash"></span></a>
                    </td>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>Tri Tholabul</td>
                      <td>Tarub</td>
                      <td>08567838398</td>
                      <td>tholabulkocak@gmail.com</td>
                      <td>mamamam</td>
                      <td>
                          <a href="#" class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Edit"><span class="fa fa-edit"></span></a>
                          <a href="#" class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fa fa-trash"></span></a>
                      </td>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>Tri Tholabul</td>
                      <td>Tarub</td>
                      <td>08567838398</td>
                      <td>tholabulkocak@gmail.com</td>
                      <td>mamamam</td>
                      <td>
                          <a href="#" class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Edit"><span class="fa fa-edit"></span></a>
                          <a href="#" class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fa fa-trash"></span></a>
                      </td>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>Tri Tholabul</td>
                      <td>Tarub</td>
                      <td>08567838398</td>
                      <td>tholabulkocak@gmail.com</td>
                      <td>mamamam</td>
                      <td>
                          <a href="#" class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Edit"><span class="fa fa-edit"></span></a>
                          <a href="#" class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fa fa-trash"></span></a>
                      </td>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>Tri Tholabul</td>
                      <td>Tarub</td>
                      <td>08567838398</td>
                      <td>tholabulkocak@gmail.com</td>
                      <td>mamamam</td>
                      <td>
                          <a href="#" class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Edit"><span class="fa fa-edit"></span></a>
                          <a href="#" class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fa fa-trash"></span></a>
                      </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@push('scripts')

@endpush