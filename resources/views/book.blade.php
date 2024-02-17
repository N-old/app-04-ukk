@extends('layouts.app')
@section('content')
    <div class="w-full h-fit flex px-14 py-12 bg-white text-black bg-cover bg-center bg-no-repeat gap-8">
        <div class="w-1/4 mt-14">
            <div class="bg-white shadow-md rounded-md grid justify-start items-center py-8 px-2">
                <div class="flex items-center border-2 border-gray-600 rounded-md">
                    <input type="search" class="px-2 py-1 border-none" placeholder="Search" name="" id="">
                    <button type="submit" class="text-white"><svg xmlns="http://www.w3.org/2000/svg" class="w-10 bg-primary p-4" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button>
                </div>
                <div class="mt-3">
                    <ul class="text-black">
                        <li>Semua Kategori</li>
                        <li>Novel</li>
                        <li>Comic</li>
                        <li>Education</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-3/4">
            <div id="book" class="w-full h-fit bg-white text-black bg-cover bg-center bg-no-repeat">
                <div class="grid justify-center items-center text-center">
                    <h2 class="text-3xl font-semibold">Book</h2>
                    <h6>This is Page of Book</h6>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <a href="/book-detail">
                        <div class="bg-white p-3 shadow-md rounded-md">
                            <div class="grid justify-center">
                                <img src="{{ asset('images/comic.png') }}" class="h-64" alt="">
                            </div>
                            <div class="flex justify-between items-start mt-2">
                                <h3 class="text-md font-bold">Boruto:Naruto next generation</h3>
                                <h6>Rating</h6>
                            </div>
                        </div>
                    </a>
                    <a href="/book-detail">
                        <div class="bg-white p-3 shadow-md rounded-md">
                            <div class="grid justify-center">
                                <img src="{{ asset('images/comic.png') }}" class="h-64" alt="">
                            </div>
                            <div class="flex justify-between items-start mt-2">
                                <h3 class="text-md font-bold">Title</h3>
                                <h6>Rating</h6>
                            </div>
                        </div>
                    </a>
                    <a href="/book-detail">
                        <div class="bg-white p-3 shadow-md rounded-md">
                            <div class="grid justify-center">
                                <img src="{{ asset('images/comic.png') }}" class="h-64" alt="">
                            </div>
                            <div class="flex justify-between items-start mt-2">
                                <h3 class="text-md font-bold">Title</h3>
                                <h6>Rating</h6>
                            </div>
                        </div>
                    </a>
                    <a href="/book-detail">
                        <div class="bg-white p-3 shadow-md rounded-md">
                            <div class="grid justify-center">
                                <img src="{{ asset('images/comic.png') }}" class="h-64" alt="">
                            </div>
                            <div class="flex justify-between items-start mt-2">
                                <h3 class="text-md font-bold">Title</h3>
                                <h6>Rating</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
