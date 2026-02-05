<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Site')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-gray-800">Example Corp</a>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-900">About</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-600 hover:text-gray-900">Services</a></li>
                    <li><a href="{{ route('portfolio') }}" class="text-gray-600 hover:text-gray-900">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-gray-900">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto px-4 text-center">
            &copy; {{ date('Y') }} Example Corp. All rights reserved.
        </div>
    </footer>

</body>
</html>