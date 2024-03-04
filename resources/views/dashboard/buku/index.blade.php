@extends('dashboard.layouts.app')
@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>{{ $title }}</h3>
                    <p class="text-subtitle text-muted">Disini anda dapat mengelola {{$title}} </p>
                    {{-- <a href="{{ route('buku.export')}}" class="btn btn-primary btn-sm mb-3"data-toggle="tooltip" title="Lihat Pengguna">
                        <div class="form-control-icon">
                            <i data-feather="plus"></i>
                        </div>
                    </a> --}}
                    <a href="{{ route('buku.create')}}" class="btn btn-primary btn-sm mb-3"data-toggle="tooltip" title="Lihat Pengguna">
                        <div class="form-control-icon">
                            <i data-feather="plus"></i>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <nav aria-label="breadcrumb" class='breadcrumb-header text-right'>
                        <ol class="breadcrumb">`
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Buku</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>


        <!-- Basic card section start -->
        <section id="content-types">
            <div class="row">
                @foreach ($buku as $item)
                <div class="col-xl-4 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <img src="{{ asset($item->cover) }}" alt="{{ $item->name }}"
                                class="card-img-top img-fluid" style="height: 400px;">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->name}}</h5>
                                <p class="card-text">
                                    {{$item->deskripsi}}
                                </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('buku.show', $item->slug) }}" class="btn btn-sm btn-info"
                                data-toggle="tooltip" title="Lihat Pengguna">
                                <div class="form-control-icon">
                                    <i data-feather="eye"></i>
                                </div>
                            </a>
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
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- Basic Card types section end -->
    </div>
@endsection
