@extends('default')

@section('title', 'Beranda')

@section('content')
<div class="rgba-skin">
    <div class="bg-siapm">
        <div class="container">
            <div class="row d-flex wellcome_c">
                <div class="col-12 col-md-6 wellcome_c_m">
                    <h1 class="display-5 ">Lampung Barat <span class="font-weight-bold">Tanggap Covid-19</span></h1>
                    <p>Hubungi Call Center Gugus Tugas Penanggulangan Covid-19 Kabupaten Lampung Barat </p>
                    <a class="btn btn-sm btn-danger waves-effect btn-icon-text">
                        <i class="fas fa-phone btn-icon-prepend fa-2x pr-3"></i>
                        <span class="d-inline-block text-left">
                            <small class="d-block">Call Center</small> {{$kontak->others}}
                        </span>
                    </a>
                </div>
                <div class="col-12 mt-lg-5 mt-3 align-bottom wellcome_c_b mt-5">
                    <div class="wow fadeIn">
                        <div class="p-0">
                            <div class="row mx-0 wow zoomIn">
                                
                                <div class="col-12 col-md-12 mx-auto mb-3 mt-3">
                                    <div class="card text-center">
                                      <div class="card-header secondary-color">
                                        Orang Tanpa Gejala (OTG)
                                      </div>
                                      <div class="card-body">
                                        <h5 class="card-title">{{$covid->jml_otg}}</h5>
                                        <p class="card-text text-secondary">Total OTG</p>
                                      </div>
                                    
                                    </div>
                                  </div>

                                  <div class="col-12 col-md-4 mx-auto mb-3 mt-3">
                                    <div class="card text-center">
                                      <div class="card-header secondary-color">
                                        Orang Dalam Pemantauan (ODP)
                                      </div>
                                      <div class="card-body">
                                        <h5 class="card-title">{{$covid->pantau + $covid->selesai_pantau}}</h5>
                                        <p class="card-text text-secondary">Total ODP</p>
                                      </div>
                                      <div class="card-footer text-muted p-0">
                                        <table class="table table-bordered m-0">
                                          <tbody>
                                            <tr>
                                              <td>
                                                <p class="p-0 m-0">{{$covid->pantau}}</p>
                                                <p class="p-0 m-0 text-secondary">Proses Pemantauan</p>
                                              </td>
                                              <td>
                                                <p class="p-0 m-0">{{$covid->selesai_pantau}}</p>
                                                <p class="p-0 m-0 text-secondary">Selesai Pemantauan</p>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-md-4 mx-auto mb-3 mt-3">
                                    <div class="card text-center">
                                      <div class="card-header secondary-color">
                                        Pasien Dalam Pengawasan (PDP)
                                      </div>
                                      <div class="card-body">
                                        <h5 class="card-title">{{$covid->rawat_rs + $covid->rawat_rumah + $covid->rawat_sembuh}}</h5>
                                        <p class="card-text text-secondary">Total ODP</p>
                                      </div>
                                      <div class="card-footer text-muted p-0">
                                        <table class="table table-bordered m-0">
                                          <tbody>
                                            <tr>
                                              <td>
                                                <p class="p-0 m-0">{{$covid->rawat_rs}}</p>
                                                <p class="p-0 m-0 text-secondary">Di Rawat DiRS</p>
                                              </td>
                                              <td>
                                                <p class="p-0 m-0">{{$covid->rawat_rumah}}</p>
                                                <p class="p-0 m-0 text-secondary">Di Rawat DiRumah</p>
                                              </td>
                                              <td>
                                                <p class="p-0 m-0">{{$covid->rawat_sembuh}}</p>
                                                <p class="p-0 m-0 text-secondary">Sudah Sembuh</p>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-md-4 mx-auto mb-3 mt-3">
                                    <div class="card text-center">
                                      <div class="card-header secondary-color">
                                        Kasus Terkonfirmasi COVID-19
                                      </div>
                                      <div class="card-body">
                                        <h5 class="card-title">160</h5>
                                        <p class="card-text text-secondary">Total ODP</p>
                                      </div>
                                      <div class="card-footer text-muted p-0">
                                        <table class="table table-bordered m-0">
                                          <tbody>
                                            <tr>
                                              <td>
                                                <p class="p-0 m-0">{{$covid->rawat}}</p>
                                                <p class="p-0 m-0 text-secondary">Di Rawat</p>
                                              </td>
                                              <td>
                                                <p class="p-0 m-0">{{$covid->sembuh}}</p>
                                                <p class="p-0 m-0 text-secondary">Sembuh</p>
                                              </td>
                                              <td>
                                                <p class="p-0 m-0">{{$covid->meninggal}}</p>
                                                <p class="p-0 m-0 text-secondary">Meninggal</p>
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
        <h2 class="font-weight-bold pb-2 text-primary"> <a href="kabarSiapm.html">Berita Covid-19</a></h2>
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-4">
            <div class="single-news wow fadeIn">
              <div class="view overlay rounded z-depth-1-half mb-4">
                <img class="img-fluid img-lg"
                  src="{{asset('images/post/'.$singleberita->file)}}"
                  alt="{{$singleberita->title}}">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <a href="{{url('berita/'.$singleberita->slug)}}"><h3 class="font-weight-bold dark-grey-text mb-3 text-truncate"><a>{{$singleberita->title}}</a></h3></a>
              <p class="dark-grey-text">{{$singleberita->description}}.</p>

            </div>
          </div>

          <div class="col-lg-6 col-md-12 mb-4">
           @foreach ($berita as $item)
           <div class="single-news mb-2 wow fadeIn">
            <div class="row">
              <div class="col-md-3 col-3">
                <div class="view overlay rounded z-depth-1 mb-2">
                  <img class="img-fluid img-sm" src="{{asset('images/post/'.$item->file)}}" alt="{{$item->title}}">
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
                <h2 class="text-center font-weight-bold mb-4 pb-2 text-primary wow fadeIn "> <a
                        href="statistiksiapm.html">Pemantauan Pelaku Perjalanan Dari Luar Daerah</a></h2>
                        @php
                            \Carbon\Carbon::setLocale('id');
                        @endphp
                         <p class="text-center w-100">Update Terakhir : {{\Carbon\Carbon::parse($covid->updated_at)->format('d F Y H:i')}} WIB *Data dapat berubah sewaktu-waktu
                        </p>
               
                <div class=" wow fadeIn ">
                    <div class="p-0">
                        <div class="row mx-0 wow zoomIn text-center">
                            <div class="col-6 col-md-4 mx-auto mb-3 mt-3">
                                <div class="card card-count">
                                    <div class="card-body">
                                        <i class="fas fa-car-side fa-3x text-primary"></i>
                                        <p class="count-p" class="mb-0">Pelaku Perjalanan
                                            <span class="count indigo-text">{{$covid->jml_perjalanan}}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mx-auto mb-3 mt-3">
                                <div class="card card-count">
                                    <div class="card-body">
                                        <i class="fas fa-exclamation-triangle fa-3x indigo-text"></i>
                                        <p class="count-p" class="mb-0">Masih Dalam Pemantauan
                                            <span class="count indigo-text">{{$covid->jml_pantau}}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mx-auto mb-3 mt-3">
                                <div class="card card-count">
                                    <div class="card-body">
                                        <i class="far fa-check-square fa-3x succes-text"></i>
                                        <p class="count-p" class="mb-0">Selesai Dipantau 14 Hari
                                            <span class="count succes-text">{{$covid->jml_selesai}}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
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
@endsection
