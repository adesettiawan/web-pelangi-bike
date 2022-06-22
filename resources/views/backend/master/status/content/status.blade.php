@extends('backend.layouts.backend.dashboard')
@section('header')
    <div class="d-xl-flex justify-content-between align-items-start">
        <h2 class="text-dark font-weight-bold mb-2">Status</h2>
        <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
        </div>
    </div>
@stop
@section('main-content')
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{route('status.create')}}" class="btn btn-primary mb-4">Tambah</a>
            <table class=" table display cell-border" id="dataTable" width="100%" cellspacing="0"data-page-length="25"> 
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Pilihan</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <tbody>
                    @foreach($sts as $i)
                    <tr>
                        <td class="text-center">{{$no++}}</td>
                        <td class="text-center">{{$i->name}}</td>
                        <td class="text-center">{{$i->description}}</td>
                        <td class="text-center"><a href="#" class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
