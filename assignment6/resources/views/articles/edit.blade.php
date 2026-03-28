<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Edit Article</h1>

        <form method="POST" action="{{ route('articles.update', $article) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label>Title</label>
                <input type="text" name="title" value="{{ $article->title }}" class="border w-full p-2">
                @error('title')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label>Content</label>
                <textarea name="content" class="border w-full p-2">{{ $article->content }}</textarea>
                @error('content')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <button class="bg-yellow-500 text-white px-4 py-2 rounded">
                Update
            </button>
        </form>
    </div>
</x-app-layout>
