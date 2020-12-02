<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Etrain</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front/css')}}/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('front/css')}}/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('front/css')}}/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('front/css')}}/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('front/css')}}/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('front/css')}}/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('front/css')}}/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('front/css')}}/style.css">

    @yield('styles')
</head>
<body>


  {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('admin.logout')}}">logout</a>
        </li>
      </ul>
    </div>
  </nav> --}}

  <header class="main_menu home_menu">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand">
              <img src="{{asset('front')}}/img/logo.png" alt="logo" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div
              class="collapse navbar-collapse main-menu-item justify-content-end"
              id="navbarSupportedContent"
            >
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.home')}}">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{route('admins.cat.index')}}">Categories</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{route('admins.trainers.index')}}">Trainers</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{route('admins.courses.index')}}">Courses</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{route('admins.students.index')}}">Students</a>
              </li>
            </ul>
              <ul class="navbar-nav align-items-center"> 
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('admin.logout')}}">logout</a>
                </li>    
                <li class="d-none d-lg-block">
                  <a class="btn_1">Welcome {{Auth::user()->username}}</a>
                </li>
              </ul>

            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
