<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Book Spark</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex h-screen">
        @include('sweetalert::alert')
        <div id="auth-left" class="w-2/5 bg-primary grid justify-center items-center margin-auto h-full">
            <img src="{{ asset('images/logo.png') }}" alt="logo">
            <h1 class="text-3xl pl-9 font-bold text-white">Explore the sea of ​​books with book spark</h1>
            <img src="{{ asset('images/hero.png') }}" class="pl-2" alt="">
        </div>
        <div id="auth-right"class="w-3/5 text-black grid justify-center items-center m-auto">
            <div class="bg-white shadow-2xl px-8 py-4 rounded-2xl">
                <div class="">
                    <h1 class="text-center font-bold text-3xl">Login</h1>
                    <a class="text-left" href="/">Back to the site</a>
                </div>
                <form action="{{ route ('dologin')}}" method="POST" class="mt-8">
                    @csrf
                    <div class="flex flex-col mb-1">
                        <label class="text-black text-lg" for="email">Email</label>
                        <input type="email" class="text-slate-400 p-2 mt-4" name="email" placeholder="Email">
                    </div>
                    <div class="flex flex-col mb-1">
                        <div class="flex justify-between">
                            <label class="text-black text-lg" for="password">Password</label>
                            <a href="/forgot" class="text-blue-400 text-md font-thin px-2">Forgot Password?</a>
                        </div>
                        <input type="password" class="text-slate-400 p-2 mt-4" name="password" placeholder="Password">
                    </div>
                    <button class="bg-seconder w-96 rounded-md p-2 mt-4 text-white font-semibold">Log in</button>
                </form>
            </div>
            <div class="grid items-center justify-center mt-4">
                <p>Don't have an account? <a href="/register" class="text-blue-400">Create One</a></p>
            </div>
        </div>
    </div>
    {{-- <script src="{{ asset('dist/assets/static/js/initTheme.js') }}"></script> --}}
</body>
</html>
