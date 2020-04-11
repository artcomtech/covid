@extends('default')

@section('title', 'Infografik')

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
                            <li class="breadcrumb-item"><a href="#">Infografik</a></li>
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row section">
            @foreach ($infografik as $item)
            <div class="col-12 col-md-4">
                <div class="card card-cascade wider">
                    <div class="view view-cascade overlay">
                        <img class="card-img-top"
                            src="{{asset('images/post/'.$item->file)}}"
                            alt="Card image cap" style="height:400px">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body card-body-cascade text-center p-0">
                        <div class="card-footer text-center">
                            <a href="{{url('infografik/'.$item->file)}}" class="btn btn-primary btn-sm btn-rounded"><i class="fas fa-download"></i>
                                download</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</section>
@endsection
