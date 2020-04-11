@extends('default')

@section('title', 'Berita')

@section('content')
<section class="main-content section">
  <div class="container">
    <div class="page-head row mb-3">
      <div class="col-12  align-self-end">
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
    <div class="row">
      <div id="main-content-left" class="col-xl-8 col-lg-8 col-md-12">
        <div class="row">
          @foreach ($berita as $item)
          <div class="col-md-12 mb-2">
            <article class="blog card mb-3 text-center hoverable  wow fadeIn">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 ">
                    <div class="view overlay rgba-white-slight">
                      <img src="{{asset('images/post/'.$item->file)}}" class="img-fluid rounded-bottom img-lg"
                        alt="{{$item->title}}">
                      <a><div class="mask"></div></a>
                    </div>
                  </div>
                  <div class="col-md-7 text-left blog-content">
                    <h2 class="text-truncate">{{$item->title}}</h2>
                    <ul class="list-group list-group-horizontal">
                      <li class="list-group-item"><a href="#!" class="skin-text"><i class="fas fa-tags"></i> <span class="font-weight-bold">Informasi</span></a></li>
                      <li class="list-group-item">By <a><strong>Admin</strong></a></li>
                      <li class="list-group-item"> {{\Carbon\Carbon::parse($item->updated_at)->format('d, M Y')}}</li>
                    </ul>
                    <p class="article text-muted">{{$item->description}}</p>
                    <a href="{{ url('berita/'.$item->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </article>
          </div>
          @endforeach

        </div>

        <hr class="mt-3">
        {{-- <div class="row justify-content-center mt-3 mb-4">
          <nav class="mb-4">
            <ul class="pagination pagination-circle pagination-primary-color mb-0">
              <li class="page-item disabled clearfix d-none d-md-block">
                <a href="{{$berita->first_page_url}}" class="page-link waves-effect waves-effect">First</a>
              </li>
              <li class="page-item disabled">
                <a href="{{$berita->prev_page_url}}" class="page-link waves-effect waves-effect" aria-label="Previous">
                  <span aria-hidden="true">«</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              @for ($i = 1; $i <= $berita->last_page; $i++)
              <li class="page-item {{\Request::get('page')==$i?'active':''}}">
                <a class="page-link waves-effect waves-effect">{{$i}}</a>
              </li>
              @endfor


              <li class="page-item">
                <a href="{{$berita->ext_page_url}}" class="page-link waves-effect waves-effect" aria-label="Next">
                  <span aria-hidden="true">»</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
              <li class="page-item clearfix d-none d-md-block">
                <a href="{{$berita->last_page_url}}" class="page-link waves-effect waves-effect">Last</a>
              </li>
            </ul>
          </nav>
        </div> --}}
      </div>
      @include('panels.sidebarblog')
    </div>

  </div>
</section>
@endsection
