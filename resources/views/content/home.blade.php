@extends('Body.main')
@section('content')
    <div class="mt-5 mb-5">
        <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('/add') }}'">
            <i class="fa-solid fa-file-circle-plus"></i> Tambah Produk Baru
        </button>
    </div>
    @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil</strong> {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-sm table-bordered">
        <thead>
            <th>No</th>
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Status</th>
            <th>#</th>
        </thead>
        <tbody>
            {{-- perulangan buah ambil database --}}
            @foreach ($produks as $row)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $row->id_produk }}</td>
                    <td>{{ $row->nama_produk }}</td>
                    {{-- kalau enum pakai if else --}}
                    <td>{{ $row->harga }}</td>
                    <td>{{ $row->kategori }}</td>
                    <td>{{ $row->status }}</td>
                    <td>
                        <button onclick="window.location='{{ url('produk/' . $row->id_produk) }}'" type="button"
                            class="btn tbn-sm btn-info" title="Edit Data">
                            <i class="fas fa-edit"></i>
                        </button>
                        <form method="POST" style="display: inline" action="{{ 'produk/' . $row->id_produk }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apa anda yakin ingin menghapus data ini?')"
                                class="btn btn-danger" title="Hapus Data">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
