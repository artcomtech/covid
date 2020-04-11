@extends('admin.layout.master')
@section('content')
     <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Form Edit Data Covid</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Data covid</a></li>
                <li class="breadcrumb-item active">Form Edit Data Covid</li>
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
                  <h3 class="card-title">Form Edit Tentang</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{url('admin/covid/'.$data->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                  <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Orang Tanpa Gejala (OTD)</label>
                            <label for="exampleInputEmail1" style="font-size: 12px">Jumlah Orang dengan Tanpa Gejala</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Orang Tanpa Gejala (OTD)" name="jml_otg" value="{{$data->jml_otg}}" required>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="exampleInputEmail1">Orang Dalam Pemantauan (ODP)</label>
                            <div class="row">
                                <div class="col-md-6" >
                                    <label for="exampleInputEmail1" style="font-size: 12px">Jumlah Orang (ODP) Dalam Proses Pemantauan</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Proses Pemantauan" value="{{$data->pantau}}" name="pantau">
                                </div>
                                <div class="col-md-6" >
                                  <label for="exampleInputEmail1" style="font-size: 12px">Jumlah Orang (ODP) Selesai Dipantau </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Selesai Pemantauan" value="{{$data->selesai_pantau}}" name="selesai_pantau">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Pasien Dalam Pengawasan (PDP)</label>
                            <div class="row">
                                <div class="col-md-4" >
                                    <label for="exampleInputEmail1" style="font-size: 12px">Jumlah Orang (PDP) Dirawat Di RS</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Dirawat Di RS" name="rawat_rs" value="{{$data->rawat_rs}}">
                                </div>
                                <div class="col-md-4" >
                                  <label for="exampleInputEmail1" style="font-size: 12px">Jumlah Orang (PDP) Dirawat Di Rumah</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Dirawat Dirumah" name="rawat_rumah" value="{{$data->rawat_rumah}}">
                                </div>
                                <div class="col-md-4" >
                                  <label for="exampleInputEmail1" style="font-size: 12px">Jumlah Orang (PDP) yang Sembuh</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Sudah Sembuh" name="rawat_sembuh" value="{{$data->rawat_sembuh}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Kasus Terkonfirmasi Positif Covid 19</label>
                            <div class="row">
                                <div class="col-md-4" >
                                  <label for="exampleInputEmail1" style="font-size: 12px">Jumlah Orang (Positif Covid-29) yang dirawat</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Dirawat" name="rawat" value="{{$data->rawat}}">
                                </div>
                                <div class="col-md-4" >
                                    <label for="exampleInputEmail1" style="font-size: 12px">Jumlah Orang (Positif Covid-29) yang sembuh</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Sembuh" name="sembuh" value="{{$data->sembuh}}">
                                </div>
                                <div class="col-md-4" >
                                   <label for="exampleInputEmail1" style="font-size: 12px">Jumlah Orang (Positif Covid-29) yang meninggal</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Meninggal" name="meninggal" value="{{$data->meninggal}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Jumlah Pelaku Perjalanan</label>
                            <label for="exampleInputEmail1" style="font-size: 12px">Jumlah Orang yang Pernah Melakukan Perjalanan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Pelaku Perjalanan" name="jml_perjalanan" value="{{$data->jml_perjalanan}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Jumlah Selesai Dipantau</label>
                            <label for="exampleInputEmail1" style="font-size: 12px">Jumlah yang Melakukan Perjalanan Selesai Di Pantau</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Selesai Di Pantau" name="jml_selesai" value="{{$data->jml_selesai}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Jumlah Masih Dalam Pemantauan</label>
                            <label for="exampleInputEmail1" style="font-size: 12px">Jumlah yang Melakukan Perjalanan Masih Di Pantau</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Masih Dalam Pemantauan" name="jml_pantau" value="{{$data->jml_pantau}}" required>
                        </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary float-right"><i class="fa fa-save"></i> Update</button>
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