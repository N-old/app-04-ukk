@extends('layouts.app')
@section('content')
    <div class="w-full h-fit flex bg-white text-black bg-cover bg-center bg-no-repeat px-4 md:10px lg:px-14 py-3 md:py-6 lg:py-8 text-xs md:text-lg lg:text-2xl">
        <div class="flex justify-center w-full">
            <div class="bg-white shadow-sm md:shadow-md rounded-sm md:rounded-md flex justify-start items-center">
                <button class=""></button>
                <div class="flex items-center border-2 border-gray-600 rounded-md">
                    <input type="search" class="p-1" placeholder="Search" name="" id="">
                    <button type="submit" class="text-white"></button>                
                </div>
            </div>
        </div>
        {{-- <div class="w-3/4">
            <div id="book" class="w-full h-fit bg-white text-black bg-cover bg-center bg-no-repeat">
                <div class="grid justify-center items-center text-center">
                    <h2 class="text-3xl font-semibold">Book</h2>
                    <h6>This is Page of Book</h6>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <a href="/book-detail">
                        <div class="bg-white shadow-md rounded-md py-2">
                            <div class="grid justify-center">
                                <img src="{{ asset('images/comic.png') }}" class="w-64" alt="">
                            </div>
                            <div class="grid justify-start items-start mt-2 px-2">
                                <h3 class="text-md font-bold">Boruto:Naruto next generation</h3>
                                <p class="text-slate-600 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, id.</p>
                            </div>
                        </div>
                    </a>
                    <a href="/book-detail">
                        <div class="bg-white shadow-md rounded-md py-2">
                            <div class="grid justify-center">
                                <img src="{{ asset('images/comic.png') }}" class="w-64" alt="">
                            </div>
                            <div class="grid justify-start items-start mt-2 px-2">
                                <h3 class="text-md font-bold">Boruto:Naruto next generation</h3>
                                <p class="text-slate-600 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, id.</p>
                            </div>
                        </div>
                    </a>
                    <a href="/book-detail">
                        <div class="bg-white shadow-md rounded-md py-2">
                            <div class="grid justify-center">
                                <img src="{{ asset('images/comic.png') }}" class="w-64" alt="">
                            </div>
                            <div class="grid justify-start items-start mt-2 px-2">
                                <h3 class="text-md font-bold">Boruto:Naruto next generation</h3>
                                <p class="text-slate-600 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, id.</p>
                            </div>
                        </div>
                    </a>
                    <a href="/book-detail">
                        <div class="bg-white shadow-md rounded-md py-2">
                            <div class="grid justify-center">
                                <img src="{{ asset('images/comic.png') }}" class="w-64" alt="">
                            </div>
                            <div class="grid justify-start items-start mt-2 px-2">
                                <h3 class="text-md font-bold">Boruto:Naruto next generation</h3>
                                <p class="text-slate-600 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, id.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
