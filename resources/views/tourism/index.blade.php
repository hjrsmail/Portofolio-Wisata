@extends('layout.index')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Daftar Potensi Wisata</h1>
        
        <div class="row g-4">
            @foreach ($tourisms as $tourism)
                <div class="col-md-6 col-lg-4">
                    <div class="tourism-item bg-light rounded p-4">
                        <img src="{{ asset('storage/' . $tourism->image) }}" class="img-fluid rounded mb-3" alt="{{ $tourism->title }}">
                        <h4 class="mb-3">{{ $tourism->title }}</h4>
                        <p class="text-dark">{{ Str::limit($tourism->description, 100, '...') }}</p>
                        <a href="{{ route('tourism.show', $tourism->slug) }}" class="btn btn-primary rounded-pill">Selengkapnya</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
