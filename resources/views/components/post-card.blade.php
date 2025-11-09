@props(['post'])

<div class="card mb-4 shadow-sm border-0 rounded-3 overflow-hidden">
    <div class="row g-0">

        <div class="col-md-4 d-flex align-items-center">
            <img src="{{ asset('images/' . $post->image) }}" 
                 class="img-fluid rounded-start" 
                 alt="{{ $post->title }}">
        </div>

        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">
                    <small class="text-muted">
                        {{ $post->published_at->format('d M Y') }} by: 
                        <a href="/writers/{{ $post->writer->slug }}" class="text-decoration-none">
                            {{ $post->writer->name }} ({{ $post->writer->specialty }})
                        </a>
                    </small>
                </p>
                <p class="card-text">{{ $post->excerpt }}</p>
                
                <a href="/posts/{{ $post->slug }}" class="btn btn-dark float-end">read more...</a>
            </div>
        </div>

    </div>
</div>