@extends('layouts.app')
@section('content')
    <div class="w-full bg-white text-black px-24 py-12">
        <div class="text-3xl font-bold text-center grid justify-center">
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
            <div class="w-2/3">
                <div class="grid justify-start items-center">
                    <div class="rating">
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
                        <textarea name="ulasan" id="ulasan" cols="60" rows="10"></textarea>
                    </div>
                    <div class="m-2">
                        <a href="/"><button type="submit" class="bg-primary text-white rounded-lg p-2 px-12 font-semibold">Confirm</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
