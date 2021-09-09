<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Page Content -->
        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                            <div class="flex justify-center">
                                {{-- card --}}
                                <div class="w-1/3 mx-auto gap-4 space-y-4 sm:space-y-0">
                                    <div class="bg-white">
                                        <div>
                                            <div
                                                class="shadow-lg hover:shadow-xl transform transition duration-500 hover:scale-105">
                                                <div>
                                                    @auth
                                                        <div class="px-4 py-2">
                                                            <h1 class="text-xl font-gray-700 font-bold">
                                                                {{ Auth::user()->nickName }}
                                                                {{ Auth::user()->name }}</h1>
                                                            <div class="flex space-x-2 mt-2">
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="h-7 w-7 text-yellow-400" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    </svg>
                                                                </span>
                                                                <h3 class="text-lg text-gray-600 font-semibold mb-2">
                                                                    {{ Auth::user()->adress }}</h3>
                                                            </div>
                                                            <p class="text-sm tracking-normal">Bonjour je suis web
                                                                developper j'ai
                                                                {{ Auth::user()->year }} ans et je suis Beautifull
                                                            </p>
                                                            <p class="text-sm tracking-normal">Role:
                                                                {{ Auth::user()->users->name }}
                                                            </p>
                                                            <button
                                                                class="mt-12 w-full text-center bg-yellow-400 py-2 rounded-lg">{{ Auth::user()->email }}</button>
                                                        </div>
                                                    @else
                                                        <h3>Désoler on à pas pue vous connecter !</h3>
                                                    @endauth
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
