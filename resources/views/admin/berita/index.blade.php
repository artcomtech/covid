@extends('admin.layout.master')
@section('content')
     <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Berita</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Berita</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
        </div>
      @endif
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Data Berita</h3>
                <a href="{{url('admin/berita/create')}}"><button class="btn btn-sm btn-primary float-right"><i class="fa fa-plus"></i> Tambah Berita</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Tanggal Post</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;  
                            @endphp
                            @foreach ($data as $dt)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$dt->title}}</td>
                                    <td>{{$dt->description}}</td>
                                    <td>{{\Carbon\Carbon::parse($dt->created_at)->format('d/m/Y g:ia')}}</td>
                                    <td>
                                        @if ($dt->status=="Draft")
                                            <label class="badge badge-default">Draft</label>
                                        @else
                                            <label class="badge badge-success">Publish</label>
                                        @endif
                                        
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-success" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                @php
                                    $no++;
                                @endphp
                            @endforeach
                            
                        </tbody>
                    </table>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
@endsection