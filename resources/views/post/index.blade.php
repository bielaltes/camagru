<x-layout>
    @foreach ($posts as $post)
        <x-post-card class="mb-4" :$post>
            <div class="d-flex justify-content-center">
                <a href="{{ route('posts.show', $post) }}" class="rounded border bg-white px-3 py-2 text-decoration-none text-center text-sm font-weight-bold text-dark shadow-sm">
                    Show
                </a>
            </div>
        </x-post-card>
    @endforeach
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
    
</x-layout>