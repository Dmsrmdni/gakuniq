@extends('admin.layouts.admin')

@section('content')
    {{-- <div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex w-100 justify-content-between">
                    <div class="me-2">
                        <h6 class="mb-0">Total transaksi : </h6>
                    </div>
                    <h5 class="fw-semibold mb-0">{{ $total_transaksis }}</h5>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <div class="card shadow-lg rounded card">
        <div class="card-header" id="#atas">
            <a href="{{ route('transaksi.create') }}" class="btn btn-sm btn-primary"><svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                </svg>Tambah Data</a>
        </div>
        <div class="table-responsive text-nowrap">
            <div class="container">
                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Kode Transaksi</th>
                            <th>Pembeli</th>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Voucher</th>
                            <th>Total Harga</th>
                            <th>Pembayaran</th>
                            <th>Waktu Pemesanan</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if (count($transaksis))
                            @foreach ($transaksis as $transaksi)
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            {{ $loop->iteration }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{ $transaksi->kode_transaksi }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{ $transaksi->user->username }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{ $transaksi->keranjang->produk->nama_produk }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            RP. {{ number_format($transaksi->keranjang->total_harga, 0, ',', '.') }}
                                        </div>
                                    </td>
                                    <td>
                                        @if ($transaksi->voucher == '')
                                            <div class="d-flex">
                                                0%
                                            </div>
                                        @else
                                            <div class="d-flex">
                                                {{ $transaksi->voucher->diskon }}%
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            RP. {{ number_format($transaksi->total_harga, 0, ',', '.') }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{ $transaksi->metode_pembayaran }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            {{ $transaksi->waktu_pemesanan }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            @if ($transaksi->status == 'sukses')
                                                <div class="badge rounded-pill bg-success w-100">{{ $transaksi->status }}
                                                </div>
                                            @elseif ($transaksi->status == 'proses')
                                                <div class="badge rounded-pill bg-warning w-100">{{ $transaksi->status }}
                                                </div>
                                            @elseif ($transaksi->status == 'dikembalikan')
                                                <div class="badge rounded-pill bg-danger w-100">{{ $transaksi->status }}
                                                </div>
                                            @elseif ($transaksi->status == 'selesai')
                                                <div class="badge rounded-pill bg-primary w-100">{{ $transaksi->status }}
                                                </div>
                                            @elseif ($transaksi->status == 'pengajuan refund')
                                                <div class="badge rounded-pill bg-secondary w-100">
                                                    {{ $transaksi->status }}
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="pdf/{{ $transaksi->id }}" class="btn btn-sm btn-secondary"
                                                data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                                data-bs-html="true" title="<span>Download PDF</span>"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                    <path
                                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                    <path
                                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                </svg>
                                            </a> |
                                            <a href="{{ route('transaksi.show', $transaksi->id) }}"
                                                class="btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                data-bs-placement="top" data-bs-html="true"
                                                title="<span>Show Data</span>"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16" fill="currentColor" class="bi bi-eye-fill"
                                                    viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path
                                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </a> |
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#modalCenter{{ $transaksi->id }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modalCenter{{ $transaksi->id }}" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalCenterTitle">Apakah Anda
                                                                Yakin?
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">
                                                                Kembali
                                                            </button>
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="9">
                                    <div class='alert alert-primary text-center'>
                                        Tidak ada data
                                    </div>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
