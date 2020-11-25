  <?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\models\Location;
use frontend\models\Listings;

$this->title='Search Results';
$markers=Location::find()->innerJoinWith('listings')->asArray()->all();
?>

<!-- scripts -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmnULnIcTW4J_9NxGeHhLSVLme6Ba36AE&callback=initMap&libraries=&v=weekly" defer></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<!-- js -->
<script type="text/javascript">

// Initialize and add the map
function initMap() {
  // The location of Nairobi
  const nairobi = { lat: -1.286389, lng: 36.817223 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("search-results-map"), {
    zoom: 7,
    center: nairobi,
  });

  // Put a marker foreach listing
  var markers = <?php echo json_encode($markers)?>;
  markers.forEach(putMarkers);
 
  function putMarkers(item) {
  
      const contentString =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading">'+item.listing.listingName+'</h1>' +
          '<div id="bodyContent">' +
          "<p>"+item.listing.listingDesc+"</p>" +
          '<p>If you want to lern more About: '+item.listing.listingName+' visit, <a href="'+item.listing.videoUrl+'">' +
          ""+item.listing.listingName+"</a> " +
          "(Date Posted: "+item.listing.createdAt+").</p>" +
          "</div>" +
          "</div>";
      
        const infowindow = new google.maps.InfoWindow({
          content: contentString,
        });
  console.log(item);
       var  lat = parseFloat(item.lattitude);
       var  lng = parseFloat(item.longitude);
      const marker = new google.maps.Marker({
        position: { lat: lat, lng: lng },
        map: map,
        title: item.listing.listingName+" ("+item.city+")",
      });
      
    marker.addListener("click", () => {
      infowindow.open(map, marker);
    });
  }
}

//   price range slider
   var slider = document.getElementById("formControlRange");
  var output = document.getElementById("priceSlider");
  output.innerHTML = slider.value;

  slider.oninput = function() {
  output.innerHTML = this.value;
}      
</script>
<!-- html -->
<div class="row sr-listings">
    <div class="col-md-7">
        <div class="row">
            <div class="col-md-12 sr-margin">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="sr-header">
                            <span class="sr-headerspan">76 stays · Nov 20 - 22 · 2 guests</span>
                            <h1>Stays in Nyeri</h1>
                        <div class="sr-header-buttons">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ammenities</button>
                                <div class="dropdown-menu">
                                <div class="form-check">
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Tents</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Pool</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> WIFI</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Parking</label></div>
                                </div>
                                </div>
                            </div>
                            
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Location</button>
                                <div class="dropdown-menu">
                                <div class="form-check">
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Tents</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Pool</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> WIFI</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Parking</label></div>
                                </div>
                                </div>
                            </div>
                            <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</button>
                                <div class="dropdown-menu">
                                <div class="form-check">
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Tents</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Pool</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> WIFI</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Parking</label></div>
                                </div>
                            </div>
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-info" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Price</button>
                                    <div class="dropdown-menu">
                                        <form>
                                            <div class="form-group">
                                                <label for="formControlRange">Price range</label>
                                                <input type="range" class="form-control-range" id="formControlRange" min="1" max="10000">
                                                <p>KSH: <span id="priceSlider"></span></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li><hr>
                
                <a href='javascript:void(0)' onclick='window.location = "../book/index"' class="col-md-8 d-flex">
                <li class="list-group-item">
                    <div class="card">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                                <img class="sr-card-image" src="../images/flower.jpg" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Weddings</h6>
                                <h5 class="card-title">Baked Pizzeria</h5>
                                <p>&mdash;</p>
                                <p>70 guests · 2 tents</p>
                                <p>&#9733 4.5 (20)</p>
                                
                            </div>
                            <div>
                                <span class="float-right like-icon">
                                <i class="fas fa-heart" style="color:tomato;"></i><br><br><br>
                                <a href="#" class="card-link">Ksh.1000</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </li><hr>
                </a>
                <a href='javascript:void(0)' onclick='window.location = "../book/index"' class="col-md-8 d-flex">
                <li class="list-group-item">
                    <div class="card">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                                <img class="sr-card-image" src="../images/flower.jpg" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Weddings</h6>
                                <h5 class="card-title">Baked Pizzeria</h5>
                                <p>&mdash;</p>
                                <p>70 guests · 2 tents</p>
                                <p>&#9733 4.5 (20)</p>
                                
                            </div>
                            <div>
                                <span class="float-right like-icon">
                                <i class="fas fa-heart" style="color:tomato;"></i><br><br><br>
                                <a href="#" class="card-link">Ksh.1000</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </li><hr>
                </a>
                <a href='javascript:void(0)' onclick='window.location = "../book/index"' class="col-md-8 d-flex">
                <li class="list-group-item">
                    <div class="card">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                                <img class="sr-card-image" src="../images/flower.jpg" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Weddings</h6>
                                <h5 class="card-title">Baked Pizzeria</h5>
                                <p>&mdash;</p>
                                <p>70 guests · 2 tents</p>
                                <p>&#9733 4.5 (20)</p>
                                
                            </div>
                            <div>
                                <span class="float-right like-icon">
                                <i class="fas fa-heart" style="color:tomato;"></i><br><br><br>
                                <a href="#" class="card-link">Ksh.1000</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </li><hr>
                </a>
                <a href='javascript:void(0)' onclick='window.location = "../book/index"' class="col-md-8 d-flex">
                <li class="list-group-item">
                    <div class="card">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                                <img class="sr-card-image" src="../images/flower.jpg" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Weddings</h6>
                                <h5 class="card-title">Baked Pizzeria</h5>
                                <p>&mdash;</p>
                                <p>70 guests · 2 tents</p>
                                <p>&#9733 4.5 (20)</p>
                                
                            </div>
                            <div>
                                <span class="float-right like-icon">
                                <i class="fas fa-heart" style="color:tomato;"></i><br><br><br>
                                <a href="#" class="card-link">Ksh.1000</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </li><hr>
                </a>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div id="search-results-map"></div>
    </div>
</div>