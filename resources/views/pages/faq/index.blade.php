@extends('default')

@section('title', 'Pertanyaan Yang sering diajukan')

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
    <div class="row section">
        <div class="col-12">
          @for ($i = 1; $i <=500 ; $i++)
          <div class="accordion md-accordion accordion-blocks" id="accordion{{$i}}" role="tablist"
          aria-multiselectable="true">
          <div class="card">
            <div class="card-header" role="tab" id="heading{{$i}}">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion{{$i}}" href="#collapse{{$i}}"
                aria-expanded="false" aria-controls="collapse{{$i}}">
                <h5 class="mb-0">
                  Collapsible Group Item {{$i}} <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>
            <div id="collapse{{$i}}" class="collapse" role="tabpanel" aria-labelledby="heading{{$i}}" data-parent="#accordion{{$i}}">
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure consequatur quia distinctio at nam
                  excepturi voluptatum iste qui aperiam aut optio, rem delectus commodi quaerat dolores obcaecati
                  necessitatibus libero ullam.</p>
              </div>
            </div>
          </div>
        </div>
          @endfor
        </div>
    </div>

  </div>
</section>
@endsection
