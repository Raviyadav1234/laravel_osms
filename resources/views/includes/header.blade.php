<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>OSMS</title>

  <style type="text/css">
    .desc{
      color: white;
       position: fixed;
       top: 235px;
       left: 560px;
    }
  </style>
</head>

<body>
  <!-- Start Navigation -->
  <nav  class="navbar navbar-expand-sm navbar-dark fixed-top bg-secondary">
    <a href="index.php" class="navbar-brand"><img src="images/logo.png"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"  id="myMenu" >
      <ul class="navbar-nav custom-nav ml-auto" >

         @if (Route::has('login'))
                    @auth
                        <li class="nav-item ml-4"><a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a></li>
                    @else


       <li class="nav-item ml-4"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item ml-4"><a href="#about_us" class="nav-link">About us</a></li>
        <li class="nav-item ml-4"><a href="#services" class="nav-link">Services</a></li>
        <li class="nav-item ml-4"><a href="#customer" class="nav-link">Gallery</a></li>

        <li class="nav-item ml-4"><a href="#contact" class="nav-link">Contact</a></li>

        <li class="nav-item ml-4"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>
                        

        @if (Route::has('register'))

        <li class="nav-item ml-4"><a href="{{ route('register') }}" class="nav-link">Register</a></li>

                            
                        @endif
                    @endauth
              
            @endif
        
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
 
    <header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slide1.jpg" alt="First slide">

      <div class="carousel-caption d-none d-md-block">
    <a href="index.php"><p class="desc" style=" font-size: 80px;">Home</p></a>
    <h5>This is home page</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <a href="#Contact"><p class="desc" style=" font-size: 80px;">Contact</p></a>
    <h5>This is contact page</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <a href="#Services"><p class="desc" style=" font-size: 80px;">Services</p></a>
    <h5>This is services page</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide4.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <a href="user/userregistration.php"><p class="desc" style=" font-size: 80px;">Register</p></a>
    <h5>This is register page</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide5.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <a href="user/userlogin.php"><p class="desc" style=" font-size: 80px;">Login</p></a>
    <h5>This is login page</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  </header> <!-- End Header Jumbotron -->