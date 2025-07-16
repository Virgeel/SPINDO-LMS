<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-2">
  <div class="container-fluid">
    
    {{-- Sidebar toggle (for mobile) --}}
    <button class="btn btn-outline-secondary d-xl-none me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
      <i class="fas fa-bars"></i>
    </button>

    {{-- Brand --}}
    <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('courseindex') }}">
      <img src="{{ asset('images/spindo.png') }}" alt="SPINDO Logo" width="50" height="50" class="me-2">
      <span class="fs-5">SPINDO LMS</span>
    </a>

    {{-- Collapse toggle for mobile --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Menu Items --}}
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto align-items-center">

        {{-- Main Links --}}
        <li class="nav-item">
          <a class="nav-link text-dark fw-semibold" href="{{ route('courseindex') }}">🏠 Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fw-semibold" href="{{ route('courseindex') }}">📘 Materi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fw-semibold" href="#">📄 Sertifikat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fw-semibold" href="#">❓ Bantuan</a>
        </li>

        {{-- Search Form (optional) --}}
        <li class="nav-item ms-3">
          <form class="d-flex" method="GET" action="{{ route('courseindex') }}">
            <input class="form-control form-control-sm" type="search" name="search" placeholder="Cari kursus..." aria-label="Search">
          </form>
        </li>

        {{-- Notification --}}
        <li class="nav-item ms-3">
          <a class="nav-link text-dark" href="#">
            <i class="fas fa-bell"></i>
          </a>
        </li>

        {{-- User Dropdown --}}
        <li class="nav-item dropdown ms-3">
          <a class="nav-link dropdown-toggle text-dark fw-semibold" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            👤 Akun
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="#">Profil</a></li>
            <li><a class="dropdown-item" href="#">Pengaturan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Keluar</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
