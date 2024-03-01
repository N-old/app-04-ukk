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
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User</li>
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
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Invoice ID</th>
                                <th>Peminjam</th>
                                <th>Waktu</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tenggat Pengembalian</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Looping Peminjaman --}}
                            @foreach ($pinjam as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->invoice }}</td>
                                    <td>
                                        <a href="{{ route('user.show', $item->user->id) }}">{{ $item->user->name }}</a>
                                    </td>
                                    <td>{{ $item->created_at->format('j-n-Y') }}</td>
                                    <td>{{ $item->tanggal_pinjam ?? '-' }}</td>
                                    <td>{{ $item->tenggat ?? '-' }}</td>
                                    <td>{{ $item->tanggal_kembali ?? '-' }}</td>
                                    <td>
                                        @switch($item->status)
                                            @case('0')
                                                <div class="badge badge-info">Dipinjam</div>
                                                @break
                                            @case('1')
                                                <div class="badge badge-success">Dikembalikan</div>
                                                @break
                                            @default
                                        @endswitch
                                    </td>
                                    <td>
                                        <a href="{{ route('peminjaman.show', $item->invoice) }}" class="btn btn-sm btn-info" data-toggle="tooltip" title="Lihat Data">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- End Looping Peminjaman --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
