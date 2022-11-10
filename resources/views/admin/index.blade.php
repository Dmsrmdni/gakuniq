@extends('admin.layouts.admin')

@section('content')
    <!-- Content -->
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat datang kembali Admin !</h5>
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, ullam!
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-2 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0 text-center">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="{{ route('produk.index') }}">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">produks</span>
                    <h3 class="card-title  mb-2 text-center">{{ $total_produks }}</h3>
                </div>
            </div>
        </div>
        <div class="col-2 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0 text-center">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="{{ route('voucher.index') }}">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">vouchers</span>
                    <h3 class="card-title  mb-2 text-center">{{ $total_vouchers }}</h3>
                </div>
            </div>
        </div>
        <div class="col-2 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0 text-center">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="{{ route('top_up.index') }}">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Top Up</span>
                    <h3 class="card-title  mb-2 text-center">{{ $total_top_ups }}</h3>
                </div>
            </div>

        </div>
        <div class="col-2 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0 text-center">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="{{ route('review_produk.index') }}">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Review</span>
                    <h3 class="card-title  mb-2 text-center">{{ $total_review_produks }}</h3>
                </div>
            </div>
        </div>
        <div class="col-2 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0 text-center">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="{{ route('user.index') }}">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Users</span>
                    <h3 class="card-title  mb-2 text-center">{{ $total_users }}</h3>
                </div>
            </div>
        </div>
        <div class="col-2 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0 text-center">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="{{ route('transaksi.index') }}">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Transaksi</span>
                    <h3 class="card-title  mb-2 text-center">{{ $total_transaksis }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Barang Masuk dan Keluar / Bulan</h5>
                        <canvas id="barChart" style="margin: 10px"></canvas>
                    </div>
                    <div class="col-md-4">
                        <canvas style="margin: 20px 10px 0px" id="doughnutChart"></canvas>
                        <h5 class="card-title mx-5 my-3 pb-3">Barang Masuk/Keluar</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-4">
                        <h5 class="m-0 me-2">Data Pembelian/bulan</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ Order Statistics -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('doughnutChart');
        const doughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Barang Masuk', 'Barang Keluar'],
                datasets: [{
                    label: '# of Votes',
                    data: [{{ $barang_masuk }}, {{ $barang_keluar }}],
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

    <script>
        const ct3 = document.getElementById('barChart');
        const barChart = new Chart(ct3, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                        label: 'Barang Masuk',
                        data: [
                            {{ $barang_masuk_jan }},
                            {{ $barang_masuk_feb }},
                            {{ $barang_masuk_mar }},
                            {{ $barang_masuk_apr }},
                            {{ $barang_masuk_mei }},
                            {{ $barang_masuk_jun }},
                            {{ $barang_masuk_jul }},
                            {{ $barang_masuk_agu }},
                            {{ $barang_masuk_sep }},
                            {{ $barang_masuk_okt }},
                            {{ $barang_masuk_nov }},
                            {{ $barang_masuk_des }}
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
                            {{ $barang_keluar_jan }},
                            {{ $barang_keluar_feb }},
                            {{ $barang_keluar_mar }},
                            {{ $barang_keluar_apr }},
                            {{ $barang_keluar_mei }},
                            {{ $barang_keluar_jun }},
                            {{ $barang_keluar_jul }},
                            {{ $barang_keluar_agu }},
                            {{ $barang_keluar_sep }},
                            {{ $barang_keluar_okt }},
                            {{ $barang_keluar_nov }},
                            {{ $barang_keluar_des }}
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


    <script>
        const cty = document.getElementById('lineChart');
        const lineChart = new Chart(cty, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: 'Jumlah Pembelian',
                    data: [
                        {{ $pembelian_jan }},
                        {{ $pembelian_feb }},
                        {{ $pembelian_mar }},
                        {{ $pembelian_apr }},
                        {{ $pembelian_mei }},
                        {{ $pembelian_jun }},
                        {{ $pembelian_jul }},
                        {{ $pembelian_agu }},
                        {{ $pembelian_sep }},
                        {{ $pembelian_okt }},
                        {{ $pembelian_nov }},
                        {{ $pembelian_des }}
                    ],
                    backgroundColor: [
                        'rgba(0, 152, 217, 0.56)',
                    ],
                    borderColor: [
                        'rgba(1, 255, 83, 1)',
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
    <!-- / Content -->
@endsection
