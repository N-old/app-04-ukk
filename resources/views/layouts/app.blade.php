<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Book Spark') }}</title>

        {{-- Icon --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-LyBuRWaTj+zh65+C1Ad3iNizG8XfA7/b6tVKn8K/xh+3PUK1oPlmM4fcOePdZFbR2vlkPMJw58HahKppj8qbSw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <style>
            .rating:not(:checked) > input {
                    position: absolute;
                    appearance: none;
                  }
                  
                  .rating:not(:checked) > label {
                    float: right;
                    cursor: pointer;
                    font-size: 50px;
                    color: #666;
                  }
                  
                  .rating:not(:checked) > label:before {
                    content: '★';
                  }
                  
                  .rating > input:checked + label:hover,
                  .rating > input:checked + label:hover ~ label,
                  .rating > input:checked ~ label:hover,
                  .rating > input:checked ~ label:hover ~ label,
                  .rating > label:hover ~ input:checked ~ label {
                    color: #e58e09;
                  }
                  
                  .rating:not(:checked) > label:hover,
                  .rating:not(:checked) > label:hover ~ label {
                    color: #ff9e0b;
                  }
                  
                  .rating > input:checked ~ label {
                    color: #ffa723;
                  }
        </style>
        <div class="min-h-screen text-white bg-gray-100 dark:bg-gray-900">
            @include('layouts.navbar')
            <!-- Page Content -->
            <main>
                @yield('content')
            </main>

            @include('layouts.footer')
        </div>
    </body>
</html>
