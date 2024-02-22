@extends('layouts.app')
@section('content')
    <div class="w-full">
        <div id="hero"
            class="w-full h-fit flex items-center bg-seconder bg-cover bg-center bg-no-repeat px-4 md:10px lg:px-14 py-3 md:py-6 lg:py-8 text-xs md:text-lg lg:text-2xl">
            <div class="w-2/3 my-3 md:my-6 lg:my-8">
                <h1 class="font-bold">Spark your imagination, fuel your mind with wonderful world.</h1>
                <h6 class="font-semibold my-4 md:my-6 lg:my-8">Explore the place to enjoy the world of reading with an
                    interesting experience</h6>
                <a class=" border-2 border-white hover:border-primary text-xs md:text-lg lg:text-2xl font-semibold py-1 md:py-2 px-4 md:px-6 lg:px-8 rounded-md md:rounded-xl"
                    href="/register">Sign Up
                </a>
            </div>
            <div class="w-1/3">
                <img src="{{ asset('images/hero.png') }}" class="w-28 md:w-44 lg:w-60" alt="">
            </div>
        </div>
        <div id="feature"
            class="w-full h-fit bg-white text-black bg-cover bg-center bg-no-repeat px-4 md:10px lg:px-14 py-2 md:py-4 lg:py-6 text-xs md:text-lg lg:text-xl">
            <div class="grid justify-center items-center text-center">
                <h2 class="text-lg md:text-3xl font-bold">Features</h2>
                <h6 class="text-sm md:text-xl lg:text-2xl">We have advantages over other digital libraries</h6>
            </div>
            <div class="grid grid-cols-3 gap-4 md:gap-8 mt-4 md:mt-12">
                <div
                    class="grid rounded-md md:rounded-lg lg:rounded-3xl shadow-md md:shadow-lg justify-center items-center text-center h-50 md:h-90">
                    <div
                        class="grid bg-seconder items-center justify-center py-8 md:py-12 rounded-md md:rounded-lg lg:rounded-xl mx-2 md:mx-8 lg:mx-16 mt-4 md:mt-8">
                        <img src="{{ asset('images/collection.png') }}" class="w-8 md:w-20 lg:w-24" alt="logo">
                    </div>
                    <div class="text-center my-4 mx-2">
                        <h3 class="font-bold">Collection Book</h3>
                        <h6>You can search book in any other genres or other categories</h6>
                    </div>
                </div>
                <div
                    class="grid rounded-md md:rounded-lg lg:rounded-3xl shadow-md md:shadow-lg justify-center items-center text-center h-50 md:h-90">
                    <div
                        class="grid bg-seconder items-center justify-center py-8 md:py-12 rounded-md md:rounded-lg lg:rounded-xl mx-2 md:mx-8 lg:mx-16 mt-4 md:mt-8">
                        <img src="{{ asset('images/search.png') }}" class="w-8 md:w-20 lg:w-24" alt="logo">
                    </div>
                    <div class="text-center my-4 mx-2">
                        <h3 class="font-bold">Search Book</h3>
                        <h6>You can search book in any other genres or other categories</h6>
                    </div>
                </div>
                <div
                    class="grid rounded-md md:rounded-lg lg:rounded-3xl shadow-md md:shadow-lg justify-center items-center text-center h-50 md:h-90">
                    <div
                        class="grid bg-seconder items-center justify-center py-8 md:py-12 rounded-md md:rounded-lg lg:rounded-xl mx-2 md:mx-8 lg:mx-16 mt-4 md:mt-8">
                        <img src="{{ asset('images/chat.png') }}" class="w-8 md:w-20 lg:w-24" alt="logo">
                    </div>
                    <div class="text-center my-4 mx-2">
                        <h3 class="font-bold">Review Book</h3>
                        <h6>You can search book in any other genres or other categories</h6>
                    </div>
                </div>
            </div>
        </div>
        <div id="categories"
            class="w-full h-fit bg-white text-black bg-cover bg-center bg-no-repeat px-4 md:10px lg:px-14 py-2 md:py-4 lg:py-6 text-xs md:text-lg lg:text-xl">
            <div class="grid justify-center items-center text-center">
                <h2 class="text-lg md:text-3xl font-bold">Categories</h2>
                <h6 class="text-sm md:text-xl lg:text-2xl">We have advantages over other digital libraries</h6>
            </div>
            <div class="grid grid-cols-3 gap-4 md:gap-8 mt-4 md:mt-12">
                <div
                    class="grid rounded-md md:rounded-lg lg:rounded-3xl shadow-md md:shadow-lg justify-center items-center text-center h-50 md:h-90">
                    <div
                        class="griditems-center justify-center py-8 md:py-12 rounded-md md:rounded-lg lg:rounded-xl mx-2 md:mx-8 lg:mx-16 mt-4 md:mt-8">
                        <img src="{{ asset('images/comic.png') }}" class="w-16  md:w-20 lg:w-32" alt="logo">
                    </div>
                    <div class="text-center my-4 mx-2">
                        <h3 class="font-bold">Comic</h3>
                    </div>
                </div>
                <div
                    class="grid rounded-md md:rounded-lg lg:rounded-3xl shadow-md md:shadow-lg justify-center items-center text-center h-50 md:h-90">
                    <div
                        class="griditems-center justify-center py-8 md:py-12 rounded-md md:rounded-lg lg:rounded-xl mx-2 md:mx-8 lg:mx-16 mt-4 md:mt-8">
                        <img src="{{ asset('images/novel.png') }}" class="w-16  md:w-20 lg:w-32" alt="logo">
                    </div>
                    <div class="text-center my-4 mx-2">
                        <h3 class="font-bold">Novel</h3>
                    </div>
                </div>
                <div
                    class="grid rounded-md md:rounded-lg lg:rounded-3xl shadow-md md:shadow-lg justify-center items-center text-center h-50 md:h-90">
                    <div
                        class="griditems-center justify-center py-8 md:py-12 rounded-md md:rounded-lg lg:rounded-xl mx-2 md:mx-8 lg:mx-16 mt-4 md:mt-8">
                        <img src="{{ asset('images/edu.png') }}" class="w-16 md:w-20 lg:w-32"alt="logo">
                    </div>
                    <div class="text-center my-4 mx-2">
                        <h3 class="font-bold">Edukasi</h3>
                    </div>
                </div>
            </div>
        </div>
        <div id="testimoni" class="w-full h-fit bg-white text-black bg-cover bg-center bg-no-repeat px-4 md:10px lg:px-14 py-2 md:py-4 lg:py-6 text-xs md:text-lg lg:text-xl">
            <div class="grid justify-center items-center text-center">
                <h2 class="text-lg md:text-3xl font-semibold">Testimonial</h2>
                <h6 class="text-sm md:text-xl lg:text-2xl">This a review about the library from any other customers</h6>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-8 my-4 md:my-8">
                <div class="grid justify-center items-center border-2 border-seconder rounded-md md:rounded-xl py-4 md:py-8 lg:py-14">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/milea.png') }}" class="w-12 lg:w-28" alt="logo">
                    </div>
                    <div class="mt-4 text-center px-2 lg:px-8">
                        <h3 class="text-lg md:text-2xl lg:text-4xl font-bold">Milea</h3>
                        <h4 class="text-light text-slate-400">Journalist</h4>
                        <h6>This place has so much collection book, there was a book about void centuries</h6>
                    </div>
                </div>
                <div class="grid justify-center items-center border-2 border-seconder rounded-md md:rounded-xl py-4 md:py-8 lg:py-14">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/zoro.png') }}" class="w-12 lg:w-28" alt="logo">
                    </div>
                    <div class="mt-4 text-center px-2 lg:px-8">
                        <h3 class="text-lg md:text-2xl lg:text-4xl font-bold">Zoro</h3>
                        <h4 class="text-light text-slate-400">Swordman</h4>
                        <h6>I don’t know where is it but i think robin would like this place</h6>
                    </div>
                </div>
                <div class="grid justify-center items-center border-2 border-seconder rounded-md md:rounded-xl py-4 md:py-8 lg:py-14">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/movis.png') }}" class="w-12 lg:w-28" alt="logo">
                    </div>
                    <div class="mt-4 text-center px-2 lg:px-8">
                        <h3 class="text-lg md:text-2xl lg:text-4xl font-bold">Movis</h3>
                        <h4 class="text-light text-slate-400">College Student</h4>
                        <h6>This place very helpful for me to study this place give a chill vibes</h6>
                    </div>
                </div>
                <div class="grid justify-center items-center border-2 border-seconder rounded-md md:rounded-xl py-4 md:py-8 lg:py-14">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/arhan.png') }}" class="w-12 lg:w-28" alt="logo">
                    </div>
                    <div class="mt-4 text-center px-2 lg:px-8">
                        <h3 class="text-lg md:text-2xl lg:text-4xl font-bold">Arhan</h3>
                        <h4 class="text-light text-slate-400">Teacher</h4>
                        <h6>Mantap Tempatnya👍😁👍</h6>
                    </div>
                </div>
            </div>
        </div>
        <div id="preview" class="w-full grid justify-center items-center h-fit bg-white text-black bg-cover bg-center bg-no-repeat px-4 md:10px lg:px-14 py-2 md:py-4 lg:py-6 text-xs md:text-lg lg:text-xl">
            <div class="grid justify-center items-center text-center">
                <h2 class="text-lg md:text-3xl font-semibold">Preview</h2>
                <h6 class="text-sm md:text-xl lg:text-2xl">There is preview about this place</h6>
            </div>
            <div class="rounded-md md:rounded-xl lg:rounded-3xl flex justify-center py-2 md:py-8">
                <img src="{{ asset('images/preview.png') }}" alt="main preview">
            </div>
            <div class="grid grid-cols-3 gap-9 md:gap-12 lg:gap-24 mt-2 md:mt-4">
                <img src="{{ asset('images/preview1.png') }}" class="w-26 md:w-64 lg:w-80" alt="preview">
                <img src="{{ asset('images/preview2.png') }}" class="w-26 md:w-64 lg:w-80" alt="preview">
                <img src="{{ asset('images/preview3.png') }}" class="w-26 md:w-64 lg:w-80" alt="preview">
            </div>
        </div>
        <div id="location" class="w-full h-fit bg-white text-black bg-cover bg-center bg-no-repeat px-4 md:10px lg:px-14 py-2 md:py-4 lg:py-6 text-xs md:text-lg lg:text-xl">
            <div class="grid justify-center items-center text-center">
                <h2 class="text-lg md:text-3xl font-semibold">Location</h2>
                <h6 class="text-sm md:text-xl lg:text-2xl">Our place is very easy to reach because there is lots of public transportation</h6>
            </div>
            <div class="w-full mt-4">
                <iframe class="w-full rounded-xl"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5768926092187!2d106.63517767462722!3d-6.187333393800236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f929162547c7%3A0xbbf35137362e584d!2sSMK%20Negeri%204%20Kota%20Tangerang!5e0!3m2!1sid!2sid!4v1707388629287!5m2!1sid!2sid"height="450"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
