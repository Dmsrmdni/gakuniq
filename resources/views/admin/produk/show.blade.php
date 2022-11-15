@extends('admin.layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="col-md">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4 my-3 ms-3">
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset($produks->gambar_produk1) }}"
                                        alt="First slide" />
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset($produks->gambar_produk2) }}"
                                        alt="Second slide" />
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset($produks->gambar_produk3) }}"
                                        alt="Third slide" />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body m-auto">
                            <h3 class="card-title">{{ $produks->nama_produk }}</h3>
                            <p class="card-text">
                                {{ $produks->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row g-0 container">
                    <div class="col">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Harga : Rp. {{ number_format($produks->harga, 0, ',', '.') }}</li>
                            <li class="list-group-item">diskon : {{ $produks->diskon }} %</li>
                            <li class="list-group-item">Stok : {{ $produks->stok }}</li>
                        </ul>
                    </div>
                    <div class="container">
                        <blockquote class="blockquote text-end">
                            <p>{{ $produks->sub_kategori->kategori->name }},{{ $produks->sub_kategori->sub_kategori }}</p>
                        </blockquote>
                        <figcaption class="blockquote-footer text-muted text-end">
                            {{ date('d-M-Y', strtotime($produks->created_at)) }}
                        </figcaption>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ url('/admin/produk') }}" class="btn btn-danger me-3"><svg xmlns="http://www.w3.org/2000/svg"
                        width="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                    </svg> Kembali</a>
            </div>
        </div>
    @endsection
