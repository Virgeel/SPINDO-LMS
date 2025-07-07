@extends('coursemain')

@section('body')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">

            <div class="card border-0 shadow-sm">
                <div class="card-body p-5">
                    <img src="{{asset('images/confetti.png')}}" alt="Congratulations" class="mb-4" style="max-width: 120px;">

                    <h2 class="mb-3 text-success">Selamat!</h2>
                    <p class="lead mb-4">
                        Kamu telah menyelesaikan seluruh materi kursus <strong>“Apa itu SPINDO ?”</strong>. Terima kasih telah mengikuti hingga akhir!
                    </p>

                    <table class=" table">
                        <tr>
                            <th>Pre-Test</th>
                            <th>Post-Test</th>

                        </tr>
                        <tr>
                            <td>60</td>
                            <td>80</td>
                        </tr>

                        
                    </table>

                    <hr class="my-4">

                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="" class="btn btn-primary">
                            <i class="bi bi-award me-2"></i>Unduh Sertifikat
                        </a>
                        <a href="{{ route('coursehome') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left me-2"></i>Kembali ke Daftar Kursus
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
