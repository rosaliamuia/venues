<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
?>
<!-- slider -->
<div id="carouselExample" class="carousel slide margin-top-top" data-ride="carousel" data-interval="900000">
  <div class="carousel-inner row w-100 mx-auto">
    <div class="carousel-item col-md-6 col-sm-6 col-md-4 col-lg-2 active">
      <img class="img-fluid mx-auto d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" alt="First slide">
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="img-fluid mx-auto d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="img-fluid mx-auto d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Third slide">
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="img-fluid mx-auto d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="img-fluid mx-auto d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="img-fluid mx-auto d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="img-fluid mx-auto d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="img-fluid mx-auto d-block" src=".jpg" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next text-faded" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container-fluid margin-top-top">
  <div class="row">
  <div class="col-md-8">
<!-- ======= Header ======= -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active"><a class="nav-link" href="#overview">Overview <span class="sr-only">(current)</span></a></li>
      <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Location</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Reviews</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Add Review</a></li>
    </ul>
  </div>
</nav><!-- End Header -->
<!-- Overview -->
<div id="overview" class="">
      <div class="col-md-12">
        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
      </div>
</div><!-- end Overview -->

<!-- Overview -->
<div id="pricing" class="">
      <div class="col-md-12">
        <h3>Pricing</h3>

      </div>
</div><!-- end Overview -->

</div>
<!-- booking card -->
<div class="col-md-4">
   <p class="">
       <button type="button" class="btn btn-success btn-lg btn-block"><i class="fa fa-check-circle-o"></i> Verified Listing</button>
   </p>
   <div class="card" >
     <div class="card-body">
       <h5 class="card-title"><i class="fa fa-calendar-check-o"></i> Booking</h5>
       <hr>
         <div class="form-group">
          <input type="text" class="form-control" placeholder="20/10/2020" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Time Slots" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Guests" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <a href="<?= url::to(['book/bookingdetails'])?>" class="btn btn-danger btn-lg btn-block"> Request to Book</a>
     </p>

   </div>
 </div>
</div>
<div class="col-md-4 boxed-widget">
   <div class="card">
     <div class="card-body">
       <div class="card-title hosted-by-title">
       <h6>
         <span>Hosted by</span>
         Jordan Muthemba</h6>
       </div>
       <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="hosted-by-avatar rounded-circle">

   </div>
 </div>
</div>
</div>
</div>
