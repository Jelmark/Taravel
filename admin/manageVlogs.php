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
	<title>Admin Console</title>
	</head>
<body>
<div class="sidebar">
  <a href="managetravel.php">Manage Travel(s)</a>
  <a class="active" href="manageVlogs.php">Manage Vlogs</a>
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
      <th scope="col">UserId</th>
      <th scope="col">Username</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">User Email</th>
      <th scope="col">User Password</th>

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

<table class="table">
 <div class="header">
  <font class="head-title">International Destination</font>

<button class="cssbuttons-io-button " id="trigger-international">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
    <path fill="none" d="M0 0h24v24H0z">
    </path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z">
    </path></svg>
  <span >Add</span>
</button>
</div>

  <thead class="thead-light">
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
      <td scope="row">Boracay</th>
      <td scope="row">Img url</th>
      <td id="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
      <td>1999</td>
      <td class="cell-edit">
     <button type="button" class="btn-update">
        <span class="update glyphicon glyphicon-pencil " aria-hidden="true">
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
 <form class="destination-form">
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
      <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
    </label>
  </div>
  <div class="upload__img-wrap"></div>
</div>
<input type="submit" name="btnAdd-destination" value="Add Records" class="btn-addRecords">
 </form>
</section>
<div class="overlay hidden"></div>
</div>

</body>

<script>
  
$('tbody').on('click', '.cell-edit',function() {
  var place = $(this).parent().find('td:eq(0)').text();
  var image = $(this).parent().find('td:eq(1)').text();  
  var description = $(this).parent().find('td:eq(2)').text();  
  var price = $(this).parent().find('td:eq(3)').text();   

  $(this).parent().find('td:eq(0)').html('<input type="text" class="form-control input-sm" value="'+place+'">');
  $(this).parent().find('td:eq(1)').html('<input type="file" class="form-control input-sm" value="'+image+'">');
  $(this).parent().find('td:eq(2)').html('<input type="text" class="form-control input-sm" value="'+description+'">');
  $(this).parent().find('td:eq(3)').html('<input type="text" class="form-control input-sm" value="'+price+'">');
  $(this).parent().find('td:eq(4)').replaceWith('<td class="cell-save"><button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></td>');
  //alert(surname+" "+lastname);
});

$('tbody').on('click', '.cell-save',function() { 

  var place = $(this).parent().find('td:eq(0) input').val();
  var image = $(this).parent().find('td:eq(1) input').val();
  var description = $(this).parent().find('td:eq(2) input').val();
  var price = $(this).parent().find('td:eq(3) input').val();  
  
  
  $(this).parent().find('td:eq(0)').html(place);
  $(this).parent().find('td:eq(1)').html(image);
  $(this).parent().find('td:eq(2)').html(description);
  $(this).parent().find('td:eq(3)').html(price);

  $(this).parent().find('td:eq(4)').replaceWith('<td class="cell-edit"><button type="button" class="btn-update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>                            <button class="btn-delete glyphicon glyphicon-trash"> <span class="tooltiptext">remove</span> </td>');  
  
});
</script>
<script>
  jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}

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