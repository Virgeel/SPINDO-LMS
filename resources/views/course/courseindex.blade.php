@extends('coursemain')

@section('body')

<div class="container py-5">
    <h2 class="mb-4 text-light fw-bold">📚 Daftar Kursus</h2>

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle text-sm">
                    <thead class="table text-center">
                        <tr>
                            <th>#</th>
                            <th>📖 Judul Kursus</th>
                            <th>📝 Deskripsi</th>
                            <th>⏱️ Durasi</th>
                            <th>🔗 Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- Course 1 --}}
                        <tr>
                            <td>1</td>
                            <td><strong>Pengenalan SPINDO</strong></td>
                            <td class="text-muted">Sejarah, profil perusahaan, dan overview proses bisnis utama.</td>
                            <td><span class="badge bg-primary">45 menit</span></td>
                            <td>
                                <a href="{{ route('coursehome') }}" class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-sign-in-alt"></i> Masuk Kursus
                                </a>
                            </td>
                        </tr>

                        {{-- Course 2 --}}
                        <tr>
                            <td>2</td>
                            <td><strong>Keselamatan Kerja (K3)</strong></td>
                            <td class="text-muted">Penerapan standar K3 di lingkungan pabrik SPINDO.</td>
                            <td><span class="badge bg-primary">30 menit</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-sign-in-alt"></i> Masuk Kursus
                                </a>
                            </td>
                        </tr>

                        {{-- Course 3 --}}
                        <tr>
                            <td>3</td>
                            <td><strong>Proses Produksi Pipa Baja</strong></td>
                            <td class="text-muted">Detail alur produksi dan pengendalian kualitas pipa baja.</td>
                            <td><span class="badge bg-primary">60 menit</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-sign-in-alt"></i> Masuk Kursus
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
