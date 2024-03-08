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
                            <h3>Detail Peminjam</h3>
                            <p>Nama Peminjam :<span style="color:black;"> {{ $pinjam->user->name }}</span></p>
                            <p>Email Peminjam :<span style="color:black;"> {{ $pinjam->user->email }}</span></p>
                            <p>Alamat Peminjam :<span style="color:black;"> {{ $pinjam->user->alamat }}</span></p>
                        </div>
                        <div class="col-6">
                            <h3>Detail Buku</h3>
                            <p>Buku yang Dipinjam :<span style="color:black;"> {{ $pinjam->buku->name }}</span></p>
                            <p>Kategori Buku :<span style="color:black;"> {{ $pinjam->buku->kategori->name }}</span></p>
                            <p class="text-subtitle d-flex items-content-start">Sampul Buku :<span style="color:black;">
                                    <img src="{{ asset($pinjam->buku->cover) }}" style="width: 100px;"
                                        alt="{{ $pinjam->buku->name }}"></span>
                            </p>
                        </div>
                        <h3>Detail Peminjaman</h3>
                        <div class="form-group col-lg-6">
                            <label for="penerbit">Tanggal Peminjaman</label>
                            <input type="date" id="penerbit" class="form-control" name="tanggal_pinjam"
                                value="{{ $pinjam->tanggal_pinjam }}" disabled>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="penerbit">Tenggat Peminjaman</label>
                            <input type="date" id="penerbit" class="form-control" name="tenggat"
                                value="{{ $pinjam->tenggat }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-whitesmoke text-right d-flex grid gap-3">
                    <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">
                        <div class="form-control-icon">
                            <i data-feather="arrow-left"></i>
                        </div>
                    </a>
                    @if ($pinjam->status == 'pinjam')
                    <form action="{{ route('peminjaman.update', $pinjam->slug) }}" id="delete-form" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status" value="kembali">
                        <button type="submit" class="btn btn-primary">Pengembalian</button>
                    </form>
                    @endif
                </div>
            </div>
        </section>
        {{-- <div class="section-body">
            <div class="invoice">
                <div class="invoice-print">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="invoice-title">
                                <h2>Invoice</h2>
                                <div class="invoice-number">{{ $pinjam->invoice }}</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <address>
                                        <strong>Peminjam:</strong><br>
                                        {{ $pinjam->user->name }}<br>
                                        {{ '@' . $pinjam->user->email }}<br>
                                        {{ $pinjam->user->alamat }}
                                    </address>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <address>
                                        <strong>Kontak Peminjam:</strong><br>
                                        {{ $pinjam->user->email }}<br>
                                        {{ $pinjam->user->telepon }}
                                    </address>
                                    <address>
                                        <strong>Waktu:</strong><br>
                                        {{ $pinjam->created_at->format('j-n-Y') }}
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="section-title">Buku yang dipinjam</div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-md">
                                    <tr>
                                        <th data-width="40">No</th>
                                        <th>Sampul Buku</th>
                                        <th class="text-center">Judul Buku</th>
                                        <th class="text-center">Kategori</th>
                                        <th class="text-right">Jumlah Pinjam</th>
                                    </tr>
                                </table>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-8">
                                    <div class="section-title">Status Peminjaman</div>
                                    <div class="images">
                                        @switch($pinjam->status)
                                            @case('0')
                                                <div class="badge badge-warning">Dipesan</div>
                                            @break

                                            @case('1')
                                                <div class="badge badge-info">Dipinjam</div>
                                            @break

                                            @case('2')
                                                <div class="badge badge-success">Dikembalikan</div>
                                            @break

                                            @default
                                        @endswitch
                                    </div>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Tanggal Peminjaman</div>
                                        <div class="invoice-detail-value">{{ $pinjam->tgl_pinjam ?? '-' }}</div>
                                    </div>
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Tenggat Pengembalian</div>
                                        <div class="invoice-detail-value">{{ $pinjam->tenggat ?? '-' }}</div>
                                    </div>
                                    <hr class="mt-2 mb-2">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Tanggal Pengembalian</div>
                                        <div class="invoice-detail-value invoice-detail-value-lg">
                                            {{ $pinjam->tgl_kembali ?? '-' }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-md-right">
                    @if ($pinjam->status === '0')
                        <form action="{{ route('peminjaman.update', $pinjam->invoice) }}" method="POST"
                            class="d-inline">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="1">
                            <button type="submit" class="btn btn-info">Dipinjam</button>
                        </form>
                    @endif
                    @if ($pinjam->status === '1')
                        <form action="{{ route('peminjaman.update', $pinjam->invoice) }}" method="POST"
                            class="d-inline">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="2">
                            <button type="submit" class="btn btn-success">Dikembalikan</button>
                        </form>
                    @endif
                </div>
            </div>
        </div> --}}
    </div>
@endsection
