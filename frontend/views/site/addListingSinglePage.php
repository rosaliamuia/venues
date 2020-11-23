
<?php

use yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <!----nav-->
  <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">venues</a>
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Add Listing</button>
  </nav>
   <!------information-->
   
<div class="container-sm pt-3 border rounded w-50 mt-5 bg-light">
  <h5>Basic informaton</h5>
   <form>
    <div class="form-group">
      <label for="inputAddress">Listing title</label>
      <input type="text" class="form-control" id="listing-title" placeholder="listing title">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Category</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="category">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Keyword</label>
        <input type="password" class="form-control" id="keyword" placeholder="keyword">
      </div>
    </div>
  </form>
</div>
<!---location----->
<div class="container-sm pt-3 border rounded w-50 mt-5 bg-light">
  <h5>Location</h5>
  <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Country</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="country">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">County</label>
        <input type="password" class="form-control" id="keyword" placeholder="county">
      </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Address</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="address">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Zip</label>
      <input type="password" class="form-control" id="keyword" placeholder="zip">
    </div>
 </div>
 </form>
</div>
<!------gallery-->
<div class="container-sm pt-3 border rounded w-50 mt-5 h-50 bg-light">
  <h5>Upload images</h5>
  <form >
    <div class="file-field">
      <div class="btn btn-rounded purple-gradient btn-sm float-left">
        <span>Choose file</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload your file">
      </div>
    </div>
  </form>
</div>
<!-------description-->
<div class="container-sm pt-3 border rounded w-50 mt-5 h-50 bg-light">
  <h5>Description</h5>
  <form >
    <div class="form-group">
      <textarea class="form-control" rows="5" id="comment" placeholder="Enter description here"></textarea>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Phone</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="phone">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Email</label>
        <input type="password" class="form-control" id="keyword" placeholder="email">
      </div>
   </div>
  </form>
</div>
<!------pricing-->
<div class="container-sm pt-3 border rounded w-50 mt-5 bg-light">
  <h5>Pricing</h5>
  <form>
    <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputEmail4">Title</label>
       <input type="email" class="form-control" id="inputEmail4" placeholder="title">
     </div>
     <div class="form-group col-md-6">
       <label for="inputPassword4">Price</label>
       <input type="password" class="form-control" id="keyword" placeholder="price">
     </div>
   </div>
 </form>
</div>

<div class="container-sm bg-light mt-5 border rounded w-50">
  <div class="col-md-12 text-center">
      <button type="button" class="btn btn-primary">Preview</button>
      
  </div>
</div>














    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="
    sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
