@extends('coursemain')

@section('body')

<div class="container py-4">
    <h2 class="text-light fw-bold mb-2">📘 Course 1: Pengenalan SPINDO</h2>
    <p class="text-light mb-4">Pelajari sejarah, struktur organisasi, dan proses produksi di SPINDO.</p>

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body">

            <img src="https://lirp.cdn-website.com/2f73b385/dms3rep/multi/opt/ImageSlide-1-640w.jpg" 
                 class="img-fluid rounded shadow mb-4" alt="Course Cover">

            <h4 class="card-title">Apa itu SPINDO?</h4>
            <p class="card-text text-muted">
                Pelajari dasar-dasar mengenai SPINDO, mulai dari sejarah, struktur organisasi, hingga proses produksi dan evaluasi.
            </p>

            <div class="table-responsive mt-4">
                <table class="table table-hover align-middle text-sm">
                    <thead class="table-light">
                        <tr class="text-center">
                            <th>#</th>
                            <th>Modul</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><i class="fas fa-file-alt me-1 text-secondary"></i><strong> Pre-Test</strong></td>
                            <td><span class="badge bg-success">Selesai</span></td>
                            <td>
                                <a href="{{route('coursepretest')}}" class="btn btn-sm btn-outline-success">
                                    <i class="fas fa-play"></i> Mulai
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><i class="fas fa-play-circle me-1 text-secondary"></i><strong> Materi 1: Pengantar SPINDO</strong></td>
                            <td><span class="badge bg-warning text-dark">Sedang Berjalan</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-redo"></i> Ulangi
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><i class="fas fa-lock me-1 text-muted"></i><strong> Materi 2: Struktur Organisasi</strong></td>
                            <td><span class="badge bg-secondary">Terkunci</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-arrow-right"></i> Lanjut
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><i class="fas fa-lock me-1 text-muted"></i><strong> Materi 3: Proses Produksi</strong></td>
                            <td><span class="badge bg-secondary">Terkunci</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary" disabled>
                                    <i class="fas fa-ban"></i> Belum Tersedia
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><i class="fas fa-lock me-1 text-muted"></i><strong> Post-Test</strong></td>
                            <td><span class="badge bg-secondary">Terkunci</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary" disabled>
                                    <i class="fas fa-ban"></i> Belum Tersedia
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer bg-white border-0 text-end">
            <a href="#" class="btn btn-primary">
                <i class="fas fa-arrow-right"></i> Lanjutkan Belajar
            </a>
        </div>
    </div>
</div>

@endsection
