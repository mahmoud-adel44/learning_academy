<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Loogin</title>
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
  <header class="main_menu home_menu">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-light ">
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
              <ul class="navbar-nav align-items-center">



                <li class="d-none d-lg-block">
                  <a class="btn_1">Welcome Admin</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>


<div class="container py-5 m-auto ">
  <div class="mt-5 border border-warning p-5" >
  <form class="form-contact contact_form" method="POST" action="{{route('admin.doLogin')}}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn_1">Login</button>
    <a type="submit" href="{{route('admin.login.redirectToProvider')}}" class="btn btn-dark rounded-pill py-2"><i class="ti-github p-2"></i>Login with githup</a>
  </form>
</div>
</div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
