<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body id="body">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

  <div class="collapse navbar-collapse " id="navbarSupportedContent" >
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link " href="index.php" >Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="vlogs.php">Vlogs</a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="travel.php">Travel</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="login.php">SignIn</a>
      </li>
    </ul>
  </div>
</nav>

<div  id="carouselExampleIndicators" class="carousel slide" data-interval="4000" data-ride="carousel" justify-content-center>
  <ol class="carousel-indicators" >
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="img/bali.jpg" alt="First slide">
      <div class="caption d-none d-md-block">
    <h3></h3>
    <font></font>
  
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/palawan.jpg" alt="Second slide">
      <div class="caption d-none d-md-block">
        <h3>s</h3>
    <font></font>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/siargao.jpg" alt="Third slide">
      <div class="caption d-none d-md-block">
        <h3></h3>
    <font></font>
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

<div class="cont head-cont">
  <h3 style="text-align: center; color: white;">Welcome to TaraVel</h3>
<p class="wcontent">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,</p>
</div>

<div class="cont">
<h1 class="local">Top Destinations</h1>
  <div class="card-dest">
  <div class="card-img"></div>
  <div class="card-info">
    <p class="text-title">Destination title </p>
    <p class="text-body">destination description and details</p>
  </div>
  <div class="card-footer">
  <span class="text-title">(price)</span>
  <a href="#">
  <div class="card-button cta">
  <span>Explore</span>
  <svg viewBox="0 0 13 10" height="10px" width="15px">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</a>
  </div>
</div>
</div>
</div>

<div class="cont">
<h1 class="local">Promotions</h1>

  <div class="card-dest">
  <div class="card-img"></div>
  <div class="card-info">
    <span id="promo"></span>
    <p class="text-title">Destination title </p>
    <p class="text-body">destination description and details</p>
  </div>
  <div class="card-footer">
  <span class="text-title">(price)</span>
  <a href="#">
  <div class="card-button cta">
  <span>Explore</span>
  <svg viewBox="0 0 13 10" height="10px" width="15px">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</a>
  </div>
</div>
</div>
</div>
<div class="cont">
<h1 class="local">Philippines Tour</h1>
<button class="see-more">
    <span class="hover-underline-animation"> See More </span>
    <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
        <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
    </svg>
</button>
  <div class="card-dest">
  <div class="card-img"></div>
  <div class="card-info">
    <span id="promo"></span>
    <p class="text-title">Destination title </p>
    <p class="text-body">destination description and details</p>
  </div>
  <div class="card-footer">
  <span class="text-title">(price)</span>
  <a href="#">
  <div class="card-button cta">
  <span>Explore</span>
  <svg viewBox="0 0 13 10" height="10px" width="15px">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</a>
  </div>
</div>
</div>
</div>
<div class="cont">
<h1 class="local">International Tour</h1>
<a href="travel.php"><button class="see-more">
    <span class="hover-underline-animation"> See More </span>
    <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
        <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
    </svg>
</button></a>
  <div class="card-dest">
  <div class="card-img"></div>
  <div class="card-info">
    <span id="promo"></span>
    <p class="text-title">Destination title </p>
    <p class="text-body">destination description and details</p>
  </div>
  <div class="card-footer">
  <span class="text-title">(price)</span>
  <a href="#">
  <div class="card-button cta">
  <span>Explore</span>
  <svg viewBox="0 0 13 10" height="10px" width="15px">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</a>
  </div>
</div>

</div>

</div>
<script >

  $('.responsive').slick({

  dots: true,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
  infinite: true,
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 3,

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});</script>
</body>
</html>