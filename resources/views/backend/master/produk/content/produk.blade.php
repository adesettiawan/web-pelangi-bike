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
            {{-- <a href="{{route('create.stock.product')}}" class="btn btn-primary mb-4">Tambah</a> --}}
            <table class=" table display cell-border" id="dataTable" width="100%" cellspacing="0"data-page-length="25"
                data-order="[[ 1, &quot;asc&quot; ]]">
                <thead>
                    <tr>
                        <th class="text-center">Kode</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Tanggal Kadaluwarsa</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">XN-1111</td>
                        <td class="text-center">System Architect</td>
                        <td class="text-center">Edinburgh</td>
                        <td class="text-center">61</td>
                        <td class="text-center">2011/04/25</td>
                        <td class="text-center">$320,800</td>
                    </tr>
                    <tr>
                        <td class="text-center">XN-1112</td>
                        <td class="text-center">Bronice</td>
                        <td class="text-center">Edinburgh</td>
                        <td class="text-center">61</td>
                        <td class="text-center">2011/04/25</td>
                        <td class="text-center">$320,800</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
