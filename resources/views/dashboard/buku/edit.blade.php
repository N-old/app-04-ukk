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
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}">Kategori</a></li>
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
                            {{-- @if (Session::has('errors'))
                                <p>{{ $errors }}</p>
                            @endif --}}
                            <form class="form form-vertical" action="{{ route('buku.update', $buku->slug) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="form-body">
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger alert-dismissible show fade">{{ $error }}</div>
                                        @endforeach
                                    @endif
                                    {{-- <input type="hidden" name="slug" value="{{ $buku->slug }}"> --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Icon</label>
                                                <div class="position-relative">
                                                    <input type="file" class="form-control"
                                                        placeholder="Input with icon left" name="cover"
                                                        value="{{ $buku->cover }}" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i data-feather="file"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="email-id-icon">Judul Buku</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ $buku->name }}" placeholder="Input Nama Kategori"
                                                        id="email-id-icon">
                                                    <div class="form-control-icon">
                                                        <i data-feather="book-open"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Penulis</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Input Penulis"
                                                        name="penulis" value="{{ $buku->penulis }}" required
                                                        id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Penerbit</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Input Penerbit"
                                                        name="penerbit" value="{{ $buku->penerbit }}" required
                                                        id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i data-feather="book-open"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Tahun Terbit</label>
                                                <div class="position-relative">
                                                    <input type="year" class="form-control"
                                                        placeholder="Input Tahun Terbit" name="tahun"
                                                        value="{{ $buku->tahun }}" required id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i data-feather="calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Stok</label>
                                                <div class="position-relative">
                                                    <input type="number" class="form-control" placeholder="Input Stok"
                                                        name="stok" value="{{ $buku->stok }}" required
                                                        id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i data-feather="airplay"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Deskripsi</label>
                                                <div class="position-relative">
                                                    <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control">{{ $buku->deskripsi }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="password-id-icon">Kategori</label>
                                                <div class="position-relative">
                                                    <fieldset class="form-group">
                                                        <select class="form-select" id="basicSelect" name="kategori"
                                                            id="kategori_id">
                                                            <option selected disabled>Pilih Kategori</option>
                                                            @forelse ($kategori as $item)
                                                            <option value="{{ $item->id }}" {{ $item->id === $buku->kategori_id ? 'selected' : '' }}>{{ $item->name }}</option>
                                                            @empty
                                                                <option disabled>Belum ada kategori</option>
                                                            @endforelse
                                                        </select>
                                                    </fieldset>
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
