@extends('layouts.app')
@section('content')
    <div class="w-full h-fit flex bg-white text-black bg-cover bg-center bg-no-repeat px-4 md:10px lg:px-14 py-3 md:py-6 lg:py-8 text-xs md:text-lg lg:text-xl">
        <div class="w-1/4">
            <div class="bg-white shadow-sm md:shadow-md rounded-sm md:rounded-md flex justify-start items-center mt-20">
                <button class=""></button>
                <div class="flex items-center border-2 border-gray-600 rounded-md">
                    <input type="search" class="" placeholder="Search" name="" id="">
                    <button type="submit" class="text-white"></button>                
                </div>
            </div>
        </div>
        <div class="w-3/4">
            <div id="book" class="w-full h-fit bg-white text-black bg-cover bg-center bg-no-repeat">
                <div class="grid justify-center items-center text-center">
                    <h2 class="text-3xl font-semibold">{{ $title }}</h2>
                    <h6>This is Page of Book</h6>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    @foreach ($buku as $item)
                        <div class="bg-white shadow-md rounded-md py-2">
                            <a href="{{ route('pustaka.show', $item->slug) }}" title="View Student">
                                <div class="grid justify-center">
                                    <img src="{{ asset($item->cover) }}" class="w-64" alt="{{$item->name}}">
                                </div>
                                <div class="grid justify-start items-start mt-2 px-2">
                                    <h3 class="text-md font-bold">{{ $item->name }}</h3>
                                    <p class="text-slate-600 text-sm">{{ $item->deskripsi }}</p>
                                    {{-- <a href="{{route ()}}" class="bg-blue-600 rounded-md shadow-md p-1 text-white text-xs">Pinjam</a> --}}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
