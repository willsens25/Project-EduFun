@extends('layouts.main')

@section('container')
    <h2 class="mb-4">Popular Articles</h2>

    @if ($popular_posts->count())
        @foreach ($popular_posts as $post)
            <x-post-card :post="$post" />
        @endforeach

        <div class="d-flex justify-content-center">
            {{ $popular_posts->links() }} </div>

    @else
        <p class="text-center fs-4">No popular posts found.</p>
    @endif
@endsection