@extends('default')

@section('title', 'Judul Berita, ipsum dolor sit amet consectetur adipisicing elit. Recusandae libero.')

@section('content')
<section class="main-content">
  <div class="container">
    <div class="page-head row mb-3">
      <div class="col-12  align-self-end">
        <h1 class="h1-responsive">@yield('title')</h1>
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
        <div class="artcle-heading">
          <img src="{{url('uploads/pustakadigital/berita/1586082209.webp')}}" class="w-100 img-fluid z-depth-1 img-circle"
            alt="">
          <div class="post-data d-flex justify-content-between my-4">
            <p class="black-text">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="avatar-small rounded z-depth-1"
                class="md-avatar rounded-circle">
              <span class="ml-1">Nama Pekon <i>19 Des 2019</i></span>
            </p>
            <div class="social-buttons smooth-scroll">
              <button type="button" class="btn btn-sm btn-fb my-0">
                <i class="fab fa-facebook-f"></i>
              </button>
              <button type="button" class="btn btn-sm btn-tw my-0">
                <i class="fab fa-twitter"></i>
              </button>
              <button type="button" class="btn btn-sm btn-li my-0">
                <i class="fab fa-linkedin-in"></i>
              </button>
            </div>
          </div>
        </div>
        <hr>
        <div class="text-justify">
          <p class="font-weight-bold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, maxime
            rerum. Expedita dolor quae in odio ad veritatis doloremque harum non nulla rerum eveniet exercitationem
            alias, repudiandae amet minus maiores.</p>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt omnis eius culpa ab exercitationem,
            odit sapiente quasi assumenda optio minus? Velit facilis eligendi corrupti cumque saepe, ea
            exercitationem voluptatem minima! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam officia
            aliquam fuga laboriosam ea sunt, vitae perspiciatis. Nihil deleniti minus numquam labore ratione rerum,
            iste quidem consectetur natus error provident.</p>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt omnis eius culpa ab exercitationem,
            odit sapiente quasi assumenda optio minus? Velit facilis eligendi corrupti cumque saepe, ea
            exercitationem voluptatem minima! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam officia
            aliquam fuga laboriosam ea sunt, vitae perspiciatis. Nihil deleniti minus numquam labore ratione rerum,
            iste quidem consectetur natus error provident.</p>

          <figure class="figure">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" class="figure-img img-fluid z-depth-1"
              alt="...">
            <figcaption class="figure-caption">A caption for the above image.</figcaption>
          </figure>


          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur sapiente rem consequatur architecto
            aut, labore similique cum. Dolores eum architecto soluta minus optio, magni eaque veritatis vitae enim
            rerum nemo.</p>

          <hr>
          <h2> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vero ea eum aliquam reprehenderit
            veritatis est consequuntur accusantium labore alias?</h2>
          <p class="my-4 font-weight-bold">This is a subheading</p>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt omnis eius culpa ab exercitationem,
            odit sapiente quasi assumenda optio minus? Velit facilis eligendi corrupti cumque saepe, ea
            exercitationem voluptatem minima! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam officia
            aliquam fuga laboriosam ea sunt, vitae perspiciatis. Nihil deleniti minus numquam labore ratione rerum,
            iste quidem consectetur natus error provident.</p>

          <ul>
            <li>Lorem ipsum</li>
            <li>Lorem ipsum</li>
            <li>Lorem ipsum</li>
          </ul>

          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur sapiente rem consequatur architecto
            aut, labore similique cum. Dolores eum architecto soluta minus optio, magni eaque veritatis vitae enim
            rerum nemo.</p>

        </div>

        <div class="text-center mb-4 smooth-scroll social-buttons">

          <hr>

          <p class="font-weight-bold">Spreed the word: </p>

          <button type="button" class="btn btn-sm btn-fb my-0">
            <i class="fab fa-facebook-f"></i>
          </button>
          <button type="button" class="btn btn-sm btn-tw my-0">
            <i class="fab fa-twitter"></i>
          </button>
          <button type="button" class="btn btn-sm btn-li my-0">
            <i class="fab fa-linkedin-in"></i>
          </button>

          <hr>

        </div>
      </div>
      @include('panels.sidebarblog')
    </div>
  </div>
</section>
@endsection
