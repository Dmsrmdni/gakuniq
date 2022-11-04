@extends('admin.layouts.admin')

@section('content')
<div class="container-fluid">

    <div class="col-md-10 col-xl-8 m-auto">
        <div class="card mb-3">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/gambar_produk1/' . $produks->gambar_produk1) }}" alt="First slide" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/gambar_produk2/' . $produks->gambar_produk2) }}" alt="Second slide" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/gambar_produk3/' . $produks->gambar_produk3) }}" alt="Third slide" />
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
            <div class="card-body">
                <h5 class="card-title">{{ $produks->nama_produk }}</h5>
                <p class="card-text">
                {{ $produks->deskripsi }}
                </p>
                <h5 class="card-text">
                    Harga :  Rp. {{ number_format($produks->harga, 0, ',', '.') }}
                </h5>
                <h5 class="card-text">
                    Stok : {{ $produks->stok }}
                </h5>
            </div>
            <div class="card-footer text-end text-muted">
                <h5 class="card-text">
                    Diskon : {{ $produks->diskon }}%
                </h5>
                <blockquote class="blockquote">
                    <p>{{ $produks->sub_kategori->kategori->name }},{{ $produks->sub_kategori->sub_kategori }}</p>
                    </blockquote>
                <figure>
                    <figcaption class="blockquote-footer text-muted">
                        {{ date('d-M-Y', strtotime($produks->created_at)) }}
                    </figcaption>
                </figure>
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
        <!--/ Images -->
@endsection
