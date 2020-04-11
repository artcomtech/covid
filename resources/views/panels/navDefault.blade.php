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
                    <li class="nav-item {{Request::segment(1)=="pencegahan"?'active':''}}">
                        <a class="nav-link" href="{{url('/pencegahan')}}">Pencegahan</a>
                    </li>
                    <li class="nav-item {{Request::segment(1)=="berita"?'active':''}}">
                        <a class="nav-link" href="{{route('beritafront.index')}}">Berita</a>
                    </li>
                    <li class="nav-item dropdown {{Request::segment(1)=="siaran-pers"?'active':''}}">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Publikasi</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{url('/siaran-pers')}}">Siaran Pers</a>
                            <a class="dropdown-item" href="{{url('/dokumen')}}">Dokumen</a>
                        </div>
                    </li>
                    <li class="nav-item {{Request::segment(1)=="infografik"?'active':''}}">
                        <a class="nav-link" href="{{url('/infografik')}}">Infografik</a>
                    </li>

                    <li class="nav-item {{Request::segment(1)=="faq"?'active':''}}">
                        <a class="nav-link" href="{{url('/faq')}}">FAQ</a>
                    </li>

                </ul>

                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="tel:08117222003" class="btn btn-danger btn-sm waves-effect rounded waves-effect mr-2" target="_blank">
                            <i class="fas fa-phone mr-1"></i> Call Center
                        </a>
                    </li>
                </ul>

            </div>

        </div>

    </nav>
</header>
