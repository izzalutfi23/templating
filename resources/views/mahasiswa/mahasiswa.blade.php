@extends('layout/main')
@section('title', 'Home')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Mahasiswa
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">mahasiswa</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <button class="btn btn-primary" data-toggle="modal" data-target="#add">Tambah</button>

            <!--Tambah-->
            <div class="modal fade" id="add">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Tambah Data Mahasiswa</h4>
                    </div>
                    <div class="modal-body">
                      <!-- content -->
                      <div class="box box-primary">
                        <!-- form start -->
                        <form role="form" action="{{url('/mahasiswa')}}" method="post">
                          @csrf
                          <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nama</label>
                              <input type="text" class="form-control" id="nama" placeholder="Enter Nama">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">NRP</label>
                              <input type="text" class="form-control" id="nrp" placeholder="Password">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Email</label>
                              <input type="text" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Jurusan</label>
                              <input type="text" class="form-control" id="jurusan" placeholder="Jurusan">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                      </form>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.tambah -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th width="15%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($mahasiswa as $mhs)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->NRP}}</td>
                    <td>{{$mhs->email}}</td>
                    <td>{{$mhs->jurusan}}</td>
                    <td align="center">
                      <div class="row">
                        <div class="col-lg-3">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#edit{{$mhs->id}}"><i class="fa fa-edit"></i></button>
                        </div>
                        <div class="col-lg-3">
                          <form action="{{url('/mahasiswa/'.$mhs->id)}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                          </form>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <!--Edit-->
                  <div class="modal fade" id="edit{{$mhs->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Edit Data Mahasiswa</h4>
                          </div>
                          <div class="modal-body">
                            <!-- content -->
                            <div class="box box-primary">
                              <!-- form start -->
                              <form role="form" action="{{url('/mahasiswa')}}" method="post">
                                @csrf
                                @method('patch')
                                <div class="box-body">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control" id="nama" value="{{$mhs->nama}}">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">NRP</label>
                                    <input type="text" class="form-control" id="nrp" value="{{$mhs->NRP}}">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="text" class="form-control" id="email" value="{{$mhs->email}}">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Jurusan</label>
                                    <input type="text" class="form-control" id="jurusan" value="{{$mhs->jurusan}}">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.Edit -->
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                    </tr>
                  </tfoot>
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
    <!-- /.content-wrapper -->
    @endsection()