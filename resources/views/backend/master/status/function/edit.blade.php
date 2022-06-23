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
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah Status</h4>
                    <form class="forms-sample" action="{{ route('status.update', $stt->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="name">Nama :</label>
                            <input type="text" class="form-control" id="name"
                                name="name"placeholder="Nama Status" value="{{ $stt->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi :</label>
                            <textarea class="form-control" id="description" value="{{ $stt->description }}" name="description" rows="4">{{$stt->description}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <a href="{{ route('status.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
