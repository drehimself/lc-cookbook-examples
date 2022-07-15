<x-app-layout>
    <div class="bg-white rounded-md border my-8 px-6 py-6">
        <div>
            @if (session('success_message'))
                <div class="bg-green-200 text-green-800 px-4 py-2">
                    {{ session('success_message') }}
                </div>
            @endif
            <h2 class="text-2xl font-semibold">Posts</h2>
            <div class="mt-4">
                @forelse ($posts as $post)
                    <div class="mt-4">
                        <div>
                            <a href="/posts/{{ $post->id }}" class="text-blue-600">{{ $post->title }}</a>
                        </div>
                        <div>{{ $post->excerpt }}</div>
                    </div>
                @empty
                    No Posts found
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
