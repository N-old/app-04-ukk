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
                    <div class="">
                        <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm float-end ml-3">
                            <div class="form-control-icon">
                                <i data-feather="plus"></i>
                            </div>
                        </a>
                        <a href="{{ route('user.export')}}" class="btn btn-primary btn-sm float-end">
                            <div class="form-control-icon">
                                <i data-feather="file-text"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <h2>Table Petugas</h2>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Role</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($item->foto)
                                            <img src="{{ asset($item->foto) }}" alt="{{ $item->name }}"
                                                style="width:100px;">
                                        @else
                                            <span>Image tidak Tersedia</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->jk }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>{{ $item->telepon }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>
                                        <a href="{{ route('user.show', $item->slug) }}" class="btn btn-sm btn-info"
                                            data-toggle="tooltip" title="Lihat Pengguna">
                                            <div class="form-control-icon">
                                                <i data-feather="eye"></i>
                                            </div>
                                        </a>
                                        <a href="{{ route('user.edit', $item->slug) }}" class="btn btn-sm btn-warning"
                                            data-toggle="tooltip" title="Edit Pengguna">
                                            <div class="form-control-icon">
                                                <i data-feather="edit"></i>
                                            </div>
                                        </a>
                                        <a href="{{ route('user.destroy', $item->slug) }}" class="btn btn-sm btn-danger mt-2"
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
        </section>
    </div>
@endsection
