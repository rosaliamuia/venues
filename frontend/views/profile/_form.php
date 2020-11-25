<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */
/* @var $form yii\widgets\ActiveForm */
$users = ArrayHelper::map(User::find()->all(), 'id', 'username');

?>
?>

<div class="profile-form">
  <div class="container">
   <div class="row">
    <div class="col-lg-10 shadow p-3 mb-5 bg-white rounded">
      <h3> Create Profile</h3>
    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'userId')->dropDownList($users) ?>

    <?= $form->field($model, 'firstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>

   <!--  <?= $form->field($model, 'countryId')->hiddenInput()->label(false) ?> -->

    <?= $form->field($model, 'phoneNumber')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'currencyId')->hiddenInput()->label(false) ?> -->

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'googlePlus')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'createdBy')->hiddenInput()->label(false)  ?> -->

    <?= $form->field($model, 'profilePic')->fileInput() ?>

      <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success rounded-pill ']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
    </div>
    </div>
</div>
