<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pulau Lae-Lae</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{ asset('img/logo.png') }}" rel="icon" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid topbar px-0 d-none d-lg-block">
        <div class="container px-0">
        </div>
    </div>
    <!-- Topbar End -->


    <x-navbar></x-navbar>



    <!-- Carousel Start -->
    <div id="home" class="header-carousel owl-carousel">
        <div class="header-carousel-item mx-auto">
            <div class="header-carousel-item-img-2">
                <img src="{{ asset ('img/Profile 2.jpg') }}" class="img-fluid w-100" alt="Image">
            </div>
            <div class="carousel-caption">
                <div class="carousel-caption-inner text-center p-3">
                    <h1 class="display-1 text-capitalize text-white mb-4">Selamat Datang di Website Wisata Pulau
                        Lae-Lae</h1>
                    <a class="btn btn-dark rounded-pill py-3 px-5 mb-4" href="#">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Profile Start -->
    <div id="profile" class="container-fluid profile py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('img/Profile 1.jpg') }}" class="img-fluid mb-4" alt="Gambar Kiri">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/Profile 3.jpg') }}" class="img-fluid mb-4" alt="Gambar Kanan">
                </div>
            </div>
            <div class="text-start mt-4">
                <p class="description" style="text-align: justify">Pulau Lae-lae secara administratif merupakan wilayah Kelurahan Lae-lae, Kecamatan
                    Ujung Pandang, Kota Makassar. Pulau yang terletak pesisir Selat Makassar, tepat di depan Pantai
                    Losari berjarak sekitar 1,3 KM dengan waktu tempuh selama lebih kurang 5 menit dari <a
                        href="https://maps.app.goo.gl/ynBqnJeg3jZP2hMt6">dermaga Kayu
                        Bangkoa</a> atau dari dermaga di <a href="https://maps.app.goo.gl/iAEb5TKystJhKz3QA">depan
                        benteng Fort Rotterdam</a> menggunakan ¬speedboat</p>

                <p class="description" style="text-align: justify">Dari aspek demografi, jumlah keseluruhan penduduk di Kelurahan Lae-lae tahun 2022
                    sebanyak 1.876 jiwa dengan jumlah penduduk laki-laki sebanyak 962 jiwa dan jumlah penduduk perempuan
                    sebanyak 914 jiwa, sementara jumlah Rumah Tangga sebanyak 426 KK. Penduduk tersebut tersebar ke
                    dalam 3 Rukun Warga (RW) dan 10 Rukun Tetangga (RT). . Mata pencaharian utama warganya adalah
                    nelayan, selain itu ada yang menjalankan usaha jual beli hasil perikanan, jasa penyeberangan, serta
                    sebagian kecil
                    lainnya bekerja pada sektor informal.</p>

                <p class="description" style="text-align: justify">Di Pulau Lae-Lae terdapat sarana pendidikan mulai dari Taman Kanak-kanak, Sekolah
                    Dasar hingga
                    Sekolah Menengah Pertama, yaitu SD dan SMP Negeri 41 Satu Atap Kota Makassar. Sarana olahraga
                    berupa lapangan sepakbola dan lapangan bulutangkis yang juga berfungsi sebagai Gedung
                    Serbaguna. Sarana ibadah, yaitu Masjid Miftahul Bahri yang dapat menampung hingga lebih kurang
                    400 jamaah. Fasilitas lain yang terdapat di Pulau Lae-Lae adalah jaringan listrik yang berfungsi 24
                    jam
                    berkat hadirnya Pembangkit Listrik Tenaga Diesel (PLTD) yang dikelola oleh PLN, serta air bersih
                    yang
                    terdapat di semua RT.</p>
            </div>
        </div>
    </div>
    <!-- Profile End -->


    <!-- Culinary Section Start -->
    <section id="culinary" class="py-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-4">Ragam Kuliner Pulau Lae-Lae</h1>
                <p class="lead">Nikmati berbagai kuliner khas yang menggugah selera.</p>
            </div>
            <div id="culinaryCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($culinaries->chunk(2) as $chunk)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <div class="row g-4">
                                @foreach ($chunk as $culinary)
                                    <div class="col-md-6">
                                        <div class="culinary-item bg-light rounded p-4">
                                            <img src="{{ asset('storage/' . $culinary->image) }}"
                                                class="img-fluid rounded mb-3" alt="{{ $culinary->name }}">
                                            <h4 class="mb-3">{{ $culinary->name }}</h4>
                                            <p class="text-dark" style="text-align: justify">{{ $culinary->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#culinaryCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#culinaryCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Culinary Section End -->


    <!-- Potensi Wisata Start -->
    <div id="potensi-wisata" class="container-fluid tourism py-5 mt-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-4">Potensi Wisata Pulau Lae-Lae</h1>
                <p class="lead">Jelajahi keindahan dan pesona Pulau Lae-Lae yang memikat.</p>
            </div>
            <div class="row g-4">
                @foreach ($tourisms as $tourism)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="tourism-item bg-light rounded p-4">
                            <img src="{{ asset('storage/' . $tourism->image) }}" class="img-fluid rounded mb-3"
                                alt="{{ $tourism->title }}">
                            <h4 class="mb-3">{{ $tourism->title }}</h4>
                            <p class="text-dark" >
                                {{ Str::limit($tourism->description, 100, '...') }}
                            </p>
                            <a href="{{ route('tourism.show', $tourism->slug) }}"
                                class="btn btn-primary rounded-pill">Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('tourism.index') }}" class="btn btn-outline-primary rounded-pill">
                    Lihat Selengkapnya
                </a>
            </div>
        </div>
    </div>
    <!-- Potensi Wisata End -->



    <!-- Activities Start -->
    <div id="kegiatan" class="container-fluid activities py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-4">Kegiatan-Kegiatan</h1>
            </div>
            <div class="row g-4 justify-content-center text-center">
                @foreach ($activities as $activity)
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="activity-item bg-light rounded">
                            <div class="activity-img">
                                <img src="{{ asset('storage/' . $activity->image) }}"
                                    class="img-fluid w-100 rounded-top" alt="{{ $activity->title }}"
                                    style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="activity-content text-center p-4" style="min-height: 300px;">
                                <div class="activity-content-inner">
                                    <a href="{{ route('activities.show', $activity->id) }}"
                                        class="h4 mb-4 d-inline-flex text-start">
                                        <i class="fas fa-calendar-alt fa-2x me-2"></i> {{ $activity->title }}
                                    </a>
                                    <p class="mb-4" style="text-align: justify">{{ Str::limit($activity->description, 150) }}</p>
                                    <a class="btn btn-light rounded-pill py-2 px-4"
                                        href="{{ route('activities.show', $activity->slug) }}">
                                        Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-auto">
                    <a class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s"
                        href="{{ route('activities.index') }}">
                        Lebih Banyak Kegiatan
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Activities End -->


    <!-- Berita Start -->
    <div id="berita" class="container-fluid news py-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-4">Berita Terkini</h1>
            </div>

            <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Indikator Carousel -->
                <div class="carousel-indicators">
                    @foreach ($news->chunk(3) as $index => $singleNewsChunk)
                        <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="{{ $index }}"
                            class="{{ $index === 0 ? 'active' : '' }}"
                            aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                            aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>

                <!-- Carousel Items -->
                <div class="carousel-inner">
                    @foreach ($news->chunk(3) as $key => $carouselItems)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <div class="row">
                                @foreach ($carouselItems as $item)
                                    <div class="col-md-4 mb-4 d-flex">
                                        <div class="news-item bg-light rounded p-4 flex-fill d-flex flex-column">
                                            <!-- Cek apakah gambar ada -->
                                            @if ($item->image)
                                                <img src="{{ asset('storage/' . $item->image) }}"
                                                    class="img-fluid rounded mb-3" alt="{{ $item->title }}"
                                                    style="height: 200px; object-fit: cover; width: 100%;">
                                            @else
                                                <img src="/path/to/default-image.jpg" class="img-fluid rounded mb-3"
                                                    alt="Default Image"
                                                    style="height: 200px; object-fit: cover; width: 100%;">
                                            @endif
                                            <h4 class="mb-3">{{ $item->title }}</h4>
                                            <p class="text-dark">{{ Str::limit($item->description, 100) }}</p>
                                            <a href="{{ route('news.show', $item->slug) }}"
                                                class="btn btn-primary rounded-pill mt-auto">Baca Selengkapnya</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Sebelumnya</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Berikutnya</span>
                </button>
            </div>

            <!-- Bagian Tombol "Lebih Banyak Berita" -->
            <div class="col-12 text-center mt-4">
                <a class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s"
                    href="{{ route('news.index') }}">Lebih Banyak Berita</a>
            </div>

        </div>
    </div>

    <!-- Berita End -->



    <!-- Galeri Start -->
    <div id="galeri" class="container-fluid gallery py-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-4">Galeri Pulau Lae-Lae</h1>
                <p class="lead">Jelajahi keindahan Pulau Lae-Lae melalui galeri foto kami.</p>
            </div>
            <div class="row g-4">
                @foreach ($galeries->take(6) as $gallery)
                    <!-- Mengambil hanya 6 gambar -->
                    <div class="col-md-6 col-lg-4">
                        <div class="gallery-item rounded overflow-hidden position-relative">
                            <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid gallery-image"
                                alt="{{ $gallery->title }}">
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Tautan ke halaman selanjutnya -->
            <div class="text-center mt-4">
                <a href="{{ route('galeri.showAll') }}" class="btn btn-outline-primary rounded-pill">Explore More</a>
            </div>
        </div>
    </div>
    <!-- Galeri End -->



    <!-- Peta Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <h1 class="display-4 text-center mb-4">Info Grafis</h1>
            <p class="lead text-center">Menampilkan Peta Pulau Lae-Lae</p>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="map-container"
                        style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15895.160165975542!2d119.38164465000787!3d-5.137478445824304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf02c9a7da0d4b%3A0x3b0646241c21e465!2sPulau%20Laelae!5e0!3m2!1sid!2sid!4v1728536851176!5m2!1sid!2sid"
                            width="1000" height="450"
                            style="border:0; position: absolute; top: 0; left: 0; width: 100%; height: 70%;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Peta End -->


    <x-footer></x-footer>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.querySelector('input[type="search"]');

            searchInput.addEventListener('keydown', function(event) {
                if (event.key === 'Enter') {
                    event.preventDefault(); // Mencegah aksi default
                    performSearch(searchInput.value);
                }
            });
        });

        function performSearch(keyword) {
            // Lakukan pencarian berdasarkan keyword
            alert('Searching for: ' + keyword);
            // Anda bisa mengganti alert dengan logika pencarian yang sesuai (misalnya mengarahkan ke halaman hasil pencarian)
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('.nav-link');
            const currentHash = window.location.hash || '#home'; // Atur default hash jika tidak ada

            // Tambahkan kelas aktif ke link berdasarkan hash saat ini
            links.forEach(link => {
                if (link.getAttribute('href') === currentHash) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });

            // Update kelas aktif saat hash berubah
            window.addEventListener('hashchange', function() {
                const newHash = window.location.hash;

                links.forEach(link => {
                    if (link.getAttribute('href') === newHash) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            });
        });
    </script>


</body>

</html>
