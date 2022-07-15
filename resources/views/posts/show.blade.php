<x-app-layout>
    <div class="bg-white rounded-md border my-8 px-6 py-6">
        <div>
            @if (session('success_message'))
                <div class="bg-green-200 text-green-800 px-4 py-2 my-2">
                    {{ session('success_message') }}
                </div>
            @endif
            <h2 class="text-2xl font-semibold">{{ $post->title }}</h2>
            <div class="mt-4">
                <a href="/posts/{{ $post->id }}/edit" class="text-blue-600">Edit Post</a>
            </div>
            <div class="mt-4">
                {{ $post->body }}
            </div>
        </div>
    </div>
</x-app-layout>
