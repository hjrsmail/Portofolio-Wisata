@extends('layout.index')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">{{ $activity->title }}</h1>

        @if ($activity->image)
            <img src="{{ asset('storage/' . $activity->image) }}" class="img-fluid d-block mx-auto mb-4"
                alt="{{ $activity->title }}">
        @else
            <img src="/path/to/default-image.jpg" class="img-fluid  mb-4" alt="Default Image">
        @endif

        <p style="text-align: justify">{!! linkify($activity->description) !!}</p>


        <!-- Tombol Kembali ke Halaman Sebelumnya -->
        <div class="text-center mt-4">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection
