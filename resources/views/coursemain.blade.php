<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" type="image/png" href="{{ asset('/images/spindo.png') }}" />
  <title>SPINDO Learning Management System</title>

  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/8b2709b4af.js" crossorigin="anonymous"></script>
  <link id="pagestyle" href="{{ asset('/css/argon-dashboard.css?v=2.1.0') }}" rel="stylesheet" />

  <style>
  body {
    background: linear-gradient(135deg, #f9fafb 0%, #ffffff 100%);
    font-family: 'Open Sans', sans-serif;
    color: #212529; /* Dark gray for text */
    line-height: 1.6;
  }
  main.container {
    padding-top: 2rem;
    padding-bottom: 2rem;
  }
</style>

</head>

<!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

<body>

  @include('course.partials.navbar')

  {{-- @include('course.partials.sidebar') --}}

    @yield('body')
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
