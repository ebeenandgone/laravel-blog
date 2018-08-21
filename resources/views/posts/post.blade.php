<div class="card mb-4">
    <div class="card-body">
        <h2 class="card-title">
            <a href="/posts/{{ $post->id }}">
                {{ $post->title }}
            </a>
         </h2>
        <p class="card-text">{{ $post->body }}</p>
    </div>
    <div class="card-footer text-muted">
        Posted on {{ $post->created_at->toFormattedDateString() }} by 
        <a href="#">Username Here</a>
    </div>
</div>