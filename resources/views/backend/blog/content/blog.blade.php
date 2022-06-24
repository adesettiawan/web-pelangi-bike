@extends('backend.layouts.backend.dashboard')
@section('header')
    <div class="d-xl-flex justify-content-between align-items-start">
        <h2 class="text-dark font-weight-bold mb-2">Blog</h2>
        <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
        </div>
    </div>
@stop
@section('main-content')
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('blog.create') }}" class="btn btn-primary mb-4">Tambah</a>
            <table class=" table display cell-border" id="dataTable" width="100%" cellspacing="0"data-page-length="25">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Konten</th>
                        <th class="text-center">ubah</th>
                        <th class="text-center">hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($blg as $i)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="text-center">{{ $i->title }}</td>
                            <td class="text-center"><embed src="{{ asset('storage/blog/' . $i->image . '') }}"
                                    style="max-width:200px;" /></td>
                            <td class="text-center">{{ $i->content }}</td>
                            <td class="text-center">
                                <form action="{{ route('blog.edit', $i->slug) }}" method="get">
                                    @csrf
                                    <button class="btn btn-success btn-sm">Ubah</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{ route('blog.destroy', $i->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
