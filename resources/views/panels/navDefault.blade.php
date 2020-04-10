<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-expand-lg scrolling-navbar ">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">
        <img class="site-logo" src="{{ asset('images/logo.webp') }}" height="30" alt="siapm Logo">
        <p class="site-name ">Gugus Tugas Covid-19 <span> Kab. Lampung Barat</span></p>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="basicExampleNav">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item {{empty(Request::segment(1))?'active':''}}">
            <a class="nav-link" href="{{url('/')}}">Beranda</a>
          </li>
          <li class="nav-item {{Request::segment(1)=="berita"?'active':''}}">
            <a class="nav-link" href="{{route('beritafront.index')}}" >Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galeri.html" >Infografis</a>
          </li>
          <li class="nav-item {{Request::segment(1)=="faq"?'active':''}}">
            <a class="nav-link" href="{{url('/faq')}}" >FAQ</a>
          </li>

        </ul>

        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href=""
              class="btn btn-danger btn-sm waves-effect rounded waves-effect mr-2" target="_blank">
              <i class="fas fa-phone mr-1"></i> Call Center 
            </a>
          </li>
        </ul>

      </div>

    </div>

  </nav>
</header>
