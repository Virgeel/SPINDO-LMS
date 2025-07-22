@extends('coursemain')

@section('body')

<section class="container-fluid min-vh-100">

  {{-- ---------- Course Header ---------- --}}
  <div class="card shadow mb-4 border-0 rounded-1">
    <div class="card-body d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center gap-3">
      <div>
        <h1 class="h4 fw-bold text-dark mb-1">{{$content->name}}</h1>
        <p class="text-muted mb-0">{{$content->short_description}}</p>
      </div>

      <div class="w-100 w-lg-33">
        <p class="small text-muted mb-1">Progress Kursus</p>
        <div class="progress" style="height:0.6rem">
          <div class="progress-bar bg-primary" role="progressbar"
               style="width:65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p class="small text-end text-primary fw-semibold mt-1">65% selesai</p>
      </div>
    </div>
  </div>

  {{-- ---------- Main Content ---------- --}}
  <div class="row g-4">

    {{-- Video / Lesson --}}
    <div class="col-lg-9">
      <div class="card shadow-sm border-0 rounded-1">
        <div class="ratio ratio-16x9">
          <iframe class="rounded-top" src="https://www.youtube.com/embed/EwV4R170lhE?si=842GfwX9r2VzMc8P" title="Video SPINDO"
                  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
        </div>
        <div class="card-body">
          <h2 class="h5 fw-semibold text-dark mb-2">📌 {{$content->name}}</h2>
          <p class="text-muted mb-0">
            {{$content->description}}
            Di materi ini, peserta akan mempelajari informasi dasar tentang SPINDO, termasuk sejarah dan struktur dasar perusahaan.</p>
        </div>
      </div>
    </div>


    {{-- Sidebar --}}
    <div class="col-lg-3">
      <div class="card shadow-sm border-0 rounded-1">
        <div class="card-body">
          <h3 class="h6 fw-semibold text-dark mb-3">📂 Daftar Materi</h3>
          
          <ul class="list-group list-group-flush">


          @php
             $count = 1;
          @endphp

          @foreach($courseItems as $courseItem)

            @php
                $isActive = $courseItem->content_id === $content->id;
            @endphp

            @if($courseItem->type == 'content')

            <li class="list-group-item d-flex align-items-start">
                @if($isActive)
                    <span class="spinner-grow spinner-grow-sm text-warning me-2 mt-1" role="status"></span>
                    <span class="small fw-semibold text-primary blink">
                        Materi {{$count++}} : {{ $courseItem->title }}
                    </span>
                @else
                    <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                    <span class="small fw-medium">Materi {{$count++}}: {{ $courseItem->title }}</span>
                @endif
            </li>


            @elseif($courseItem->type == 'pre-test' || 'post-test')
            <li class="list-group-item d-flex align-items-start">
              <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
              <span class="small fw-medium"> {{$courseItem->type}}</span>
            </li>

            @endif
          

          @endforeach

          </ul>
        </div>
      </div>

      <div class="pt-3 text-end">

        @if($prev)
            <a href="{{ route('coursesingle', ['id' => $course->id, 'contentId' => $prev->id]) }}" class="btn btn-secondary">← Back</a>
        @endif

        @if($next)
            <a href="{{ route('coursesingle', ['id' => $course->id, 'contentId' => $next->id]) }}" class="btn btn-primary">Next →</a>
        @endif

        {{-- <a href="{{ route('courseposttest',['id'=>$course->id,'testId'=>$test->id]) }}" class="btn btn-danger w-100">
          Materi Selanjutnya <i class="bi bi-arrow-right ms-1"></i>
        </a> --}}
      </div>
    </div>
  </div>
</section>

@endsection
