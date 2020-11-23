<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php

use yii\helpers\Url;
//use yii\helpers\Html;
use frontend\models\Location;

/* @var $this yii\web\View */

$this->title = 'Contact Us';

$markers = Location::find()->innerJoinWith('listings')->asArray()->all();

?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmnULnIcTW4J_9NxGeHhLSVLme6Ba36AE&callback=initMap&libraries=&v=weekly" defer></script>
<script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
<div class="listing-index">
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body pt-5">
                    <h5 class="card-title pt-5">Our Office</h5><br>
                    <h6 class="card-subtitle mb-2 text-muted">Nairobi,<br><br>
                        Kenya</h6><br>
                    <p class="card-text pt-3">You can find us on the given location<br><br>
                        Phone +254-700-000-0000</p>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div id="homemap" style="width: 100%; height: 30rem; border-radius: 5px"></div>
        </div>
        <!-- <div class="col-md-6">
       <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div> -->
        <!-- </div> -->




        <!-- </div>
     -->
    </div>

</div><br>
<div class="site-contact">
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <section class="head pb-5 contact">
        <div class="container pt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="font-weight-light text-center py-3">Contact Us</h1>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="row pt-3">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    <span style="font-size: 30px; color: cadetblue;"><i class="fas fa-map-marker-alt"></i>
                                    </span>
                                </div>
                                <div class="col-lg-10 col-md-9 col-9">
                                    <h3>Find Us at office</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>
                                        Morbi sit amet nisi quis quam <br><br>
                                        mollis pulvinar.
                                    </p>
                                </div>
                            </div>
                            <div class="row pt-6">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    <span style="font-size: 30px; color: coral;"><i class="fas fa-phone-volume"></i>

                                </div>
                                <div class="col-lg-10 col-md-9 col-9">
                                    <h3 class="font-weight-light">Give Us a ring</h3>
                                    <p>my venues<br><br>
                                        phone: +254-700-000-0000
                                    </p>
                                </div>
                            </div>
                            <div class="row pt-6">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    <span style="font-size: 30px; color: blue;"><i class="fa fa-facebook"></i>

                                </div>
                                <div class="col-lg-10 col-md-9 col-9">
                                    <h3 class="font-weight-light">my venues</h3>
                                    <p><br>
                                    </p>
                                </div>
                            </div>
                            <div class="row pt-6">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    <span style="font-size: 30px; color: light-blue;"><i class="fa fa-twitter"></i>

                                </div>
                                <div class="col-lg-10 col-md-9 col-9">
                                    <h3 class="font-weight-light">my_venues</h3>
                                    <p><br>

                                    </p>
                                </div>
                            </div>
                            <div class="row pt-6">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    <span style="font-size: 30px; color: pink;"><i class="fa fa-instagram"></i>

                                </div>
                                <div class="col-lg-10 col-md-9 col-9">
                                    <h3 class="font-weight-light">my_venues</h3>
                                    <p><br>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <!-- <div class="row">
        <div class="col-lg-6"> -->
                            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'email') ?>

                            <?= $form->field($model, 'subject') ?>

                            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) ?>

                            <div class="form-group">
                                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>

                    <!-- <section class="head pb-5 contact">
<div class="container py-5">
<div class="card">
<div class="card-body">
<h1 class="font-weight-light text-center py-3">Contact Us</h1>
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="row pt-3">
<div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
<span style="font-size: 30px; color: cadetblue;"><i class="fas fa-map-marker-alt"></i>
</span>
</div>
<div class="col-lg-10 col-md-9 col-9">
<h3>Find Us at office</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
Morbi sit amet nisi quis quam <br>
mollis pulvinar. 
</p>
</div>
</div>
<div class="row pt-3">
<div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
<span  style="font-size: 30px; color: coral;"><i class="fas fa-phone-volume"></i>

</div>
<div class="col-lg-10 col-md-9 col-9">
<h3 class="font-weight-light">Give Us a ring</h3>
<p>my venues<br>
phone: +254-700-000-0000 
</p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
  <form>
    <div class="form-row">
      <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
  <label>First Name</label>
  <input type ="text" class="form-control" placeholder="First name">

      </div>
      <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
  <label>Last Name</label>
  <input type ="text" class="form-control" placeholder="last name">

      </div>
    </div>
    <label>Email</label>
    <input type="Email" placeholder="Email" class="form-control">
    <label>Your Message</label>
    <textarea class="form-control mb-3" placeholder="Message" id="" cols="10" rows="5"></textarea>
    <input type="checkbox"> <label>I'm not a robot</label>
    <button class="btn btn-primary float-right">SUbmit</button>
  </form>
</div>
</div>
</div>

</div>
</div>
</section> -->









                    <!-- <div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <div class="row">
        <div class="col-lg-8">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            </div>
            <div class="col-md-4 p-5">
            <a href="facebook.com"><i class="fa fa-facebook-official"> My venue</i></a><br>
            <a href="twitter.com"> <i class="fa fa-twitter"> my_venue</i></a><br>
            <a href="instagram.com"><i class="fa fa-instagram"> my_venue</i></a>



            </div>
        </div>
        </div>
    </div>

</div> -->

                    <script type="text/javascript">
                        // Initialize and add the map
                        function initMap() {
                            // The location of Nairobi
                            const nairobi = {
                                lat: -1.286389,
                                lng: 36.817223
                            };
                            // The map, centered at Uluru
                            const map = new google.maps.Map(document.getElementById("homemap"), {
                                zoom: 7,
                                center: nairobi,
                            });



                            // Put a marker foreach listing
                            var markers = <?php echo json_encode($markers) ?>;
                            markers.forEach(putMarkers);

                            function putMarkers(item) {

                                const contentString =
                                    '<div id="content">' +
                                    '<div id="siteNotice">' +
                                    "</div>" +
                                    '<h1 id="firstHeading" class="firstHeading">' + item.listing.listingName + '</h1>' +
                                    '<div id="bodyContent">' +
                                    "<p>" + item.listing.listingDesc + "</p>" +
                                    '<p>If you want to lern more About: ' + item.listing.listingName + ' visit, <a href="' + item.listing.videoUrl + '">' +
                                    "" + item.listing.listingName + "</a> " +
                                    "(Date Posted: " + item.listing.createdAt + ").</p>" +
                                    "</div>" +
                                    "</div>";

                                const infowindow = new google.maps.InfoWindow({
                                    content: contentString,
                                });




                                console.log(item);
                                var lat = parseFloat(item.lattitude);
                                var lng = parseFloat(item.longitude);
                                const marker = new google.maps.Marker({
                                    position: {
                                        lat: lat,
                                        lng: lng
                                    },
                                    map: map,
                                    title: item.listing.listingName + " (" + item.city + ")",
                                });

                                marker.addListener("click", () => {
                                    infowindow.open(map, marker);
                                });
                            }


                        }
                    </script>