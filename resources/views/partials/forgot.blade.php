<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Book Spark</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex h-screen bg-primary justify-center items-center">
        <div class="bg-white shadow-2xl px-8 py-4 rounded-2xl">
            <div class="">
                <h1 class="text-center font-bold text-3xl">Forgot</h1>
                <a class="text-left" href="/">Back to the site</a>
            </div>
            <form action="index.html" class="mt-8">
                <div class="flex flex-col mb-1">
                    <label class="text-black text-lg" for="email">Email</label>
                    <input type="email" class="text-slate-400 p-2 mt-4" name="email" placeholder="Email">
                </div>
                <button class="bg-seconder w-96 rounded-md p-2 mt-4 text-white font-semibold">Confirm</button>
            </form>
        </div>
    </div>
</body>
</html>
