@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <article class="card shadow-sm border-0 p-4 rounded-3">
                <h1 class="mb-3">{{ $post->title }}</h1>
                
                <img src="{{ asset('images/' . $post->image) }}" 
                    class="img-fluid rounded-3 mb-3" 
                    alt="{{ $post->title }}">

                <p class="text-muted">
                    {{ $post->published_at->format('d M Y') }} by: 
                    <a href="/writers/{{ $post->writer->slug }}" class="text-decoration-none">{{ $post->writer->name }}</a>
                    in 
                    <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                </p>

                <hr>

                <div class="fs-5 mt-3">
                    {!! $post->body !!} </div>
            </article>

            <a href="javascript:history.back()" class="btn btn-secondary mt-4">
                &laquo; Go Back
            </a>
            </div>
    </div>
@endsection