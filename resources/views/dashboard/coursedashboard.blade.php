@extends('dashboardmain')

@section('body')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-12 mb-4">
            <div class="card shadow-lg">
                <div  style="border-radius:7px;" class="card-header bg-gradient-danger text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0" style="color:#fff">📚 List Materi</h3>
                    <a href="#" class="btn btn-light text-danger fw-bold" style="background-color:#fff">
                        <i class="fas fa-plus me-2"></i> Tambahkan Materi
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            {{-- <thead class="table text-center">
                                <tr>
                                    <th style="width: 5%;">No.</th>
                                    <th>Nama Materi</th>
                                    <th>Durasi</th>
                                    <th>Dibuat Oleh</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead> --}}
                            <div>
                                <strong>
                                    Operational Trainee
                                </strong>
                            </div>
                            <tbody class="text-center">
                                @php $no = 1; @endphp
                                @for ($i = 0; $i < 4; $i++)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>Apa itu SPINDO?</td>
                                    <td>45 Menit</td>
                                    <td>Admin CAT</td>
                                    <td>
                                        <a href="
                                        " class="btn btn-outline-danger">
                                        Modify
                                        </a>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                        <table class="table align-middle">
                            {{-- <thead class="table text-center">
                                <tr>
                                    <th style="width: 5%;">No.</th>
                                    <th>Nama Materi</th>
                                    <th>Durasi</th>
                                    <th>Dibuat Oleh</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead> --}}
                            <div>
                                <strong>
                                    Management Trainee
                                </strong>
                            </div>
                            <tbody class="text-center">
                                @php $no = 1; @endphp
                                @for ($i = 0; $i < 4; $i++)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>Apa itu SPINDO?</td>
                                    <td>45 Menit</td>
                                    <td>Admin CAT</td>
                                    <td>
                                        <a href="
                                        " class="btn btn-outline-danger">
                                        Modify
                                        </a>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
