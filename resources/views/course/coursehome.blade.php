@extends('coursemain')

@section('body')

<div class="px-4 py-4" style="min-height: 80vh;">

    <div class="d-flex">

        {{-- ✅ Course Module Table --}}
        <div class="card shadow-sm border-0 rounded-2 col-lg-8">
            <div class="card-body p-4">

                <h4 class="mb-3 fw-semibold" style="color: #8B0000;">📂 Daftar Modul</h4>

                <div class="table-responsive">
                    <table class="table table-borderless align-middle">
                        <thead class="text-muted small">
                            <tr>
                                <th style="width: 5%;">#</th>
                                <th style="width: 45%;">Modul</th>
                                <th style="width: 20%;">Status</th>
                                <th style="width: 30%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 0.95rem;">
                            <tr>
                                <td class="text-muted">1</td>
                                <td><i class="fas fa-file-alt text-danger me-2"></i><strong>Pre-Test</strong></td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td>
                                    <a href="{{ route('coursepretest') }}" class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="fas fa-play"></i> Mulai
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">2</td>
                                <td><i class="fas fa-play-circle text-danger me-2"></i><strong>Materi 1: Pengantar SPINDO</strong></td>
                                <td><span class="badge bg-warning text-dark">Sedang Berjalan</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="fas fa-redo"></i> Ulangi
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">3</td>
                                <td><i class="fas fa-lock text-muted me-2"></i><strong>Materi 2: Struktur Organisasi</strong></td>
                                <td><span class="badge bg-secondary">Terkunci</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="fas fa-arrow-right"></i> Lanjut
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">4</td>
                                <td><i class="fas fa-lock text-muted me-2"></i><strong>Materi 3: Proses Produksi</strong></td>
                                <td><span class="badge bg-secondary">Terkunci</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-secondary rounded-pill" disabled>
                                        <i class="fas fa-ban"></i> Belum Tersedia
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">5</td>
                                <td><i class="fas fa-lock text-muted me-2"></i><strong>Post-Test</strong></td>
                                <td><span class="badge bg-secondary">Terkunci</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-secondary rounded-pill" disabled>
                                        <i class="fas fa-ban"></i> Belum Tersedia
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="card-footer bg-white border-0 text-end">
                <a href="#" class="btn btn-danger rounded-pill fw-semibold">
                    <i class="fas fa-arrow-right me-1"></i> Lanjutkan Belajar
                </a>
            </div>
        </div>



        {{-- ✅ Course Overview --}}
        <div class="mb-5 p-3 col">
            <h2 class="fw-bolder" style="font-size: 2rem; color: #8B0000;">📘 {{ $course->name ?? 'Pengenalan SPINDO' }}</h2>
            <p class="text-muted" style="font-size: 1rem;">
                Pelajari sejarah, struktur organisasi, dan proses produksi di SPINDO.
            </p>

            <img src="https://lirp.cdn-website.com/2f73b385/dms3rep/multi/opt/ImageSlide-1-640w.jpg" 
                class="img-fluid rounded shadow mb-4" 
                style="max-height: 320px; object-fit: cover;" 
                alt="Course Cover">
        </div>

        

    </div>
    
    

    
</div>

@endsection
