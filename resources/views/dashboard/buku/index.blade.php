@extends('dashboard.layouts.app')
@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>Card Data</h3>
                    <p class="text-subtitle text-muted">Disini anda dapat mengelola Data Buku</p>
                </div>
                <div class="col-12 col-md-6">
                    <nav aria-label="breadcrumb" class='breadcrumb-header text-right'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Card Book</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
        <!-- Basic card section start -->
        <section id="content-types">
            <div class="row">
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <img src="{{asset('images/comic.png')}}"
                                class="card-img-top img-fluid"alt="singleminded">
                            <div class="card-body">
                                <h5 class="card-title">Naruto</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, consequatur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <img src="{{asset('images/comic.png')}}"
                                class="card-img-top img-fluid"alt="singleminded">
                            <div class="card-body">
                                <h5 class="card-title">Naruto</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, consequatur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <img src="{{asset('images/comic.png')}}"
                                class="card-img-top img-fluid"alt="singleminded">
                            <div class="card-body">
                                <h5 class="card-title">Naruto</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, consequatur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-content">
                            <img src="{{asset('images/comic.png')}}"
                                class="card-img-top img-fluid"alt="singleminded">
                            <div class="card-body">
                                <h5 class="card-title">Naruto</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, consequatur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Card types section end -->
    </div>
@endsection
