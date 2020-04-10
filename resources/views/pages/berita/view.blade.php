@extends('default')

@section('title', $berita->title)

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
              <li class="breadcrumb-item"><a href="#">Berita</a></li>
              <li class="breadcrumb-item active">{{$berita->slug}}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <div class="row">
      <div id="main-content-left" class="col-xl-8 col-lg-8 col-md-12">
        <div class="artcle-heading">
          <img src="{{asset('images/post/'.$berita->file)}}" class="w-100 img-fluid z-depth-1 img-circle"
            alt="">
          <div class="post-data d-flex justify-content-between my-4">
            <p class="black-text">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="avatar-small rounded z-depth-1"
                class="md-avatar rounded-circle">
              <span class="ml-1">Admin <i>{{\Carbon\Carbon::parse($berita->updated_at)->format('d, M Y')}}</i></span>
            </p>
            {{-- <div class="social-buttons smooth-scroll">
              <button type="button" class="btn btn-sm btn-fb my-0">
                <i class="fab fa-facebook-f"></i>
              </button>
              <button type="button" class="btn btn-sm btn-tw my-0">
                <i class="fab fa-twitter"></i>
              </button>
              <button type="button" class="btn btn-sm btn-li my-0">
                <i class="fab fa-linkedin-in"></i>
              </button>
            </div> --}}
          </div>
        </div>
        <hr>
        {{-- <div class="text-justify"> --}}
          {!!$berita->content!!}
        {{-- </div> --}}

        <div class="text-center mb-4 smooth-scroll social-buttons">

          <hr>

          {{-- <p class="font-weight-bold">Spreed the word: </p>

          <button type="button" class="btn btn-sm btn-fb my-0">
            <i class="fab fa-facebook-f"></i>
          </button>
          <button type="button" class="btn btn-sm btn-tw my-0">
            <i class="fab fa-twitter"></i>
          </button>
          <button type="button" class="btn btn-sm btn-li my-0">
            <i class="fab fa-linkedin-in"></i>
          </button> --}}

          <hr>

        </div>
      </div>
      @include('panels.sidebarblog')
    </div>
  </div>
</section>
@endsection
