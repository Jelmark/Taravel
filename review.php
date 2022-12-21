<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/review.css">
	<script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<title>Review</title>
</head>
<body>
<nav>
      <div class="countainer">
        <ul class="pages">
          <a href="index.php" class="link link1">
            <li class="page page1">Home</li>
          </a>
          <a href="review.php" class="link link2">
            <li class="page active page2">Vlogs</li>
          </a>
          <a href="travel" class="link link3">
            <li class="page page3">Travel</li>
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

<button class="feedback-button-link rotate review-trigger"  >
  <div class="btn-feedback">
    
    <p class="btn-feedback-p">Feedback</p>
  </div>
</button>

<div class="py-12 px-4 md:px-6 2xl:px-0 2xl:container 2xl:mx-auto flex justify-center items-center">
<!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
<div class="flex flex-col justify-start items-start w-full space-y-8">
<div class="flex justify-start items-start">
 <p class="text-3xl lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800 dark:text-white ">Reviews</p>
</div>
<div class="w-full flex justify-start items-start flex-col bg-gray-50 dark:bg-gray-800 p-8">
 <div class="flex flex-col md:flex-row justify-between w-full">
     <div class="flex flex-row justify-between items-start">

         <p class="text-xl md:text-2xl font-medium leading-normal text-gray-800 dark:text-white">Beautiful addition to the theme</p>

         <button onclick="showMenu(true)" class="ml-4 md:hidden">
             <svg id="closeIcon" class="hidden" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <path d="M15 12.5L10 7.5L5 12.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
             </svg>
             <svg id="openIcon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
             </svg>
         </button>
     </div>

     <div class="cursor-pointer mt-2 md:mt-0">
         <span>star rate</span>
             <defs>
                 <clipPath id="clip0">
                     <rect width="24" height="24" fill="white" />
                 </clipPath>
                 <clipPath id="clip1">
                     <rect width="24" height="24" fill="white" transform="translate(32)" />
                 </clipPath>
                 <clipPath id="clip2">
                     <rect width="24" height="24" fill="white" transform="translate(64)" />
                 </clipPath>
                 <clipPath id="clip3">
                     <rect width="24" height="24" fill="white" transform="translate(96)" />
                 </clipPath>
                 <clipPath id="clip4">
                     <rect width="24" height="24" fill="white" transform="translate(128)" />
                 </clipPath>
             </defs>
         </svg>
     </div>
 </div>

 <div id="menu" class="md:block">
 	<div class="mt-6 flex justify-start items-center flex-row space-x-2.5">
         <div>
             <img src="https://i.ibb.co/QcqyrVG/Mask-Group.png" alt="girl-avatar" />
         </div>
         <div class="flex flex-col justify-start items-start space-y-2">
             <p class="text-base font-medium leading-none text-gray-800 dark:text-white">Anna Kendrick</p>
             <p class="text-sm leading-none text-gray-600 dark:text-white">14 July 2021</p>
         </div>
     </div>

     <p class="mt-3 text-base leading-normal text-gray-600 dark:text-white w-full md:w-9/12 xl:w-5/6">When you want to decorate your home, the idea of choosing a decorative theme can seem daunting. Some themes seem to have an endless amount of pieces, while others can feel hard to accomplish</p>
     <div class="hidden md:flex mt-6 flex-row justify-start items-start space-x-4" >
         <div style="display: grid; grid-template-columns: auto auto auto auto; gap: .75rem;" >
             <img src="img/whale-shark-tumalog-falls.jpg" onclick="openModal();currentSlide(1)"class="img-review hover-shadow " />

             <img src="img/caption.jpg" onclick="openModal();currentSlide(2)" class="img-review hover-shadow " />
         </div>

            </div>
        </div>
    </div>
</div>
</div>
<!--Feedback Modal-->
<div class="review-modal">
  <div class="review-modal-content">
    <span class="close-button ">&times;</span>
    <div class="container">
<form id="review-form" action="index.html" method="post">
  <h2>Write Your Review</h2>
  <div id="rating">
    <svg class="star" id="1" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
    <svg class="star" id="2" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
    <svg class="star" id="3" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
    <svg class="star" id="4" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
    <svg class="star" id="5" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #808080;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
  </div>
  <span id="starsInfo" class="help-block">
    Click on a star to change your rating 1 - 5, where 5 = great! and 1 = really bad
  </span>
  <div class="form-group">
    <label class="control-label" for="review">Your Review:</label>
    <textarea class="form-control" rows="5" placeholder="Your Reivew" name="review" id="review"></textarea>
    <span id="reviewInfo" class="help-block pull-right">
      <span id="remaining">999</span> Characters remaining
    </span>
  </div>
  
  <div class="form-group">
    <label for="media">Upload Photo/Video</label>
    <input class="form-control" type="file" name="media" value="">
  </div>
  
  <a href="#" id="submit" class="btn btn-primary">Submit</a>
  <input id="submitForm" type="submit" style="display:none;">
  <span id="submitInfo" class="help-block">
   <i>  By clicking <strong>Submit</strong>,I authorize the sharing of my name and review on the web. (email will not be shared)</i>
  </span>
</form>

