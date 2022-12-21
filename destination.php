<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/review.css">
  <link rel="stylesheet" type="text/css" href="style/destination.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.cdnfonts.com/css/patua-one" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <title>Review</title>
</head>
<body>
    <style>
@import url('https://fonts.cdnfonts.com/css/patua-one');
</style>
<nav>
      <div class="countainer">
        <ul class="pages">
          <a href="index.php" class="link link1">
            <li class="page page1">Home</li>
          </a>
          <a href="review.php" class="link link2">
            <li class="page  page2">Vlogs</li>
          </a>
          <a href="travel.php" class="link link3">
            <li class="page active page3">Travel</li>
          </a>
          <a href="#" class="link link4">
            <li class="page page4">About Us</li>
          </a>
          <a href="login.php" class="link link4">
            <li class="page page4">SignIn</li>
          </a>
        </ul>
        <p ><img src="img/logo.png" class="logo"></p>
      </div>
    </nav>
<div class="dest-name">
    <font>Palawan: Puerto Princesa and El Nido - 4 Days and 3 Nights</font><br>
    <font class="sub-title">Puerto Princesa, Philippines</font>
</div>

<div class="row1">
 <div class="thumb-bar">
 </div>
 <img src="img/35.jpg" onclick="openLightbox();toSlide(3)" class="hover-shadow see-more preview" alt="Toy car in the city." />
  <h2 class="center">See More</h2>
</div>

<div class="full-img">
  <img class="displayed-img" src="https://static.pexels.com/photos/385997/pexels-photo-385997.jpeg" />
</div>

<!-- This is your lightbox, it is contained in a modal. Here you provide all the images,
     controls, and another set of preview images as the dots. Dots show your user which
     image is currently active. Note that you use entities (e.g. &times;), more info on
     them at the bottom. -->
     
<div id="Lightbox" class="modal">
  <span class="close pointer" onclick="closeLightbox()">&times;</span>
  <div class="modal-content">
    <div class="slide displayed-img">
        <img src="img/36.jpg" class="image-slide" alt="Toy car on the road." />
    </div>
    <div class="slide displayed-img">
        <img src="https://static.pexels.com/photos/574521/pexels-photo-574521.jpeg" class="image-slide" alt="Toy car exploring offroad." />
    </div>    
    <div class="slide">
        <img src="https://static.pexels.com/photos/386009/pexels-photo-386009.jpeg" class="image-slide" alt="Toy car in the city." />
    </div>
  
    <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
    <a class="next" onclick="changeSlide(1)">&#10095;</a>
  
    <div class="dots">
      <div class="col">
        <img src="https://static.pexels.com/photos/385997/pexels-photo-385997.jpeg" class="modal-preview hover-shadow" onclick="toSlide(1)" alt="Toy car on the road" />
      </div>
      <div class="col">
        <img src="https://static.pexels.com/photos/574521/pexels-photo-574521.jpeg" class="modal-preview hover-shadow" onclick="toSlide(2)" alt="Toy car exploring offroad." />
      </div>
      <div class="col">
        <img src="https://static.pexels.com/photos/386009/pexels-photo-386009.jpeg" class="modal-preview hover-shadow" onclick="toSlide(3)" alt="Toy car in the city." />
      </div>
    </div>
  </div>
</div>

<div class="info">
    <span class="price">₱ 2,000</span><br>
    <span class="description">Price may varies per group size</span>
    </br>
<span class="header">Select Date and Travelers</span>
<hr class="solid">
<div class="booking-date">
        <div class="date-group"> <input class="date-control" type="date" required> <span class="date-label"> Date of Travel</span> </div>     
    </div> 

  <div class="input-row">
    <div class="title">
      <span class="label">Adults</span><span class="sub-label"> (Max of 15)</span>
      <p class="description">People 18 years old and above.</p>
    </div>
    <div class="input">
      <button class="minus" aria-label="Decrease by one" disabled>
        <svg width="16" height="2" viewBox="0 0 16 2" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line y1="1" x2="16" y2="1" stroke="#0064FE" stroke-width="2" class="icon" />
        </svg>
      </button>
      <div class="number dim">0</div>
      <button class="plus" aria-label="Increase by one">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon">
          <line x1="8" y1="4.37114e-08" x2="8" y2="16" stroke="#0064FE" stroke-width="2" />
          <line y1="8" x2="16" y2="8" stroke="#0064FE" stroke-width="2" />
        </svg>

      </button>
    </div>
  </div>
  <div class="input-row">
    <div class="title">
      <span class="label">Children</span><span class="sub-label"> (Max of 15)</span>
      <p class="description">People under 18 years old.</p>
    </div>
    <div class="input">
      <button class="minus" aria-label="Decrease by one" disabled>
        <svg width="16" height="2" viewBox="0 0 16 2" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line y1="1" x2="16" y2="1" stroke="#0064FE" stroke-width="2" class="icon" />
        </svg>

      </button>
      <div class="number dim">0</div>
      <button class="plus" aria-label="Increase by one">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="plus">
          <line x1="8" y1="4.37114e-08" x2="8" y2="16" stroke="#0064FE" stroke-width="2" />
          <line y1="8" x2="16" y2="8" stroke="#0064FE" stroke-width="2" />
        </svg>
      </button>
    </div>
  </div>

