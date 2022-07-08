<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Cookbook') }}</title>

    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>

    <!-- Styles -->
    @stack('styles')
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .content a {
            color: blue;
        }

        .content ul {
            list-style-type: disc;
            margin-left: 10px;
        }
    </style>
</head>

<body class="font-sans antialiased text-gray-900">
    <div class="min-h-screen bg-gray-100">
        @if ($isActive)
            <div class="bg-purple-800 text-white text-lg font-medium" style="background: {{ $bannerColor }}">
                <a href="/announcement" class="container mx-auto px-4 py-4 flex items-center lg:w-max text-center hover:text-gray-100">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                        </svg>
                    </div>
                    <div class="ml-4">{{ $bannerText }}</div>
                </a>
            </div>
        @endif

        <div class="bg-blue-600 text-white">
            <nav class="container mx-auto px-4 py-4 space-x-6">
                <a href="/" class="hover:text-gray-200">Home</a>
                <a href="/charts" class="hover:text-gray-200">Charts</a>
                <a href="/stats" class="hover:text-gray-200">Stats</a>
                <a href="/announcement/edit" class="hover:text-gray-200">Edit Announcement</a>
            </nav>
        </div>

        <!-- Page Content -->
        <main class="container mx-auto px-4 py-4">
            {{ $slot }}
        </main>
    </div>

    <!-- Scripts -->
    @livewireScripts
    @stack('scripts')
</body>

</html>
