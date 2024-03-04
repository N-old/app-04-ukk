@extends('dashboard.layouts.app')
@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>{{ $title }}</h3>
                    <p class="text-subtitle text-muted">Disini anda dapat mengelola {{ $title }} </p>
                    <a href="{{ route('buku.create') }}" class="btn btn-primary btn-sm mb-3"data-toggle="tooltip"
                        title="Lihat Pengguna">
                        <div class="form-control-icon">
                            <i data-feather="plus"></i>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <nav aria-label="breadcrumb" class='breadcrumb-header text-right'>
                        <ol class="breadcrumb">`
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Buku</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>


        <!-- Basic card section start -->
        <section id="content-types">
            <div class="row">
                @forelse ($koleksi as $item)
                    <div class="col-xl-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-content">
                                <img src="{{ asset($item->buku->cover) }}" alt="{{ $item->buku->name }}"
                                    class="card-img-top img-fluid" style="height: 400px;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->buku->name }}</h5>
                                    <p class="card-text">
                                        {{ $item->buku->deskripsi }}
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('koleksi.destroy', $item->id) }}" class="btn btn-danger" data-confirm-delete="true">Hapus dari Koleksi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="empty-state" data-height="400">
                                    <div class="empty-state-icon">
                                        <i class="fas fa-question"></i>
                                    </div>
                                    <h2>There is no Colection</h2>
                                    <p class="lead">
                                        You don't have any Colection
                                    </p>
                                    <a href="{{ route('pustaka.index') }}" class="btn btn-primary mt-4">Halaman Buku</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
                {{-- End Looping --}}
            </div>
        </section>
        <!-- Basic Card types section end -->
    </div>
@endsection
