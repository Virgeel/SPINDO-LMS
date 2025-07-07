
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="{{asset('/images/spindo.png')}}">
  <title>
    SPINDO Learning Management System
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/8b2709b4af.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('/css/argon-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
</head>



@include('course.partials.navbar')


<body class="g-sidenav-show bg-gray-100">
    
    <div class="min-height-300 position-absolute w-100" style="background-color:rgb(191,0,0)"></div>
    
    @include('course.partials.sidebar')
    
        <main class="main-content position-relative border-radius-lg ">
    
            @yield('body')
    
        </main>

    </div>
    
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</html>