@extends('main')

@section('body')
<section class="container-fluid py-5 bg-light min-vh-100">
  {{-- ---------- Course Header ---------- --}}
  <div class="card shadow mb-4">
    <div class="card-body d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center gap-3">
      <div>
        <h1 class="h3 fw-bold text-dark mb-1">Introduction to Web Development</h1>
        <p class="small text-muted mb-2">
          Instructor: <span class="fw-semibold text-primary">Jane Doe</span>
        </p>
        <div class="d-flex align-items-center">
          <div class="text-warning me-2">★★★★★</div>
          <span class="small text-muted">(4.8/5 from 1,240 ratings)</span>
        </div>
      </div>

      <div class="w-100 w-lg-33">
        <p class="small text-muted mb-1">Course Progress</p>
        <div class="progress" style="height:0.6rem">
          <div class="progress-bar bg-primary" role="progressbar"
               style="width:65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p class="small text-end text-primary fw-semibold mt-1">65 % completed</p>
      </div>
    </div>
  </div>

  {{-- ---------- Main Content ---------- --}}
  <div class="row g-4">
    {{-- Video / Lesson --}}
    <div class="col-lg-9">
      <div class="card shadow">
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/dD2EISBDjWM"
                  title="Course video" allowfullscreen></iframe>
        </div>
        <div class="card-body">
          <h2 class="h5 fw-semibold text-dark mb-2">
            Lesson 5: Responsive Layout with Tailwind
          </h2>
          <p class="text-muted mb-0">
            In this lesson, we cover how to build responsive layouts using grid and flexbox utilities, breakpoints, spacing, and alignment helpers.
          </p>
        </div>
      </div>
    </div>

    {{-- Sidebar --}}
    <div class="col-lg-3">
      <div class="card shadow">
        <div class="card-body">
          <h3 class="h6 fw-semibold text-dark mb-3">Course Content</h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex align-items-start">
              <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
              <span class="small fw-medium">Lesson 1: HTML Basics</span>
            </li>
            <li class="list-group-item d-flex align-items-start">
              <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
              <span class="small fw-medium">Lesson 2: CSS Fundamentals</span>
            </li>
            <li class="list-group-item d-flex align-items-start">
              <span class="spinner-grow spinner-grow-sm text-warning me-2 mt-1" role="status"></span>
              <span class="small fw-semibold text-primary">Lesson 5: Responsive Layout (Current)</span>
            </li>
            <li class="list-group-item d-flex align-items-start">
              <i class="bi bi-dot text-secondary me-2 mt-1"></i>
              <span class="small text-muted">Lesson 6: Flexbox in Depth</span>
            </li>
            <li class="list-group-item d-flex align-items-start">
              <i class="bi bi-dot text-secondary me-2 mt-1"></i>
              <span class="small text-muted">Lesson 7: Grid Systems</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
