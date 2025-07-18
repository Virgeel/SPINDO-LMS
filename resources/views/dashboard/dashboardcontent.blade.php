@extends('dashboardmain')

@section('body')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-12 mb-4">
            <div class="card shadow-lg rounded-0">
                <div class="card-header bg-gradient-danger text-white d-flex justify-content-between align-items-center rounded-0">
                    <h3 class="mb-0 text-white">{{ $course->name }}</h3>
                </div>

                <div class="card-body">
                    {{-- Action Buttons --}}
                    <div class="mb-4 d-flex flex-wrap gap-2">
                        <div>
                        <a href="{{ route('dashboard.createcontent', ['id' => $course->id]) }}" class="btn bg-gradient-danger text-light fw-bold">
                            <i class="fas fa-plus me-2"></i> Tambahkan Konten
                        </a>
                        @if ($tests->isNotEmpty())
                            <button type="button" class="btn bg-gradient-secondary text-light fw-bold" data-bs-toggle="modal" data-bs-target="#testExistsModal">
                                <i class="fas fa-file-alt me-2"></i> Tambahkan Evaluasi
                            </button>
                        @else
                            <a href="{{ route('dashboard.createevaluation', ['id' => $course->id]) }}" class="btn bg-gradient-success text-light fw-bold">
                                <i class="fas fa-file-alt me-2"></i> Tambahkan Evaluasi
                            </a>
                        @endif

                        <!-- Modal -->
                        <div class="modal fade" id="testExistsModal" tabindex="-1" aria-labelledby="testExistsModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content bg-light text-dark rounded-4 shadow">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title fw-bold" id="testExistsModalLabel">⚠️ Evaluasi Sudah Dibuat</h5> 
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                    </div>
                                    <div class="modal-body">
                                        Anda tidak dapat membuat Evaluasi baru karena sudah tersedia untuk kursus ini.
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                        <div class="form-outline" data-mdb-input-init>
                        <input type="search" id="form1" class="form-control" placeholder="Cari modul" aria-label="Search" />
                        </div>
                    </div>

        

                    {{-- Table with Image --}}
                    <div class="table-responsive">
                        <table class="table table-hover align-middle text-sm">
                            <thead class="table">
                                <tr class="text-center">
                                    <th style="width: 100px;"></th>
                                    <th>Nama Konten</th>
                                    <th>Tipe</th>
                                    <th>Durasi</th>
                                    <th>Dibuat Oleh</th>
                                    <th style="width: 160px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($tests as $test)
                                <tr>
                                    <td class="text-center">
                                        <img src="https://lirp.cdn-website.com/2f73b385/dms3rep/multi/opt/Water-Pipes-1-640w.jpg" 
                                             alt="Thumbnail" height="60" 
                                             class="rounded-1 shadow-sm" style="object-fit: cover;">
                                    </td>
                                    <td>
                                        <strong>{{ $test->name }}</strong>
                                    </td>
                                    <td>
                                        <strong>Konten</strong>
                                    </td>
                                    <td>45 Menit</td>
                                    <td>{{ $test->user->name ?? 'None' }}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-outline-success me-1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @foreach($contents as $content)
                                <tr>
                                    <td class="text-center">
                                        <img src="https://lirp.cdn-website.com/2f73b385/dms3rep/multi/opt/Water-Pipes-1-640w.jpg" 
                                             alt="Thumbnail" height="60" 
                                             class="rounded-1 shadow-sm" style="object-fit: cover;">
                                    </td>
                                    <td>
                                        <strong>{{ $content->name }}</strong>
                                    </td>
                                    <td>
                                        <strong>Konten</strong>
                                    </td>
                                    <td>45 Menit</td>
                                    <td>{{ $content->user->name }}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-outline-success me-1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                                @if($contents->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">
                                        <em>Belum ada konten yang ditambahkan.</em>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection
