@extends('dashboardmain')

@section('body')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-12 mb-4">
            <div class="card shadow-lg">

                <div style="border-radius:7px" class="card-header bg-gradient-danger text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-4 fw-bold text-light">Buat Pre-Test / Post-Test</h3>
        
                </div>
                
                <form action="{{ route('dashboard.storeevaluation',['id'=>$course->id]) }}" method="POST">
                    @csrf
                    <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif

                    <input type="hidden" name="uploader_id" value="1">
                         
                    {{-- Select Course --}}
                    <div class="mb-3">
                        <label for="course_id" class="form-label fw-bold">📘 Materi</label>
                        
                        <input type="hidden" name="course_id" class="form-control" value="{{$course->id}}" >
                        <input type="text" class="form-control" value="{{$course->name}}" disabled>
                    </div> 

                    {{-- Quiz Title --}}
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">🖊️ Judul Tes</label>
                        <input type="text" name="name" id="name" class="form-control" required placeholder="Contoh: Pre-Test Pengenalan SPINDO">
                    </div>

                    {{-- Quiz Type --}}
                    <div class="mb-3">
                        <label for="type" class="form-label fw-bold">🧪 Tipe Tes</label>
                        <select name="type" id="type" class="form-select" required>
                            @foreach($testtypes as $testtype)
                                <option value="{{$testtype->id}}">{{$testtype->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <hr class="my-4">

                    {{-- Questions --}}
                    <div id="questions-area">
                        <h5 class="fw-bold">📄 Pertanyaan</h5>

                        <div class="question-block mb-4 border rounded p-3 bg-light">
                            <label class="form-label">Pertanyaan:</label>
                            <input type="text" name="questions[0][question_text]" class="form-control mb-2" placeholder="Tulis pertanyaan..." required>

                            <label class="form-label">Pilihan Jawaban:</label>
                            @for ($i = 0; $i < 4; $i++)
                                <div class="input-group mb-2">
                                    <div class="input-group-text">
                                        <input type="radio" name="questions[0][correct]" value="{{ $i }}" required>
                                    </div>
                                    <input type="text" name="questions[0][answer_text][{{ $i }}]" class="form-control" placeholder="Jawaban ke-{{ $i + 1 }}" required>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <button type="button" class="btn btn-outline-secondary mb-4" id="add-question">
                        <i class="fas fa-plus"></i> Tambah Pertanyaan
                    </button>

                    <div class="text-end">
                        <button type="submit" class="btn btn-danger fw-bold">💾 Simpan Tes</button>
                    </div>

                    </div>
            
                </form>
            </div>
        </div>
    </div>

    
</div>

{{-- JS for dynamic form --}}
<script>
    let questionIndex = 1;
    document.getElementById('add-question').addEventListener('click', function () {
        const newQuestion = `
        <div class="question-block mb-4 border rounded p-3 bg-light">
            <label class="form-label">Pertanyaan:</label>
            <input type="text" name="questions[${questionIndex}][question_text]" class="form-control mb-2" placeholder="Tulis pertanyaan..." required>

            <label class="form-label">Pilihan Jawaban:</label>
            ${[0, 1, 2, 3].map(i => `
                <div class="input-group mb-2">
                    <div class="input-group-text">
                        <input type="radio" name="questions[${questionIndex}][correct]" value="${i}" required>
                    </div>
                    <input type="text" name="questions[${questionIndex}][answer_text][${i}]" class="form-control" placeholder="Jawaban ke-${i + 1}" required>
                </div>
            `).join('')}
        </div>`;
        document.getElementById('questions-area').insertAdjacentHTML('beforeend', newQuestion);
        questionIndex++;
    });
</script>

@endsection
