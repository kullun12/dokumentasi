@extends('Body.main')

@section('content')
    <h3>Tambah Data Produk</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('/') }}'">
                Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('produk') }}">
                @csrf
                <div class="row mb-3">
                    <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control form-control-sm @error('nama_produk') is-invalid @enderror" id="nama_produk"
                            name="nama_produk" value="{{ old('nama_produk') }}">
                        @error('nama_produk')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control form-control-sm @error('harga') is-invalid @enderror" id="harga"
                            name="harga" value="{{ old('harga') }}">
                        @error('harga')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control form-control-sm @error('kategori') is-invalid @enderror" id="kategori"
                            name="kategori" value="{{ old('kategori') }}">
                        @error('kategori')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select class="form-select form-select-sm @error('status') is-invalid @enderror" name="status"
                            id="status">
                            <option value="" selected>-choose</option>
                            <option value="bisa dijual" {{ (old('status')=='bisa dijual' ? 'selected' : '') }}>Bisa dijual</option>
                            <option value="tidak bisa dijual" {{ (old('status')=='tidak bisa dijual' ? 'selected' : '') }}>Tidak bisa dijual</option>
                        </select>
                        @error('status')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
