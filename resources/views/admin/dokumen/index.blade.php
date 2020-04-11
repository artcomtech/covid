@extends('admin.layout.master')
@section('content')
     <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Dokumen</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"></a></li>
                <li class="breadcrumb-item active">Data Dokumen</li>
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
                <h3 class="card-title">List Data Dokumen</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>File</th>
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
                                        <a href="{{asset('file/'.$dt->file)}}">File</a>
                                    </td>
                                    <td>
                                        <form action="{{url('admin/dokumen/'.$dt->id)}}" method="post">
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
                <h3 class="card-title">Form Dokumen</h3>
              </div>
              <form role="form" method="POST" action="{{url('admin/dokumen')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <textarea class="form-control" name="title" placeholder="Judul"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">File (Pdf) </label>
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