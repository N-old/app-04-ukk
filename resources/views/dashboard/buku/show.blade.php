@extends('dashboard.layouts.app')
@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>{{ $title }}</h3>
                    <p class="text-subtitle text-muted">Di halaman ini anda dapat mengelola {{ $title }}</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('buku.index')}}">Buku</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    {{ $title }}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="judul">Judul Buku</label>
                            <input type="text" id="judul" class="form-control" value="{{ $buku->name }}" disabled>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="penulis">Penulis</label>
                            <input type="text" id="penulis" class="form-control" value="{{ $buku->penulis }}" disabled>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" id="penerbit" class="form-control" value="{{ $buku->penerbit }}" disabled>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="tahun">Tahun Terbit</label>
                            <input type="number" id="tahun" class="form-control" value="{{ $buku->tahun }}" disabled>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="stok">Stok Buku</label>
                            <input type="number" id="stok" class="form-control" value="{{ $buku->stok }}" disabled>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="kategori">Kategori</label>
                            <input type="text" id="kategori" class="form-control" value="{{ $buku->kategori->name }}" disabled>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" style="height: 250px" disabled>{{ $buku->deskripsi }}</textarea>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Sampul Buku</label>
                            <img src="{{ asset($buku->cover) }}" alt="{{ $buku->name }}" width="250" class="d-block">
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-whitesmoke text-right">
                    <a href="{{ route('buku.index') }}" class="btn btn-secondary"><div class="form-control-icon">
                        <i data-feather="arrow-left"></i>
                    </div></a>
                    <a href="{{ route('buku.edit', $buku->slug) }}" class="btn btn-warning"><div class="form-control-icon">
                        <i data-feather="edit"></i>
                    </div></a>
                    <a href="{{ route('buku.destroy', $buku->slug) }}" class="btn btn-danger" data-confirm-delete="true"><div class="form-control-icon">
                        <i data-feather="trash"></i>
                    </div></a>
                </div>
            </div>
        </section>
    </div>
@endsection
