@extends('admin.layout.master')
@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>{{$covid->jml_otg}}</h3>

            <p>OTG</p>
            </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
            </div>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
            <h3>{{$covid->pantau + $covid->selesai_pantau}}</h3>

            <p>ODP</p>
            </div>
            <div class="icon">
            <i class="ion ion-stats-bars"></i>
            </div>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
            <h3>{{$covid->rawat_rs + $covid->rawat_rumah + $covid->rawat_sembuh}}</h3>

            <p>PDP</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>{{$covid->rawat + $covid->sembuh + $covid->meninggal}}</h3>

            <p>Kasus Terkonfirmasi</p>
            </div>
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
        </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
    
@endsection