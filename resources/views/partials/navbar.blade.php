
    <!-- awal navbar -->
    <nav class="navbar navbar-expand-lg bg-opacity-25 position-fixed w-100" style="z-index: 99;">
      <div class="container border-bottom border-light border-opacity-25 pb-3">
        <div class="logo-navbar pt-3">
          <a class="navbar-brand fw-bold fs-4 text-light" href="#">Desa Kawali </a>
          <p class="text fw-semibold text-light title">Layanan desa kawali</p>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""><i class="bi bi-list text-light fs-2"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-lg-0 ms-auto fw-semibold">
            <li class="nav-item">
              <a class="nav-link {{ ( $title === 'Home') ? 'link-active' : '' }} text-light" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  {{ ( $title === 'Berita') ? 'link-active' : '' }} text-light" aria-current="page" href="/berita">Berita</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Layanan </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Surat Pengantar Nikah</a></li>
                <li><a class="dropdown-item" href="#">Surat Ketrangan</a></li>
                <li><a class="dropdown-item" href="#">Surat Info</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ( $title === 'Pemerintahan') ? 'link-active' : '' }} text-light" aria-current="page" href="/pemerintah">Pemerintahan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ( $title === 'Info Grafis') ? 'link-active' : '' }} text-light" aria-current="page" href="/infografis">Infografis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ( $title === 'Tentang') ? 'link-active' : '' }} text-light" aria-current="page" href="/tentang">Tentang</a>
            </li>
          </ul>
          <button type="button" class="btn btn-primary ps-4 pe-4 rounded-pill border-0 login" style="background-color: #a72185">Login</button>
        </div>
      </div>
    </nav>
    <!-- akhir navabr -->

  
