@extends('layouts.app')
@section('content')
    <div class="w-full">
        <div id="hero" class="w-full h-fit px-12 flex bg-seconder bg-cover bg-center bg-no-repeat">
            <div class="w-2/3 my-8 py-8">
                <h1 class="text-6xl font-bold">Spark your imagination, fuel your mind with wonderful world.</h1>
                <h6 class="text-md font-semibold my-6">Explore the place to enjoy the world of reading with an interesting
                    experience</h6>
                <a class=" border-2 border-white hover:border-primary font-semibold py-2 px-8 rounded-xl"
                    href="/register">Sign Up<i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="w-1/3 py-12">
                <img src="{{ asset('images/hero.png') }}" class="w-max" alt="">
            </div>
        </div>
        <div id="feature" class="w-full h-fit px-12 py-12 bg-white text-black bg-cover bg-center bg-no-repeat">
            <div class="grid justify-center items-center text-center">
                <h2 class="text-3xl font-semibold">Features</h2>
                <h6>We have advantages over other digital libraries</h6>
            </div>
            <div class="flex mx-12 my-12 gap-24">
                <a href="#">
                    <div class="grid rounded-3xl shadow-md justify-center items-center text-center py-12">
                        <div class="flex bg-seconder p-8 justify-center mx-20 py-12 items-center rounded-2xl">
                            <img src="{{ asset('images/collection.png') }}" class="w-30" alt="logo">
                        </div>
                        <div class="mt-4 text-center">
                            <h3 class="text-2xl font-bold">Collection Book</h3>
                            <h6>You can search book in any other genres or other categories</h6>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="grid rounded-3xl shadow-md justify-center items-center text-center py-12">
                        <div class="flex bg-seconder p-8 justify-center mx-20 py-12 items-center rounded-2xl">
                            <img src="{{ asset('images/search.png') }}" class="w-30" alt="logo">
                        </div>
                        <div class="mt-4">
                            <h3 class="text-2xl font-bold">Search Book</h3>
                            <h6>You can search book in any other genres or other categories</h6>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="grid rounded-3xl shadow-md justify-center items-center text-center py-12">
                        <div class="flex bg-seconder p-8 justify-center mx-20 py-12 items-center rounded-2xl">
                            <img src="{{ asset('images/chat.png') }}" class="w-30" alt="logo">
                        </div>
                        <div class="mt-4">
                            <h3 class="text-2xl font-bold">Review Book</h3>
                            <h6>You can search book in any other genres or other categories</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div id="book" class="w-full h-fit px-12 py-12 bg-white text-black bg-cover bg-center bg-no-repeat">
            <div class="grid justify-center items-center text-center">
                <h2 class="text-3xl font-semibold">Categories</h2>
                <h6>We have advantages over other digital libraries</h6>
            </div>
            <div class="flex mx-12 my-12 gap-24">
                <a href="#">
                    <div class="grid rounded-3xl shadow-md justify-center items-center text-center py-12">
                        <div class="flex p-8 justify-center mx-20 py-12 items-center rounded-2xl">
                            <img src="{{ asset('images/comic.png') }}" class="w-30" alt="logo">
                        </div>
                        <div class="mt-4 text-center">
                            <h3 class="text-2xl font-bold">Comics</h3>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="grid rounded-3xl shadow-md justify-center items-center text-center py-12">
                        <div class="flex p-8 justify-center mx-20 py-12 items-center rounded-2xl">
                            <img src="{{ asset('images/novel.png') }}" class="w-30" alt="logo">
                        </div>
                        <div class="mt-4">
                            <h3 class="text-2xl font-bold">Novels</h3>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="grid rounded-3xl shadow-md justify-center items-center text-center py-12">
                        <div class="flex p-8 justify-center mx-20 py-12 items-center rounded-2xl">
                            <img src="{{ asset('images/edu.png') }}" class="w-30" alt="logo">
                        </div>
                        <div class="mt-4">
                            <h3 class="text-2xl font-bold">Education</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div id="testimoni" class="w-full h-fit px-14 py-12 bg-white text-black bg-cover bg-center bg-no-repeat">
            <div class="grid justify-center items-center text-center">
                <h2 class="text-3xl font-semibold">Testimonial</h2>
                <h6>This a review about the library from any other customers</h6>
            </div>
            <div class="flex gap-4 my-8">
                <div class="border-2 border-seconder rounded-xl py-14">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/milea.png') }}" class="w-28" alt="logo">
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="text-4xl font-bold">Milea</h3>
                        <h4 class="text-light text-slate-400">Journalist</h4>
                        <h6>This place has so much collection book, there was a book about void centuries</h6>
                    </div>
                </div>
                <div class="border-2 border-seconder rounded-xl py-14">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/zoro.png') }}" class="w-28" alt="logo">
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="text-4xl font-bold">Zoro</h3>
                        <h4 class="text-light text-slate-400">Swordman</h4>
                        <h6>I don’t know where is it but i think robin would like this place</h6>
                    </div>
                </div>
                <div class="border-2 border-seconder rounded-xl py-14">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/movis.png') }}" class="w-28" alt="logo">
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="text-4xl font-bold">Movis</h3>
                        <h4 class="text-light text-slate-400">College Student</h4>
                        <h6>This place very helpful for me to study this place give a feel calmly so nice</h6>
                    </div>
                </div>
                <div class="border-2 border-seconder rounded-xl py-14">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/arhan.png') }}" class="w-28" alt="logo">
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="text-4xl font-bold">Arhan</h3>
                        <h4 class="text-light text-slate-400">Teacher</h4>
                        <h6>Mantap Tempatnya😊😁👍</h6>
                    </div>
                </div>
            </div>
        </div>
        <div id="preview" class="w-full h-fit px-14 py-12 bg-white text-black bg-cover bg-center bg-no-repeat">
            <div class="grid justify-center items-center text-center">
                <h2 class="text-3xl font-semibold">Preview</h2>
                <h6>There is preview about this place</h6>
            </div>
            <div class="w-full rounded-3xl flex justify-center py-8">
                <img src="{{ asset('images/preview.png') }}" alt="">
            </div>
            <div class="w-full flex justify-center px-8 gap-24">
                <img src="{{ asset('images/preview1.png') }}" alt="">
                <img src="{{ asset('images/preview2.png') }}" alt="">
                <img src="{{ asset('images/preview3.png') }}" alt="">
            </div>
        </div>
        <div id="location" class="w-full h-fit px-14 py-12 bg-white text-black bg-cover bg-center bg-no-repeat">
            <div class="grid justify-center items-center text-center">
                <h2 class="text-3xl font-semibold">Location</h2>
                <h6>Our place is very easy to reach because there is lots of public transportation</h6>
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
