@extends('coursemain')

@section('body')

<div class="py-2" style="min-height: 80vh;">

    <div class="d-flex">

        {{-- ✅ Course Module Table --}}
        <div class="border-0 rounded-2 col-lg-9 px-4">
            <div class="card-body p-4">

                <h3 class="mb-3 fw-semibold" style="color: #5f5f5f;"> Daftar Modul</h3>

                <div class="table-responsive">
                    <table class="table table-striped table-hover table-borderless align-middle">
                        <thead class="text-muted small">
                            <tr>
                                <th style="width: 5%;"></th>
                                <th style="width: 45%;">Modul</th>
                                <th style="width: 20%;">Status</th>
                                <th style="width: 30%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody  style="font-size: 0.95rem;">
                            @foreach($pretests as $test)
                            <tr>
                                <td class="text-muted">1</td>
                                <td><i class="fas fa-file-alt text-danger me-2"></i><strong>{{$test->name}}</strong></td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td>
                                    <a href="{{ route('coursepretest',['id'=>$course->id,'testId'=>$test->id]) }}" class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="fas fa-play"></i> Mulai
                                    </a>
                                </td>
                            </tr>



                            @endforeach
                            @foreach($contents as $content)

                            <tr>
                                <td class="text-muted">2</td>
                                <td><i class="fas fa-play-circle text-danger me-2"></i><strong>{{$content->name}}</strong></td>
                                <td><span class="badge bg-warning text-dark">Sedang Berjalan</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="fas fa-redo"></i> Ulangi
                                    </a>
                                </td>
                            </tr>

                            


                            @endforeach
                            


                            {{-- <tr>
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
                            </tr> --}}

                            @foreach($posttests as $test)
                            <tr>
                                <td class="text-muted">1</td>
                                <td><i class="fas fa-file-alt text-danger me-2"></i><strong>{{$test->name}}</strong></td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td>
                                    <a href="{{ route('coursepretest',['id'=>$course->id,'testId'=>$test->id]) }}" class="btn btn-sm btn-outline-danger rounded-pill">
                                        <i class="fas fa-play"></i> Mulai
                                    </a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

            {{-- <div class="card-footer  border-0 text-end">
                <a href="#" class="btn btn-danger rounded-pill fw-semibold">
                    <i class="fas fa-arrow-right me-1"></i> Lanjutkan Belajar
                </a>
            </div> --}}
        </div>



        {{-- ✅ Course Overview --}}
        <div class="card rounded-1 mb-5 p-3 col-lg-3">
            <h2 class="fw-bolder" style="font-size: 2rem; color: #5f5f5f;"> {{ $course->name ?? 'Pengenalan SPINDO' }}</h2>
            
            <img src="https://lirp.cdn-website.com/2f73b385/dms3rep/multi/opt/ImageSlide-1-640w.jpg" 
            class="img-fluid rounded shadow mb-4" 
            style="max-height: 320px; object-fit: cover;" 
            alt="Course Cover">
            <p class="text-muted" style="font-size: 1rem;">
                Pelajari sejarah, struktur organisasi, dan proses produksi di SPINDO.
            </p>
        </div>

        

    </div>
    
    

    
</div>

@endsection
