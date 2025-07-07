@extends('coursemain')

@section('body')

<div class="container py-5">
    <h2 class="mb-4 text-light fw-bold">DAFTAR KURSUS</h2>

    <div class="card shadow-sm" style="border-radius:8px;">

        <div class="card-body">

            <div class="table-responsive" >
                <table class="table table-hover align-middle" >
                    <thead class="table">
                        <tr>
                            <th style="width: 4%">#</th>
                            <th>Judul Kursus</th>
                            <th>Deskripsi Singkat</th>
                            <th style="width: 12%">Durasi</th>
                            <th style="width: 15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Course 1 --}}
                        <tr>
                            <td>1</td>
                            <td>Pengenalan SPINDO</td>
                            <td>Sejarah, profil perusahaan, dan overview proses bisnis utama.</td>
                            <td>45 menit</td>
                            <td>
                                <a href="{{ route('coursehome') }}" class="btn btn-sm btn-danger">
                                    Masuk Kursus
                                </a>
                            </td>
                        </tr>
        
                        {{-- Course 2 --}}
                        <tr>
                            <td>2</td>
                            <td>Keselamatan Kerja (K3)</td>
                            <td>Penerapan standar K3 di lingkungan pabrik SPINDO.</td>
                            <td>30 menit</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger">Masuk Kursus</a>
                            </td>
                        </tr>
        
                        {{-- Course 3 --}}
                        <tr>
                            <td>3</td>
                            <td>Proses Produksi Pipa Baja</td>
                            <td>Detail alur produksi dan pengendalian kualitas pipa baja.</td>
                            <td>60 menit</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger">Masuk Kursus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection
