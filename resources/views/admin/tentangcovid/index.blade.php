@extends('admin.layout.master')
@section('content')
     <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Tentang Covid</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"></a></li>
                <li class="breadcrumb-item active">Data Tentang Covid</li>
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
                <h3 class="card-title">List Data Tentang Covid</h3>
                <a href="{{url('admin/tentang/create')}}"><button class="btn btn-sm btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
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
                                    <td>{{ucwords($dt->subparent)}}</td>
                                    <td>{{\Carbon\Carbon::parse($dt->created_at)->format('d/m/Y g:ia')}}</td>
                                    <td>
                                        @if ($dt->others=="Draft")
                                            <label class="badge badge-default">Draft</label>
                                        @else
                                            <label class="badge badge-success">Publish</label>
                                        @endif
                                        
                                    </td>
                                    <td>
                                        <a href="{{url('admin/tentang/'.$dt->id.'/edit')}}"><button class="btn btn-sm btn-success" title="Edit"><i class="fa fa-edit"></i></button></a>
                                        <form action="{{url('admin/tentang/'.$dt->id)}}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-sm btn-danger" value="delete" title="Delete"><i class="fa fa-trash"></i></button>
                                        </form>
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