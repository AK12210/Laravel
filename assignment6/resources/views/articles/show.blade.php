<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold">{{ $article->title }}</h1>

        <p class="mt-4">{{ $article->content }}</p>

        <div class="mt-4">
            <a href="{{ route('articles.index') }}" class="text-blue-600">Back</a>
        </div>
    </div>
</x-app-layout>
