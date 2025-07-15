@extends('coursemain')

@section('body')

<div class="px-4 py-4" style="min-height: 80vh;">

    {{-- ✅ Welcome Header --}}
    <div class="mb-5 text-center">
        <h2 class="fw-bolder" style="font-size: 2.5rem; letter-spacing: 0.05em; color: #441e1e;">
            👋 Selamat Datang di <span>SPINDO LMS</span>!
        </h2>
        <p class="small mx-auto fw-bold" style="color: #441e1e; max-width: 500px; font-size: 1rem; opacity: 0.85;">
            Pilih kursus di bawah untuk mulai belajar 📚. <br>Tingkatkan wawasan dan keterampilan Anda hari ini!
        </p>
    </div>

    {{-- ✅ Course Grid --}}
    <h4 class="fw-bold mb-4" style="letter-spacing: 0.03em; color: #441e1e;">Daftar Kursus Tersedia</h4>
    <div class="row g-3">
        @foreach($courses as $course)
        <div class="col-6 col-md-3 col-lg-2 col-xl-3">
            <a href="{{ route('coursehome') }}" class="text-decoration-none">
                <div class="card h-100 shadow-sm border-0 rounded-0" 
                     style="transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;">
                    <img src="https://lirp.cdn-website.com/2f73b385/dms3rep/multi/opt/Water-Pipes-1-640w.jpg" 
                         class="card-img-top" 
                         style="height: 120px; object-fit: cover;" 
                         alt="Course Thumbnail">
                    <div class="card-body px-3 py-3 d-flex flex-column">
                        <h6 class="fw-bold text-dark mb-2" style="font-size: 0.9rem;">
                             {{ Str::limit($course->name, 40) }}
                        </h6>
                        <p class="text-muted small mb-3" style="font-size: 0.8rem;">
                         {{ Str::limit($course->short_description ?? '-', 50) }}
                        </p>
                        <span class="badge bg-danger mb-2" style="font-size: 0.75rem; align-self: flex-start;">⏱️ 45 menit</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

<script>
    // Card hover animation
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-6px)';
            card.style.boxShadow = '0 12px 20px rgba(255, 77, 77, 0.4)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
            card.style.boxShadow = '';
        });
    });
</script>

@endsection
