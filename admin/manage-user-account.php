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
  <a  href="manageVlogs.php">Manage Vlogs</a>
  <a class="active" href="manage-user-account.php">Manage User(s)</a>
  <a href="#about">Manage Transaction(s)</a>
</div>

<!-- Page content -->
<div class="content">
<table class="table ">
  <div class="header">
  <font class="head-title">Customer User Account</font>
</div>
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
      <td scope="row" >userId#</th>
      <td scope="row">username</th>
      <td scope="row">Fname</td>
      <td scope="row">Lname</td>
      <td scope="row">userEmail</td>
      <td scope="row">userPassword</td>
      <td>

    <button class="btn-delete glyphicon glyphicon-trash">
      <span class="tooltiptext">remove</span>
    </button>
</td>
    </tr>

  </tbody>
</table>

<table class="table">
 <div class="header">
  <font class="head-title">Admin User Account</font>
</div>

  <thead class="thead-light">
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
      <td scope="row" >userId#</th>
      <td scope="row">username</th>
      <td scope="row">Fname</td>
      <td scope="row">Lname</td>
      <td scope="row">userEmail</td>
      <td scope="row">userPassword</td>
      <td>

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

</body>
</html>