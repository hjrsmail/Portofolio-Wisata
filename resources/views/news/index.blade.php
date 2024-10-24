@extends('layout.berita')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Daftar Berita</h1>

        <!-- Form Pencarian -->
        <form action="{{ route('news.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari berita..."
                    value="{{ request()->input('search') }}">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form>

        <!-- Daftar Berita -->
        @if ($news->count() > 0)
            <div class="row">
                @foreach ($news as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm"> <!-- Menambahkan h-100 untuk membuat card memiliki tinggi yang sama -->
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                            @else
                                <img src="/path/to/default-image.jpg" class="card-img-top" alt="Default Image">
                            @endif
                            <div class="card-body d-flex flex-column"> <!-- Menambahkan flex-column untuk layout card-body -->
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ Str::limit($item->description, 100) }}</p>
                                <div class="mt-auto"> <!-- Mengatur tombol di bagian bawah card -->
                                    <a href="{{ route('news.show', $item->slug) }}" class="btn btn-primary">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-3">
                {{ $news->links('pagination::bootstrap-4') }}
            </div>
        @else
            <p>Tidak ada berita ditemukan.</p>
        @endif
    </div>
@endsection
