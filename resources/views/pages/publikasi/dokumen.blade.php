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
                        <tr>
                            <th scope="row">1</th>
                            <td>Kamis, 9 April 2020</td>
                            <td><a class="text-primary font-weight-bold" href="#">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit. Exercitationem animi aperiam placeat, sit ipsa adipisci voluptas mollitia
                                    tenetur quo vitae,
                                    rerum cumque maxime, repellendus dolor nobis! Unde non mollitia est.</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Kamis, 9 April 2020</td>
                            <td><a class="text-primary font-weight-bold" href="#">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit. Exercitationem animi aperiam placeat, sit ipsa adipisci voluptas mollitia
                                    tenetur quo vitae,
                                    rerum cumque maxime, repellendus dolor nobis! Unde non mollitia est.</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Kamis, 9 April 2020</td>
                            <td><a class="text-primary font-weight-bold" href="#">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit. Exercitationem animi aperiam placeat, sit ipsa adipisci voluptas mollitia
                                    tenetur quo vitae,
                                    rerum cumque maxime, repellendus dolor nobis! Unde non mollitia est.</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>
@endsection
