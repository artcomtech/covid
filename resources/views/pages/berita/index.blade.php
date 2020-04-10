@extends('default')

@section('title', 'Berita')

@section('content')
<section class="main-content">
  <div class="container">
    <div class="page-head row mb-3">
      <div class="col-12  align-self-end">
        <h1 class="h1-responsive">@yield('title') Pekon</h1>
        <div class="breadcrumb-r">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Library</a></li>
              <li class="breadcrumb-item active">Data</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <div class="row">
      <div id="main-content-left" class="col-xl-8 col-lg-8 col-md-12">
        <div class="row">
          @for ($i = 1; $i <=6 ; $i++)
          <div class="col-md-12 mb-2">
            <article class="blog card mb-3 text-center hoverable  wow fadeIn">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 ">
                    <div class="view overlay rgba-white-slight">
                      <img src="https://mdbootstrap.com/img/Photos/Others/img%20(43).jpg" class="img-fluid rounded-bottom img-lg"
                        alt="Sample image for first version of blog listing">
                      <a><div class="mask"></div></a>
                    </div>
                  </div>
                  <div class="col-md-7 text-left blog-content">
                    <h2 class="text-truncate">This is title of the news Lorem ipsum dolor sit amet.</h2>
                    <ul class="list-group list-group-horizontal">
                      <li class="list-group-item"><a href="#!" class="skin-text"><i class="fas fa-tags"></i> <span class="font-weight-bold">Informasi</span></a></li>
                      <li class="list-group-item">By <a><strong>Nama Pekon</strong></a></li>
                      <li class="list-group-item">17 Des 2019</li>
                    </ul>
                    <p class="article text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quaerat quidem, sapiente amet officiis, laborum asperiores praesentium blanditiis consequuntur quos obcaecati nulla eveniet porro perspiciatis! Veniam vel mollitia alias culpa!.</p>
                    <a href="{{ route('berita.show','judul-berita') }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </article>
          </div>
          @endfor
        </div>
        <hr class="mt-3">
        <div class="row justify-content-center mt-3 mb-4">
          <nav class="mb-4">
            <ul class="pagination pagination-circle pagination-primary-color mb-0">
              <li class="page-item disabled clearfix d-none d-md-block">
                <a class="page-link waves-effect waves-effect">First</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link waves-effect waves-effect" aria-label="Previous">
                  <span aria-hidden="true">«</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link waves-effect waves-effect">1</a>
              </li>
              <li class="page-item">
                <a class="page-link waves-effect waves-effect">2</a>
              </li>
              <li class="page-item">
                <a class="page-link waves-effect waves-effect">3</a>
              </li>
              <li class="page-item">
                <a class="page-link waves-effect waves-effect">4</a>
              </li>
              <li class="page-item">
                <a class="page-link waves-effect waves-effect">5</a>
              </li>
              <li class="page-item">
                <a class="page-link waves-effect waves-effect" aria-label="Next">
                  <span aria-hidden="true">»</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
              <li class="page-item clearfix d-none d-md-block">
                <a class="page-link waves-effect waves-effect">Last</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      @include('panels.sidebarblog')
    </div>

  </div>
</section>
@endsection
