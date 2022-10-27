@extends('admin.layouts.admin')

@section('content')
<div class="container-fluid">
    <form action="{{ route('top_up.store') }}" method="POST">
        @csrf
        <div class="col-lg-8">
            <div class="card mb-4 shadow-lg rounded card" style="margin: 2%; padding:1% ">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Data Kategori</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Name Pembeli</label>
                        <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jumlah Saldo</label>
                        <input type="number" name="jumlah_saldo"
                            class="form-control mb-2  @error('jumlah_saldo') is-invalid @enderror"
                            placeholder="Jumlah Saldo" value="{{ old('jumlah_saldo') }}">
                        @error('jumlah_saldo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Metode Pembayaran</label>
                        <select name="metode_pembayaran"
                            class="form-control @error('metode_pembayaran') is-invalid @enderror">
                            <option value="m-banking">m-banking</option>
                            <option value="dana">dana</option>
                            <option value="gopay">gopay</option>
                            <option value="ovo">ovo</option>
                        </select>
                        @error('metode_pembayaran')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ url('/admin/top_up') }}" class="btn btn-danger me-3"><svg xmlns="http://www.w3.org/2000/svg"
                        width="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                    </svg> Kembali</a>
                <button type="submit" class="btn btn-primary mx-3">
                    <span class="indicator-label"><svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor"
                            class="bi bi-send-fill" viewBox="0 0 16 16">
                            <path
                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                        </svg> Kirim </span>
                </button>
            </div>
        </div>
    </form>
</div>
@endsection