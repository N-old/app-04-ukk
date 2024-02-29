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
                            <form class="form form-vertical" action="{{route ('kategori.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Icon</label>
                                                <div class="position-relative">
                                                    <input type="file" class="form-control"
                                                        placeholder="Input with icon left" name="icon" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i data-feather="file"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="email-id-icon">Name</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="name" placeholder="Input Nama Kategori"
                                                        id="email-id-icon">
                                                    <div class="form-control-icon">
                                                        <i data-feather="book-open"></i>
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
