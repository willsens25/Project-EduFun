@extends('layouts.main')

@section('container')
    <h2 class="mb-4 text-center">Our Writers:</h2>

    <div class="row text-center justify-content-center">
        @foreach ($writers as $writer)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 p-3">
                    <img src="{{ asset('images/' . $writer->image) }}" 
                        class="rounded-circle img-thumbnail w-50 mx-auto" 
                        alt="{{ $writer->name }}">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/writers/{{ $writer->slug }}" class="text-decoration-none text-dark">
                                {{ $writer->name }}
                            </a>
                        </h5>
                        <p class="card-text text-muted">{{ $writer->specialty }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection