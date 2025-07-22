@extends('coursemain')

@section('body')

<div class="px-4 py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm rounded-1">
                <div class="card-body">
                    <p class="card-title">{{$test->test_type->name}}</p>
                    <h3 class="card-title mb-3">{{$test->name}}</h3>
                    <p class="text-muted">Silakan jawab pertanyaan di bawah ini untuk mengukur pemahaman awal Anda sebelum mengikuti materi.</p>

                    <form>
                        @foreach($questions as $question)
                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    {{ $loop->iteration }}. {{ $question->question_text }}
                                </label>

                                @foreach($question->answer as $answer)
                                    <div class="form-check">
                                        <input class="form-check-input" 
                                            type="radio" 
                                            name="answers[{{ $question->id }}]" 
                                            id="answer_{{ $answer->id }}" 
                                            value="{{ $answer->id }}">

                                        <label class="form-check-label" for="answer_{{ $answer->id }}">
                                            {{ $answer->answer_text }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach

                        

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
        <a href="{{ route('coursesingle',['id'=>$course->id,'contentId'=>$next->id]) }}" class="btn btn-primary">Lanjut ke Materi 1</a>
      </div>
    </div>
  </div>
</div>




@endsection
