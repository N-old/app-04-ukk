@extends('dashboard.layouts.app')
@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Dashboard</h3>
            <p class="text-subtitle text-muted">Disini tampilan dashboard untuk Admin</p>
        </div>
        <section class="section">
            <div class="row mb-2">
                <div class="col-12 col-md-4">
                    <div class="card card-statistic">
                        <div class="card-body p-0 h-60">
                            <div class="d-flex flex-column">
                                <div class='p-2'>
                                    <h3 class='card-title'>Data Buku</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>{{ $data['sumbox']['buku'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (Auth::user()->role == 'admin')
                <div class="col-12 col-md-4">
                    <div class="card card-statistic">
                        <div class="card-body p-0 h-60">
                            <div class="d-flex flex-column">
                                <div class='p-2'>
                                    <h3 class='card-title'>Data User</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>{{ $data['sumbox']['user'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div class="col-12 col-md-4">
                    <div class="card card-statistic">
                        <div class="card-body p-0 h-60">
                            <div class="d-flex flex-column">
                                <div class='p-2'>
                                    <h3 class='card-title'>Data Peminjaman</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>{{ $data['sumbox']['pinjam'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Chart Buku</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="bar"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div> --}}
            </div>
            <div class="row mb-4">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Data Buku</h4>
                            <div class="d-flex ">
                                <i data-feather="download"></i>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="table-responsive">
                                <table class='table mb-0' id="table1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Buku</th>
                                            <th>Penulis</th>
                                            <th>Stok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['buku'] as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->penulis }}</td>
                                            <td>{{ $item->stok }}</td>
                                            <td class="grid gap-1 d-flex">
                                                <a href="{{ route('buku.edit', $item->slug) }}" class="btn btn-sm btn-warning"
                                                    data-toggle="tooltip" title="Edit Pengguna">
                                                    <div class="form-control-icon">
                                                        <i data-feather="edit"></i>
                                                    </div>
                                                </a>
                                                <a href="{{ route('buku.destroy', $item->slug) }}" class="btn btn-sm btn-danger"
                                                    data-confirm-delete="true" data-toggle="tooltip" title="Hapus Pengguna">
                                                    <div><i data-feather="trash"
                                                            onclick="event.preventDefault(); this.closest('a').click();"></i>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Data Peminjaman</h4>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="table-responsive">
                                <table class='table mb-0' id="table1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Peminjam</th>
                                            <th>Buku</th>
                                            <th>Status Peminjaman</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['pinjam'] as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->buku->name }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td class="grid gap-1 d-flex">
                                                <a href="{{ route('peminjaman.show', $item->slug) }}" class="btn btn-sm btn-warning"
                                                    data-toggle="tooltip" title="Edit Pengguna">
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
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
