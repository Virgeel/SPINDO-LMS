<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">
    <div class="container-fluid">
        {{-- Sidebar toggle (opsional, jika ingin sidebar collapsible) --}}
        <button class="btn btn-outline-secondary d-xl-none me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
            <i class="fas fa-bars"></i>
        </button>

        {{-- Brand --}}
        <a class="navbar-brand fw-bold" href="{{ route('courseindex') }}">
            <img src="{{ asset('images/spindo.png') }}" alt="SPINDO Logo" width="26" height="26" class="d-inline-block align-text-top me-2">
            SPINDO LMS
        </a>

        {{-- Optional right side items --}}
        <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item me-3">
                <a class="nav-link text-dark" href="#">
                    <i class="fas fa-bell"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user "></i> <span class="ms-1 d-none d-sm-inline">Akun</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><a class="dropdown-item" href="#">Keluar</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
