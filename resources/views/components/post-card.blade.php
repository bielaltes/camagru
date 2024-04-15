<x-card class="mb-4">
    <div class="mb-3 d-flex justify-content-between">
        <h2 class="h5 font-weight-medium">{{ $post->user->name }}</h2>
        <div class="text-secondary">
            {{ $post->location }}
        </div>
        <h2 class="h5 font-weight-medium">{{ $post->likes->count() }}</h2>

    </div>
    
    <div>
        <img src="{{ url('storage/posts/' . $post->img_path) }}" alt="Post image" class="img-fluid">
    </div>

    <div class = "mt-3">
        {{ $slot }}
    </div>
    
</x-card>