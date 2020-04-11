@extends('default')

@section('title', 'Pencegahan')

@section('content')
<section class="main-content section">
    <div class="container">
        <div class="page-head row mb-3">
            <div class="col-12 mt-4">
                <h1 class="h1-responsive">@yield('title')</h1>
                <div class="breadcrumb-r">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h2 class="font-weight-bold mb-4 pb-2 text-primary wow fadeIn ">Melindungi Diri dari COVID-19</h2>
                <p>Ada beberapa hal yang dapat Anda lakukan untuk mencegah atau membantu menghentikan penyebaran
                    coronavirus, antara lain:</p>
                <div class=" wow fadeIn mt-5">
                    <div class="row mx-0 wow zoomIn text-center">
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/1.png') }}" class="img-fluid" width="150px">
                            <p class="mt-3">Tetap tinggal di rumah; bekerja dari rumah, belajar dari rumah, dan beribadah di rumah (jika diperlukan)</p>
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/2.png') }}" class="img-fluid" width="150px">
                            <p class="mt-3">Cuci tangan dengan sabun dan air minimal 20 detik atau gunakan hand sanitizer berbasis alkohol minimal 60 %</p>
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/3.png') }}" class="img-fluid" width="150px">
                            <p class="mt-3">Pakai masker dan sarung tangan jika Anda harus beraktivitas di luar rumah dan ganti secara berkala</p>
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/4.png') }}" class="img-fluid" width="150px">
                            <p class="mt-3">Tutupi mulut dan hidung saat batuk atau bersin dengan tisu atau siku bagian dalam</p>
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/5.png') }}" class="img-fluid" width="150px">
                            <p class="mt-3">Usahakan untuk tetap tidak melakukan kontak atau interaksi dengan hewan</p>
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/6.png') }}" class="img-fluid" width="150px">
                            <p class="mt-3">Hindari untuk menyentuh wajah dengan tangan ketika setelah atau usai beraktifitas</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
