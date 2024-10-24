<!-- Navbar & Hero Start -->
<div class="container-fluid sticky-top px-0">
    <div class="container px-0">
        <nav class="navbar navbar-expand-lg navbar-transparent bg-white py-3 px-4">
            <a href="/" class="navbar-brand p-0">
                <h1 class="text-dark m-0"><i class=""></i>Pulau Lae-Lae</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/') }}#home" class="nav-item nav-link">Home</a>
                    <a href="{{ url('/') }}#profile" class="nav-item nav-link">Profile</a>
                    <a href="{{ url('/') }}#potensi-wisata" class="nav-item nav-link">Potensi Wisata</a>
                    <a href="{{ url('/') }}#kegiatan" class="nav-item nav-link">Kegiatan</a>
                    <a href="{{ url('/') }}#berita" class="nav-item nav-link">Berita</a>
                    <a href="{{ url('/') }}#galeri" class="nav-item nav-link">Galeri</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ url('/sambutan') }}" class="dropdown-item">Sambutan</a>
                            <a href="{{ url('/sejarah') }}" class="dropdown-item">Sejarah</a>
                            <a href="{{ url('/visimisi') }}" class="dropdown-item">Visi-Misi</a>
                            <a href="{{ url('/struktur-organisasi') }}" class="dropdown-item">Struktur Organisasi</a>
                        </div>
                    </div>
                    <a href="{{ url('/') }}#contact-us" class="nav-item nav-link">Contact Us</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar & Hero End -->
