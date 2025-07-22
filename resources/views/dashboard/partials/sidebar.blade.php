<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0  fixed-start " id="sidenav-main" style="border-radius: 0;">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0 text-center" href="{{ route('dashboard') }}">
      <img src="{{ asset('images/spindo.png') }}" style="width: 3rem" class="navbar-brand-img" alt="main_logo"><br>
      <span class="ms-1 font-weight-bold">SPINDO LMS</span>
    </a>
  </div>

  <hr class="horizontal dark mt-0">

  <div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
          <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-tv text-dark text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('dashboard.course') ? 'active' : '' }}" href="{{ route('dashboard.course') }}">
          <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-book text-dark text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Course</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('dashboard.category') ? 'active' : '' }}" href="{{ route('dashboard.category') }}">
          <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-layer-group text-dark text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Category</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('dashboard.approval') ? 'active' : '' }}" href="{{ route('dashboard.approval') }}">
          <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-thumbs-up text-dark text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Approval</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-trophy text-dark text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Scoreboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.user') }}">
          <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-users text-dark text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">User</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.jobposition') }}">
          <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-briefcase text-dark text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Job Cluster</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard.questionnaire')}}">
          <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-folder-open text-dark text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Evaluasi Level 1</span>
        </a>
      </li>

      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account Pages</h6>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-user-circle text-dark text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-sign-out-alt text-dark text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Logout</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
