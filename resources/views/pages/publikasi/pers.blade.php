@extends('default')

@section('title', 'Siaran Pers')

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
                            <li class="breadcrumb-item"><a href="#">FAQ</a></li>
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row section">

        </div>
    </div>
</section>
@endsection
