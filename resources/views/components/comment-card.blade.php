<x-card class="mb-4">
    <div class="mb-3 d-flex justify-content-between">
        <h2 class="h5 font-weight-medium">{{ $comment->user->name }}</h2>
    </div>

    <div>
        <p class="font-weight-small">{{ $comment->comment}}</p>
    </div>

    <div class = "mt-3">
        {{ $slot }}
    </div>
    
</x-card>