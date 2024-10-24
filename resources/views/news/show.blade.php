@extends('layout.index')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">{{ $newsItem->title }}</h1>

        @if ($newsItem->image)
            <!-- Menampilkan gambar jika tersedia -->
            <img src="{{ asset('storage/' . $newsItem->image) }}" class="img-fluid mb-4" alt="{{ $newsItem->title }}">
        @else
            <!-- Gambar default jika tidak ada gambar -->
            <img src="{{ asset('images/default-image.jpg') }}" class="img-fluid mb-4" alt="Default Image">
        @endif

        <p style="text-align: justify">{!! linkify($newsItem->description) !!}</p>

        <!-- Tombol Kembali ke Indeks Berita -->
        <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Kembali</a>
    </div>
@endsection
