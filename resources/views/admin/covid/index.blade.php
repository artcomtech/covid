@extends('admin.layout.master')
@section('content')
     <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Covid</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"></a></li>
                <li class="breadcrumb-item active">Data Covid</li>
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
                <h3 class="card-title">List Data Covid</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>OTG</th>
                                <th>ODP</th>
                                <th>PDP</th>
                                <th>Terkonfirmasi Covid</th>
                                <th>Pelaku Perjalanan</th>
                                <th>Selesai Dipantau</th>
                                <th>Masih Dipantau</th>
                                <th>Terakhir Update</th>
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
                                    <td>{{$dt->jml_otg}}</td>
                                    <td>{{$dt->pantau + $dt->selesai_pantau}}</td>
                                    <td>{{$dt->rawat_rs + $dt->rawat_rumah + $dt->rawat_sembuh}}</td>
                                    <td>{{$dt->rawat + $dt->sembuh + $dt->meninggal}}</td>
                                    <td>{{$dt->jml_perjalanan}}</td>
                                    <td>{{$dt->jml_selesai}}</td>
                                    <td>{{$dt->jml_pantau}}</td>
                                    <td>{{\Carbon\Carbon::parse($dt->updated_at)->format('d/m/Y g:i')}}</td>
                                   
                                    <td>
                                        <a href="{{url('admin/covid/'.$dt->id.'/edit')}}"><button class="btn btn-sm btn-success" title="Edit"><i class="fa fa-edit"></i></button></a>
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