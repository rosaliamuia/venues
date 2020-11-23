<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ListingsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listings-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'listingsId') ?>

    <?= $form->field($model, 'listingsTypeId') ?>

    <?= $form->field($model, 'listingName') ?>

    <?= $form->field($model, 'videoUrl') ?>

    <?= $form->field($model, 'basePrice') ?>

    <?php // echo $form->field($model, 'deposit') ?>

    <?php // echo $form->field($model, 'listingDesc') ?>

    <?php // echo $form->field($model, 'verificationStatus') ?>

    <?php // echo $form->field($model, 'bookingStatus') ?>

    <?php // echo $form->field($model, 'hasMaximumGuests') ?>

    <?php // echo $form->field($model, 'maximumGuests') ?>

    <?php // echo $form->field($model, 'hasAmmenities') ?>

    <?php // echo $form->field($model, 'keywords') ?>

    <?php // echo $form->field($model, 'allowInstantBooking') ?>

    <?php // echo $form->field($model, 'phoneCode') ?>

    <?php // echo $form->field($model, 'listingPhone') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'facebook') ?>

    <?php // echo $form->field($model, 'twitter') ?>

    <?php // echo $form->field($model, 'instagram') ?>

    <?php // echo $form->field($model, 'createdBy') ?>

    <?php // echo $form->field($model, 'createdAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
