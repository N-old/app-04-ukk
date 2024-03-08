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
                            <li class="breadcrumb-item"><a href="{{ route('buku.index') }}">Buku</a></li>
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
                <form action="{{ route('profil.update') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('patch')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ asset($user->foto) }}" style="width:350px;" alt="{{ $user->name }}">
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" class="form-control" name="name"
                                                value="{{ $user->name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="name" class="form-control" name="email"
                                                value="{{ $user->email }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="foto">Avatar</label>
                                            <input type="file" id="name" class="form-control" name="foto"
                                                value="{{ $user->foto }}" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="telepon">Telepon</label>
                                            <input type="telepon" id="name" class="form-control" name="telepon"
                                                value="{{ $user->telepon }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3">{{ $user->alamat }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-whitesmoke text-right">
                        <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                            <div class="form-control-icon">
                                <i data-feather="arrow-left"></i>
                            </div>
                        </a>
                        {{-- <a href="{{ route('user.edit', $user->slug) }}" class="btn btn-warning"><div class="form-control-icon">
                        <i data-feather="edit"></i>
                    </div></a>
                    <a href="{{ route('user.destroy', $user->slug) }}" class="btn btn-danger" data-confirm-delete="true"><div class="form-control-icon">
                        <i data-feather="trash"></i>
                    </div></a> --}}
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
