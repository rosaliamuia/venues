<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listings */

$this->title = 'Update Listings: ' . $model->listingsId;
$this->params['breadcrumbs'][] = ['label' => 'Listings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->listingsId, 'url' => ['view', 'id' => $model->listingsId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="listings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
