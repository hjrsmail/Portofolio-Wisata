@extends('layout.index')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">{{ $tourism->title }}</h1>

        <div class="d-flex justify-content-center mb-4"> <!-- Wrapper untuk memusatkan gambar -->
            @if ($tourism->image)
                <img src="{{ asset('storage/' . $tourism->image) }}" class="img-fluid tourism-image"
                    style="max-height: 400px; object-fit: cover;" alt="{{ $tourism->title }}">
            @else
                <img src="/path/to/default-image.jpg" class="img-fluid tourism-image"
                    style="max-height: 400px; object-fit: cover;" alt="Default Image">
            @endif
        </div>

        <p style="text-align: justify">{!! linkify($tourism->description) !!}</p>

        <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Kembali</a>
    </div>
@endsection
