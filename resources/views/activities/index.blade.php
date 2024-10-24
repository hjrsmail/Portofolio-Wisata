@extends('layout.index')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4 text-center">Kegiatan-Kegiatan</h1>

        <!-- Form Pencarian -->
        <form action="{{ route('activities.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari kegiatan..."
                    value="{{ request()->input('search') }}">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form>

        <!-- Daftar Kegiatan -->
        @if ($activities->count() > 0)
            <div class="row g-4">
                @foreach ($activities as $activity)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm"> <!-- Card untuk setiap kegiatan -->
                            <div class="activity-img">
                                @if ($activity->image)
                                    <img src="{{ asset('storage/' . $activity->image) }}"
                                         class="card-img-top" alt="{{ $activity->title }}"
                                         style="height: 200px; object-fit: cover;">
                                @else
                                    <img src="/path/to/default-image.jpg" class="card-img-top" alt="Default Image"
                                         style="height: 200px; object-fit: cover;">
                                @endif
                            </div>
                            <div class="card-body d-flex flex-column"> <!-- Layout untuk konten card -->
                                <h5 class="card-title">{{ $activity->title }}</h5>
                                <p class="card-text">{{ Str::limit($activity->description, 100) }}</p>
                                <div class="mt-auto"> <!-- Tombol di bagian bawah card -->
                                    <a href="{{ route('activities.show', $activity->slug) }}" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $activities->links('pagination::bootstrap-4') }}
            </div>
        @else
            <p class="text-center">Tidak ada kegiatan ditemukan.</p>
        @endif

    </div>
@endsection
