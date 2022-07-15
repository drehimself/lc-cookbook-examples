<x-app-layout>
    <div class="bg-white rounded-md border my-8 px-6 py-6">
        <div>
            <h2 class="text-2xl font-semibold">Edit Post</h2>

            @if (session('success_message'))
                <div class="bg-green-200 text-green-800 px-4 py-2">
                    {{ session('success_message') }}
                </div>
            @endif

            <div class="mt-4">
                <x-post-form :post="$post" />
            </div>
        </div>
    </div>
</x-app-layout>
