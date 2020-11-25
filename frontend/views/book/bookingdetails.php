<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Booking */
/* @var $form yii\widgets\ActiveForm */
$users = User::find()->all();
$users = ArrayHelper::map($users, 'id','username');
?>

<div class="margin-top-top"></div>
<div class="container">
    <div class="row">
      <div class="col-sm-6">
          <h1>Booking</h1>
      </div>
<div class="col-sm-6">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb pull-right">
      <li class="breadcrumb-item"><a href="<?= url::to(['site/index'])?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Booking</li>
    </ol>
  </nav>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-8 col-mb-8">
  <h3 class="margin-bottom">Personal Details</h3>
  <?php $form = ActiveForm::begin(); ?>
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputlastname">Last Name</label>
      <input type="lastname" class="form-control" id="inputlastname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputlastname">Last Name</label>
      <input type="lastname" class="form-control" id="inputlastname">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">E-Mail Address</label>
      <input type="email" class="form-control" id="inputEmail">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPhone">Phone</label>
      <input type="Phone" class="form-control" id="inputPhone">
    </div>
  </div>
</form>
<?php ActiveForm::end(); ?>
</div>
<div class="col-lg-4 col-mb-4">
  <img class="listing-img" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg">
  <div class="card-img-overlay">
    <button class="btn btn-success rounded-pill">5.0</button>
    <h3 class="card-title">Castle Forest</h3>
    <p class="card-text text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text text">Last updated 3 mins ago</p>
  </div>



  <div class="card" >
    <div class="card-body">
      <h5 class="card-title"><i class="fa fa-calendar-check-o"></i> Booking Summary</h5>
      <hr>
      <ul>
        <li> Date <span class="pull-right">10/20/2019</span></li>
        <li> Hour <span class="pull-right">5:30 PM</span></li>
        <li> Guests <span  class="pull-right">2 Adults</span></li>
      </ul>
      <hr>
      <ul>
      <li> Total <span class="pull-right">ksh 90.00</span></li>
    </ul>
    </div>
  </div>
</div>
</div>
<div class="col-lg-8 col-mb-8">
  <h3 class="margin-bottom">Payment Details</h3>
  <div class="card-body">
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="checkbox">
      <label for="inputfirstname">Lipa na Mpesa</label>
    </div>
  </div>
  <p>You will be redirected to PayPal to complete payment.</p>
  <div class="card-footer form-row">
    <div class="form-group col-md-6">
      <input type="radio" >
      <label for="inputEmail">Credit / Debit Card</label>
    </div>
  </div>
</div>
<button type="button" class="btn btn-danger btn-lg rounded-pill"> Confirm and Pay</button>
</div>
</div>
