<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listings */

$this->title = $model->listingsId;
$this->params['breadcrumbs'][] = ['label' => 'Listings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="listings-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->listingsId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->listingsId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'listingsId',
            'listingsTypeId',
            'listingName',
            'videoUrl',
            'basePrice',
            'deposit',
            'listingDesc:ntext',
            'verificationStatus',
            'bookingStatus',
            'hasMaximumGuests',
            'maximumGuests',
            'hasAmmenities',
            'keywords:ntext',
            'allowInstantBooking',
            'phoneCode',
            'listingPhone',
            'website',
            'email:email',
            'facebook',
            'twitter',
            'instagram',
            'createdBy',
            'createdAt',
        ],
    ]) ?>

</div>
