@extends('admin.layouts.admin')

@section('content')


<!-- Content -->
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
                            <a class="dropdown-item" href="{{ route('user.index') }}">Lihat Selengkapnya</a>
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
                            <a class="dropdown-item" href="{{ route('kategori.index') }}">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">kategoris</span>
                <h3 class="card-title  mb-2 text-center">{{ $total_kategoris }}</h3>
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
                            <a class="dropdown-item" href="{{ route('sub_kategori.index') }}">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">sub kategoris</span>
                <h3 class="card-title  mb-2 text-center">{{ $total_sub_kategoris }}</h3>
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
                            <a class="dropdown-item" href="{{ route('review_produk.index') }}">Lihat Selengkapnya</a>
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
                            <a class="dropdown-item" href="{{ route('voucher.index') }}">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">vouchers</span>
                <h3 class="card-title  mb-2 text-center">{{ $total_vouchers }}</h3>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-lg-10">
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

    <div class="col">
        <div class="row">
            <div class="col-15 mb-4">
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
                                    <a class="dropdown-item" href="{{ route('voucher.index') }}">Lihat
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Voucher</span>
                        <h3 class="card-title  mb-2 text-center">{{ $total_vouchers }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-15 mb-4">
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
    </div>
</div>

{{-- <div class="row">
    <!-- Order Statistics -->
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between pb-0">
                <div class="card-title mb-0">
                    <h5 class="m-0 me-2">Order Statistics</h5>
                    <small class="text-muted">42.82k Total Sales</small>
                </div>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                        <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-column align-items-center gap-1">
                        <h2 class="mb-2">8,258</h2>
                        <span>Total Orders</span>
                    </div>
                    <div id="orderStatisticsChart"></div>
                </div>
                <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"><i
                                    class="bx bx-mobile-alt"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Electronic</h6>
                                <small class="text-muted">Mobile, Earbuds, TV</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-semibold">82.5k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Fashion</h6>
                                <small class="text-muted">T-shirt, Jeans, Shoes</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-semibold">23.8k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Decor</h6>
                                <small class="text-muted">Fine Art, Dining</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-semibold">849k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"><i
                                    class="bx bx-football"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Sports</h6>
                                <small class="text-muted">Football, Cricket Kit</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-semibold">99</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/ Order Statistics -->

    <!-- Expense Overview -->
    <div class="col-md-6 col-lg-4 order-1 mb-4">
        <div class="card h-100">
            <div class="card-header">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income"
                            aria-selected="true">
                            Income
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab">Expenses</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab">Profit</button>
                    </li>
                </ul>
            </div>
            <div class="card-body px-0">
                <div class="tab-content p-0">
                    <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                        <div class="d-flex p-4 pt-3">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/wallet.png" alt="User" />
                            </div>
                            <div>
                                <small class="text-muted d-block">Total Balance</small>
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 me-1">$459.10</h6>
                                    <small class="text-success fw-semibold">
                                        <i class="bx bx-chevron-up"></i>
                                        42.9%
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div id="incomeChart"></div>
                        <div class="d-flex justify-content-center pt-4 gap-2">
                            <div class="flex-shrink-0">
                                <div id="expensesOfWeek"></div>
                            </div>
                            <div>
                                <p class="mb-n1 mt-1">Expenses This Week</p>
                                <small class="text-muted">$39 less than last week</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Expense Overview -->

    <!-- Transactions -->
    <div class="col-md-6 col-lg-4 order-2 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Transactions</h5>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">Paypal</small>
                                <h6 class="mb-0">Send money</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">+82.6</h6>
                                <span class="text-muted">USD</span>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">Wallet</small>
                                <h6 class="mb-0">Mac'D</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">+270.69</h6>
                                <span class="text-muted">USD</span>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">Transfer</small>
                                <h6 class="mb-0">Refund</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">+637.91</h6>
                                <span class="text-muted">USD</span>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">Credit Card</small>
                                <h6 class="mb-0">Ordered Food</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">-838.71</h6>
                                <span class="text-muted">USD</span>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">Wallet</small>
                                <h6 class="mb-0">Starbucks</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">+203.33</h6>
                                <span class="text-muted">USD</span>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">Mastercard</small>
                                <h6 class="mb-0">Ordered Food</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">-92.45</h6>
                                <span class="text-muted">USD</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/ Transactions -->
</div> --}}
{{-- </div> --}}
<!-- / Content -->

<div class="col-md-4 col-lg-10 order-0 mb-4">
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
        labels: ['Januari', 'Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
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
    const cty = document.getElementById('lineChart');
    const lineChart = new Chart(cty, {
    type: 'line',
    data: {
        labels: ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
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
                'rgba(75, 192, 192, 0.2)',
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
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