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
    <div class="col-xl-12 mb-4">
        <div class="card shadow-lg">
            <div style="border-radius:7px" class="card-header bg-gradient-danger text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0" style="color:#fff"> 💼 Job Position</h3>

                    <a href="{{route('dashboard.createjobposition')}}" class="btn btn-light text-danger fw-bold" style="background-color:#fff">
                        <i class="fas fa-plus me-2"></i> Tambahkan Job Position
                    </a>
                </div>
        </div>
    </div>
</div>

</div>

@endsection