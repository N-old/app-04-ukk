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
                    <a href="{{ route('pinjam.export') }}" class="btn btn-primary btn-sm float-end">
                        <div class="form-control-icon">
                            <i data-feather="file-text"></i>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Peminjam</th>
                                <th>Buku Yang Dipinjam</th>
                                <th>Waktu Peminjaman</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tenggat Peminjaman</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Looping Peminjaman --}}
                            @foreach ($pinjam as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <a href="{{ route('user.show', $item->user->slug) }}">{{ $item->user->name }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('buku.show', $item->buku->slug) }}">{{ $item->buku->name }}</a>
                                    </td>
                                    {{-- <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->buku->name }}</td> --}}
                                    <td>{{ $item->created_at->format('j-n-Y') }}</td>
                                    <td>{{ $item->tanggal_pinjam ?? '-' }}</td>
                                    <td>{{ $item->tenggat ?? '-' }}</td>
                                    <td>{{ $item->tanggal_kembali ?? '-' }}</td>
                                    <td>
                                        {{-- {{ $item->status }} --}}
                                        @switch($item->status)
                                            @case('pinjam')
                                                <span class="badge bg-info">Dipinjam</span>
                                            @break

                                            @case('kembali')
                                                <span class="badge bg-success">Dikembalikan</span>
                                            @break
                                        @endswitch
                                    <td>
                                        <a href="{{ route('peminjaman.show', $item->slug) }}" class="btn btn-sm btn-info"
                                            data-toggle="tooltip" title="Lihat Pengguna">
                                            <div class="form-control-icon">
                                                <i data-feather="eye"></i>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
