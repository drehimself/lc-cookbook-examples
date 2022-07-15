@if ($post->exists)
    <form action="/posts/{{ $post->id }}" method="POST" class="lg:w-1/2">
        @method('PATCH')
    @else
        <form action="/posts/create" method="POST" class="lg:w-1/2">
@endif
@csrf
<div class="mt-4">
    <label for="title" class="font-semibold block">Title</label>
    <input type="text" name="title" id="title" class="border border-gray-400 rounded w-full px-2 py-2 mt-2" value="{{ old('title', $post->title) }}">
    @error('title')
        <div class="bg-red-200 text-red-700 rounded-md px-4 py-2 mt-2">{{ $message }}</div>
    @enderror
</div>

<div class="mt-4">
    <label for="body" class="font-semibold block">Body</label>
    <textarea name="body" id="body" cols="30" rows="10" class="border border-gray-400 rounded w-full px-2 py-2 mt-2">{{ old('body', $post->body) }}</textarea>
    @error('body')
        <div class="bg-red-200 text-red-700 rounded-md px-4 py-2 mt-2">{{ $message }}</div>
    @enderror
</div>

<div class="mt-4">
    <label for="excerpt" class="font-semibold block">Excerpt</label>
    <input type="text" name="excerpt" id="excerpt" class="border border-gray-400 rounded w-full px-2 py-2 mt-2" value="{{ old('excerpt', $post->excerpt) }}">
    @error('excerpt')
        <div class="bg-red-200 text-red-700 rounded-md px-4 py-2 mt-2">{{ $message }}</div>
    @enderror
</div>

<div class="mt-8">
    <button type="submit" class="bg-blue-600 rounded inline-block text-white px-4 py-4">
        @if ($post->exists)
            Update Post
        @else
            Create Post
        @endif
    </button>
</div>
</form>
