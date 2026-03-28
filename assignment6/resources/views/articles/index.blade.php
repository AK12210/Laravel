<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Articles</h1>

        @if(auth()->user()->isUser())
            <a href="{{ route('articles.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
                Create Article
            </a>
        @endif

        <div class="mt-4">
            @foreach($articles as $article)
                <div class="border p-4 mb-3 rounded">
                    <h2 class="text-xl font-semibold">{{ $article->title }}</h2>
                    <p class="mt-2">{{ $article->content }}</p>

                    <div class="mt-3 flex gap-2">
                        <a href="{{ route('articles.show', $article) }}" class="text-blue-600">View</a>

                        @can('update', $article)
                            <a href="{{ route('articles.edit', $article) }}" class="text-yellow-600">Edit</a>
                        @endcan

                        @can('delete', $article)
                            <form method="POST" action="{{ route('articles.destroy', $article) }}">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600">Delete</button>
                            </form>
                        @endcan
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
