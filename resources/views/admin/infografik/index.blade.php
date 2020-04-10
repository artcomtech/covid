@extends('admin.layout.master')
@section('content')
     <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Infografik</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"></a></li>
                <li class="breadcrumb-item active">Data Infografik</li>
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
          <div class="col-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Data Infografik</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Gambar</th>
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
                                    <td>
                                        
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
          <div class="col-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Inforgrafik</h3>
              </div>
              <form role="form" method="POST" action="{{url('admin/infografik')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul InfoGrafik" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gambar </label>
                        <input type="file" class="form-control" name="file">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
@endsection