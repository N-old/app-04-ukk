@extends('layouts.app')
@section('content')
    <style>
        .rating:not(:checked)>input {
            position: absolute;
            appearance: none;
        }

        .rating:not(:checked)>label {
            float: right;
            cursor: pointer;
            font-size: 30px;
            color: #666;
        }

        .rating:not(:checked)>label:before {
            content: '★';
        }

        .rating>input:checked+label:hover,
        .rating>input:checked+label:hover~label,
        .rating>input:checked~label:hover,
        .rating>input:checked~label:hover~label,
        .rating>label:hover~input:checked~label {
            color: #e58e09;
        }

        .rating:not(:checked)>label:hover,
        .rating:not(:checked)>label:hover~label {
            color: #ff9e0b;
        }

        .rating>input:checked~label {
            color: #ffa723;
        }
    </style>
    <div class="w-full flex justify-center items-center bg-white text-black py-2 text-4xl">
        <h1>{{ $title }}</h1>
    </div>
    <div class="w-full bg-white text-black flex px-24 py-12">
        <div class="w-1/3">
            <div class="">
                <img src="{{ asset($buku->cover) }}" class="w-64" alt="{{ $buku->name }}">
            </div>
        </div>
        <div class="w-2/3">
            <div class="flex justify-between items-start">
                <div class="title">
                    <h2 class="text-3xl font-bold">{{ $buku->name }}</h2>
                </div>
            </div>
            <div class="sinopsis">
                <p>{{ $buku->deskripsi }}</p>
            </div>
            <div class="book-detail mt-3">
                <ul>
                    <li class="grid grid-cols-4"><span>Penulis:</span> {{ $buku->penulis }}</li>
                    <li class="grid grid-cols-4"><span>Penerbit:</span> {{ $buku->penerbit }}</li>
                    <li class="grid grid-cols-4"><span>Tahun Rilis:</span> {{ $buku->tahun }}</li>
                    <li class="grid grid-cols-4"><span>Kategori:</span> {{ $kategori->name }}</li>
                </ul>
            </div>
            <div class="grid justify-start mt-8">
                <form action="{{ route('pustaka.store') }}" method="post">
                    <div class="flex items-start justify-start gap-20">
                        <h3>Review Book:</h3>
                        <textarea name="komentar" class="border-2 border-black rounded-md p-1 " id="komentar" cols="50" rows="3"></textarea>
                    </div>
                    <div class="rating">
                        <input value="5" name="rating" id="star5" type="radio">
                        <label title="text" for="star5"></label>
                        <input value="4" name="rating" id="star4" type="radio">
                        <label title="text" for="star4"></label>
                        <input value="3" name="rating" id="star3" type="radio" checked="">
                        <label title="text" for="star3"></label>
                        <input value="2" name="rating" id="star2" type="radio">
                        <label title="text" for="star2"></label>
                        <input value="1" name="rating" id="star1" type="radio">
                        <label title="text" for="star1"></label>
                    </div>
                    <div class="flex gap-4 text-md mt-4">
                        <a href="" class="bg-blue-700 hover:bg-blue-800 text-white p-2 rounded-md">Tambah Koleksi</a>
                        <button type="submit" class="bg-green-700 hover:bg-green-800 text-white p-2 rounded-md">Posting Ulasan</button>
                    </div>
                </form>
            </div>
            <div class="grid grid-cols-4 gap-8">
                @foreach ($ulasan as $item)
                    <div class="bg-white p-3 shadow-md rounded-md">
                        <div class="flex justify-between px-2">
                            <h4>{{ $item->name }}</h4>
                            <p>{{ $item->rating }}</p>
                        </div>
                        <div class="p-2">
                            <p>{{ $item->komentar }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="text-3xl font-bold text-center grid justify-center">
            <h1>Book <span class="text-primary">Detail</span></h1>
        </div>
        <div class="w-full flex mr-12 mt-8">
            <div class="w-1/3">
                <img src="{{ asset('images/novel.png') }}" class="w-60" alt="">
            </div>
            <div class="w-2/3">
                <div class="font-semibold">
                    <h2>Book Detail</h2>
                    <form action="">
                        <div class="grid row-span-5">
                            <div class="font-normal grid grid-cols-2 gap-12">
                                <h3>Book Name</h3>
                                <h3>Selena</h3>
                            </div>
                            <div class="font-normal grid grid-cols-2 gap-12">
                                <h3>Writer</h3>
                                <h3>Ahmad Dhani</h3>
                            </div>
                            <div class="font-normal grid grid-cols-2 gap-12">
                                <h3>Publisher</h3>
                                <h3>Gramedia</h3>
                            </div>
                            <div class="font-normal grid grid-cols-2 gap-12">
                                <h3>Release Date</h3>
                                <h3>2024</h3>
                            </div>
                            <div class="font-normal grid grid-cols-2 gap-12">
                                <h3>Categories</h3>
                                <h3>Novel</h3>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="font-semibold mt-8">
                    <h2>Book Description</h2>
                    <form action="">
                        <div class="">
                            <h4>Walau sudah SMP, hubungan Miiko dengan para sahabatnya tetap tidak berubah. Namun, tiba-tiba
                                Yoshida mengajak Miiko pergi kencan!? Melihat hal itu, Tappei pun mulai bergerak!?</h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="text-3xl font-bold text-center grid justify-center">
            <h1>Book <span class="text-primary">Review</span></h1>
        </div>
        <div class="w-full flex mr-12 mt-8">
            <div class="w-1/3">
                <div class="bg-white shadow-md rounded-lg mr-12 p-3">
                    <p>Ilham</p>
                </div>
            </div>
            <div class="w-2/3 grid justify-start items-start">
                <div class="grid grid-rows-2">
                    <div class="rating justify-start">
                        <input value="5" name="rate" id="star5" type="radio">
                        <label title="text" for="star5"></label>
                        <input value="4" name="rate" id="star4" type="radio">
                        <label title="text" for="star4"></label>
                        <input value="3" name="rate" id="star3" type="radio" checked="">
                        <label title="text" for="star3"></label>
                        <input value="2" name="rate" id="star2" type="radio">
                        <label title="text" for="star2"></label>
                        <input value="1" name="rate" id="star1" type="radio">
                        <label title="text" for="star1"></label>
                    </div>
                    <div class="mx-2">
                        <textarea name="ulasan" id="ulasan" cols="60" rows="5"></textarea>
                    </div>
                    <div class="m-2">
                        <a href="/"><button type="submit" class="bg-primary text-white rounded-lg p-2 px-12 font-semibold">Confirm</button></a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