<div class="total">
    <span class="total-item">Total Price: </span><br>
    <span class="total-item">Price X Head </span><br>
    <span class="total-item">date travel</span>
    <a href="#myModal" class="trigger book-btn " data-toggle="modal"><span>Book Now</span></a>
</div>

</div>


<div class="over-view">
    <span class="header">Over View</span>
    <p class="content">Take a break from Cebu City and discover the vibrant reef and soft sand beaches of the islands around Mactan—with a private boat just for your group. You'll visit three signature islands—Hilutungan, Caohagan, and Nalusuan—with a boatman to assist. Your package includes essential snorkeling gear (mask and tube), a barbecue lunch on Nalusuan Island, and round-trip private transfers direct from your hotel. </p>
<hr class="solid">
    <span class="header">Whats include</span>
    <p class="content">
        <ul>
       <li> Lunch </li>
       <li> All Fees and Taxes 
        <li>Use of Snorkeling equipment </li>
        <li>Private Motorized Boat used for island hopping (6 hours) </li>
        <li>Boatman and boat crew to assist you </li>
        <li>Pick up and drop off to your hotel with our experienced driver</li></p>
        </ul>
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="material-icons">&#xE876;</i>
                </div>              
                <h4 class="modal-title w-100">Awesome!</h4> 
            </div>
            <div class="modal-body">
                <p class="text-center">Your booking has been confirmed. Check your email for detials.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div> 

<script>
    const buttons = document.querySelectorAll("button");
const minValue = 0;
const maxValue = 15;

buttons.forEach((button) => {
  button.addEventListener("click", (event) => {
    // 1. Get the clicked element
    const element = event.currentTarget;
    // 2. Get the parent
    const parent = element.parentNode;
    // 3. Get the number (within the parent)
    const numberContainer = parent.querySelector(".number");
    const number = parseFloat(numberContainer.textContent);
    // 4. Get the minus and plus buttons
    const increment = parent.querySelector(".plus");
    const decrement = parent.querySelector(".minus");
    // 5. Change the number based on click (either plus or minus)
    const newNumber = element.classList.contains("plus")
      ? number + 1
      : number - 1;
    numberContainer.textContent = newNumber;
    console.log(newNumber);
    // 6. Disable and enable buttons based on number value (and undim number)
    if (newNumber === minValue) {
      decrement.disabled = true;
      numberContainer.classList.add("dim");
      // Make sure the button won't get stuck in active state (Safari)
      element.blur();
    } else if (newNumber > minValue && newNumber < maxValue) {
      decrement.disabled = false;
      increment.disabled = false;
      numberContainer.classList.remove("dim");
    } else if (newNumber === maxValue) {
      increment.disabled = true;
      numberContainer.textContent = `${newNumber}+`;
      element.blur();
    }
  });
});

</script>
<script> 
// Image Gallery Skill Test Script

const displayedImage = document.querySelector(".displayed-img");
const thumbBar = document.querySelector(".thumb-bar");

const overlay = document.querySelector(".overlay");

/* Declaring the array of image filenames and the alternative text for each image file*/

const imgSrcAltText = [
  {
    url:
      "img/36.jpg",
    alt: "Closeup of a human eye"
  },
 {
    url:
      "img/b3.jpg",
    alt: "Closeup of a human eye"
  },
  {
    url:
      "img/eb.jpg",
    alt: "Closeup of a human eye"
  },
 
];

/* Looping through images */

for (let imgItem of imgSrcAltText) {
  const newImage = document.createElement("img");

  newImage.setAttribute("src", imgItem.url);
  newImage.setAttribute("alt", imgItem.alt);

  thumbBar.appendChild(newImage);

  newImage.addEventListener("click", (e) => {
    displayedImage.src = e.target.src;
    displayedImage.alt = e.target.alt;
  });
}

</script>

<script>
// Initialize here and run showSlide() to give your lightbox a default state.

let slideIndex = 1;
showSlide(slideIndex);

// You are providing the functionality for your clickable content, which is 
// your previews, dots, controls and the close button.

function openLightbox() {
  document.getElementById('Lightbox').style.display = 'block';
}

function closeLightbox() {
  document.getElementById('Lightbox').style.display = 'none';
};

// Note that you are assigning new values here to our slidIndex.

function changeSlide(n) {
  showSlide(slideIndex += n);
};

function toSlide(n) {
  showSlide(slideIndex = n);
};

// This is your logic for the light box. It will decide which slide to show 
// and which dot is active.

function showSlide(n) {
  const slides = document.getElementsByClassName('slide');
  let modalPreviews = document.getElementsByClassName('modal-preview');

  if (n > slides.length) {
    slideIndex = 1; 
  };
  
  if (n < 1) {
    slideIndex = slides.length;
  };

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  };
  
  for (let i = 0; i < modalPreviews.length; i++) {
    modalPreviews[i].className = modalPreviews[i].className.replace(' active', '');
  };
  
  slides[slideIndex - 1].style.display = 'block';
  modalPreviews[slideIndex - 1].className += ' active';
};

</script>
</body>
</html>