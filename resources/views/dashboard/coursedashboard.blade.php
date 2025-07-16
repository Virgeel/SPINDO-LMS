@extends('dashboardmain')

@section('body')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-xl-12 mb-4">
      <div class="card shadow-lg rounded-0">
        <div class="card-header bg-gradient-danger text-white d-flex justify-content-between align-items-center rounded-0">
          <h3 class="mb-0 text-white">List Materi</h3>
          <a href="{{ route('dashboard.createcourse') }}" class="btn btn-light text-danger fw-bold">
            <i class="fas fa-plus me-2"></i> Tambahkan Materi
          </a>
        </div>

        <div class="card-body">
          <div class="row g-4">
            @foreach($courses as $course)
              <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 rounded-0">
                  <img src="https://lirp.cdn-website.com/2f73b385/dms3rep/multi/opt/Water-Pipes-1-640w.jpg" class="card-img-top" style="height: 180px; object-fit: cover;" alt="Thumbnail">
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-dark fw-bold mb-2">{{ $course->name }}</h5>
                    <p class="card-text small text-muted mb-1">Durasi: 45 Menit</p>
                    <p class="card-text small text-muted">Dibuat oleh: {{ $course->user->name }}</p>
                    <div class="mt-auto d-flex justify-content-between">
                      <a href="{{ route('dashboard.content', ['id' => $course->id]) }}" class="btn btn-sm btn-success">
                        <i class="fas fa-eye me-1"></i> View
                      </a>
                      <a href="#" class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-edit me-1"></i> Modify
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection
