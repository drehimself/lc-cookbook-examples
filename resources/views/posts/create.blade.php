<x-app-layout>
    <div class="bg-white rounded-md border my-8 px-6 py-6">
        <div>
            <h2 class="text-2xl font-semibold">Create Post</h2>

            @if (session('success_message'))
                <div class="bg-green-200 text-green-800 px-4 py-2">
                    {{ session('success_message') }}
                </div>
            @endif

            <div class="mt-4">
                <x-post-form :post="$post" />
                {{-- <form action="/posts/create" method="POST" class="lg:w-1/2">
                    @csrf
                    <div class="mt-4">
                        <label for="title" class="font-semibold block">Title</label>
                        <input type="text" name="title" id="title" class="border border-gray-400 rounded w-full px-2 py-2 mt-2" value="{{ old('title') }}">
                        @error('title')
                            <div class="bg-red-200 text-red-700 rounded-md px-4 py-2 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="body" class="font-semibold block">Body</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="border border-gray-400 rounded w-full px-2 py-2 mt-2">{{ old('body') }}</textarea>
                        @error('body')
                            <div class="bg-red-200 text-red-700 rounded-md px-4 py-2 mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-8">
                        <button type="submit" class="bg-blue-600 rounded inline-block text-white px-4 py-4">Create Post</button>
                    </div>
                </form> --}}
            </div>
        </div>
    </div>
</x-app-layout>
