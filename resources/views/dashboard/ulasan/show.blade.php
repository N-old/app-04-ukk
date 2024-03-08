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
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('peminjaman.index') }}">Peminjaman</a></li>
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
                        <div class="col-6">
                            <h3>Detail Pengulas</h3>
                            <p>Nama Pengukan :<span style="color:black;"> {{ $ulasan->user->name }}</span></p>
                            <p>Email Pengukan :<span style="color:black;"> {{ $ulasan->user->email }}</span></p>
                        </div>
                        <div class="col-6">
                            <h3>Detail Buku</h3>
                            <p>Buku yang Diulas :<span style="color:black;"> {{ $ulasan->buku->name }}</span></p>
                            <p>Kategori Buku :<span style="color:black;"> {{ $ulasan->buku->kategori->name }}</span></p>
                            <p class="text-subtitle d-flex items-content-start">Sampul Buku :<span style="color:black;">
                                    <img src="{{ asset($ulasan->buku->cover) }}" style="width: 100px;"
                                        alt="{{ $ulasan->buku->name }}"></span>
                            </p>
                        </div>
                        <h3>Detail Ulasan</h3>
                        <div class="form-group col-lg-6">
                            <label for="penerbit">Rating</label>
                            <input type="checkbox" name="rating" value="1" id="">
                            <input type="checkbox" name="rating" value="2" id="">
                            <input type="checkbox" name="rating" value="3" id="">
                            <input type="checkbox" name="rating" value="4" id="">
                            <input type="checkbox" name="rating" value="5" id="">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="penerbit">Komentar</label>
                            <input type="text" id="penerbit" class="form-control" name="komentar"
                                value="{{ $ulasan->komentar }}" required>
                        </div>
                        <div class="card-footer bg-whitesmoke text-right d-flex grid gap-3">
                            <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">
                                <div class="form-control-icon">
                                    <i data-feather="arrow-left"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
