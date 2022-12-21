<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Taravel List</title>

		<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<body id="body">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

  <div class="collapse navbar-collapse " id="navbarSupportedContent" >
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link " href="index.php" >Home </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="vlogs.php">Vlogs</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="travel.php">Travel<span class="sr-only">(current)</span></a>
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
  <a href="destination.php">
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
<div class="cont" id="international">
<h1 class="local">International Tour</h1>
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

</div></div></div>

</div>
</div>

</body>
</html>