<body>
    <div id="content">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">{{ $transaksis->kode_transaksi }}</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <strong>Nama Pembeli</strong>
                            </td>
                            <td> : </td>
                            <td>{{ $transaksis->user->name }}</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Nama Produk</strong>
                            </td>
                            <td> : </td>
                            <td>{{ $transaksis->keranjang->produk->nama_produk }}</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Harga Produk</strong>
                            </td>
                            <td> : </td>
                            <td>Rp. {{ number_format($transaksis->keranjang->produk->harga, 0, ',', '.') }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Jumlah Produk</strong>
                            </td>
                            <td> : </td>
                            <td>{{ $transaksis->keranjang->jumlah }}</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>total Harga</strong>
                            </td>
                            <td> : </td>
                            <td>Rp. {{ number_format($transaksis->keranjang->total_harga, 0, ',', '.') }}
                            </td>
                        </tr>
                        <tr>
                            @if (!$transaksis->voucher == '')
                                <td>
                                    <strong>Diskon</strong>
                                </td>
                                <td> : </td>
                                <td>
                                    {{ $transaksis->voucher->diskon }}%
                                </td>
                            @endif
                        </tr>
                    </tbody>
                    <hr>
                    <tr>
                        <td><strong> Jumlah Total Harga </strong></td>
                        <td> : </td>
                        <td><strong><i> Rp. {{ number_format($transaksis->total_harga, 0, ',', '.') }}
                                </i>
                            </strong></td>
                    </tr>
                    <tr>
                        <td><strong> Metode Pembayaran </strong></td>
                        <td> : </td>
                        <td><strong>{{ $transaksis->metode_pembayaran }}</strong></td>
                    </tr>
                    <tr>
                        <td><strong> Waktu Pemesanan </strong></td>
                        <td> : </td>
                        <td><strong>{{ $transaksis->waktu_pemesanan }}</strong></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
