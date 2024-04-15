<x-layout>
    <x-post-card class="mb-4" :$post>
    </x-job-card>
    @forelse ($post->comments as $comment)
        <x-comment-card :$comment>
        </x-comment-card>
    @empty
        <x-card>
            <p>
                No comments yet.
            </p>
        </x-card>
    @endforelse
</x-layout>
