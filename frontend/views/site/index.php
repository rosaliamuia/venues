<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'VENUES';
?>
<div class="site-index d-flex align-items-center">
<div class="container-fluid">

 <!-- searchbar -->
 <div class="container searchbar">
    <div class="row">
        <div class=" col-lg-12">
            <div class="row ">
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                        <input type="text" class="form-control search-slt" placeholder="What are you looking for?">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                         <input type="text" class="form-control search-slt" placeholder="Location">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                <select class="form-control search-slt" id="exampleFormControlSelect1">
                  <option>All Categories</option>
                  <option>Hotels</option>
                  <option>Events</option>
                  <option>Restaurants</option>
                  <option>Shops</option>
                  <option>Fitness</option>
                  <option>Open Spaces</option>
                </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                  <button type="button" class="btn btn-danger wrn-btn rounded-circle"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end-->
        <div class="explore">
          <h1 >Venues</h1>
          <h1 >Near Me</h1>
          <p><button type="button" class="btn btn-secondary">Explore Nearby venues</button></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="popular-category">
  <h2 class="text-center"> Popular Categories</h1>
    <div class="col-md-12 ">
      <div class="row listing-list">
        <div class="col-md-3 partition"></div>
        <div class="col-md-6 partition">
          <div class="row ">
            <div class="col-md-3 ">
              <div class="card card-category border border-light ">
                <img src="images/food.png" class="img-fluid" alt="">
                <h5 class="trial font-weight-light text-center">Food</h5></div>
              </div>
              <div class="col-md-3 ">
                <div class="single-card  ">
                  <div class="card card-category border border-light">
                    <img src="images/image.png" class="img-fluid" alt="">
                    <h5 class="font-weight-light text-center">Hotels</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-3 ">
                <div class="single-card  ">
                  <div class="card card-category border border-light ">
                    <img src="images/guitar.png" class="img-fluid" alt="">
                    <h5 class="font-weight-light text-center">Events</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-3 ">
                <div class="single-card  ">
                  <div class="card card-category border border-light ">
                    <img src="images/cocktail.png" class="img-fluid" alt="">
                    <h5 class="font-weight-light text-center">Nightlife</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 partition"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">

<div class="popular">
    <h2 class="text-center"> Popular Locations</h2>
    <div class="col-md-12 popular-loc">
    <div class="row listing-list">

    <div class="col-md-3 ">
    <div class="single-card float-left col-md-6">
    <div class="card-pop ">

      <img src="images/maldives.jpg" class="img-fluid rounded" alt="house">

    </div>
    </div>

    <div class="card-desc float-right col-md-6">
    <h5 class="font-weight-light">MOMBASA</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>

        </div>
    </div>
    <div class="col-md-3">
    <div class="single-card float-left col-md-6">
        <div class="card-pop">
            <img src="images/junction.jpg" class="img-fluid rounded" alt="house">

        </div>
        </div>
        <div class="card-desc float-right col-md-6">
        <h5 class="font-weight-light">NAIROBI</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
        </div>
    </div>

        <div class="col-md-3">
        <div class="single-card float-left col-md-6">
        <div class="card-pop">
        <img src="images/sunrise.jpg" class="img-fluid rounded" alt="house">
             </div>
    </div>
    <div class="card-desc float-right col-md-6">
    <h5 class="font-weight-light">KAKAMEGA</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
    </div>
        </div>
    <div class="col-md-3">
    <div class="single-card float-left col-md-6">
       <div class="card-pop" >
            <img src="images/sea.jpg" class="img-fluid rounded" alt="house">

        </div>
            </div>
            <div class="card-desc float-right col-md-6">
            <h5 class="font-weight-light">KISII</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>

            </div>
            </div>
            </div>
            <div class="row listing-list">
            <div class="col-md-3">
            <div class="single-card float-left col-md-6">
            <div class="card-pop">
              <img src="images/camel.jpg" class="img-fluid rounded" alt="house">

            </div>
        </div>
            <div class="card-desc float-right col-md-6">
            <h5 class="font-weight-light">MANDERA</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
            </div>
                </div>

        <div class="col-md-3">
        <div class="single-card float-left col-md-6">
            <div class="card-pop" >
              <img src="images/market.jpg" class="img-fluid rounded" alt="house">

            </div>
        </div>
        <div class="card-desc float-right col-md-6">
        <h5 class="font-weight-light">KISUMU</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
        </div>
            </div>

            <div class="col-md-3">
            <div class="single-card float-left col-md-6">
            <div class="card-pop" >
              <img src="images/pink-flamingo.jpg" class="img-fluid rounded" alt="house">

                    </div>
                </div>
        <div class="card-desc float-right col-md-6">
        <h5 class="font-weight-light">NAKURU</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
        </div>
            </div>
        <div class="col md-3">
        <div class="single-card float-left col-md-6">
            <div class="card-pop" >
            <img src="images/flower.jpg" class="img-fluid rounded" alt="house">

            </div>
            </div>
            <div class="card-desc pull-right col-md-6">
            <h5 class="font-weight-light">TAVETA</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
</div>
</div>

<div class="container-fluid text-center my-3 mv-venues">
    <h2>Most Visited Venues</h2>
    <div class="container-fluid">
      <div class="row">
        <div class="popular-vendors">
          <!-- <h2 class="text-center"> Meet Our Vendors</h2> -->
            <div class="col-md-12 popular-loc">
                <div class="row listing-list">

                    <div class="col-md-3">
                        <div class="card-vendor"  >
                            <img src="images/rockymountains.jpg" class="img-fluid rounded" alt="house">
                                <h5 class="card-title">Baked Pizzeria</h5>
            </div>

            </div>


            <div class="col-md-3">
            <div class="card-vendor" >
            <img src="images/agriculture.jpg" class="img-fluid rounded" alt="caterers">
           <h5 class="card-title">Val</h5>
            </div>

            </div>


            <div class="col-md-3">
            <div class="card-vendor" >
            <img src="images/landscape.jpg" class="img-fluid rounded" alt="house">
            <h5 class="card-title">Rose and Sons</h5>
            </div>

            </div>
            <div class="col-md-3">
            <div class="card-vendor"  >
            <img src="images/new-zealand.jpg" class="img-fluid rounded" alt="house">
            <h5 class="card-title">Hotel Governdor</h5>
            </div>

            </div>
            </div>
            </div>
</div>

    <div class="container-fluid">
        <div class="row">
            <div class="popular-vendors">
                <h2 class="text-center"> Meet Our Vendors</h2>
            <div class="col-md-12 popular-loc">
                <div class="row listing-list">

                    <div class="col-md-3">
                        <div class="card-vendor"  >
                            <img src="images/photographs.jpg" class="img-fluid rounded" alt="house">
                                <h5 class="card-title">Photography</h5>
            </div>

            </div>


            <div class="col-md-3">
            <div class="card-vendor" >
            <img src="images/food.jpg" class="img-fluid rounded" alt="caterers">
           <h5 class="card-title">Caterers</h5>
            </div>

            </div>


            <div class="col-md-3">
            <div class="card-vendor" >
            <img src="images/table.jpg" class="img-fluid rounded" alt="house">
            <h5 class="card-title">DJs and Music</h5>
            </div>

            </div>
            <div class="col-md-3">
            <div class="card-vendor"  >
            <img src="images/makeup.jpg" class="img-fluid rounded" alt="house">
            <h5 class="card-title">Make-up Artists</h5>
            </div>

            </div>
            </div>
            </div>
            <div class="col-md-8">
                <div id="homemap" style="width: 100%; height: 50px; border-radius: 5px"></div>
            </div>
            </div>
        </div>
