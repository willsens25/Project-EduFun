@extends('layouts.main')

@section('container')
    <h2 class="mb-4">{{ $category_name }}</h2>

    @if ($posts->count())
        @foreach ($posts as $post)
            <x-post-card :post="$post" />
        @endforeach
    @else
        <p class="text-center fs-4">No posts found in this category.</p>
    @endif
@endsection