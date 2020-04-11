@extends('default')

@section('title', 'Dokumen')

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
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Judul</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($dokumen as $item)
                        <tr>
                            <th scope="row">{{$no}}</th>
                            <td>{{\Carbon\Carbon::parse($item->updated_at)->format('d, M Y')}}</td>
                            <td><a class="text-primary font-weight-bold" href="{{url('dokumen/'.$item->file)}}">{{$item->title}}</a></td>
                        </tr>
                            @php
                                $no++;
                            @endphp
                        @endforeach
                       
                       
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>
@endsection
