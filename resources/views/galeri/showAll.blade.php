@extends('layout.index')

@section('content')
<div id="galeri" class="container-fluid gallery py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-4">Galeri Pulau Lae-Lae</h1>
            <p class="lead">Jelajahi keindahan Pulau Lae-Lae melalui galeri foto kami.</p>
        </div>
        <div class="row g-4">
            @foreach ($galeries as $gallery)
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item rounded overflow-hidden position-relative">
                        <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid gallery-image"
                            alt="{{ $gallery->title }}">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
