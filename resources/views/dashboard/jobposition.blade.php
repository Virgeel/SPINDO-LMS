@extends('dashboardmain')

@section('body')

<div class="container-fluid py-4">

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->any() as $error)
                    <li>{{$error}}</li>
                @endforeach

            </ul>

        </div>

    @endif
    <div class="row">

        <div class="col-lg-6 mb-4">
            <div class="card shadow-lg rounded-0">
                <div class="card-header bg-gradient-danger text-white d-flex justify-content-between align-items-center rounded-0">
                    <h3 class="mb-0 text-white">Cluster Jabatan</h3>
                </div>

                <div class="card-body">
                    {{-- Action Buttons --}}
                    <div class="mb-4 d-flex flex-wrap gap-2">
                        <a href="{{ route('dashboard.jobposition.create')}}" class="btn bg-gradient-danger text-light fw-bold">
                            <i class="fas fa-plus me-2"></i> Tambahkan Cluster Jabatan
                        </a>
                    </div>

                    {{-- Table with Image --}}
                    <div class="table-responsive">
                        <table class="table table-hover align-middle text-sm">
                            <thead class="table">
                                <tr class="text-center">
                                    <th style="width: 5px;"></th>
                                    <th class="text-start">Nama Kategori</th>
                                    <th style="width: 160px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jobpositions as $jobposition)
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <strong>{{ $jobposition->name }}</strong>
                                    </td>
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

                                @if($jobpositions->isEmpty())
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