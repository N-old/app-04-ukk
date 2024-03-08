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
                            <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    {{ $title }}
                    <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-sm float-end">Tambah</a>
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Icon</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($item->icon)
                                            <img src="{{ asset($item->icon) }}" alt="{{ $item->name }}"
                                                style="width:100px;">
                                        @else
                                            <span>Image tidak Tersedia</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a href="{{ route('kategori.edit', $item->slug) }}" class="btn btn-warning btn-sm"><div class="form-control-icon">
                                            <i data-feather="edit"></i>
                                        </div></a>
                                        <a href="{{ route('kategori.destroy', $item->slug) }}" class="btn btn-sm btn-danger"
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
