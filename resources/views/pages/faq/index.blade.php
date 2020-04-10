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
              <li class="breadcrumb-item"><a href="#">FAQ</a></li>
              <li class="breadcrumb-item active">Data</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <div class="row section">
        <div class="col-12">
         @foreach ($faq as $item)
         <div class="accordion md-accordion accordion-blocks" id="accordion{{$item->id}}" role="tablist"
         aria-multiselectable="true">
         <div class="card">
           <div class="card-header" role="tab" id="heading{{$item->id}}">
             <a class="collapsed" data-toggle="collapse" data-parent="#accordion{{$item->id}}" href="#collapse{{$item->id}}"
               aria-expanded="false" aria-controls="collapse{{$item->id}}">
               <h5 class="mb-0">
                {{$item->title}} <i class="fas fa-angle-down rotate-icon"></i>
               </h5>
             </a>
           </div>
           <div id="collapse{{$item->id}}" class="collapse" role="tabpanel" aria-labelledby="heading{{$item->id}}" data-parent="#accordion{{$item->id}}">
             <div class="card-body">
               <p>{!!$item->content!!}</p>
             </div>
           </div>
         </div>
       </div>
         @endforeach
        </div>
    </div>

  </div>
</section>
@endsection
