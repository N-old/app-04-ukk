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
                                <th>Nama Pengulas</th>
                                <th>Judul Buku</th>
                                <th>Komentar</th>
                                <th>Rating</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Looping Peminjaman --}}
                            @foreach ($ulasan as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->name}}</td>
                                    <td>{{ $item->buku->name}}</td>
                                    <td>{{ $item->komentar}}</td>
                                    <td>{{ $item->rating}}</td>
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
