@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mb-4">
        <img src="{{ asset('images/home-banner.jpg') }}" 
        class="img-fluid rounded w-100" 
        alt="EduFun Banner" 
        style="max-height: 450px; object-fit: cover;">
    </div>

    <h2 class="mb-3">Artikel Terbaru</h2>

    @if ($latest_posts->count())
        @foreach ($latest_posts as $post)
            <x-post-card :post="$post" />
        @endforeach
    @else
        <p class="text-center fs-4">No posts found.</p>
    @endif

@endsection

