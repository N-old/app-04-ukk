<div class="w-full sticky top-0 flex px-2 md:7px lg:px-14 bg-seconder py-1 md:py-2 lg:py-3 justify-between items-center text-xs md:text-lg lg:text-xl">
    <div class="">
        <a href="/">
            <img src="{{ asset('images/bookspark.png') }}" class="w-20 md:w-42 lg:w-40" alt="">
        </a>
    </div>
    <div class="flex text-md md:text-lg lg:text-xl gap-2 md:gap-4 lg:gap-6 font-bold">
        <a href="{{ route('home') }}" class="hover:border-b-2 hover:border-blue-500">Home</a>
        <a href="{{ url('/pustaka') }}">Pustaka Buku</a>
        <a href="/about">About Us</a>
    </div>
    <div class="flex gap-2 items-center">
        @if (auth()->guest())
        <a class="bg-white hover:bg-transparent text-black hover:text-white hover:border-2 border-white font-semibold py-1 md:py-1 lg:py-2 px-3 md:px-4 lg:px-8 rounded-sm md:rounded-md lg:rounded-xl" href="/login">Login</a>
        @endif
        @if (auth()->user())
        <div class="flex gap-2 items-center">
            <img src="{{ asset(auth()->user()->foto) }}" class="w-7 rounded-full" alt="foto">
            <div class="grid">
                <a href="{{route('dashboard')}}" class=" text-white font-semibold text-sm">{{ auth()->user()->name }}</a>
                <a href="{{route('dashboard')}}" class=" text-white font-semibold text-xs">{{ auth()->user()->role }}</a>
            </div>
        </div>
        @endif
    </div>
</div>