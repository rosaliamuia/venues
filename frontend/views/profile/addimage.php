<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="row">
  <div class="image-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="d-flex flex-column justify-content-center align-items-center">

        <div class="upload-icon">
            <i class="fas fa-upload"></i>
        </div>
          
       
        <?php $form = ActiveForm::begin(['id' => 'image-create'],['options' => ['enctype' => 'multipart/form-data'] ]) ?>

            <?= $form->field($model, 'profilePic')->fileInput(['maxlength' => true]) ?>
            <div class="form-group col-md-12">
                                <?= Html::submitButton('Save <span class="fa fa-forward"></span>', ['class' => 'btn btn-warning pull-right']) ?>
                            </div>
                    <?php ActiveForm::end() ?>
    </div>
    
</div>
</div>