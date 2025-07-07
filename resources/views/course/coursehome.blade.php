@extends('coursemain')

@section('body')

<div class="container py-3">
    <h2 class="mb-4 text-light fw-bold">COURSE 1</h2>

    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm" style="border-radius:8px;">
                <div class="card-body">
                    <img src="https://lirp.cdn-website.com/2f73b385/dms3rep/multi/opt/ImageSlide-1-640w.jpg" class="rounded my-3">
                    <h4 class="card-title mb-3 ">Apa itu SPINDO?</h4>
                    <p class="card-text ">Pelajari dasar-dasar mengenai SPINDO, mulai dari sejarah, struktur organisasi, hingga proses produksi dan evaluasi.</p>
                    

                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table">
                                <tr>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pre-Test</td>
                                    <td><span class="badge bg-success">Selesai</span></td>
                                    <td><a href="{{route('coursepretest')}}" class="btn btn-sm btn-outline-secondary">Mulai</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Materi 1: Pengantar SPINDO</td>
                                                                        <td><span class="badge bg-warning text-dark">Sedang Berjalan</span></td>

                                    <td><button class="btn btn-sm btn-outline-success">Ulangi</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Materi 2: Struktur Organisasi</td>
                                                                        <td><span class="badge bg-secondary">Terkunci</span></td>

                                    <td><button class="btn btn-sm btn-outline-primary">Lanjut</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Materi 3: Proses Produksi</td>
                                                                        <td><span class="badge bg-secondary">Terkunci</span></td>

                                    <td><button class="btn btn-sm btn-outline-secondary" disabled>Belum Tersedia</button></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Post-Test</td>
                                                                        <td><span class="badge bg-secondary">Terkunci</span></td>

                                    <td><button class="btn btn-sm btn-outline-secondary" disabled>Belum Tersedia</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-end bg-white border-top-0">
                    <a href="#" class="btn btn-primary">Lanjutkan Belajar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
