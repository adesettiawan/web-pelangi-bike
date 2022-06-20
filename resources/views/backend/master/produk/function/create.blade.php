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
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Produk</h4>
                    <p class="card-description"> Pelangi Bike Lampung </p>
                    <form class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama :</label>
                            <input type="text" class="form-control" id="name"
                                name="name"placeholder="Nama Produk">
                        </div>
                        <div class="form-group">
                            <label for="price">Harga :</label>
                            <input type="text" class="form-control" name="price" id="price"
                                pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency"
                                placeholder="Harga Produk">
                        </div>
                        <div class="form-group">
                            <label for="category">Kategori :</label>
                            <select class="form-control">
                                <option class="form-control" readonly>-- Pilih Kategori --</option>
                                <option class="form-control">1</option>
                                <option class="form-control">2</option>
                                <option class="form-control">3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="picture">Gambar</label>
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control" style="display:none;" id="picture" name
                                    ="picture" placeholder="picture">
                                <input type="text" class="form-control" id="showpicture" name ="showpicture"
                                    placeholder="Gambar Produk" readonly>
                                <span class="input-group-append">
                                    <button class="btn btn-primary" id="upfile" onchange='getFileData(this)'type="button">Acak</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <button type="button" class="btn btn-primary mr-2">Tambah</button>
                        <a href="{{ route('produk.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
