@extends('admin.layout.master')
@section('content')
     <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Form Tentang Covid</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Tentang Covid</a></li>
                <li class="breadcrumb-item active">Form Tentang Covid</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">Form Tentang Covid</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{url('admin/tentang')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul Tentang" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Isi </label>
                                <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="content" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kategori</label>
                                <select class="form-control" name="kategori">
                                    <option value="">--Pilih Kategori--</option>
                                    <option value="tentang">Tentang Covid</option>
                                    <option value="faq">FAQ Covid</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Status</label>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="status" value="Publish">
                                    <label for="customRadio1" class="custom-control-label">Publish</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="status" value="Draft" checked>
                                    <label for="customRadio2" class="custom-control-label">Draft</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Gambar(* <i>Kosongkan Saat Memilih Kategori FAQ</i>)</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
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
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection