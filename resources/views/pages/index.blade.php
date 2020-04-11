@extends('default')

@section('title', 'Beranda')

@section('content')
<div class="rgba-skin">
    <div class="bg-siapm">
        <div class="container">
            <div class="row d-flex wellcome_c">
                <div class="col-12 col-md-6 wellcome_c_m">
                    <h1 class="display-5 ">Lampung Barat <span class="font-weight-bold">Tanggap Covid-19</span></h1>
                    <p>Hubungi Tim Beguai Jejama Lawan Covid-19 Kabupaten Lampung Barat <span
                            class="font-weight-bold">#LambarHebat</span></p>
                    <a class="btn btn-sm btn-danger text-white waves-effect btn-icon-text"
                        href="https://api.whatsapp.com/send?phone=62{{empty($kontak->others)?'':$kontak->others}}">
                        <i class="fas fa-phone btn-icon-prepend fa-2x pr-3"></i>
                        <span class="d-inline-block text-left">
                            <small class="d-block">Laporan Warga</small> {{empty($kontak->others)?'':$kontak->others}}
                        </span>
                    </a>
                </div>
                <div class="col-12 mt-lg-5 mt-3 align-bottom wellcome_c_b mt-5">
                    <div class="wow fadeIn">
                        <div class="p-0">
                            <div class="row mx-0 wow zoomIn">

                                <div class="col-12 col-md-12 mx-auto mb-3 mt-3">
                                    <div class="col-12">
                                        <div class="alert alert-primary mt-4 text-center" role="alert">
                                            @php
                                            \Carbon\Carbon::setLocale('id');
                                            @endphp
                                            Sumber Dinas Kesehatan Lambar. Data update
                                            {{\Carbon\Carbon::parse($covid->updated_at)->format('d F Y H:i')}} WIB *Data
                                            dapat berubah
                                        </div>
                                    </div>
                                    <div class="card text-center">
                                        <div class="card-header secondary-color">
                                            Orang Tanpa Gejala (OTG)
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{empty($covid->jml_otg)?0:$covid->jml_otg}}</h5>
                                            <p class="card-text text-secondary">Total OTG</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 col-md-4 mx-auto mb-3 mt-3">
                                    <div class="card text-center">
                                        <div class="card-header success-color">
                                            Orang Dalam Pemantauan (ODP)
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                {{(empty($covid->pantau)?0:$covid->pantau) + (empty($covid->selesai_pantau)?0:$covid->selesai_pantau)}}
                                            </h5>
                                            <p class="card-text text-success">Total ODP</p>
                                        </div>
                                        <div class="card-footer text-muted p-0">
                                            <table class="table table-bordered m-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p class="p-0 m-0">
                                                                {{empty($covid->pantau)?0:$covid->pantau}}</p>
                                                            <p class="p-0 m-0 text-success">Proses Pemantauan</p>
                                                        </td>
                                                        <td>
                                                            <p class="p-0 m-0">
                                                                {{empty($covid->selesai_pantau)?0:$covid->selesai_pantau}}
                                                            </p>
                                                            <p class="p-0 m-0 text-success">Selesai Pemantauan</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mx-auto mb-3 mt-3">
                                    <div class="card text-center">
                                        <div class="card-header warning-color">
                                            Pasien Dalam Pengawasan (PDP)
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                {{(empty($covid->rawat_rs)?0:$covid->rawat_rs) + (empty($covid->rawat_rumah)?0:$covid->rawat_rumah) + (empty($covid->rawat_sembuh)?0:$covid->rawat_sembu)}}
                                            </h5>
                                            <p class="card-text text-warning">Total PDP</p>
                                        </div>
                                        <div class="card-footer text-muted p-0">
                                            <table class="table table-bordered m-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p class="p-0 m-0">
                                                                {{empty($covid->rawat_rs)?0:$covid->rawat_rs}}</p>
                                                            <p class="p-0 m-0 text-warning">Di Rawat DiRS</p>
                                                        </td>
                                                        <td>
                                                            <p class="p-0 m-0">
                                                                {{empty($covid->rawat_rumah)?0:$covid->rawat_rumah}}</p>
                                                            <p class="p-0 m-0 text-warning">Di Rawat DiRumah</p>
                                                        </td>
                                                        <td>
                                                            <p class="p-0 m-0">
                                                                {{empty($covid->rawat_sembuh)?0:$covid->rawat_sembuh}}
                                                            </p>
                                                            <p class="p-0 m-0 text-warning">Sudah Sembuh</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mx-auto mb-3 mt-3">
                                    <div class="card text-center">
                                        <div class="card-header danger-color">
                                            Kasus Terkonfirmasi COVID-19
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                {{(empty($covid->rawat)?0:$covid->rawat) + (empty($covid->sembuh)?0:$covid->sembuh) + (empty($covid->meninggal)?0:$covid->meninggal)}}
                                            </h5>
                                            <p class="card-text text-danger">Total Kasus Terkonfirmasi COVID-19</p>
                                        </div>
                                        <div class="card-footer text-muted p-0">
                                            <table class="table table-bordered m-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p class="p-0 m-0">{{empty($covid->rawat)?0:$covid->rawat}}
                                                            </p>
                                                            <p class="p-0 m-0 text-danger">Di Rawat</p>
                                                        </td>
                                                        <td>
                                                            <p class="p-0 m-0">
                                                                {{empty($covid->sembuh)?0:$covid->sembuh}}</p>
                                                            <p class="p-0 m-0 text-danger">Sembuh</p>
                                                        </td>
                                                        <td>
                                                            <p class="p-0 m-0">
                                                                {{empty($covid->meninggal)?0:$covid->meninggal}}</p>
                                                            <p class="p-0 m-0 text-danger">Meninggal</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="magazine-section dark-grey-text">
            <h2 class="font-weight-bold pb-2 text-primary"> <a href="{{url("/berita")}}">Berita Covid-19</a></h2>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="single-news wow fadeIn">
                        <div class="view overlay rounded z-depth-1-half mb-4">
                            <img class="img-fluid img-lg" src="{{asset('images/post/'.$singleberita->file)}}"
                                alt="{{$singleberita->title}}">
                            <a href="{{url('berita/'.$singleberita->slug)}}">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <a href="{{url('berita/'.$singleberita->slug)}}">
                            <h3 class="font-weight-bold dark-grey-text mb-3 text-truncate">
                                <a href="{{url('berita/'.$singleberita->slug)}}">{{$singleberita->title}}</a></h3>
                        </a>
                        <p class="dark-grey-text">{{$singleberita->description}}.</p>

                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-4">
                    @foreach ($berita as $item)
                    <div class="single-news mb-2 wow fadeIn">
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <div class="view overlay rounded z-depth-1 mb-2">
                                    <img class="img-fluid img-sm" src="{{asset('images/post/'.$item->file)}}"
                                        alt="{{$item->title}}">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-9 col-9">
                                <a href="{{url('berita/'.$item->slug)}}">
                                    <p class="text-truncate font-weight-bold ">{{$item->title}}</p>
                                    <p class="text-truncate dark-grey-text font-small">{{$item->description}}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="wow fadeIn ">
                    <div class="row wow zoomIn text-center">
                        <div class="col-md-6 mb-3 mt-3">
                            <h4 class="font-weight-bold text-muted">Donasi Lewat Kaos</h4>
                            <p >50% Keuntungan Akan dignakan untuk membantu warga yang terdampak covid-19 di Lampung Barat.</p>
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=6281373517128&text=Halo,%20saya%20ingin%20donasi%20Lewat%20Kaos" class="text-white  btn btn-sm btn-success">Donasi Sekarang</a>
                        </div>
                        <div class="col-md-6 mb-3 mt-3">
                            <img src="{{ asset('images/donasi.jpeg') }}" class="img-fluid z-depth-1" width="350px"
                                alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h2 class="text-center font-weight-bold mb-4 pb-2 text-primary wow fadeIn "> <a
                        href="statistiksiapm.html">Data
                        COVID-19 di Indonesia</a></h2>
                <div class=" wow fadeIn ">
                    <div class="p-0">
                        <div class="row mx-0 wow zoomIn text-center">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://inacovid19.maps.arcgis.com/apps/opsdashboard/index.html#/4411f5e9c69d4ca4be31ac805a0267be"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="section bg-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h2 class="text-center font-weight-bold mb-4 pb-2 text-primary wow fadeIn "> <a
                        href="statistiksiapm.html">Konsultasi Digital Covid-19 Gratis Bagi Warga Lampung Barat</a></h2>
                <p class="text-center w-100">Bersama mahasiswa Kedokteran (Program Beasiswa Kedokteran Lambar Hebat)</p>
                <div class=" wow fadeIn ">
                    <div class="p-0">
                        <div class="row mx-0 wow zoomIn text-center">
                            <table class="table table-striped">
                                <thead class="primary-color text-white">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Asal</th>
                                        <th scope="col">Contact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($kontakall as $item)
                                    @php
                                    $nomor = substr($item->others, 1, 12);
                                    @endphp
                                    <tr>
                                        <th scope="row">{{$no}}</th>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->description}}</td>
                                        <td><a class="btn btn-sm btn-success"
                                                href="https://api.whatsapp.com/send?phone=62{{$nomor}}&text=Halo%20{{$item->title}},%20saya%20ingin%20konsultasi%20tentang%20covid"
                                                target="_blank"><i class="fab fa-whatsapp fa-2x"></i></a></td>
                                    </tr>
                                    @php
                                    $no++;
                                    @endphp
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="col-12">
                                <div class="alert alert-primary mt-4 text-left" role="alert">
                                    Catatan:
                                    <ul>
                                        <li>Tidak Melayani Percakapan diluar Covid-19</li>
                                        <li>Jam Konsultasi pukul <b>17.00 sd 22.00 WIB</b></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
