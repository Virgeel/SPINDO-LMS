@extends('coursemain')

@section('body')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm">
                <div class="card-body">
                    <p class="card-title">Pre-Test </p>
                    <h3 class="card-title mb-3">Apa itu SPINDO ?</h3>
                    <p class="text-muted">Silakan jawab pertanyaan di bawah ini untuk mengukur pemahaman awal Anda sebelum mengikuti materi.</p>

                    <form>
                        {{-- Question 1 --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">1. Apa kepanjangan dari SPINDO?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" id="q1a" value="a">
                                <label class="form-check-label" for="q1a">Surabaya Pipe Indonesia</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" id="q1b" value="b">
                                <label class="form-check-label" for="q1b">Steel Pipe Industry of Indonesia</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" id="q1c" value="c">
                                <label class="form-check-label" for="q1c">Standard Pipe Industrial Office</label>
                            </div>
                        </div>

                        {{-- Question 2 --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">2. Dimana kantor pusat SPINDO berada?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" id="q2a" value="a">
                                <label class="form-check-label" for="q2a">Jakarta</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" id="q2b" value="b">
                                <label class="form-check-label" for="q2b">Surabaya</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" id="q2c" value="c">
                                <label class="form-check-label" for="q2c">Bandung</label>
                            </div>
                        </div>

                        {{-- Question 3 --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">3. Produk utama dari SPINDO adalah?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" id="q3a" value="a">
                                <label class="form-check-label" for="q3a">Besi Beton</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" id="q3b" value="b">
                                <label class="form-check-label" for="q3b">Pipa Baja</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" id="q3c" value="c">
                                <label class="form-check-label" for="q3c">Semen</label>
                            </div>
                        </div>

                        {{-- Submit Button triggers modal
                        <div class="text-end">
                            <button type="button"
                                    class="btn btn-danger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#scoreModal">
                                Submit
                            </button>
                        </div> --}}

                        {{-- Submit Button triggers modal --}}
                        <div class="text-end">
                            <a 
                                class="btn btn-danger"
                                data-bs-toggle="modal"
                                data-bs-target="#scoreModal">
                                Submit
                            </a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Score Modal -->
<div class="modal fade" id="scoreModal" tabindex="-1" aria-labelledby="scoreModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="scoreModalLabel">Hasil Pre-Test</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body text-center">
        <h1 class="display-4 text-success mb-3 fw-bold">80 / 100</h1>
        <p class="lead">Selamat! Anda telah menyelesaikan Pre-Test dengan baik.</p>
      </div>

      <div class="modal-footer border-0 justify-content-center">
        <a href="{{ route('coursesingle') }}" class="btn btn-primary">Lanjut ke Materi 1</a>
      </div>
    </div>
  </div>
</div>




@endsection
