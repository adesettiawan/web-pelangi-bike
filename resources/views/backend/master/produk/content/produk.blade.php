@extends('backend.layouts.backend.dashboard')
@section('header')
    <div class="d-xl-flex justify-content-between align-items-start">
        <h2 class="text-dark font-weight-bold mb-2">Produk</h2>
        <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
        </div>
    </div>
@stop
@section('main-content')
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('produk.create') }}" class="btn btn-primary mb-4">Tambah</a>
            <table class=" table display cell-border" id="dataTable" width="100%" cellspacing="0"data-page-length="10">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">status</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($prdk as $i)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="text-center">{{ $i->name }}</td>
                            <td class="text-center">{{ $i->price }}</td>
                            <td class="text-center"><embed src="{{ asset('storage/produk/' . $i->image . '') }}"
                                    style="max-width:200px;" /></td>
                            <td class="text-center">{{ $i->category_name }}</td>
                            <td class="text-center">{{ $i->status_name }}</td>
                            @if ($i->status_name == 'diskon' || $i->status_name == 'promo')
                                <td class="text-center"><a href="" class="btn btn-success btn-sm mr-2">Diskon</a>
                                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            @elseif ($i->status_name != 'diskon' || $i->status_name != 'promo')
                                <td class="text-center"><a href="" class="btn btn-danger btn-sm">Hapus</a></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
