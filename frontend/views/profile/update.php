<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */

$this->title = 'Update Profile: ' . $model->profileId;
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->profileId, 'url' => ['view', 'id' => $model->profileId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
