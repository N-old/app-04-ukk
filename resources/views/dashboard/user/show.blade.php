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
                            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('user.index')}}">User</a></li>
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
                        <div class="form-group col-lg-6">
                            <label for="name">Nama</label>
                            <input type="text" id="name" class="form-control" value="{{ $user->name }}" disabled>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="email">email</label>
                            <input type="text" id="email" class="form-control" value="{{ $user->email }}" disabled>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="jk">Jenis Kelamin</label>
                            <input type="text" id="jk" class="form-control" value="{{ $user->jk }}" disabled>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="telepon">Telepon</label>
                            <input type="number" id="telepon" class="form-control" value="{{ $user->telepon }}" disabled>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="role">Role</label>
                            <input type="text" id="role" class="form-control" value="{{ $user->role}}" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="alamat">alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" style="height: 250px" disabled>{{ $user->alamat }}</textarea>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Foto</label>
                            <img src="{{ asset($user->foto) }}" alt="{{ $user->name }}" width="250" class="d-block">
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-whitesmoke text-right">
                    <a href="{{ route('user.index') }}" class="btn btn-secondary"><div class="form-control-icon">
                        <i data-feather="arrow-left"></i>
                    </div></a>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning"><div class="form-control-icon">
                        <i data-feather="edit"></i>
                    </div></a>
                    <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger" data-confirm-delete="true"><div class="form-control-icon">
                        <i data-feather="trash"></i>
                    </div></a>
                </div>
            </div>
        </section>
    </div>
@endsection
