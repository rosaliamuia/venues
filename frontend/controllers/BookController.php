<?php

namespace frontend\controllers;

class BookController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionBookingdetails()
    {
        return $this->render('bookingdetails');
    }
}
