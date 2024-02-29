@extends('dashboard.layouts.app')
@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>{{ $title }}</h3>
                    <p class="text-subtitle text-muted">Di page ini anda dapat {{ $title }}</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('kategori.index')}}">Kategori</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row match-height">
            <div class="col-md-4 col-12">
                {{-- <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ulasan</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-md-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $title }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form class="form form-vertical" action="{{ route('user.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Nama</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control"
                                                        placeholder="Input Nama" name="name" value="{{ old('name') }}" id="first-name-icon" required>
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div class="form-group has-icon-left">
                                                <label for="email-id-icon">Email</label>
                                                <div class="position-relative">
                                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Input Email"
                                                        id="email-id-icon" required>
                                                    <div class="form-control-icon">
                                                        <i data-feather="mail"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="mobile-id-icon">Alamat</label>
                                                <div class="position-relative">
                                                    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    <div class="form-control-icon">
                                                        <i data-feather="shuffle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group has-icon-left">
                                                    <label for="mobile-id-icon">Jenis Kelamin</label>
                                                    <div class="position-relative">
                                                        <fieldset class="form-group">
                                                            <select class="form-select" id="basicSelect" name="jk" id="jk" required>
                                                                <option selected disabled>Jenis Kelamin</option>
                                                                <option value="laki-laki">Laki-laki</option>
                                                                <option value="perempuan">Perempuan</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group has-icon-left">
                                                    <label for="mobile-id-icon">Telepon</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" name="telepon" value="{{ old('telepon') }}" placeholder="Input Telepon"
                                                            id="mobile-id-icon" required>
                                                        <div class="form-control-icon">
                                                            <i data-feather="phone"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Avatar</label>
                                                <div class="position-relative">
                                                    <input type="file" class="form-file-input" value="{{ old('foto') }}" name="foto" id="customFile">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="password-id-icon">Role</label>
                                                <div class="position-relative">
                                                    <fieldset class="form-group">
                                                        <select class="form-select" id="basicSelect" name="role" id="role" required>
                                                            <option selected disabled>Pilih Role</option>
                                                            <option value="admin">Admin</option>
                                                            <option value="petugas">Petugas</option>
                                                            <option value="user">User</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="password-id-icon">Password</label>
                                                <div class="position-relative">
                                                    <input type="password" class="form-control" name="password" placeholder="Password"
                                                        id="password-id-icon" required>
                                                    <div class="form-control-icon">
                                                        <i data-feather="lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Tambah</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
