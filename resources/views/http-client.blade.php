<x-app-layout>
    <div class="bg-white rounded-md border my-8 px-6 py-6">
        <div>
            @if (session('success_message'))
                <div class="bg-green-200 text-green-800 px-4 py-2 my-2">
                    {{ session('success_message') }}
                </div>
            @endif
            <h2 class="text-2xl font-semibold">HTTP Client</h2>
            <div class="mt-4">
                <h3 class="text-xl font-semibold">Repos from API</h3>
                <ul class="list-disc ml-4 mt-4">
                    @forelse ($repos as $repo)
                        <li>{{ $repo['name'] }}</li>
                    @empty
                        <li>No repos found</li>
                    @endforelse
                </ul>
            </div>
            <div class="mt-4">
                <h3 class="text-xl font-semibold">Weather from API</h3>
                <div class="mt-4">
                    <div>Temperature: {{ $weather['main']['temp'] }}</div>
                    <div>Description: {{ $weather['weather'][0]['description'] }}</div>
                </div>
            </div>
            <div class="mt-4">
                <h3 class="text-xl font-semibold">Movies from API</h3>
                <ul class="list-disc ml-4 mt-4">
                    @forelse ($movies['results'] as $movie)
                        <li>{{ $movie['title'] }}</li>
                    @empty
                        <li>No repos found</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
