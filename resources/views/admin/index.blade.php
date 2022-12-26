@extends('admin.layouts.admin')

@section('content')
    <div class="row mb-3">
        {{-- Pembelian Produk --}}
        <div class="col-xl-4">
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#pembelian_produk_2021" aria-controls="pembelian_produk_2021"
                            aria-selected="true">
                            2021
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#pembelian_produk_2022" aria-controls="pembelian_produk_2022"
                            aria-selected="true">
                            2022
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#pembelian_produk_2023" aria-controls="pembelian_produk_2023"
                            aria-selected="true">
                            2023
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="pembelian_produk_2021" role="tabpanel">
                        <div class="card-title">
                            <h5 class="text-nowrap mb-2">Pembelian Produk</h5>
                        </div>
                        <div class="mt-sm-auto">
                            <h3 class="text-success text-nowrap fw-semibold mb-0">
                                Rp. {{ number_format($pendapatan_produk_2021, 0, ',', '.') }}
                            </h3>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="pembelian_produk_2022" role="tabpanel">
                        <div class="card-title">
                            <h5 class="text-nowrap mb-2">Pembelian Produk</h5>
                        </div>
                        <div class="mt-sm-auto">
                            <h3 class="text-success text-nowrap fw-semibold mb-0">
                                Rp. {{ number_format($pendapatan_produk_2022, 0, ',', '.') }}
                            </h3>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pembelian_produk_2023" role="tabpanel">
                        <div class="card-title">
                            <h5 class="text-nowrap mb-2">Pembelian Produk</h5>
                        </div>
                        <div class="mt-sm-auto">
                            <h3 class="text-success text-nowrap fw-semibold mb-0">
                                Rp. {{ number_format($pendapatan_produk_2023, 0, ',', '.') }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- EndPembelianProduk --}}

        {{-- Pembelian Voucher --}}
        <div class="col-xl-4">
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#pembelian_voucher_2021" aria-controls="pembelian_voucher_2021"
                            aria-selected="true">
                            2021
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#pembelian_voucher_2022" aria-controls="pembelian_voucher_2022"
                            aria-selected="true">
                            2022
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#pembelian_voucher_2023" aria-controls="pembelian_voucher_2023"
                            aria-selected="true">
                            2023
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="pembelian_voucher_2021" role="tabpanel">
                        <div class="card-title">
                            <h5 class="text-nowrap mb-2">Pembelian Voucher</h5>
                        </div>
                        <div class="mt-sm-auto">
                            <h3 class="text-success text-nowrap fw-semibold mb-0">
                                Rp. {{ number_format($pendapatan_voucher_2021, 0, ',', '.') }}
                            </h3>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="pembelian_voucher_2022" role="tabpanel">
                        <div class="card-title">
                            <h5 class="text-nowrap mb-2">Pembelian Voucher</h5>
                        </div>
                        <div class="mt-sm-auto">
                            <h3 class="text-success text-nowrap fw-semibold mb-0">
                                Rp. {{ number_format($pendapatan_voucher_2022, 0, ',', '.') }}
                            </h3>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pembelian_voucher_2023" role="tabpanel">
                        <div class="card-title">
                            <h5 class="text-nowrap mb-2">Pembelian Voucher</h5>
                        </div>
                        <div class="mt-sm-auto">
                            <h3 class="text-success text-nowrap fw-semibold mb-0">
                                Rp. {{ number_format($pendapatan_voucher_2023, 0, ',', '.') }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- EndPembelianVoucher --}}

        {{-- TotalPendapatan --}}
        <div class="col-xl-4">
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#total_pendapatan_2021" aria-controls="total_pendapatan_2021"
                            aria-selected="true">
                            2021
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#total_pendapatan_2022" aria-controls="total_pendapatan_2022"
                            aria-selected="true">
                            2022
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#total_pendapatan_2023" aria-controls="total_pendapatan_2023"
                            aria-selected="true">
                            2023
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="total_pendapatan_2021" role="tabpanel">
                        <div class="card-title">
                            <h5 class="text-nowrap mb-2">Total Pendapatan</h5>
                        </div>
                        <div class="mt-sm-auto">
                            <h3 class="text-success text-nowrap fw-semibold mb-0">
                                Rp. {{ number_format($total_pendapatan_2021, 0, ',', '.') }}
                            </h3>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="total_pendapatan_2022" role="tabpanel">
                        <div class="card-title">
                            <h5 class="text-nowrap mb-2">Total Pendapatan</h5>
                        </div>
                        <div class="mt-sm-auto">
                            <h3 class="text-success text-nowrap fw-semibold mb-0">
                                Rp. {{ number_format($total_pendapatan_2022, 0, ',', '.') }}
                            </h3>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="total_pendapatan_2023" role="tabpanel">
                        <div class="card-title">
                            <h5 class="text-nowrap mb-2">Total Pendapatan</h5>
                        </div>
                        <div class="mt-sm-auto">
                            <h3 class="text-success text-nowrap fw-semibold mb-0">
                                Rp. {{ number_format($total_pendapatan_2023, 0, ',', '.') }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- EndTotalPendapatan --}}
    </div>

    <div class="row mb-3">
        {{-- Data Transaksi --}}
        <div class="col-xl-6">
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#data_transaksi_2021" aria-controls="data_transaksi_2021"
                            aria-selected="true">
                            2021
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#data_transaksi_2022" aria-controls="data_transaksi_2022"
                            aria-selected="true">
                            2022
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#data_transaksi_2023" aria-controls="data_transaksi_2023"
                            aria-selected="true">
                            2023
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="data_transaksi_2021" role="tabpanel">
                        <h5 class="m-0 me-2">Data Pembelian/bulan</h5>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <canvas id="pembelian_tahun_2021"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="data_transaksi_2022" role="tabpanel">
                        <h5 class="m-0 me-2">Data Pembelian/bulan</h5>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <canvas id="pembelian_tahun_2022"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="data_transaksi_2023" role="tabpanel">
                        <h5 class="m-0 me-2">Data Pembelian/bulan</h5>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <canvas id="pembelian_tahun_2023"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- EndData Transaksi --}}

        {{-- Data Pembelian Voucher --}}
        <div class="col-xl-6">
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#data_voucher_2021" aria-controls="data_voucher_2021" aria-selected="true">
                            2021
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#data_voucher_2022" aria-controls="data_voucher_2022" aria-selected="true">
                            2022
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#data_voucher_2023" aria-controls="data_voucher_2023" aria-selected="true">
                            2023
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="data_voucher_2021" role="tabpanel">
                        <h5 class="m-0 me-2">Data Pembelian Voucher/bulan</h5>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <canvas id="pembelian_voucher_tahun_2021"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="data_voucher_2022" role="tabpanel">
                        <h5 class="m-0 me-2">Data Pembelian Voucher/bulan</h5>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <canvas id="pembelian_voucher_tahun_2022"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="data_voucher_2023" role="tabpanel">
                        <h5 class="m-0 me-2">Data Pembelian Voucher/bulan</h5>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <canvas id="pembelian_voucher_tahun_2023"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Data Pembelian Voucher --}}
    </div>

    <div class="row mb-3">
        {{-- Barang Masuk/Keluar --}}
        <div class="col-xl-8">
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#data_barang_2021" aria-controls="data_barang_2021" aria-selected="true">
                            2021
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#data_barang_2022" aria-controls="data_barang_2022" aria-selected="true">
                            2022
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#data_barang_2023" aria-controls="data_barang_2023" aria-selected="true">
                            2023
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="data_barang_2021" role="tabpanel">
                        <div class="card">
                            <div class="row row-bordered g-0">
                                <div class="col-md-8">
                                    <h5 class="card-header m-0 me-2 pb-3">Barang Masuk dan Keluar/Bulan</h5>
                                    <canvas id="barang_masuk_keluar_bulan_2021" style="margin: 10px"></canvas>
                                </div>
                                <div class="col-md-4">
                                    <canvas style="margin: 20px 10px 0px" id="barang_masuk_keluar_2021"></canvas>
                                    <h5 class="card-title mx-2 my-3 pb-3">Barang Masuk/Keluar</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="data_barang_2022" role="tabpanel">
                        <div class="card">
                            <div class="row row-bordered g-0">
                                <div class="col-md-8">
                                    <h5 class="card-header m-0 me-2 pb-3">Barang Masuk dan Keluar/Bulan</h5>
                                    <canvas id="barang_masuk_keluar_bulan_2022" style="margin: 10px"></canvas>
                                </div>
                                <div class="col-md-4">
                                    <canvas style="margin: 20px 10px 0px" id="barang_masuk_keluar_2022"></canvas>
                                    <h5 class="card-title mx-2 my-3 pb-3">Barang Masuk/Keluar</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="data_barang_2023" role="tabpanel">
                        <div class="card">
                            <div class="row row-bordered g-0">
                                <div class="col-md-8">
                                    <h5 class="card-header m-0 me-2 pb-3">Barang Masuk dan Keluar/Bulan</h5>
                                    <canvas id="barang_masuk_keluar_bulan_2023" style="margin: 10px"></canvas>
                                </div>
                                <div class="col-md-4">
                                    <canvas style="margin: 20px 10px 0px" id="barang_masuk_keluar_2023"></canvas>
                                    <h5 class="card-title mx-2 my-3 pb-3">Barang Masuk/Keluar</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- EndBarang Masuk/Keluar --}}
        <!-- Data History -->
        <div class="col-xl-4">
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#data_history_2021" aria-controls="data_history_2021" aria-selected="true">
                            2021
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#data_history_2022" aria-controls="data_history_2022" aria-selected="true">
                            2022
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#data_history_2023" aria-controls="data_history_2023" aria-selected="true">
                            2023
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="data_history_2021" role="tabpanel">
                        <div class="card">
                            <h5 class="card-title m-2">History</h5>
                            <div class="card-body">
                                <ul class="p-0 m-0">
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-secondary"><i
                                                    class="bx bxs-user"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">User Register</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-1">
                                                <h6 class="mb-0">{{ number_format($users_2021, 0, ',', '.') }}</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-info"><i
                                                    class="bx bx-closet"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Produk Terjual</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-1">
                                                <h6 class="mb-0">{{ number_format($produk_terjual_2021, 0, ',', '.') }}
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-danger"><i
                                                    class="bx bx-recycle"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Refund Produk</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-1">
                                                <h6 class="mb-0">{{ number_format($refund_produk_2021, 0, ',', '.') }}
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="data_history_2022" role="tabpanel">
                        <div class="card">
                            <h5 class="card-title m-2">History</h5>
                            <div class="card-body">
                                <ul class="p-0 m-0">
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-secondary"><i
                                                    class="bx bxs-user"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">User Register</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-1">
                                                <h6 class="mb-0">{{ number_format($users_2022, 0, ',', '.') }}</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-info"><i
                                                    class="bx bx-closet"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Produk Terjual</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-1">
                                                <h6 class="mb-0">{{ number_format($produk_terjual_2022, 0, ',', '.') }}
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-danger"><i
                                                    class="bx bx-recycle"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Refund Produk</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-1">
                                                <h6 class="mb-0">{{ number_format($refund_produk_2022, 0, ',', '.') }}
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="data_history_2023" role="tabpanel">
                        <div class="card">
                            <h5 class="card-title m-2">History</h5>
                            <div class="card-body">
                                <ul class="p-0 m-0">
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-secondary"><i
                                                    class="bx bxs-user"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">User Register</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-1">
                                                <h6 class="mb-0">{{ number_format($users_2023, 0, ',', '.') }}</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-info"><i
                                                    class="bx bx-closet"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Produk Terjual</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-1">
                                                <h6 class="mb-0">{{ number_format($produk_terjual_2023, 0, ',', '.') }}
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-danger"><i
                                                    class="bx bx-recycle"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Refund Produk</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-1">
                                                <h6 class="mb-0">{{ number_format($refund_produk_2023, 0, ',', '.') }}
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- endDataHistory -->
    </div>

    {{-- EndContent --}}


    {{-- <div class="buy-now">
        <button class="btn btn-danger btn-buy-now" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">
            <i class='bx bxs-chat'></i> Pesan</a>
        </button>
    </div> --}}


    <div class="col-lg-3 col-md-6">
        <div class="mt-3">
            {{-- <div >
                <div class="offcanvas-header">
                    <h5 id="offcanvasEndLabel" class="offcanvas-title">Offcanvas End</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body my-auto mx-0 flex-grow-0"> --}}
            <section class="offcanvas offcanvas-end" style="min-width: 60vw;height:10vw" tabindex="-1"
                id="offcanvasEnd"aria-labelledby="offcanvasEndLabel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" id="chat3" style="border-radius: 15px;">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
                                        <div class="p-3">

                                            <div class="input-group rounded mb-3">
                                                <input type="search" class="form-control rounded" placeholder="Search"
                                                    aria-label="Search" aria-describedby="search-addon" />
                                                <span class="input-group-text border-0" id="search-addon">
                                                    <i class="fas fa-search"></i>
                                                </span>
                                            </div>

                                            <div class="overflow-auto mb-4" style="position: relative; height: 400px">
                                                <ul class="list-unstyled mb-0">
                                                    @foreach ($chats as $chat)
                                                        <li class="p-2 border-bottom">
                                                            <a href="#!" class="d-flex justify-content-between">
                                                                <div class="d-flex flex-row">
                                                                    <div>
                                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                                            alt="avatar"
                                                                            class="d-flex align-self-center me-3"
                                                                            width="60">
                                                                        <span class="badge bg-success badge-dot"></span>
                                                                    </div>
                                                                    <div class="pt-1">
                                                                        <p class="fw-bold mb-0">
                                                                            {{ $chat->room }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="pt-1">
                                                                    <p class="small text-muted mb-1">Just now
                                                                    </p>
                                                                    <span
                                                                        class="badge bg-danger rounded-pill float-end">3</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-10 col-lg-9 col-xl-8">
                                        <div class="pt-3 pe-3 overflow-auto" style="position: relative; height: 400px">

                                            <div class="d-flex flex-row justify-content-start">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                    alt="avatar 1" style="width: 45px; height: 100%;">
                                                <div>
                                                    <p class="small p-2 ms-3 mb-1 rounded-3"
                                                        style="background-color: #f5f6f7;">
                                                        Lorem ipsum
                                                        dolor
                                                        sit amet, consectetur adipiscing elit, sed do eiusmod
                                                        tempor incididunt
                                                        ut labore et
                                                        dolore
                                                        magna aliqua.</p>
                                                    <p class="small ms-3 mb-3 rounded-3 text-muted float-end">
                                                        12:00 PM | Aug 13
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row justify-content-end">
                                                <div>
                                                    <p class="small p-2 me-3 mb-1 rounded-3 bg-primary">
                                                        Ut enim ad
                                                        minim veniam,
                                                        quis
                                                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                        ea commodo
                                                        consequat.</p>
                                                    <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM |
                                                        Aug 13</p>
                                                </div>
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                    alt="avatar 1" style="width: 45px; height: 100%;">
                                            </div>

                                            <div class="d-flex flex-row justify-content-start">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                    alt="avatar 1" style="width: 45px; height: 100%;">
                                                <div>
                                                    <p class="small p-2 ms-3 mb-1 rounded-3"
                                                        style="background-color: #f5f6f7;">
                                                        Duis aute
                                                        irure
                                                        dolor in reprehenderit in voluptate velit esse cillum
                                                        dolore eu fugiat
                                                        nulla pariatur.
                                                    </p>
                                                    <p class="small ms-3 mb-3 rounded-3 text-muted float-end">
                                                        12:00 PM | Aug 13
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row justify-content-end">
                                                <div>
                                                    <p class="small p-2 me-3 mb-1 rounded-3 bg-primary">
                                                        Excepteur
                                                        sint occaecat
                                                        cupidatat
                                                        non proident, sunt in culpa qui officia deserunt mollit
                                                        anim id est
                                                        laborum.</p>
                                                    <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM |
                                                        Aug 13</p>
                                                </div>
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                    alt="avatar 1" style="width: 45px; height: 100%;">
                                            </div>

                                            <div class="d-flex flex-row justify-content-start">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                    alt="avatar 1" style="width: 45px; height: 100%;">
                                                <div>
                                                    <p class="small p-2 ms-3 mb-1 rounded-3"
                                                        style="background-color: #f5f6f7;">
                                                        Sed ut
                                                        perspiciatis
                                                        unde omnis iste natus error sit voluptatem accusantium
                                                        doloremque
                                                        laudantium, totam
                                                        rem
                                                        aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                        quasi architecto
                                                        beatae vitae
                                                        dicta
                                                        sunt explicabo.</p>
                                                    <p class="small ms-3 mb-3 rounded-3 text-muted float-end">
                                                        12:00 PM | Aug 13
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row justify-content-end">
                                                <div>
                                                    <p class="small p-2 me-3 mb-1 rounded-3 bg-primary">
                                                        Nemo enim
                                                        ipsam
                                                        voluptatem quia
                                                        voluptas sit aspernatur aut odit aut fugit, sed quia
                                                        consequuntur magni
                                                        dolores eos
                                                        qui
                                                        ratione voluptatem sequi nesciunt.</p>
                                                    <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM |
                                                        Aug 13</p>
                                                </div>
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                    alt="avatar 1" style="width: 45px; height: 100%;">
                                            </div>

                                            <div class="d-flex flex-row justify-content-start">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                    alt="avatar 1" style="width: 45px; height: 100%;">
                                                <div>
                                                    <p class="small p-2 ms-3 mb-1 rounded-3"
                                                        style="background-color: #f5f6f7;">
                                                        Neque porro
                                                        quisquam
                                                        est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                                        adipisci velit,
                                                        sed quia non
                                                        numquam
                                                        eius modi tempora incidunt ut labore et dolore magnam
                                                        aliquam quaerat
                                                        voluptatem.</p>
                                                    <p class="small ms-3 mb-3 rounded-3 text-muted float-end">
                                                        12:00 PM | Aug 13
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row justify-content-end">
                                                <div>
                                                    <p class="small p-2 me-3 mb-1 rounded-3 bg-primary">
                                                        Ut enim ad
                                                        minima veniam,
                                                        quis
                                                        nostrum exercitationem ullam corporis suscipit
                                                        laboriosam, nisi ut
                                                        aliquid ex ea
                                                        commodi
                                                        consequatur?</p>
                                                    <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM |
                                                        Aug 13</p>
                                                </div>
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                    alt="avatar 1" style="width: 45px; height: 100%;">
                                            </div>

                                        </div>

                                        <div
                                            class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                                alt="avatar 3" style="width: 40px; height: 100%;">
                                            <input type="text" class="form-control form-control-lg"
                                                id="exampleFormControlInput2" placeholder="Type message">
                                            <a class="ms-1 text-muted" href="#!"><i
                                                    class="bx bx-dots-vertical-rounded"></i></a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
            {{-- </div>
            </div> --}}
        </div>
    </div>



    {{-- <div>
        <canvas id="total_pendapatan_januari_2022"></canvas>
    </div> --}}

    <!--/ Order Statistics -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- Barang Masuk/Keluar --}}
    {{-- 2021 --}}
    <script>
        const masuk_keluar_2021 = document.getElementById('barang_masuk_keluar_2021');
        const barang_masuk_keluar_2021 = new Chart(masuk_keluar_2021, {
            type: 'doughnut',
            data: {
                labels: ['Barang Masuk', 'Barang Keluar'],
                datasets: [{
                    label: '# of Votes',
                    data: [{{ $barang_masuk_2021 }}, {{ $barang_keluar_2021 }}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
            }
        });
    </script>
    {{-- end2021 --}}
    {{-- 2022 --}}
    <script>
        const masuk_keluar_2022 = document.getElementById('barang_masuk_keluar_2022');
        const barang_masuk_keluar_2022 = new Chart(masuk_keluar_2022, {
            type: 'doughnut',
            data: {
                labels: ['Barang Masuk', 'Barang Keluar'],
                datasets: [{
                    label: 'Jumlah Barang',
                    data: [{{ $barang_masuk_2022 }}, {{ $barang_keluar_2022 }}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- end2022 --}}
    {{-- 2023 --}}
    <script>
        const masuk_keluar_2023 = document.getElementById('barang_masuk_keluar_2023');
        const barang_masuk_keluar_2023 = new Chart(masuk_keluar_2023, {
            type: 'doughnut',
            data: {
                labels: ['Barang Masuk', 'Barang Keluar'],
                datasets: [{
                    label: '# of Votes',
                    data: [{{ $barang_masuk_2023 }}, {{ $barang_keluar_2023 }}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- end2023 --}}
    {{-- endBarang Masuk/Keluar --}}

    {{-- Barang Masuk/Keluar /BUlan --}}
    {{-- 2021 --}}
    <script>
        const barang_bulan_2021 = document.getElementById('barang_masuk_keluar_bulan_2021');
        const barang_masuk_keluar_bulan_2021 = new Chart(barang_bulan_2021, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                        label: 'Barang Masuk',
                        data: [
                            {{ $barang_masuk_jan_2021 }},
                            {{ $barang_masuk_feb_2021 }},
                            {{ $barang_masuk_mar_2021 }},
                            {{ $barang_masuk_apr_2021 }},
                            {{ $barang_masuk_mei_2021 }},
                            {{ $barang_masuk_jun_2021 }},
                            {{ $barang_masuk_jul_2021 }},
                            {{ $barang_masuk_agu_2021 }},
                            {{ $barang_masuk_sep_2021 }},
                            {{ $barang_masuk_okt_2021 }},
                            {{ $barang_masuk_nov_2021 }},
                            {{ $barang_masuk_des_2021 }}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'Barang Keluar',
                        data: [
                            {{ $barang_keluar_jan_2021 }},
                            {{ $barang_keluar_feb_2021 }},
                            {{ $barang_keluar_mar_2021 }},
                            {{ $barang_keluar_apr_2021 }},
                            {{ $barang_keluar_mei_2021 }},
                            {{ $barang_keluar_jun_2021 }},
                            {{ $barang_keluar_jul_2021 }},
                            {{ $barang_keluar_agu_2021 }},
                            {{ $barang_keluar_sep_2021 }},
                            {{ $barang_keluar_okt_2021 }},
                            {{ $barang_keluar_nov_2021 }},
                            {{ $barang_keluar_des_2021 }}
                        ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- end2021 --}}
    {{-- 2022 --}}
    <script>
        const barang_bulan_2022 = document.getElementById('barang_masuk_keluar_bulan_2022');
        const barang_masuk_keluar_bulan_2022 = new Chart(barang_bulan_2022, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                        label: 'Barang Masuk',
                        data: [
                            {{ $barang_masuk_jan_2022 }},
                            {{ $barang_masuk_feb_2022 }},
                            {{ $barang_masuk_mar_2022 }},
                            {{ $barang_masuk_apr_2022 }},
                            {{ $barang_masuk_mei_2022 }},
                            {{ $barang_masuk_jun_2022 }},
                            {{ $barang_masuk_jul_2022 }},
                            {{ $barang_masuk_agu_2022 }},
                            {{ $barang_masuk_sep_2022 }},
                            {{ $barang_masuk_okt_2022 }},
                            {{ $barang_masuk_nov_2022 }},
                            {{ $barang_masuk_des_2022 }}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'Barang Keluar',
                        data: [
                            {{ $barang_keluar_jan_2022 }},
                            {{ $barang_keluar_feb_2022 }},
                            {{ $barang_keluar_mar_2022 }},
                            {{ $barang_keluar_apr_2022 }},
                            {{ $barang_keluar_mei_2022 }},
                            {{ $barang_keluar_jun_2022 }},
                            {{ $barang_keluar_jul_2022 }},
                            {{ $barang_keluar_agu_2022 }},
                            {{ $barang_keluar_sep_2022 }},
                            {{ $barang_keluar_okt_2022 }},
                            {{ $barang_keluar_nov_2022 }},
                            {{ $barang_keluar_des_2022 }}
                        ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- end2022 --}}
    {{-- 2023 --}}
    <script>
        const barang_bulan_2023 = document.getElementById('barang_masuk_keluar_bulan_2023');
        const barang_masuk_keluar_bulan_2023 = new Chart(barang_bulan_2023, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                        label: 'Barang Masuk',
                        data: [
                            {{ $barang_masuk_jan_2023 }},
                            {{ $barang_masuk_feb_2023 }},
                            {{ $barang_masuk_mar_2023 }},
                            {{ $barang_masuk_apr_2023 }},
                            {{ $barang_masuk_mei_2023 }},
                            {{ $barang_masuk_jun_2023 }},
                            {{ $barang_masuk_jul_2023 }},
                            {{ $barang_masuk_agu_2023 }},
                            {{ $barang_masuk_sep_2023 }},
                            {{ $barang_masuk_okt_2023 }},
                            {{ $barang_masuk_nov_2023 }},
                            {{ $barang_masuk_des_2023 }}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'Barang Keluar',
                        data: [
                            {{ $barang_keluar_jan_2023 }},
                            {{ $barang_keluar_feb_2023 }},
                            {{ $barang_keluar_mar_2023 }},
                            {{ $barang_keluar_apr_2023 }},
                            {{ $barang_keluar_mei_2023 }},
                            {{ $barang_keluar_jun_2023 }},
                            {{ $barang_keluar_jul_2023 }},
                            {{ $barang_keluar_agu_2023 }},
                            {{ $barang_keluar_sep_2023 }},
                            {{ $barang_keluar_okt_2023 }},
                            {{ $barang_keluar_nov_2023 }},
                            {{ $barang_keluar_des_2023 }}
                        ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- end2023 --}}
    {{-- End Barang Masuk/Keluar /BUlan --}}

    {{-- Pembelian Produk --}}
    {{-- 2021 --}}
    <script>
        const pembelian_tahun_2021 = document.getElementById('pembelian_tahun_2021');
        const lineChart_2021 = new Chart(pembelian_tahun_2021, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: 'Jumlah Pembelian',
                    data: [
                        {{ $pembelian_jan_2021 }},
                        {{ $pembelian_feb_2021 }},
                        {{ $pembelian_mar_2021 }},
                        {{ $pembelian_apr_2021 }},
                        {{ $pembelian_mei_2021 }},
                        {{ $pembelian_jun_2021 }},
                        {{ $pembelian_jul_2021 }},
                        {{ $pembelian_agu_2021 }},
                        {{ $pembelian_sep_2021 }},
                        {{ $pembelian_okt_2021 }},
                        {{ $pembelian_nov_2021 }},
                        {{ $pembelian_des_2021 }}
                    ],
                    backgroundColor: [
                        'rgba(95 158 160)',
                    ],
                    borderColor: [
                        'rgba(70 130 180)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- end2021 --}}
    {{-- 2022 --}}
    <script>
        const pembelian_tahun_2022 = document.getElementById('pembelian_tahun_2022');
        const lineChart_2022 = new Chart(pembelian_tahun_2022, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: 'Jumlah Pembelian',
                    data: [
                        {{ $pembelian_jan_2022 }},
                        {{ $pembelian_feb_2022 }},
                        {{ $pembelian_mar_2022 }},
                        {{ $pembelian_apr_2022 }},
                        {{ $pembelian_mei_2022 }},
                        {{ $pembelian_jun_2022 }},
                        {{ $pembelian_jul_2022 }},
                        {{ $pembelian_agu_2022 }},
                        {{ $pembelian_sep_2022 }},
                        {{ $pembelian_okt_2022 }},
                        {{ $pembelian_nov_2022 }},
                        {{ $pembelian_des_2022 }}
                    ],
                    backgroundColor: [
                        'rgba(95 158 160)',
                    ],
                    borderColor: [
                        'rgba(70 130 180)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- end2022 --}}
    {{-- 2023 --}}
    <script>
        const pembelian_tahun_2023 = document.getElementById('pembelian_tahun_2023');
        const lineChart_2023 = new Chart(pembelian_tahun_2023, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: 'Jumlah Pembelian',
                    data: [
                        {{ $pembelian_jan_2023 }},
                        {{ $pembelian_feb_2023 }},
                        {{ $pembelian_mar_2023 }},
                        {{ $pembelian_apr_2023 }},
                        {{ $pembelian_mei_2023 }},
                        {{ $pembelian_jun_2023 }},
                        {{ $pembelian_jul_2023 }},
                        {{ $pembelian_agu_2023 }},
                        {{ $pembelian_sep_2023 }},
                        {{ $pembelian_okt_2023 }},
                        {{ $pembelian_nov_2023 }},
                        {{ $pembelian_des_2023 }}
                    ],
                    backgroundColor: [
                        'rgba(95 158 160)',
                    ],
                    borderColor: [
                        'rgba(70 130 180)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- end2023 --}}
    {{-- EndPembelianProduk --}}

    {{-- Pembelian Voucher --}}
    {{-- 2021 --}}
    <script>
        const pembelian_voucher_tahun_2021 = document.getElementById('pembelian_voucher_tahun_2021');
        const lineChart_voucher_2021 = new Chart(pembelian_voucher_tahun_2021, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: 'Jumlah Pembelian Voucher',
                    data: [
                        {{ $pembelian_voucher_jan_2021 }},
                        {{ $pembelian_voucher_feb_2021 }},
                        {{ $pembelian_voucher_mar_2021 }},
                        {{ $pembelian_voucher_apr_2021 }},
                        {{ $pembelian_voucher_mei_2021 }},
                        {{ $pembelian_voucher_jun_2021 }},
                        {{ $pembelian_voucher_jul_2021 }},
                        {{ $pembelian_voucher_agu_2021 }},
                        {{ $pembelian_voucher_sep_2021 }},
                        {{ $pembelian_voucher_okt_2021 }},
                        {{ $pembelian_voucher_nov_2021 }},
                        {{ $pembelian_voucher_des_2021 }}
                    ],
                    backgroundColor: [
                        'rgba(169 169 169)',
                    ],
                    borderColor: [
                        'rgba(112 128 144)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- end2021 --}}
    {{-- 2022 --}}
    <script>
        const pembelian_voucher_tahun_2022 = document.getElementById('pembelian_voucher_tahun_2022');
        const lineChart_voucher_2022 = new Chart(pembelian_voucher_tahun_2022, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: 'Jumlah Pembelian Voucher',
                    data: [
                        {{ $pembelian_voucher_jan_2022 }},
                        {{ $pembelian_voucher_feb_2022 }},
                        {{ $pembelian_voucher_mar_2022 }},
                        {{ $pembelian_voucher_apr_2022 }},
                        {{ $pembelian_voucher_mei_2022 }},
                        {{ $pembelian_voucher_jun_2022 }},
                        {{ $pembelian_voucher_jul_2022 }},
                        {{ $pembelian_voucher_agu_2022 }},
                        {{ $pembelian_voucher_sep_2022 }},
                        {{ $pembelian_voucher_okt_2022 }},
                        {{ $pembelian_voucher_nov_2022 }},
                        {{ $pembelian_voucher_des_2022 }}
                    ],
                    backgroundColor: [
                        'rgba(169 169 169)',
                    ],
                    borderColor: [
                        'rgba(112 128 144)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- end2022 --}}
    {{-- 2023 --}}
    <script>
        const pembelian_voucher_tahun_2023 = document.getElementById('pembelian_voucher_tahun_2023');
        const lineChart_voucher_2023 = new Chart(pembelian_voucher_tahun_2023, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: 'Jumlah Pembelian Voucher',
                    data: [
                        {{ $pembelian_voucher_jan_2023 }},
                        {{ $pembelian_voucher_feb_2023 }},
                        {{ $pembelian_voucher_mar_2023 }},
                        {{ $pembelian_voucher_apr_2023 }},
                        {{ $pembelian_voucher_mei_2023 }},
                        {{ $pembelian_voucher_jun_2023 }},
                        {{ $pembelian_voucher_jul_2023 }},
                        {{ $pembelian_voucher_agu_2023 }},
                        {{ $pembelian_voucher_sep_2023 }},
                        {{ $pembelian_voucher_okt_2023 }},
                        {{ $pembelian_voucher_nov_2023 }},
                        {{ $pembelian_voucher_des_2023 }}
                    ],
                    backgroundColor: [
                        'rgba(169 169 169)',
                    ],
                    borderColor: [
                        'rgba(112 128 144)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- end2023 --}}
    {{-- End Pembelian Voucher --}}



    {{-- <script>
        const pendapatan_januari_2022 = document.getElementById('total_pendapatan_januari_2022');

        new Chart(pendapatan_januari_2022, {
            type: 'line',
            data: {
                labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25,
                    26, 27, 28, 29, 30, 31
                ],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3, 33, 23, 23, 34, 4, 54, 454, 44, 45, 45, 45, 4, 545, 4, 54, 5,
                        45, 4, 5, 34, 324, 34, 34, 34, 2
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script> --}}
@endsection
