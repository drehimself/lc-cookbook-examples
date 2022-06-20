<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Cookbook') }}</title>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased text-gray-900">
    <div class="min-h-screen bg-gray-100">

        <div class="bg-blue-600 text-white">
            <nav class="container mx-auto px-4 py-4 space-x-6">
                <a href="/" class="hover:text-gray-200">Home</a>
                <a href="/charts" class="hover:text-gray-200">Charts</a>
            </nav>
        </div>

        <!-- Page Content -->
        <main class="container mx-auto px-4 py-4">
            {{ $slot }}
        </main>
    </div>

    <!-- Scripts -->
    @stack('scripts')
</body>

</html>
