<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
  <link rel="stylesheet" type="text/css" href="style/admin.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
  crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" 
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

	<title>Admin Console</title>
	</head>
<body>
<div class="sidebar">
  <a class="active" href="manageTravel.php">Manage Travel(s)</a>
  <a href="manageVlogs.php">Manage Vlogs</a>
  <a href="manage-user-account.php">Manage User(s)</a>
  <a href="#about">Manage Transaction(s)</a>
</div>

<!-- Page content -->
<div class="content">
<table class="table ">
  <div class="header">
  <font class="head-title">Philippines Destination</font>

  <button class="cssbuttons-io-button  " id="trigger-ph" >
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
    <path fill="none" d="M0 0h24v24H0z">
    </path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z">
    </path></svg>
  <span >Add</span>
</button></div>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name of Place(s)</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" >Boracay</th>
      <td scope="row">Img url</th>
      <td id="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
      <td>1999</td>
      <td class="cell-edit">
     <button type="button" class="btn-update">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true">
        </span>
     </button>

    <button class="btn-delete glyphicon glyphicon-trash">
      <span class="tooltiptext">remove</span>
    </button>
</td>
    </tr>

  </tbody>
</table>

  <section class="modal-add-dest hidden">
  <div class="flex">
    <button class="btn-close">⨉</button>
  </div>
  <div>
 <form class="destination-form" action="addTravel.php" method="post">
  <p id="errorMs"></p>
   <label class="desc">Name of Place</label>
   <label class="desc">Price</label><br>
   <input class="text-bar" type="text" name="txtName-place"><input class="text-bar" type="text" name="txtPrice"><br>

   <label class="desc">Description</label><br>
   <textarea class="input-description" rows="10" column="10" name="txtDescription" >
</textarea>
    <br>

<div class="upload__box">
  <div class="upload__btn-box">
    <label class="upload__btn">
      <label>Upload images</label>
      <input type="file" multiple="" id="myImg" data-max_length="20" class="upload__inputfile">
    </label>
  </div>
  <div class="upload__img-wrap"></div>x
</div>
<input type="submit" name="btnAdd-destination" id="submit" value="Add Records" class="btn-addRecords">
 </form>

</section>
<div class="overlay hidden"></div>
</div>
</body>

<script>
$(document).ready(function(){

  $("#submit").click(function(e){
    e.preventDefault();

    let form_data = new FormData();
    let img = $("#myImg")[0].files;

    if(img.length > 0){
      form_data.append('myImg', img[0]);

      $ajax({
        url: 'addTravel.php',
        type: 'post',
        data: form_data,
        contentType: false,
      processData: false,
      success: function(res){
        const data = JSON.parse(res);

        if(data.error !=1) {
          let path = "admin/img/"+data.src;
          $("myImg").val('');

          else{
            $("#errorMs").text(data.em);
          }
        }
      }
      });
    }
    else{
      $("#errorMs").text("Please select an image.");
    }
  });
});

</script>
<script>
const modal = document.querySelector(".modal-add-dest");
const overlay = document.querySelector(".overlay");
const openModalBtn = document.querySelector("#trigger-ph");
const openModalBtn1 = document.querySelector("#trigger-international");
const closeModalBtn = document.querySelector(".btn-close");

// close modal function
const closeModal = function () {
  modal.classList.add("hidden");
  overlay.classList.add("hidden");
};

// close the modal when the close button and overlay is clicked
closeModalBtn.addEventListener("click", closeModal);
overlay.addEventListener("click", closeModal);

// close modal when the Esc key is pressed
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && !modal.classList.contains("hidden")) {
    closeModal();
  }
});

// open modal function
const openModal = function () {
  modal.classList.remove("hidden");
  overlay.classList.remove("hidden");
};
// open modal event
openModalBtn.addEventListener("click", openModal);
openModalBtn1.addEventListener("click", openModal);
</script>
</body>
</html>