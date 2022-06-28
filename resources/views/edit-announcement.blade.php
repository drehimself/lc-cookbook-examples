<x-app-layout>
    @if (session('success_message'))
        <div class="bg-green-200 text-green-800 px-4 py-2">
            {{ session('success_message') }}
        </div>
    @endif
    <div class="bg-white rounded-md border my-8 px-6 py-6">
        <div>
            <h2 class="text-2xl font-semibold">Edit Announcement</h2>
            <form action="/announcement/update" method="POST" class="max-w-2xl mt-4" id="updateAnnouncement">
                @csrf
                @method('PATCH')
                <div>
                    <h4 class="font-semibold">Is Active?</h4>
                    <div class="mt-2">
                        <div>
                            <input type="radio" name="isActive" id="isActiveYes" value="1" @checked($announcement->isActive) required>
                            <label for="isActiveYes">Yes</label>
                        </div>
                        <div>
                            <input type="radio" name="isActive" id="isActiveNo" value="0" @checked(!$announcement->isActive) required>
                            <label for="isActiveNo">No</label>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <label for="bannerText" class="font-semibold block">Banner Text</label>
                    <input type="text" name="bannerText" id="bannerText" class="border border-gray-400 rounded w-full px-2 py-2 mt-2" value="{{ $announcement->bannerText }}" required>
                </div>

                <div class="mt-4">
                    <label for="bannerColor" class="font-semibold block">Banner Color</label>
                    <input type="color" name="bannerColor" id="bannerColor" value="{{ $announcement->bannerColor }}" required>
                </div>

                <div class="mt-4">
                    <label for="titleText" class="font-semibold block">Title Text</label>
                    <input type="text" name="titleText" id="titleText" class="border border-gray-400 rounded w-full px-2 py-2 mt-2" value="{{ $announcement->titleText }}" required>
                </div>

                <div class="mt-4">
                    <label for="titleColor" class="font-semibold block">Title Color</label>
                    <input type="color" name="titleColor" id="titleColor" value="{{ $announcement->titleColor }}" required>
                </div>

                <div class="mt-4">
                    <label for="content" class="font-semibold block">Content</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="hidden border border-gray-400 rounded w-full px-2 py-2 mt-2" required>{{ $announcement->content }}</textarea>
                    <div id="editor">
                        {!! $announcement->content !!}
                    </div>
                </div>

                <div class="mt-4">
                    <label for="buttonText" class="font-semibold block">Button Text</label>
                    <input type="text" name="buttonText" id="buttonText" class="border border-gray-400 rounded w-full px-2 py-2 mt-2" value="{{ $announcement->buttonText }}" required>
                </div>

                <div class="mt-4">
                    <label for="buttonColor" class="font-semibold block">Button Color</label>
                    <input type="color" name="buttonColor" id="buttonColor" value="{{ $announcement->buttonColor }}" required>
                </div>

                <div class="mt-4">
                    <label for="buttonLink" class="font-semibold block">Button Link</label>
                    <input type="url" name="buttonLink" id="buttonLink" class="border border-gray-400 rounded w-full px-2 py-2 mt-2" value="{{ $announcement->buttonLink }}" required>
                </div>

                <div class="mt-8">
                    <button type="submit" class="bg-blue-600 rounded inline-block text-white px-4 py-4">Update Announcement</button>
                </div>
            </form>
        </div>
    </div>
    @push('scripts')
        <!-- Include the Quill library -->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <!-- Initialize Quill editor -->
        <script>
            var quill = new Quill('#editor', {
                theme: 'snow',
                placeholder: 'Enter announcement details',
            });

            const form = document.querySelector('#updateAnnouncement');

            form.addEventListener('submit', e => {
                e.preventDefault();

                const quillEditor = document.querySelector('#editor');
                const html = quillEditor.children[0].innerHTML;

                document.querySelector('#content').value = html;

                form.submit();
            })
        </script>
    @endpush
</x-app-layout>
