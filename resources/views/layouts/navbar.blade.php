<div class="w-full sticky top-0 flex px-2 md:7px lg:px-14 bg-seconder py-1 md:py-2 lg:py-3 justify-between items-center text-xs md:text-lg lg:text-xl">
    <div class="">
        <a href="/">
            <img src="{{ asset('images/bookspark.png') }}" class="w-20 md:w-42 lg:w-40" alt="">
        </a>
    </div>
    <div class="flex text-md md:text-lg lg:text-xl gap-2 md:gap-4 lg:gap-6 font-bold">
        <a href="/">Home</a>
        <a href="/book">Book</a>
        <a href="/about">About Us</a>
    </div>
    <div class="flex gap-2 items-center">
        @if (auth()->guest())
        <a class="bg-white hover:bg-transparent text-black hover:text-white hover:border-2 border-white font-semibold py-1 md:py-1 lg:py-2 px-3 md:px-4 lg:px-8 rounded-sm md:rounded-md lg:rounded-xl" href="/login">Login</a>
        @endif
        @if (auth()->user())
        <a href="/profil" class="flex text-white">Ridwan Syahrul<svg xmlns="http://www.w3.org/2000/svg" class="w-6 bg-white rounded-full p-1 ml-2" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></a>
        @endif
    </div>
</div>