</div>
<!--Review Form Script-->
<script>
    function starsReducer(state, action) {
  switch (action.type) {
    case "HOVER_STAR": {
      return {
        starsHover: action.value,
        starsSet: state.starsSet,
      };
    }
    case "CLICK_STAR":
      {
        return {
          starsHover: state.starsHover,
          starsSet: action.value,
        };
      }
      break;
    default:
      return state;
  }
}

var StarContainer = document.getElementById("rating");
var StarComponents = StarContainer.children;

var state = {
  starsHover: 0,
  starsSet: 4,
};

function render(value) {
  for (var i = 0; i < StarComponents.length; i++) {
    StarComponents[i].style.fill = i < value ? "#f39c12" : "#808080";
  }
}

for (var i = 0; i < StarComponents.length; i++) {
  StarComponents[i].addEventListener("mouseenter", function () {
    state = starsReducer(state, {
      type: "HOVER_STAR",
      value: this.id,
    });
    render(state.starsHover);
  });

  StarComponents[i].addEventListener("click", function () {
    state = starsReducer(state, {
      type: "CLICK_STAR",
      value: this.id,
    });
    render(state.starsHover);
  });
}

StarContainer.addEventListener("mouseleave", function () {
  render(state.starsSet);
});

var review = document.getElementById("review");
var remaining = document.getElementById("remaining");
review.addEventListener("input", function (e) {
  review.value = e.target.value.slice(0, 999);
  remaining.innerHTML = 999 - e.target.value.length;
});

var form = document.getElementById("review-form");

form.addEventListener("submit", function (e) {
  e.preventDefault();
  let post = {
    stars: state.starsSet,
    review: form["review"].value,
    media: form["media"].value,

  };

  console.log(post);
});

document.getElementById("submit").addEventListener("click", function (e) {
  e.preventDefault();
  document.getElementById("submitForm").click();
});



function ReviewStarContainer(stars) {
  var div = document.createElement("div");
  div.className = "stars-container";
  for (var i = 0; i < 5; i++) {
    var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.setAttribute("viewBox", "0 12.705 512 486.59");
    svg.setAttribute("x", "0px");
    svg.setAttribute("y", "0px");
    svg.setAttribute("xml:space", "preserve");
    svg.setAttribute("class", "star");
    var svgNS = svg.namespaceURI;
    var star = document.createElementNS(svgNS, "polygon");
    star.setAttribute(
      "points",
      "256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"
    );
    star.setAttribute("fill", i < stars ? "#f39c12" : "#808080");
    svg.appendChild(star);
    div.appendChild(svg);
  }
  return div;
}

function ReviewContentContainer(name, review) {
  var reviewee = document.createElement("div");
  reviewee.className = "reviewee footer";
  reviewee.innerHTML = "- " + name ;

  var comment = document.createElement("p");
  comment.innerHTML = review;

  var div = document.createElement("div");
  div.className = "review-content";
  div.appendChild(comment);
  div.appendChild(reviewee);

  return div;
}


</script>


  </div>
</div>
<!--Review Modal Script-->
<script>
    var modal = document.querySelector(".review-modal");
    var triggers = document.querySelectorAll(".review-trigger");
    var closeButton = document.querySelector(".close-button");

    function toggleModal() {
      modal.classList.toggle("review-show-modal");
    }

    function windowOnClick(event) {
      if (event.target === modal) {
        toggleModal();
      }
    }

    for (var i = 0, len = triggers.length; i < len; i++) {
      triggers[i].addEventListener("click", toggleModal);
    }
    closeButton.addEventListener("click", toggleModal);
    window.addEventListener("click", windowOnClick);
</script>

<!-- Images used to open the lightbox -->

    <!-- The Modal/Lightbox -->
    <div id="myModal" class="modals">
        
        <div class="modal-contents">
<span class="close-button cursor" onclick="closeModal()">&times;</span>
            <div class="mySlides">
                <img src="img/whale-shark-tumalog-falls.jpg" style="max-height: calc(100vh - 225px);" class="img-fluid modal-lg">
            </div>

            <div class="mySlides">
                <img src="img/caption.jpg" style="max-height: calc(100vh - 225px);" class="modal-lg">
            </div>

            <!-- Next/previous controls -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>

        <script>
            // Open the Modal
            function openModal() {
                document.getElementById("myModal").style.display = "block";
            }
            // Close the Modal
            function closeModal() {
                document.getElementById("myModal").style.display = "none";
            }
            var slideIndex = 1;
            showSlides(slideIndex);
            // Next/previous controls
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }
            // Thumbnail image controls
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
        
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                
                slides[slideIndex - 1].style.display = "block";
            }
        </script>

<script>
	let menu = document.getElementById("menu");
let closeIcon = document.getElementById("closeIcon");
let openIcon = document.getElementById("openIcon");
const showMenu = (flag) => {
  if (flag) {
    menu.classList.toggle("hidden");
    closeIcon.classList.toggle("hidden");
    openIcon.classList.toggle("hidden");
  }
};

let menu2 = document.getElementById("menu2");
let closeIcon2 = document.getElementById("closeIcon2");
let openIcon2 = document.getElementById("openIcon2");
const showMenu2 = (flag) => {
  if (flag) {
    menu2.classList.toggle("hidden");
    closeIcon2.classList.toggle("hidden");
    openIcon2.classList.toggle("hidden");
  }
};

</script>
</body>
</html>