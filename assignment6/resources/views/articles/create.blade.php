<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Create Article</h1>

        <form method="POST" action="{{ route('articles.store') }}">
            @csrf

            <div class="mb-4">
                <label>Title</label>
                <input type="text" name="title" class="border w-full p-2">
                @error('title')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label>Content</label>
                <textarea name="content" class="border w-full p-2"></textarea>
                @error('content')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <button class="bg-green-500 text-white px-4 py-2 rounded">
                Save
            </button>
        </form>
    </div>
</x-app-layout>
