<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-0 rounded-3 shadow-sm" id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1">

    

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

      <!-- Search input -->
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <span class="input-group-text text-body">
            <i class="fas fa-search" aria-hidden="true"></i>
          </span>
          <input type="text" class="form-control" placeholder="Type here...">
        </div>
      </div>

      <!-- Right nav -->
      <ul class="navbar-nav justify-content-end align-items-center">

        <!-- Sign In -->
        <li class="nav-item d-flex align-items-center">
          <a href="#" class="nav-link text-white fw-bold px-0 d-flex align-items-center">
            <i class="fa fa-user me-1"></i>
            <span class="d-none d-sm-inline">Sign In</span>
          </a>
        </li>

        <!-- Sidebar toggler (visible on smaller screens) -->
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="#" class="nav-link text-white p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <span class="sidenav-toggler-line bg-white"></span>
              <span class="sidenav-toggler-line bg-white"></span>
              <span class="sidenav-toggler-line bg-white"></span>
            </div>
          </a>
        </li>

        <!-- Settings icon -->
        <li class="nav-item px-3 d-flex align-items-center">
          <a href="#" class="nav-link text-white p-0">
            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
          </a>
        </li>

        <!-- Notifications dropdown -->
        <li class="nav-item dropdown pe-2 d-flex align-items-center">
          <a class="nav-link text-white p-0" href="#" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-bell cursor-pointer"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton" style="min-width: 300px;">

            <li class="mb-2">
              <a class="dropdown-item rounded-3" href="#">
                <div class="d-flex py-1">
                  <div class="me-3 my-auto">
                    <img src="../assets/img/team-2.jpg" class="rounded-circle avatar avatar-sm" alt="avatar">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm fw-bold mb-1">New message from Laur</h6>
                    <p class="text-xs text-secondary mb-0">
                      <i class="fa fa-clock me-1"></i>13 minutes ago
                    </p>
                  </div>
                </div>
              </a>
            </li>

            <li class="mb-2">
              <a class="dropdown-item rounded-3" href="#">
                <div class="d-flex py-1">
                  <div class="me-3 my-auto">
                    <img src="../assets/img/small-logos/logo-spotify.svg" class="rounded-circle avatar avatar-sm bg-dark" alt="spotify">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm fw-normal mb-1">New album by Travis Scott</h6>
                    <p class="text-xs text-secondary mb-0">
                      <i class="fa fa-clock me-1"></i>1 day
                    </p>
                  </div>
                </div>
              </a>
            </li>

            <li>
              <a class="dropdown-item rounded-3" href="#">
                <div class="d-flex py-1">
                  <div class="avatar avatar-sm bg-secondary text-white me-3 my-auto d-flex align-items-center justify-content-center rounded-circle" style="width: 2rem; height: 2rem;">
                    <!-- You can replace this SVG with an icon or image -->
                    <svg width="12" height="12" viewBox="0 0 43 36" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path fill="#fff" d="M43 10.7482V3.58333C43 1.60354 41.3965 0 39.4167 0H3.58333C1.60354 0 0 1.60354 0 3.58333V10.7482H43Z" opacity="0.59"/>
                      <path fill="#fff" d="M0 16.125V32.25C0 34.2298 1.60354 35.8333 3.58333 35.8333H39.4167C41.3965 35.8333 43 34.2298 43 32.25V16.125H0ZM19.7083 26.875H7.16667V23.2917H19.7083V26.875ZM35.8333 26.875H28.6667V23.2917H35.8333V26.875Z"/>
                    </svg>
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm fw-normal mb-1">Payment successfully completed</h6>
                    <p class="text-xs text-secondary mb-0">
                      <i class="fa fa-clock me-1"></i>2 days
                    </p>
                  </div>
                </div>
              </a>
            </li>

          </ul>
        </li>

      </ul>
    </div>

  </div>
</nav>
<!-- End Navbar -->
