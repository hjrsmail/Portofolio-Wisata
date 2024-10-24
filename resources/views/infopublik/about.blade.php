<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pulau Lae-Lae</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

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

    <style>
        html,
        body {
            height: 100%;
            /* Agar HTML dan body mengambil tinggi 100% dari viewport */
            margin: 0;
            padding: 0;
        }

        .content section {
            padding: 60px 0;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        img {
            object-fit: cover;
            max-height: 400px;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <x-navbar></x-navbar>

        <div class="content">
            <!-- Sambutan -->
            <section id="sambutan" class="py-5 mb-1 bg-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <h2 class="mb-4 text-primary fw-bold">Sambutan</h2>
                            <p class="text-muted" style="text-align: justify">
                                Selamat datang di Pulau Lae-Lae, pulau yang indah dan sejuk dengan lingkungan alam yang
                                bersih
                                serta bebas polusi. Di sini Anda bisa menemukan suasana pedesaan yang asri di tengah
                                kota,
                                sambil menikmati senyum ramah warga setempat dan aneka kuliner khas.
                            </p>
                            <p class="text-muted" style="text-align: justify">
                                Kelompok Sadar Wisata (Pokdarwis) Pulau Lae-Lae berupaya memperkenalkan potensi wisata
                                kami kepada
                                publik, baik wisatawan lokal maupun internasional. Upaya ini kami wujudkan melalui
                                website ini
                                dengan dukungan dari Tim Pemberdayaan Masyarakat Universitas Negeri Makassar,
                                melalui Program Kemitraan Masyarakat (PKM) yang didanai oleh Direktorat Riset,
                                Teknologi,
                                dan Pemberdayaan Masyarakat (DRTPM) Kemendikbud Ristek RI 2024.
                            </p>
                            <p class="text-muted" style="text-align: justify">
                                Kami berharap informasi yang tersedia di website ini memudahkan Anda bersama keluarga,
                                teman, dan
                                kolega dalam merencanakan kunjungan ke Pulau Lae-Lae.
                            </p>
                            <h5 class="fw-bold mt-4 text-secondary">Salam hangat,</h5>
                            <p class="text-muted mb-0 fw-bold">Ketua Pokdarwis Pulau Lae-Lae</p>
                            <p class="lead text-muted mt-5 fw-bold">SAHAKA BELLA</p>

                        </div>
                        <div class="col-lg-6 d-flex justify-content-center">
                            <div class="rounded-3 shadow-lg overflow-hidden" style="background-color: transparent;">
                                <img src="{{ asset('img/ketua.jpg') }}" class="img-fluid"
                                    style="max-width: 400px; height: auto;" alt="Sambutan">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <x-footer></x-footer>
    </div>

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
