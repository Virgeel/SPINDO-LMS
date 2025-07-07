@extends('main')

@section('body')
{{-- ===== Sign‑In Section ===== --}}
<section style="background-color:rgb(191, 0,0)" class="hero-area position-relative py-5">

  <div class="container" style="padding-top:100px; ">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">

        <div class="card shadow border-0">
          <div class="card-body p-5">

            <h2 class="h3 fw-bold text-center mb-2">Masuk ke akun anda</h2>
            <p class="text-muted text-center mb-4">Lorem ipsum dolor sit amet, consectetur</p>
           
            
            {{-- Sign‑in form --}}
            <form action="{{ route('singin') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label" for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username"
                       placeholder="example@gmail.com">
              </div>

              <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                       placeholder="**************">
              </div>

              <div class="d-grid mb-3">
                {{-- <button type="submit" class="btn btn-danger">Sign In</button> --}}
                <a href="{{route('courseindex')}}" class="btn btn-danger">Sign in</a>
              </div>
            </form>

            {{-- Example hard‑coded link (optional) --}}
            {{-- <p class="text-center small">
              Don't have an account?
              <a href="signup.html">Sign Up</a>
            </p> --}}

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection
