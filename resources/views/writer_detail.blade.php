@extends('layouts.main')

@section('container')
    <div class="row mb-4 align-items-center">
        <div class="col-md-2 text-center">
             <img src="{{ asset('images/' . $writer->image) }}" 
                 class="rounded-circle img-thumbnail w-100" 
                alt="{{ $writer->name }}">
        </div>
        <div class="col-md-10">
            <h2>{{ $writer->name }}</h2>
            <p class="text-muted fs-5">{{ $writer->specialty }}</p>
        </div>
    </div>

    <hr>
    <h3 class="mb-3">Articles by {{ $writer->name }}:</h3>

    @if ($posts->count())
        @foreach ($posts as $post)
            <x-post-card :post="$post" />
        @endforeach
    @else
        <p class="text-center fs-4">This writer hasn't posted anything yet.</p>
    @endif
@endsection